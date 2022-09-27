@extends('layouts.app')

@section('content')
<section class="register">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 left ">
                <div class="row">
                    <div class="col-md-1 col-lg-2"></div>
                    <div class="col-md-10 col-lg-9 text-center text-md-start">
                        <div class="pb-4 d-none d-md-block">
                            <a href="/login" class="theme-btn secondary-btn d-inline-flex back-btn">
                                <img class="me-3" src="/images/single-location/left-icon.svg" alt="Back Icon">
                                Back to login</a>
                        </div>
                        <img src="/images/logo-white.svg" class="img-fluid" alt="Logo" title="Logo">
                        <h1 class="h3 mt-34 mt-xs-10 text-white ">Follow these steps to complete your account</h1>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                 </div>
                 <div class="col-md-8 col-lg-7 right">
                    <h2 class="h3 neutral-100 mb-30">Fill in the form</h2>
                    <form class="needs-validation row" method="POST" novalidate action="{{ route('register') }}">
                    @csrf
                        <div class="col-md-6 mb-4">
                            <label for="name" class="form-label small-text2 mb-2">{{ __('Username*') }}</label>
                            <input id="name" type="text" placeholder="Type your username here" class="form-control emailInput body-1 netural-100  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="password" class="form-label small-text2 mb-2">{{ __('Password*') }}</label>

                            <input id="password" placeholder="Type your password here" type="password" class="form-control emailInput body-1 netural-100  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="firstname" class="form-label small-text2 mb-2">{{ __('First name*') }}</label>
                            <input id="firstname" type="text" placeholder="Type your first name here" class="form-control emailInput body-1 netural-100  @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6  mb-4">
                            <label for="othername" class="form-label small-text2 mb-2">{{ __('Other names*') }}</label>
                            <input id="othername" type="text" placeholder="Type your other names here" class="form-control emailInput body-1 netural-100  @error('othername') is-invalid @enderror" name="othername" value="{{ old('othername') }}" required autocomplete="othername" autofocus>

                            @error('othername')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="abnnumber" class="form-label small-text2 mb-2">{{ __('ABN Number') }}</label>
                            <input id="abnnumber" type="text" placeholder="Type your ABN number here" class="form-control emailInput body-1 netural-100  " name="abnnumber" autofocus>

                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="address" class="form-label small-text2 mb-2">{{ __('Address') }}</label>
                            <input id="address" type="text" placeholder="Type your address here" class="form-control emailInput body-1 netural-100  " name="address"  autocomplete="address" autofocus>

                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="phone" class="form-label small-text2">{{ __('Phone number') }}</label>
                            <input class="form-control body-1 netural-100" type="tel" id="phone" placeholder="Your phone number" value="+61 " >
                            
                         </div>
                         <div class="col-md-6 mb-4">
                            <label for="email" class="form-label small-text2">{{ __('Email*') }}</label>
                            <input type="text" placeholder="Type your email here" class="form-control body-1 netural-100" name="email" id="email" required>
                            <div class="invalid-feedback"> <span><img class="me-2" src="/images/require-iocn.svg" alt="Require Icon"></span>Email is required</div>
                         </div>
                         <div class="col-md-6 mb-4">
                            <label for="InputName" class="form-label small-text2">{{ __('Bank') }}</label>
                            <select required="" name="customer_type" id="selectinput" class="js-placeholder-single-input form-control">
                               <option value="" disabled="" selected="" hidden="">Choose category here</option>
                               @foreach(config('env.bankNames') as $key=>$bank)
                                    <option value="{{$key}}">{{$bank}}</option>
                                @endforeach
                            </select>
                         </div>
                         <div class="col-md-6 mb-4">
                            <label for="abnnumber" class="form-label small-text2 mb-2">{{ __('BSB') }}</label>
                            <input id="abnnumber" type="text" placeholder="_ _ _-_ _ _" class="form-control emailInput body-1 netural-100  " name="abnnumber" autofocus>

                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="InputName" class="form-label small-text2">{{ __('Account number') }}</label>
                            <input type="text" placeholder="09090909" class="form-control body-1 netural-100" name="name" id="InputName" >
                           </div>
                        <div class="col-md-12 mb-4">
                            <div class="row">
                               <div class="col-md-12">
                                  <label for="InputName" class="form-label small-text2">{{ __('Upload avatar image') }}</label>
                               </div>
                               <div class="col-md-8">
                                  <input class="form-control body-1 netural-100" id="formFileLg" type="file">
                               </div>
                               <div class="col-md-4">
                                  <label role="button" for="formFileLg" class="form-label small-text2 mb-0 theme-btn primary-btn">Choose imagee</label>
                               </div>
                            </div>
                         </div>
                         <div class="col-md-6 mb-4">
                            <label for="standardfee" class="form-label small-text2">{{ __('Standard fee') }}</label>
                            <input type="text" placeholder="$" class="form-control body-1 netural-100" name="name" id="standardfee" >
                         </div>
                         <div class="col-md-6 col-lg-4 mb-4">
                            <label for="scadmin-fee" class="form-label small-text2">{{ __('SC admin fee') }}</label>
                            <input type="text" placeholder="$ 50" class="form-control body-1 netural-100" name="scadmin-fee" id="scadmin-fee" disabled>
                         </div>
                         <div class="col-md-12 mb-4">
                            <label class="form-label small-text2">About me</label>
                            <textarea placeholder="Please describe yourself" class="form-control body-1 netural-100" rows="6"></textarea>
                         </div>
                         <div class="col-12 mb-4">
                            <div class="row">
                            <div class="d-flex mb-2 ">
                                <div class="align-self-center ">   <label for="addlocation" class="form-label small-text2 mb-0">{{ __('Add location here') }}</label></div>
                                <div class="align-self-center ms-2">
                                    <a href="" class=" add-link">Add new location</a>
                                </div>
                            </div>
                         <div class="col-md-6 col-lg-4">
                            <input type="text" placeholder="$" class="form-control body-1 netural-100 mb-3" name="addlocation" id="addlocation" >
                     
                            <input type="text" placeholder="$" class="form-control body-1 netural-100 mb-3" name="addlocation" id="addlocation" >
                         </div>
                        </div>
                         </div>
                         <div class="col-12 d-flex mb-5 justify-content-start justify-content-md-end">
                            <a role="button" id="add_more-package" class="theme-btn primary-btn-border me-4 ">Login</a>
                           <button type="submit" id="submit_button" class="theme-btn primary-btn border-0  pe-auto">Register</button>
                           
                        
                         </div>
                    </form>
                 </div>
        </div>
    </div>
</section>
@endsection
