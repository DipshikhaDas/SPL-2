@props(['url'])
<tr>
<td class="header">
<a href="{{ route('home') }}" style="display: inline-block;">
{{-- @if (trim($slot) === 'Laravel') --}}
<img src="{{ asset('duLogo2.png') }}" class="logo" alt="logo" style="width: 180px; height: 60px">
{{-- @else
{{ $slot }} --}}
{{-- @endif --}}
</a>
</td>
</tr>
