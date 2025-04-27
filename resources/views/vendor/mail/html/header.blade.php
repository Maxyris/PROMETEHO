@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'MonitoreoRutas')
<img src="https://static.vecteezy.com/system/resources/thumbnails/020/009/601/small_2x/email-and-mail-icon-black-free-png.png" class="logo" alt="Empresa Logo">
{{-- <img src="{{ asset('images/logo_correo.webp') }}" class="logo" alt="Empresa Logo"> --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
