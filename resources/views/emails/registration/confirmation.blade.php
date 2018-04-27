@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@component('mail::message')
<div style="background-image: url('{{asset('jpg/background.jpg')}}');background-size: 100%;">
<div style="background:rgba(255,255,255,0.4);padding: 24px; border-radius:16px; border:1px solid rgb(237, 237, 237);">
<h2><b style="color:#74787E;">Dear </b>{{$name}}</h2>
<p>We welcome you to the Touching Lives Skills Programme.</p>
<p>Touching Lives skills is a Project of Touching Lives international in Collaboration with the Government of
Developing Geographical Areas. Its aim and objectives is to reach out to the poor population with skills and
empowerment for development, that way fulfilling the visions of the United nations development Program UNDP.</p>
<div style="margin-top:20px;margin-bottom:20px;height:1px;background:#e5e5e5"></div>
<h3 style="text-align:center;">Our Mission</h3>
<blockquote style="text-align:center;">To advance the nascency of men and women who will come into their dignity and pride to fulfill love’s dream.</blockquote>
<h3 style="text-align:center;">Our Vision</h3>
<blockquote style="text-align:center;">To give lives eminence and build a peaceful and prosperous world with love.</blockquote>
<h3 style="text-align:center;">Our Purpose</h3>
<blockquote style="text-align:center;">To bring them into their dignity and pride.</blockquote>
<div style="margin-top:20px;margin-bottom:20px;height:1px;background:#e5e5e5"></div>
<p>Listed below are your registration details.</p>
<blockquote>
<table>
<tr>
<td><b>Registration ID</b></td>
<td>{{$regID}}</td>
</tr>
<tr>
<td><b>Zone</b></td>
<td>{{$zone}}</td>
</tr>
<tr>
<td><b>Centre</b></td>
<td>{{$centre}}</td>
</tr>
<tr>
<td><b>Status</b></td>
<td>{{$centre}}</td>
</tr>
</table>
</blockquote>
@component('mail::button', ['url' => config('app.url')])
Visit Us
@endcomponent
Thanks,<br>
{{ config('app.name') }}
</div>
</div>
@endcomponent
