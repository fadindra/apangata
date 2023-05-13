@extends('layouts.app')

@section('content')
<div class="site_details">
    <h4 class="text-center">{{config('constant.PALIKA_NAME')}} {{config('constant.PALIKA_TYPE')}}{{config('constant.PALIKA')}}</h4>
    <h3 class="text-center">{{config('constant.PALIKA_TYPE')}} {{config('constant.PALIKA_SUB_TYPE')}}</h3>
    <h5 class="text-center">{{config('constant.PALIKA_ADDRESS')}}</h5>
</div>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="wrapper fadeInDown">
            <div id="formContent">

                <!-- Icon -->
                <div class="fadeIn first">
                    <img src="https://seeklogo.com/images/E/emblem-of-nepal-logo-D5A731713C-seeklogo.com.png" id="icon" alt="User Icon" />
                </div>

                <!-- Login Form -->
                <form>
                    <input type="text" id="login" class="fadeIn second" name="email" placeholder="इमेल">
                    <input type="password" id="login_password" class="fadeIn third" name="password" placeholder="पासवर्ड">
                    <button type="submit" class="fadeIn fourth btn btn-primary mb-2"> {{ __('लग-इन') }}</button>
                </form>

                <!-- Remind Passowrd -->
                @if (Route::has('password.request'))
                <div id="formFooter">
                    <a class="underlineHover" href="href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                @endif 

            </div>
        </div>

        {{-- <div class="row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('लग-इन') }}
                </button>

                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
            </div>
        </div>
    </form>
@endsection
