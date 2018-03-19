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
                    <input id="" class="form-control" name="address"
                           value="{{$registration->address or old('address')}}"
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
            </div>
            <div class="col-md-12">
                <div class="form-group col-md-6">
                    <label for="lga_origin">Local Government Area</label>
                    {{--@if($registration->status == 'pending')
                        <select class="form-control form-control-lg" id="lga_origin" name="lga_origin">
                            <option selected disabled>Select LGA</option>
                        </select>
                    @else--}}
                        <input id="lga_origin" class="form-control" name="lga_origin"
                               value="{{$registration->lga_origin or old('lga_origin')}}" required=""
                               placeholder=""
                               {{$readonly}} type="text">
                    {{--@endif--}}
                </div>
                <div class="form-group col-md-6">

                    <label for="village">Village</label>
                    <input id="village" class="form-control" name="village"
                           value="{{$registration->village or old('village')}}" required="" placeholder=""
                           {{$readonly}} type="text">
                </div>
            </div>
            <div class="col-md-12">
                @if($registration->status == 'pending')
                    <div class="form-group col-md-4">
                        <label for="programme">Programme</label>
                        <select id="programme" name="programme" class="form-control">
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

                    <div class="form-group col-md-4">
                        <label for="centre">Centre</label>
                        <select id="programme" name="centre" class="form-control">
                            <optgroup label="Akwa Ibom state">
                                <option value="Akwa Ibom state-Abak Center 1">Abak Center 1</option>
                                <option value="Akwa Ibom state-Abak Center 2">Abak Center 2</option>
                                <option value="Akwa Ibom state-Abak center 3">Abak center 3</option>
                                <option value="Akwa Ibom state-Eket center 1">Eket center 1</option>
                                <option value="Akwa Ibom state-Eket center 2">Eket center 2</option>
                                <option value="Akwa Ibom state-Essien Udim center">Essien Udim center</option>
                                <option value="Akwa Ibom state-Etinan center 1">Etinan center 1</option>
                                <option value="Akwa Ibom state-Esit Eket">Esit Eket</option>
                                <option value="Akwa Ibom state-Ibesikpo center 1">Ibesikpo center 1</option>
                                <option value="Akwa Ibom state-Ibesikpo center 2">Ibesikpo center 2</option>
                                <option value="Akwa Ibom state-Ibeno center">Ibeno center</option>
                                <option value="Akwa Ibom state-Ibiono center">Ibiono center</option>
                                <option value="Akwa Ibom state-Ika center">Ika center</option>
                                <option value="Akwa Ibom state-Ikono center">Ikono center</option>
                                <option value="Akwa Ibom state-Ikot Ekpene center">Ikot Ekpene center</option>
                                <option value="Akwa Ibom state-Ikot Abasi center ">Ikot Abasi center</option>
                                <option value="Akwa Ibom state-Ini center">Ini center</option>
                                <option value="Akwa Ibom state-Itu center">Itu center</option>
                                <option value="Akwa Ibom state-Nsit Atai center">Nsit Atai center</option>
                                <option value="Akwa Ibom state-Nsit Ibom center">Nsit Ibom center</option>
                                <option value="Akwa Ibom state-Nsit Ubium Center">Nsit Ubium Center</option>
                                <option value="Akwa Ibom state-Obot Akara Centre">Obot Akara Centre</option>
                                <option value="Akwa Ibom state-Onna center">Onna center</option>
                                <option value="Akwa Ibom state-Oron center 1">Oron center 1</option>
                                <option value="Akwa Ibom state-Oron center 2">Oron center 2</option>
                                <option value="Akwa Ibom state-Oron center 3">Oron center 3</option>
                                <option value="Akwa Ibom state-Oron center 4">Oron center 4</option>
                                <option value="Akwa Ibom state-Oron center 5">Oron center 5</option>
                                <option value="Akwa Ibom state-Oruk Anam center">Oruk Anam center</option>
                                <option value="Akwa Ibom state-Uyo center 1(Abak Rd)">Uyo center 1(Abak Rd)</option>
                                <option value="Akwa Ibom state-Uyo center 2(Nwaniba)">Uyo center 2(Nwaniba)</option>
                                <option value="Akwa Ibom state-Uyo center 3(hospital Rd)">Uyo center 3(hospital Rd)
                                </option>
                                <option value="Akwa Ibom state-Uyo center 4(Anua Obio)">Uyo center 4(Anua Obio)</option>
                                <option value="Akwa Ibom state-Uyo center 5(Ikot Okubo)">Uyo center 5(Ikot Okubo)
                                </option>
                                <option value="Akwa Ibom state-Uyo center 6(Ikot Akpanabia)">Uyo center 6(Ikot
                                    Akpanabia)
                                </option>
                                <option value="Akwa Ibom state-Uruan center">Uruan center</option>
                            </optgroup>
                            <optgroup label="Rivers state">
                                <option value="Rivers state-Phalga">Phalga</option>
                                <option value="Rivers state-Obia Okpor">Obia Okpor</option>
                                <option value="Rivers state-Rumuomasi">Rumuomasi</option>
                                <option value="Rivers state-Elelenwo">Elelenwo</option>
                                <option value="Rivers state-Igbo Etche">Igbo Etche</option>
                                <option value="Rivers state-Abuloma">Abuloma</option>
                                <option value="Rivers state-Kaa">Kaa</option>
                                <option value="Rivers state-Gokana">Gokana</option>
                                <option value="Rivers state-Khana 1">Khana 1</option>
                                <option value="Rivers state-Khana 2">Khana 2</option>
                                <option value="Rivers state-Okirika">Okirika</option>
                                <option value="Rivers state-Boni">Boni</option>
                            </optgroup>
                            <optgroup label="Bayelsa state">
                                <option value="Bayelsa state-Yenegua">Yenegua</option>
                            </optgroup>
                            <optgroup label="Delta state">
                                <option value="Delta state-Warri 1">Warri 1</option>
                                <option value="Delta state-Warri 2">Warri 2</option>
                                <option value="Delta state-Warri 3">Warri 3</option>
                                <option value="Delta state-Asaba 1">Asaba 1</option>
                                <option value="Delta state-Asaba 2">Asaba 2</option>
                            </optgroup>
                            <optgroup label="Edo state">
                                <option value="Edo state-Benin">Benin</option>
                            </optgroup>
                            <optgroup label="Abia state">
                                <option value="Abia State-Aba">Aba</option>
                                <option value="Abia State-Umuahia">Umuahia</option>
                            </optgroup>
                            <optgroup label="Imo state">
                                <option value="Imo state-Owerri">Owerri</option>
                            </optgroup>
                            <optgroup label="Cross Rivers state">
                                <option value="Cross Rivers state-Calabar 1">Calabar 1</option>
                                <option value="Cross Rivers state-Calabar 2">Calabar 2</option>
                                <option value="Cross Rivers state-Calabar 3">Calabar 3</option>
                                <option value="Cross Rivers state-Calabar 4">Calabar 4</option>
                                <option value="Cross Rivers state-Calabar 5">Calabar 5</option>
                                <option value="Cross Rivers state-Obudu">Obudu</option>
                                <option value="Cross Rivers state-Ikom center">Ikom center</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group col-md-4 text-center" style="padding-top:32px;">
                        <button {{$readonly}} type="submit" class="btn btn-primary btn-lg">
                            <i class="fa fa-sign-in"></i> Register
                        </button>
                    </div>
                @else
                    <div class="form-group col-md-4">
                        <input id="programme" class="form-control" name="programme"
                               value="{{$registration->programme or old('programme')}}" required="" placeholder=""
                               {{$readonly}} type="text">
                    </div>
                    <div class="form-group col-md-4">
                        <input id="centre" class="form-control" name="centre"
                               value="{{$registration->centre or old('centre')}}"
                               required="" placeholder=""
                               {{$readonly}} type="text">
                    </div>
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
