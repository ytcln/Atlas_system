<x-sidebar>
<div class="vh-100 border">
  <p class="profile-list">自分のプロフィール</p>
  <div class="top_area w-75 m-auto pt-5">
    <div class="user_status p-3" style="box-shadow: 0 0 8px gray"  >
      <p>名前：<span>{{ Auth::user()->over_name }}</span><span class="ml-1">{{ Auth::user()->under_name }}</span></p>
      <p>カナ：<span>{{ Auth::user()->over_name_kana }}</span><span class="ml-1">{{ Auth::user()->under_name_kana }}</span></p>
      <p>性別：@if(Auth::user()->sex == 1)<span>男</span>@elseif(Auth::user()->sex == 2)<span>女</span>@else<span>その他</span>@endif</p>
      <p>生年月日：<span>{{ Auth::user()->birth_day }}</span></p>
    </div>
  </div>
</div>
</x-sidebar>
