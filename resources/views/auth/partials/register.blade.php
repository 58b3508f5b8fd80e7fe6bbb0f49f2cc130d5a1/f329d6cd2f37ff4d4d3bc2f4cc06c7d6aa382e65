@php
    $readonly='';
    if($registration->status != 'pending'){
        $readonly ='readonly';
    }
@endphp
<div class="col-sm-12 pricing-box">
    <div class="col-sm-12 col-md-12">
        <form class="form-horizontal" method="POST" action="{{url('/join/register')}}">
            {{csrf_field()}}
            <input {{$readonly}} type="hidden" name="reg_id" value="{{$registration->reg_id}}">
            <div class="col-md-12">
                <div class="form-group col-md-4">
                    <label for="first">First name</label>
                    <input id="first_name" class="form-control" name="first_name"
                           value="{{$registration->first_name or old('first_name')}}" required=""
                           placeholder="Enter first name" {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="last_name">Last name</label>
                    <input id="last_name" class="form-control" name="last_name"
                           value="{{$registration->last_name or old('last_name')}}" required=""
                           placeholder="Enter last name" {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="other_name">Other name</label>
                    <input id="other_name" class="form-control" name="other_name"
                           value="{{$registration->other_name or old('other_name')}}"
                           placeholder="Enter other names" {{$readonly}} type="text">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-8">
                    <label for="address">Permanent address</label>
                    <input id="" class="form-control" name="address" value="{{$registration->address or old('address')}}"
                           required=""
                           placeholder="Enter your permanent address" {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="dob">Date of birth</label>
                    <input id="dob" class="form-control" name="dob" value="{{$registration->dob or old('dob')}}"
                           required="" placeholder="" {{$readonly}} type="date">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-4">
                    <label for="marital_status">Marital status</label>
                    <input id="marital_status" class="form-control" name="marital_status"
                           value="{{$registration->marital_status or old('marital_status')}}" required=""
                           placeholder="" {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <input id="gender" class="form-control" name="gender"
                           value="{{$registration->gender or old('gender')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="phone_no">Phone Number</label>
                    <input id="phone_no" class="form-control" name="phone_no"
                           value="{{$registration->phone_no or old('phone_no')}}" required=""
                           placeholder="Phone number" {{$readonly}} type="number">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="nationality">Nationality</label>
                    <input id="nationality" class="form-control" name="nationality" value="Nigerian" readonly
                           required="" placeholder="" {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-6">
                    <label for="state_origin">State of Origin</label>
                    <input id="state_origin" class="form-control" name="state_origin"
                           value="{{$registration->state_origin or old('state_origin')}}" required=""
                           placeholder="" {{$readonly}} type="text">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="lga_origin">Local Government Area</label>
                    <input id="lga_origin" class="form-control" name="lga_origin"
                           value="{{$registration->lga_origin or old('lga_origin')}}" required=""
                           placeholder=""
                           {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-6">

                    <label for="village">Village</label>
                    <input id="village" class="form-control" name="village"
                           value="{{$registration->village or old('village')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-4">

                    <label for="programme">Programme</label>
                    <input id="programme" class="form-control" name="programme"
                           value="{{$registration->programme or old('programme')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">

                    <label for="centre">Centre</label>
                    <input id="centre" class="form-control" name="centre"
                           value="{{$registration->centre or old('centre')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
                @if($registration->status == 'pending')
                    <div class="form-group col-md-4 text-center" style="padding-top:32px;">
                        <button {{$readonly}} type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-sign-in"></i> Register
                        </button>
                    </div>
                @else
                    <div class="form-group col-md-4 text-center" style="padding-top:32px;">
                        <button {{$readonly}} type="button" class="btn btn-danger btn-lg" data-dismiss="modal">
                            <i class="fa fa-times"></i> Close
                        </button>
                    </div>
                @endif
            </div>
        </form>
    </div>
</div>