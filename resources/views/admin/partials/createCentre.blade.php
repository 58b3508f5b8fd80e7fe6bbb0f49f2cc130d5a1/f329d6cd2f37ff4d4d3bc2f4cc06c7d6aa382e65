<div class="col-sm-12 col-md-10" style="float: none;margin: auto;">
    <form class="js-validation-signup"
          @if(!isset($centre))action="{{url('/admin/centre/create')}}" @else action="{{url('/admin/centre/update')}}"
          onsubmit="editCentre(); return false;" @endif
          method="post">
        {{csrf_field()}}
        @if(isset($centre)) <input type="hidden" id="mid" value="{{$centre->id +1107}}"> @endif
        <div class="form-group col-md-6{{ $errors->has('zone') ? ' is-invalid' : '' }}  row">
            <div class="col-12">
                <div class="form-material">
                    <input class="form-control" name="zone" @if(isset($centre)) id="mzone" @else id="zone"
                           @endif type="text"
                           value="{{$centre->zone or old('zone')}}" required>
                    <label for="zone">Zone</label>
                </div>
                @if ($errors->has('zone'))
                    <span class="invalid-feedback">
                        {{ $errors->first('zone') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group col-md-6{{ $errors->has('centre') ? ' is-invalid' : '' }}  row">
            <div class="col-12">
                <div class="form-material">
                    <input class="form-control" name="centre" @if(isset($centre)) id="mycentre" @else id="centre"
                           @endif  type="text"
                           value="{{$centre->centre or old('centre')}}"
                           required>
                    <label for="centre">Centre</label>
                </div>
                @if ($errors->has('centre'))
                    <span class="invalid-feedback">
                                {{ $errors->first('centre') }}
                            </span>
                @endif
            </div>

        </div>
        @if(!isset($centre))
            <div class="form-group col-md-6{{ $errors->has('coordinator') ? ' is-invalid' : '' }} row">
                <div class="col-12">
                    <div class="form-material">
                        <input id="@if(isset($centre->coordinator )){{'mcoord'}}@else{{'coord'}}@endif"
                               name="coordinator"
                               style="display: none;" {{$centre->coordinator or old('coordinator')}} required>
                        <input class="form-control"
                               id="@if(isset($centre->coordinator )){{'mcoordinator'}}@else{{'coordinator'}}@endif"
                               type="text"
                               value="{{$centre->coordinator or old('coordinator')}}" name="coord" required>
                        <label for="coordinator">Coordinator</label>
                    </div>
                    @if ($errors->has('coordinator'))
                        <span class="invalid-feedback">
                                {{ $errors->first('coordinator') }}
                            </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('status') ? ' is-invalid' : '' }} col-md-6 row">
                <label class="col-12">Status</label>
                <div class="col-12">
                    <label class="css-control css-control-primary css-radio text-success" style="font-weight: bold;">
                        <input class="css-control-input" @if(isset($centre)) id="mstatus" @else id="mstatus"
                               @endif  type="radio" value="active" name="status"
                               @if((isset($centre->status) && $centre->status=='active')|| old('status') == 'active') checked @endif>
                        <span class="css-control-indicator"></span> Active
                    </label>
                    <label class="css-control css-control-primary css-radio text-danger" style="font-weight: bold;">
                        <input class="css-control-input" @if(isset($centre)) id="mstatus" @else id="mstatus"
                               @endif  type="radio" value="inactive" name="status"
                               @if((isset($centre->status) && $centre->status=='inactive') || old('status') == 'inactive') checked @endif>
                        <span class="css-control-indicator"></span> Inactive
                    </label>
                </div>
                @if ($errors->has('status'))
                    <span class="invalid-feedback">
                    {{ $errors->first('status') }}
                </span>
                @endif
            </div>
        @endif
        <div class="form-group col-md-12 row gutters-tiny">
            <div class="col-12 mb-10 pr-20 text-right">
                <button type="submit"
                        class="btn btn-hero btn-noborder btn-rounded btn-alt-success">
                    <i class="si si-user-follow mr-10"></i> Create Centre
                </button>
            </div>
        </div>
    </form>
</div>