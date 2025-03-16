<x-sidebar>
<div class="w-100 vh-100 d-flex" style="align-items:center; justify-content:center;">
  <div class="w-100 border pt-5 pb-5" style="background:#FFF;">

    <div class="">
    <p class="text-center">{{ $calendar->getTitle() }}</p>
    <p>{!! $calendar->render() !!}</p>
    </div>

    <div class="adjust-table-btn m-auto text-right">
      <input type="submit" class="btn btn-primary" value="登録" form="reserveSetting" onclick="return confirm('登録してよろしいですか？')">
    </div>
  </div>
</div>
</x-sidebar>
