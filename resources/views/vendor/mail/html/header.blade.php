@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">

    @if(isset($company) && $company->logo)
        <img src="{{ asset('storage/' . $company->logo) }}" class="logo" alt="{{ config('app.name') }}" style="height: 50px;">
    @else
        <img src="{{ asset('frontend/assets/img/logo.png') }}" class="logo" alt="{{ config('app.name') }}" style="height: 50px;">
    @endif

</a>
</td>
</tr>
