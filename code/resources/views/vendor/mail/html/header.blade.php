@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
{{-- @if (trim($slot) === 'Laravel') --}}
<img src="{{ asset('duLogo.svg') }}" class="logo" alt="logo" width="50" height="60">
{{-- @else
{{ $slot }} --}}
{{-- @endif --}}
</a>
</td>
</tr>
