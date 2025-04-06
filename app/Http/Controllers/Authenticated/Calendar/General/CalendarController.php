<?php

namespace App\Http\Controllers\Authenticated\Calendar\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Calendars\General\CalendarView;
use App\Models\Calendars\ReserveSettings;
use App\Models\Calendars\Calendar;
use App\Models\USers\User;
use Auth;
use DB;

class CalendarController extends Controller
{
    public function show(){
        $calendar = new CalendarView(time());
        return view('authenticated.calendar.general.calendar', compact('calendar'));
    }

    public function reserve(Request $request){
        DB::beginTransaction();
        try{
            $getPart = $request->getPart;
            $getDate = $request->getData;
            $reserveDays = array_filter(array_combine($getDate, $getPart));
            foreach($reserveDays as $key => $value){
                $reserve_settings = ReserveSettings::where('setting_reserve', $key)->where('setting_part', $value)->first();
                $reserve_settings->decrement('limit_users');
                $reserve_settings->users()->attach(Auth::id());
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
        }
        return redirect()->route('calendar.general.show', ['user_id' => Auth::id()]);
    }
     public function delete(Request $request){
        DB::beginTransaction();
        try{

            $getPart = $request->getPart;
            $getDate = $request->getDate;
            if($getPart == "リモ1部"){
            $getPart = 1;
          }else if($getPart == "リモ2部"){
            $getPart = 2;
          }else if($getPart == "リモ3部"){
            $getPart = 3;
          }
                $deleteDate = ReserveSettings::where('setting_reserve', $getDate)->where('setting_part', $getPart)->first();
                $deleteDate->increment('limit_users');
                $deleteDate->users()->detach(Auth::id());

             DB::commit();
        }catch(\Exception $e){
            DB::rollback();
        }

        // キャンセル完了後、リダイレクト
        return redirect()->route('calendar.general.show', ['user_id' => Auth::id()]);

    }
}
