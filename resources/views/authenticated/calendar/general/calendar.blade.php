<x-sidebar>
<div class="pt-5 pb-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-3" style="border-radius:10px; background:#FFF;">
    <div class="m-auto" style="width:90%;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right m-auto" style="width:90%;">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>

<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__calender">
    <div class="w-100">
      <form action="{{ route('deleteParts') }}" method="POST">
        <div class="modal-space-day w-50 m-auto">
          <p>予約日：<span id="reserve_day"></span></p>
        </div>
        <div class="modal-space-time w-50 m-auto">
          <p>時間：<span id="reserve_time"></span></span></p>
        </div>
        <div class="modal-space-cancel w-50 m-auto">
          <p><span>上記の予約をキャンセルしてもよろしいですか？</span></p>
        </div>
        <div class="w-50 m-auto edit-modal-btn d-flex">
          <a class="js-modal-close btn btn-primary d-inline-block" href="">閉じる</a>
          <input type="hidden" class="edit-modal-day" name="getDate" value="" form="deleteParts">
          <input type="hidden" class="edit-modal-part" name="getPart" value="" form="deleteParts">
          <input type="submit" class="btn btn-danger d-block" value="キャンセル" form="deleteParts">
        </div>
        {{ csrf_field() }}
      </form>
    </div>
  </div>
</div>
</x-sidebar>
