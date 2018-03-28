<div class="col-sm-12 col-md-10" style="float: none;margin: auto;">
    <form class="js-validation-signup" action="{{url('/admin/centre/create')}}"
          method="post">
        {{csrf_field()}}
        <div class="form-group col-md-6{{ $errors->has('zone') ? ' is-invalid' : '' }}  row">
            <div class="col-12">
                <div class="form-material floating">
                    <input class="form-control" id="zone" name="zone" type="text"
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
                <div class="form-material floating">
                    <input class="form-control" id="centre" name="centre" type="text"
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
        <div class="form-group col-md-6{{ $errors->has('coordinator') ? ' is-invalid' : '' }} row">
            <div class="col-12">
                <div class="form-material">
                    <input id="mcoord" name="coordinator" style="display: none;" value="{{old('coordinator')}}" required>
                    <input class="form-control" id="mcoordinator" type="text"
                           value="" required>
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
                    <input class="css-control-input" name="status" type="radio" value="active"
                           @if((isset($centre->status) && $centre->status=='active')|| old('status') == 'active') checked @endif>
                    <span class="css-control-indicator"></span> Active
                </label>
                <label class="css-control css-control-primary css-radio text-danger" style="font-weight: bold;">
                    <input class="css-control-input" name="status" type="radio" value="inactive"
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