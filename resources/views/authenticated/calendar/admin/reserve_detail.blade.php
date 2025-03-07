<x-sidebar>
<div class="vh-100 d-flex" style="align-items:center; justify-content:center;">
  <div class="w-75 m-auto h-75">
    <p class="time-part"><span>{{ $date }}日</span><span class="ml-3">{{ $part }}部</span></p>
    <div class="h-25 border">
      <table class="w-100">
        <tr class="text-center">
          <th class="w-25" style="background-color:#03AAD2; color:#fff;">ID</th>
          <th class="w-25" style="background-color:#03AAD2; color:#fff;">名前</th>
          <th class="w-25" style="background-color:#03AAD2; color:#fff;">場所</th>
        </tr>
        @foreach($reservePersons as $reservePerson)
        @foreach($reservePerson->users as $user)
        <tr class="text-center" style="border: 1px solid #ddd; background-color:#fff;">
          <td class="w-25" style="padding: 10px;">{{ $user->id }}</td>
          <td class="w-25">{{ $user->over_name }}{{ $user->under_name }}</td>
          <td class="w-25">リモート</td>
        </tr>
        @endforeach
        @endforeach
      </table>
    </div>
  </div>
</div>
</x-sidebar>
