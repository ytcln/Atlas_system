<x-sidebar>
<div class="vh-100 border">
  <div class="profile-list"><span>{{ $user->over_name }}</span><span>{{ $user->under_name }}さんのプロフィール</span>
    </div>
      <div class="top_area w-75 m-auto pt-5">
        <div class="user_status p-3" style="box-shadow: 0 0 8px gray";>
          <p>名前 : <span>{{ $user->over_name }}</span><span class="ml-1">{{ $user->under_name }}</span></p>
          <p>カナ : <span>{{ $user->over_name_kana }}</span><span class="ml-1">{{ $user->under_name_kana }}</span></p>
          <p>性別 : @if($user->sex == 1)<span>男</span>@elseif($user->sex == 2)<span>女</span>@else<span>その他</span>@endif</p>
          <p>生年月日 : <span>{{ $user->birth_day }}</span></p>
          <p><div style="display:flex">選択科目 :</p>
            @foreach($user->subjects as $subject)
            <span class="ml-2">{{ $subject->subject }}</span>
            @endforeach
        </div>
          <div class="" style="margin-top:10px">
            @can('admin')
            <span class="subject_edit_btn">選択科目の登録</span>
            <div class="subject_inner">
              <form action="{{ route('user.edit') }}" method="post">
                <div class="subject_line">
                @foreach($subject_lists as $subject_list)
                <div class="subject_space">
                  <label class="slide-btn">{{ $subject_list->subject }}</label>
                  <input type="checkbox" name="subjects[]" value="{{ $subject_list->id }}">
                </div>
                @endforeach
                <input type="submit" value="登録" class="btn btn-primary">
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                {{ csrf_field() }}
                </div>
              </form>
            </div>
            @endcan
          </div>
        </div>
      </div>
</div>

</x-sidebar>
