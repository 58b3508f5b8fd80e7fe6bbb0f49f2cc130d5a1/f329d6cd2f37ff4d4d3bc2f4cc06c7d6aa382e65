@php
    $public='';
    if(config('app.env') == 'production')
    $public ='public';
@endphp
@extends('layouts.app')
@section('title', 'Registrations')
@section('styles')
    <style>
        label {
            font-weight: 600;
            font-size: 15px;
        }

        .form-group {
            margin-left: 8px !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 8px 14px;
            margin-bottom: 8px;
            font-size: 14px;
            text-align: center;
            line-height: 18px;
            color: #575757;
            background-color: #fff;
            background-image: none;
            background-clip: padding-box;
            border: 1px solid #9aa6b6;
            border-radius: .25rem;
            transition: border-color ease-in-out .15s;
        }

        input::-moz-placeholder {
            color: #999 !important;
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
        }

        #registrations {
            padding: 30px;
            margin-top: 30px;
            background: #fff;
            box-shadow: 0 36px 64px 0 rgba(0, 0, 0, .05);
        }

        .table {
            font-size: 14px;
        }

        .table thead th {
            border-top: none;
            border-bottom: none;
            font-weight: 600;
            text-transform: uppercase
        }

        .table-borderless, .table-borderless td, .table-borderless th {
            border: none !important
        }

        .table-vcenter td, .table-vcenter th {
            vertical-align: middle
        }

        .table-active, .table-active > td, .table-active > th {
            background-color: #f5f6f7
        }

        .table-hover .table-active:hover, .table-hover .table-active:hover > td, .table-hover .table-active:hover > th {
            background-color: #e7e9ec
        }

        .table-primary, .table-primary > td, .table-primary > th {
            background-color: #d3eafd
        }

        .table-hover .table-primary:hover, .table-hover .table-primary:hover > td, .table-hover .table-primary:hover > th {
            background-color: #bbdffb
        }

        .table-success, .table-success > td, .table-success > th {
            background-color: #ebf5df
        }

        .table-hover .table-success:hover, .table-hover .table-success:hover > td, .table-hover .table-success:hover > th {
            background-color: #dfefcc
        }

        .table-info, .table-info > td, .table-info > th {
            background-color: #e3f4fc
        }

        .table-hover .table-info:hover, .table-hover .table-info:hover > td, .table-hover .table-info:hover > th {
            background-color: #ccebfa
        }

        .table-warning, .table-warning > td, .table-warning > th {
            background-color: #fcf7e6
        }

        .table-hover .table-warning:hover, .table-hover .table-warning:hover > td, .table-hover .table-warning:hover > th {
            background-color: #f9f0cf
        }

        .table-danger, .table-danger > td, .table-danger > th {
            background-color: #fae9e8
        }

        .table-hover .table-danger:hover, .table-hover .table-danger:hover > td, .table-hover .table-danger:hover > th {
            background-color: #f5d5d3
        }

        #general-table_wrapper {
            font-size: 14px;
        }

        #general-table_wrapper .form-control {
            font-size: 12px;
        }
    </style>
@endsection
@section('content')
    <div id="content" class="container">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-10 col-md-offset-1 panel panel-warning" id="registrations">
                    <div class="panel-heading">
                        <h3>List of your registrations</h3>
                        <p>This is the list of your registrations showing the registration status.</p>
                    </div>
                    <div class="panel-body">
                        @include('auth.partials.registrations')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content col-lg-12">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register student</h4>
                </div>
                <div class="col-lg-12 modal-body" id="registerModalContent">

                </div>
            </div>

        </div>
    </div>

@endsection
@section('scripts')
    <script>

        @if(isset(session('status')->message))
        alert('{{session('status')->message}}');
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
                $('#registerModalContent').html(result.html);
                $('#registerModal').modal('show');
            }).fail(function () {
                alert('Sorry, an error occurred');
            });
            //'first_name': $("input[name=first_name]").val(),
        }

        $("#state_origin").change(function () {
            var data = {'state': $('#state_origin').val()};
            $.post('/join/getlgas', data, function (result) {
                $('#lga_origin').html(result.html);
            });
        });

        $('.modal').on('shown.bs.modal', function () {
            $("#state_origin").change(function () {
                var data = {'state': $('#state_origin').val()};
                $.post('/join/getlgas', data, function (result) {
                    $('#lga_origin').html(result.html);
                });
            });

            function filePreview(input, id) {
                $(id).html('');
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $(id).siblings('embed').remove();
                        $(id).after('<embed src="' + e.target.result + '" style = "max-width: 100%; max-height: 20em;"/>');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#passport").change(function () {
                filePreview(this, '#passportImage');
            });
        });

        $(function () {

            // We can attach the `fileselect` event to all file inputs on the page
            $(document).on('change', ':file', function () {
                var input = $(this),
                    numFiles = input.get(0).files ? input.get(0).files.length : 1,
                    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                //$('#file-info').val(label);
                input.trigger('fileselect', [numFiles, label]);
            });

            // We can watch for our custom `fileselect` event like this
            $(document).ready(function () {
                $(':file').on('fileselect', function (event, numFiles, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                        log = numFiles > 1 ? numFiles + ' files selected' : label;

                    if (input.length) {
                        input.val(log);
                    } else {
                        if (log) alert(log);
                    }

                });
            });

        });

    </script>
@endsection