<x-sidebar>
  <div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-3" style="border-radius:10px; background:#FFF;">
    <div class="w-75 m-auto">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
    <p>{!! $calendar->render() !!}</p>
    </div>
    </div>

    <div class="adjust-table-btn m-auto text-right">
      <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" style="margin-bottom:10px;" onclick="return confirm('登録してよろしいですか？')">
    </div>
  </div>
</div>
</x-sidebar>
