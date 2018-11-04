<table id="general-table" class="table table-striped table-vcenter">
    <thead>
    <tr>
        <th class="text-center">S/No.</th>
        <th>Registration ID</th>
        <th>Name</th>
        <th class="text-center">Status</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @php
        $i=0
    @endphp
    @foreach($registrations as $registration)
        @php
            $regstr1 = substr($registration->reg_id,0,6 );
            $regstr2 = substr($registration->reg_id,-6);
            if($registration->status == 'pending'){
                $label='label-warning';
                $button='btn-success';
                $action='continue';
            }
            elseif ($registration->status == 'registered'){
                $label='label-success';
                $button='btn-info';
                $action='view';
            }
            else{
                $label='label-danger';
                $button='btn-disabled';
                $action='<i class="fa fa-times"></i>';
            }
        @endphp
        <tr>
            <td>{{++$i}}</td>
            <td>{{"$regstr1......$regstr2"}}</td>
            <td>{{$registration->first_name.' '.$registration->last_name }}</td>
            <td class="text-center"><span class="label {{$label}}">{{$registration->status}}</span></td>
            <td>{{date('d/m/Y',strtotime($registration->created_at))}}</td>
            <td class="text-center">
                <button type="button" class="btn btn-sm {{$button}}"
                        onclick="getRegistration('{{$registration->reg_id}}')">{{$action}}</button>
            </td>
        </tr>
    @endforeach

    </tbody>
    <tfoot>

    </tfoot>
</table>
