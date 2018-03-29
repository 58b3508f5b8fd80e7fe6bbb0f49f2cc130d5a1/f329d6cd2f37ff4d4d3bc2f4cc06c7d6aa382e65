@php    $public='';    if(config('app.env') == 'production')    $public ='public'; @endphp @extends('layouts.admin')
@section('title', title_case($action))
@section('style')
    <link rel="stylesheet" href="{{asset($public.'/css/easy-autocomplete.min.css')}}">
    <style>
        .form-group {
            float: left;
        }

        .form-material div {
            width: 100% !important;
        }
    </style>
@endsection
@section('content')
    <nav class="breadcrumb bg-white push">
        <a class="breadcrumb-item" href="{{url('/admin')}}">Admin</a>
        <span class="breadcrumb-item active">View {{title_case($action)}} </span>
    </nav>
    <div class="block">
        @if(null !== session('message'))
            <div class="col-sm-12 col-lg-12">
                <div class="block">
                    <div class="alert alert-{{session('data')['alert']}}">
                        <p style="font-size: 14px; font-weight:bold;">{{session('message')}}</p>
                    </div>
                </div>
            </div>

        @endif

        <div class="block block-bordered @if(null === session('errors'))block-mode-hidden @endif">
            <div class="block-header">
                <h3 class="block-title">Centres
                    <small>Create {{title_case($action)}}</small>
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option"
                            data-action="fullscreen_toggle"><i class="si si-size-fullscreen"></i></button>
                    <button type="button" class="btn-block-option" data-toggle="block-option"
                            data-action="content_toggle"><i class="si si-arrow-up"></i></button>
                </div>
            </div>
            <div class="block-content">
                <div class="text-center">
                    <h1 class="h2 font-w700">Create New Centre</h1>
                </div>
                <div class="row justify-content-center px-5">
                    @include('admin.partials.createCentre')
                </div>
            </div>
        </div>
        <div id="centres" class="block block-bordered">
            @include('admin.partials.centres')
        </div>
    </div>
    <div aria-hidden="true" style="display: none;" class="modal modal-dialog-top modal-dialog-popout" id="centre-modal"
         tabindex="-1" role="dialog"
         aria-labelledby="modal-large">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Edit centres</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content" id="mcentre">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset($public.'/js/jquery.easy-autocomplete.min.js')}}"></script>
    <script>
        window.location = '#_';
        @if(null !== session('message'))
        alert('{{session('message')}}');
        @endif

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var options = {
            url: function (phrase) {
                return "/admin/centre/coordinator?q=" + phrase;
            },

            getValue: function (element) {
                return element.first_name + ' ' + element.last_name +
                    ' (' + element.name + ') L-' + element.access_level;
            },

            ajaxSettings: {
                dataType: "json",
                method: "GET",
                data: {
                    dataType: "json",
                }
            },

            preparePostData: function (data) {
                data.phrase = $("#coordinator").val();
                return data;
            },

            list: {
                onChooseEvent: function () {
                    var selectedItemValue = $("#coordinator").getSelectedItemData().name;
                    $("#coord").val(selectedItemValue).trigger("change");
                },
                onSelectItemEvent: function () {
                    var selectedItemValue = $("#coordinator").getSelectedItemData().name;
                    $("#coord").val(selectedItemValue).trigger("change");
                }
            },

            requestDelay: 300,

            theme: "round"
        };

        $("#coordinator").easyAutocomplete(options);


        $('#centre-modal').on('shown.bs.modal', function () {
            var data = {
                'id': $('#modid').text()
            };

            var options = {
                url: function (phrase) {
                    return "/admin/centre/coordinator?q=" + phrase;
                },

                getValue: function (element) {
                    return element.first_name + ' ' + element.last_name +
                        ' (' + element.name + ') L-' + element.access_level;
                },

                ajaxSettings: {
                    dataType: "json",
                    method: "GET",
                    data: {
                        dataType: "json",
                    }
                },

                preparePostData: function (data) {
                    data.phrase = $("#mcoordinator").val();
                    return data;
                },

                list: {
                    onChooseEvent: function () {
                        var selectedItemValue = $("#mcoordinator").getSelectedItemData().name;
                        $("#mcoord").val(selectedItemValue).trigger("change");
                    },
                    onSelectItemEvent: function () {
                        var selectedItemValue = $("#mcoordinator").getSelectedItemData().name;
                        $("#mcoord").val(selectedItemValue).trigger("change");
                    }
                },

                requestDelay: 300,

                theme: "round"
            };

            $("#mcoordinator").easyAutocomplete(options);

        });

        function editCentre() {

            var data = {
                'id': $('#mid').val(),
                'zone': $('#mzone').val(),
                'centre' :$('#mycentre').val(),
            };

            $.post('/admin/centre/update', data, function (result) {
                $('#centre-modal').modal('hide');
                alert(result.message);

                $('#centres').fadeOut(300);
                $('#centres').html(result.html);
                $('#general-table').DataTable();
                $('#centres').fadeIn(300);
            }).fail(function () {
                $('#centre-modal').modal('hide');
                alert('Sorry, an error occurred');
            });
        }

        function viewEditCentre(id, type) {

            var data = {
                'id': id
            };
            $.post('/admin/centre/viewCentre', data, function (result) {

                $('#mcentre').html(result.html);
            }).fail(function () {
                alert('Sorry, an error occurred');
            });

            $('#centre-modal').modal('show');
        }

        function verifyCentre(id, action, element) {
            $(element + ' i').attr('class', 'fa fa-spinner fa-spin');
            var data = {
                'id': id,
                'action': action,
            };

            $.post('/admin/centre/verify', data, function (result) {

                alert(result.message);

                $('#centres').fadeOut(300);
                $('#centres').html(result.html);
                $('#general-table').DataTable();
                $('#centres').fadeIn(300);
            }).fail(function () {
                alert('Sorry, an error occurred');
            });
        }

    </script>

@endsection