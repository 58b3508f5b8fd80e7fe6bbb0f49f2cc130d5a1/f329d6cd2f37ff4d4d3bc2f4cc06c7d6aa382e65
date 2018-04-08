<?php
$data = session('data');
$states = [
    'Abia',
    'Adamawa',
    'Anambra',
    'Akwa Ibom',
    'Bauchi',
    'Bayelsa',
    'Benue',
    'Borno',
    'Cross River',
    'Delta',
    'Ebonyi',
    'Enugu',
    'Edo',
    'Ekiti',
    'Gombe',
    'Imo',
    'Jigawa',
    'Kaduna',
    'Kano',
    'Katsina',
    'Kebbi',
    'Kogi',
    'Kwara',
    'Lagos',
    'Nasarawa',
    'Niger',
    'Ogun',
    'Ondo',
    'Osun',
    'Oyo',
    'Plateau',
    'Rivers',
    'Sokoto',
    'Taraba',
    'Yobe',
    'Zamfara',
];

?>
@php
    $readonly='';
    if($registration->status != 'pending'){
        $readonly ='readonly';
    }
@endphp
<div class="col-sm-12 pricing-box">
    <div class="col-sm-12 col-md-12">
        <form class="form-horizontal" @if($registration->status == 'pending') method="POST"
              action="{{url('/join/register')}}" @endif enctype="multipart/form-data">
            @if($registration->status == 'pending')
                {{csrf_field()}}
                <input readonly type="hidden" name="reg_id" value="{{$registration->reg_id}}">
            @endif
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
                <div class="form-group col-md-12">
                    <label for="address">Permanent address</label>
                    <input id="" class="form-control" name="address"
                           value="{{$registration->address or old('address')}}"
                           required=""
                           placeholder="Enter your permanent address" {{$readonly}} type="text">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-5">
                    <label for="marital_status">Marital status</label>
                    <div>
                        <label style="font-weight:normal;">
                            <input {{$readonly}} class="css-control-input" name="marital_status" type="radio"
                                   value="single" id="single"
                                   @if($registration->marital_status=='single') checked @endif >
                            <span class="css-control-indicator"></span> Single
                        </label>
                        <label style="font-weight:normal;">
                            <input {{$readonly}} class="css-control-input" name="marital_status" type="radio"
                                   value="married" id="married"
                                   @if($registration->marital_status=='married') checked @endif>
                            <span class="css-control-indicator"></span> Married
                        </label>
                        <label style="font-weight:normal;">
                            <input {{$readonly}} class="css-control-input" name="marital_status" type="radio"
                                   value="divorced" id="divorced"
                                   @if($registration->marital_status=='divorced') checked @endif>
                            <span class="css-control-indicator"></span> Divorced
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="gender">Gender</label>
                    <div>
                        <label style="font-weight:normal;">
                            <input {{$readonly}} class="css-control-input" name="gender" type="radio"
                                   value="male" id="male"
                                   @if($registration->gender=='male') checked @endif >
                            <span class="css-control-indicator"></span> Male
                        </label>
                        <label style="font-weight:normal;">
                            <input {{$readonly}} class="css-control-input" name="gender" type="radio"
                                   value="female" id="female"
                                   @if($registration->gender=='female') checked @endif >
                            <span class="css-control-indicator"></span> Female
                        </label>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="dob">Date of birth</label>
                    <input id="dob" class="form-control" name="dob"
                           value="{{date('Y-m-d',strtotime($registration->dob))}}"
                           required="" placeholder="YYYY-MM-DD" {{$readonly}} type="date">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-7">
                    <label for="phone_no">Email address</label>
                    <input id="phone_no" class="form-control" name="email"
                           value="{{$registration->email or old('email')}}" required=""
                           placeholder="Email address" {{$readonly}} type="email">
                </div>
                <div class="form-group col-md-5">
                    <label for="phone_no">Phone Number</label>
                    <input id="phone_no" class="form-control" name="phone_no"
                           value="{{$registration->phone_no or old('phone_no')}}" required=""
                           placeholder="Phone number" {{$readonly}} type="number">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-4">
                    <label for="nationality">Nationality</label>
                    <input id="nationality" class="form-control" name="nationality" value="Nigerian" readonly
                           required="" placeholder="" {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="state_origin">State of Origin</label>
                    @if($registration->status == 'pending')
                        <select id="state_origin" class="form-control" name="state_origin">
                            <option selected disabled>Select state</option>
                            @foreach($states as $state)
                                <option>{{$state}}</option>
                            @endforeach
                        </select>
                    @else
                        <input id="state_origin" class="form-control" name="state_origin"
                               value="{{$registration->state_origin or old('state_origin')}}" required=""
                               placeholder="" {{$readonly}} type="text">
                    @endif
                </div>

                <div class="form-group col-md-4">
                    <label for="lga_origin">L.G.A</label>
                    @if($registration->status == 'pending')
                        <select class="form-control form-control-lg" id="lga_origin" name="lga_origin">
                            <option selected disabled>Select LGA</option>
                        </select>
                    @else
                        <input id="lga_origin" class="form-control" name="lga_origin"
                               value="{{$registration->lga_origin or old('lga_origin')}}" required=""
                               placeholder="" {{$readonly}} type="text">
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-4">
                    <label for="ward">Ward</label>
                    <input id="ward" class="form-control" name="ward"
                           value="{{$registration->ward or old('ward')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="clan">Clan</label>
                    <input id="clan" class="form-control" name="clan"
                           value="{{$registration->clan or old('clan')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
                <div class="form-group col-md-4">
                    <label for="village">Village</label>
                    <input id="village" class="form-control" name="village"
                           value="{{$registration->village or old('village')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
            </div>
            <div class="col-md-12">
                @if($registration->status == 'pending')
                    <div class="form-group col-md-6">
                        <label for="programme">Programme</label>
                        <select id="programme" name="programme" class="form-control">
                            <option selected disabled>Select Programme</option>
                            <option>Accessories production (shoes, bags, beads, etc)</option>
                            <option>Agricultural production (fish, poultry, pig, cash crops)</option>
                            <option>Cosmetics production</option>
                            <option>Fashion and design</option>
                            <option>Furnitures and interiors</option>
                            <option>Media and videos production</option>
                            <option>Metal works</option>
                            <option>Paint production</option>
                            <option>Pastries production</option>
                            <option>Paper production</option>
                            <option>Programming</option>
                            <option>Solar panel production</option>
                            <option>Textile production</option>
                            <option>Trade and marketing</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="centre">Centre</label>
                        <select id="programme" name="centre" class="form-control">
                            <option selected disabled>Select Centre</option>
                            @foreach($centres as $centre)
                                @if ($loop->first)
                                    @php $zone=$centre->zone;@endphp
                                    <optgroup label="{{$centre->zone}}">
                                        @endif
                                        @if(!($zone==$centre->zone))
                                            @php $zone=$centre->zone; @endphp
                                            <optgroup label="{{$centre->zone}}">
                                                @endif
                                                <option value="{{$centre->zone ."-".$centre->centre}}">{{$centre->centre}}</option>
                                                @if(!($zone==$centre->zone))
                                            </optgroup>
                                            @if ($loop->first)
                                    </optgroup>
                                @endif
                                @endif
                            @endforeach
                        </select>
                    </div>
                @else
                    <div class="form-group col-md-6">
                        <label for="programme">Programme</label>
                        <input id="programme" class="form-control" name="programme"
                               value="{{$registration->programme or old('programme')}}" required="" placeholder=""
                               {{$readonly}} type="text">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="centre">Centre</label>
                        <input id="centre" class="form-control" name="centre"
                               value="{{$registration->centre or old('centre')}}"
                               required="" placeholder=""
                               {{$readonly}} type="text">
                    </div>

                @endif
            </div>
            <div class="col-md-12">
                <div class="form-group{{ $errors->has('passport') ? ' is-invalid' : '' }} row col-lg-7 col-xs-12">
                    <label for="#">Passport</label>
                    <div class="form-group input-group">
                        <label class="input-group-btn"> <span class="btn btn-primary">
									Browse<input type="file" name="passport" accept=".png,.jpg,.gif,.jpeg"
                                                 style="display: none;" id="passport" required>
							</span>
                        </label><input type="text" id="file-info" class="form-control"
                                       readonly>
                    </div>
                    @if ($errors->has('passport'))
                        <span class="invalid-feedback">
                                    {{ $errors->first('passport') }}
                                </span>
                    @endif
                </div>
                <div class="col-md-5 col-xs-12">
                    <div id="passportImage"></div>
                </div>
            </div>
            <div class="form-group col-md-12 text-center" style="padding-top:32px;">
                @if($registration->status == 'pending')
                    <button {{$readonly}} type="submit" class="btn btn-primary btn-lg">
                        <i class="fa fa-sign-in"></i> Register
                    </button>
                @else
                    <button {{$readonly}} type="button" class="btn btn-danger btn-lg" data-dismiss="modal">
                        <i class="fa fa-times"></i> Close
                    </button>
                @endif
            </div>
        </form>
    </div>
</div>
