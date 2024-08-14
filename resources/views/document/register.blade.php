@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="wrapper-page">
        <div class="container-fluid p-0">
            <div class="card">
                <div class="card-body">

                    {{-- <div class="text-center mt-4">
                        <a href="{{ url('/') }}"><div class="d-flex align-items-center justify-content-center mb-3">
                            <img class="" style="width: 3rem;" src="{{ asset('assets/images/DOLE-Logo-1.png') }}"
                            alt="Header Avatar">
                            <h3 class="text-muted text-center font-size-28"><b>DOLE RO8</b></h3>
                        </div></a>
                    </div> --}}

                    <h4 class="text-muted text-center font-size-18"><b>Register</b></h4>

                    <div class="p-3">
                        <form class="form-horizontal mt-3" method="POST" action="{{ route('document.registerUser') }}">
                            @csrf
                           
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    {{-- <input class="form-control" type="text" required="" placeholder="Username"> --}}
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="Firstname">

                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <input id="middle_name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}" required autocomplete="middle_name" autofocus placeholder="MIddlename">

                                            @error('middle_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Lastname">

                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-6">
                                        <select name="is_admin" id="is_admin" required class="form-control">
                                            <option value="" selected disabled>Choose Role</option>
                                            <option value="1">Admin</option>
                                            <option value="0">Office/Division User</option>
                                            
                                        </select>

                                        @error('is_admin')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                </div>
                                <div class="col-6">
                                        <select name="office_division" id="office_division" required class="form-control">
                                            <option value="" selected disabled>Choose Office/Division...</option>
                                            <option value="OfficeOfTheMayor">Office of the Mayor</option>
                                            <option value="HRSection">HR Section (Human Resource)</option>
                                            <option value="PESOSection">PESO Section (Public Employment Service Office)</option>
                                            <option value="ITSection">IT Section (Information Technology)</option>
                                            <option value="GSSection">GS Section (General Services)</option>
                                            <option value="PropertyCustodianSection">Property Custodian Section</option>
                                            <option value="ProcurementSection">Procurement Section</option>
                                            <option value="PhilhealthSection">Philhealth Section</option>
                                            <option value="MNAOSection">MNAO Section (Municipal Nutrition Action Office)</option>
                                            <option value="TrafficEnforcementUnit">Traffic Enforcement Unit</option>
                                            <option value="AccountingOffice">Accounting Office</option>
                                            <option value="BudgetOffice">Budget Office</option>
                                            <option value="AgricultureOffice">Agriculture Office</option>
                                            <option value="BantayDagatSection">Bantay Dagat Section</option>
                                            <option value="CivilRegistrarsOffice">Civil Registrar's Office</option>
                                            <option value="PlanningAndDevelopmentOffice">Planning & Development Office</option>
                                            <option value="MENRO">MENRO (Municipal Environment and Natural Resources Office)</option>
                                            <option value="MDRRMO">MDRRMO (Municipal Disaster Risk Reduction and Management Office)</option>
                                            <option value="HealthOffice">Health Office</option>
                                            <option value="BirthingFacilitySection">Birthing Facility Section</option>
                                            <option value="SBOffice">SB Office (Sangguniang Bayan)</option>
                                            <option value="MSWDO">MSWDO (Municipal Social Welfare and Development Office)</option>
                                            <option value="OSCASection">OSCA Section (Office for Senior Citizens Affairs)</option>
                                            <option value="TreasurersOffice">Treasurer's Office</option>
                                            <option value="LicensingSection">Licensing Section</option>
                                            <option value="MarketSection">Market Section</option>
                                            <option value="SlaughterhouseSection">Slaughterhouse Section</option>
                                            <option value="AssessorsOffice">Assessor's Office</option>
                                            <option value="EngineeringOffice">Engineering Office</option>
                                            <option value="ViceMayorsOffice">Vice Mayor's Office</option>
                                        </select>

                                        @error('office_division')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                </div>
                            </div>
                            
                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm_password">
                                </div>
                            </div>


                            {{-- <div class="form-group mb-3 row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="form-label ms-1 fw-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="form-group text-center row mt-3 pt-1">
                                <div class="col-12">
                                    <button class="btn btn-info w-100 waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                        </form>
                        <!-- end form -->
                    </div>
                </div>
                <!-- end cardbody -->
            </div>
            <!-- end card -->
        </div>
        <!-- end container -->
    </div>


</div> 

@endsection
