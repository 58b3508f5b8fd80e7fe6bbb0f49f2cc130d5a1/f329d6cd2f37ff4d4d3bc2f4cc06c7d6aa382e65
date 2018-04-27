@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp
<tr>
    <td class="header">
        <div style="text-align:center;"><a href="{{ $url }}"><img src="{{asset($public.'/png/tlskills.png')}}"
                                                                  style="max-height:100px;"></a></div>
    </td>
</tr>
