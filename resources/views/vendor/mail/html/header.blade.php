@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">

<img src="{{ asset('storage/'.$company->logo) }}" class="logo" alt="{{ config('app.name') }}" style="height: 50px;">

</a>
</td>
</tr>
