<x-sidebar>
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-10" style="border-radius:5px; background:#FFF;">
    <div class="w-75 m-auto">
      <div class="w-100">
        <p class="text-center">{{ $calendar->getTitle() }}</p>
        <p>{!! $calendar->render() !!}</p>
      </div>
    </div>
  </div>
</div>
</x-sidebar>
