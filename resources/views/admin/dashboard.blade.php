@extends('layouts.admin')
@section('title','Dashboard')
@section('style')
    <style>
        .form-group {
            float: left;
        }
    </style>
@endsection
@section('content')
    <div class="content">
        @if(isset($students) && sizeof($students)>0)
            @includeWhen(Auth::user()->access_level==2,'admin.partials.centreStudents')
            @includeWhen(Auth::user()->access_level==3,'admin.partials.allStudents')
            @includeWhen(Auth::user()->access_level>=4,'admin.partials.allStudents')
        @else
            <div class="col-sm-12 col-lg-12">
                <div class="block">
                    <div class="alert alert-warning">
                        <h2>No data to display</h2>
                        <p>Sorry, but there are no users to display from the database.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div id="studentModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content col-lg-12">
                <div class="modal-header">
                    <h4 class="modal-title">View student</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="col-lg-12 modal-body" id="studentModalContent">

                </div>
            </div>

        </div>
    </div>
@endsection
@section('scripts')
    <script>
        @if(null !== session('message'))
        alert('{{session('message')}}');
        @endif
        @if ($errors->has('current'))
        alert('{{ $errors->first('current') }}');
        @endif
        @if ($errors->has('password'))
        alert('{{ $errors->first('password') }}');
        @endif
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getRegistration(id) {
            var data = {
                'reg_id': id,
            };
            $.getJSON('/join/register', data, function (result) {
                $('#studentModalContent').html(result.html);
                $('#studentModal').modal('show');
            }).fail(function () {
                alert('Sorry, an error occurred');
            });
        }
    </script>
@endsection