<div class="block-header block-header-default">
    <h3 class="block-title">Centres
        <small>Viewing {{title_case($action)}}</small>
    </h3>
    <div class="block-options">
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"><i
                    class="si si-size-fullscreen"></i></button>
        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"><i
                    class="si si-arrow-up"></i></button>
    </div>
</div>

<div class="block-content">
    @if(isset($centres) && sizeof($centres)>0)
        <div class="table-responsive">
            <table id="general-table" class="table table-striped table-vcentre">
                <thead>
                <tr>
                    <th>S/No.</th>
                    <th>Centre ID</th>
                    <th>Zone</th>
                    <th>Centre</th>
                    <th>Cordinator</th>
                    <th>Status</th>
                    @if(Auth::user()->access_level>=4)
                        <th class="text-centre">Actions</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @php
                    $i=0;
                @endphp
                @foreach($centres as $centre)
                    @php
                        $i++;
                    if ($centre->status=='active')
                        $badge ="badge-success";
                    elseif ($centre->status=='inactive')
                        $badge ="badge-danger";
                    @endphp
                    <tr>
                        <td>{{$i}}</td>
                        <td class="font-w600">{{$centre->centre_id}}</td>
                        <td>{{$centre->zone}}</td>
                        <td> {{ $centre->centre }} </td>
                        <td> @if(null !== $centre->name){{ $centre->first_name.' '.$centre->last_name .
                        ' (' . $centre->name . ') L-' .$centre->access_level }} @else {{$centre->coordinator}} @endif</td>
                        <td>
                            <span class="badge {{$badge}}">{{$centre->status}}</span>
                        </td>
                        <td>
                            <button data-original-title="Edit" type="button"
                                    class="btn btn-sm btn-alt-primary"
                                    data-toggle="tooltip"
                                    title="Edit {{$centre->zone.'-'.$centre->centre}}"
                                    onclick="viewEditCentre({{($centre->id+9407)}})">
                                <i class="fa fa-pencil"></i>
                            </button>
                            @if($centre->status=='inactive')
                                <button data-original-title="Delete" type="button" id="activate-{{$i}}"
                                        class="btn btn-sm btn-alt-success"
                                        data-toggle="tooltip"
                                        title="Activate {{$centre->centre_id}}"
                                        onclick="verifyCentre({{($centre->id+1107)}}, 'activate', '#activate-{{$i}}')">
                                    <i class="fa fa-check"></i>
                                </button>
                            @endif
                            @if($centre->status=='active')
                                <button data-original-title="Delete" type="button" id="deactivate-{{$i}}"
                                        class="btn btn-sm btn-alt-danger"
                                        data-toggle="tooltip"
                                        title="Deactivate {{$centre->centre_id}}"
                                        onclick="verifyCentre({{($centre->id+1107)}}, 'deactivate', '#deactivate-{{$i}}')">
                                    <i class="fa fa-times"></i>
                                </button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="col-sm-12 col-lg-12">
            <div class="block">
                <div class="alert alert-warning">
                    <h2>No data to display</h2>
                    <p>Sorry, but there are no centres to display from the database.</p>
                </div>
            </div>
        </div>
    @endif

</div>


