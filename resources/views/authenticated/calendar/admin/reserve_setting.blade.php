<x-sidebar>
  <div class="pt-5 pb-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-3" style="border-radius:10px; background:#FFF;">
    <div class="m-auto" style="width:90%;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
    </div>
    </div>

    <div class="adjust-table-btn m-auto text-right" style="width:90%;">
      <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" onclick="return confirm('登録してよろしいですか？')">
    </div>
  </div>
</div>
</x-sidebar>
