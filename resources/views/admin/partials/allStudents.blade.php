<div class="block-content">
    <table class="js-table-sections table table-hover">
        <thead>
        <tr>
            <th style="width: 30px;"></th>
            <th>Name</th>
            <th style="width: 15%;">Programme</th>
            <th class="d-none d-sm-table-cell" style="width: 20%;">Date</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach($centres as $centre)

            <tbody class="js-table-sections-header show table-active">
            <tr>
                <td class="text-center">
                    <i class="fa fa-angle-right"></i>
                </td>
                <td class="font-w600">{{$centre->zone.' '.$centre->centre}}</td>
                <td>
                    <span class="badge badge-primary">{{$centre->amount}} person(s) registered</span>
                </td>
                <td class="d-none d-sm-table-cell">
                    <em class="text-muted"></em>
                </td>
                <td></td>
            </tr>
            </tbody>
            @php($i=0)
            @foreach($students as $student)
                @if($student->zone==$centre->zone && $student->centre==$centre->centre)
                    <tbody>
                    <tr>
                        <td class="text-center"></td>
                        <td class="font-w600 text-success">{{$student->first_name.' '.$student->last_name}}</td>
                        <td class="font-size-sm">{{$student->programme}}</td>
                        <td class="d-none d-sm-table-cell">
                            <span class="font-size-sm text-muted">{{$student->updated_at}}</span>
                        </td>
                        <td>
                            <button data-original-title="View Details" type="button"
                                    class="btn btn-sm btn-outline-info js-tooltip-enabled" data-toggle="tooltip"
                                    title="" onclick="getRegistration('{{$student->reg_id}}')">
                                <i class="fa fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                @endif
            @endforeach
        @endforeach
    </table>
</div>