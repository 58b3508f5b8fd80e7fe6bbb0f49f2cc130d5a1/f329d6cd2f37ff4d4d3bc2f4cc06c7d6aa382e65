<div class="block-header block-header-default">
    <h3 class="block-title">centres
        <small>Viewing {{title_case($action)}}</small>
    </h3>
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
                        <td> {{ $centre->coordinator }} </td>
                        <td>
                            <span class="badge {{$badge}}">{{$centre->status}}</span>
                        </td>
                        <td>
                            @if($centre->status=='inactive')
                                <button data-original-title="Delete" type="button"
                                        class="btn btn-sm btn-alt-success"
                                        data-toggle="tooltip"
                                        title="Activate {{$centre->centre_id}}"
                                        onclick="verifyCentre({{($centre->id+1107)}}, 'activate')">
                                    <i class="fa fa-check"></i>
                                </button>
                            @endif
                            @if($centre->status=='active')
                                <button data-original-title="Delete" type="button"
                                        class="btn btn-sm btn-alt-danger"
                                        data-toggle="tooltip"
                                        title="Deactivate {{$centre->centre_id}}"
                                        onclick="verifyCentre({{($centre->id+1107)}}, 'deactivate')">
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