@extends('layouts.app')

@section('content')



<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                    <form class="user"  method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           {{--Ism--}}
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ism">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                           {{--Familiya--}}
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="fname" type="text" class="form-control form-control-user @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}"   autocomplete="fname" autofocus placeholder="Familiya">
                            </div>
                            @error('fname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        {{--Email--}}
                        <div class="form-group">
                            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Login" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        {{--Password--}}
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" placeholder="Parol" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{--Repeat Password--}}

                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Qarolni qayta yozing">

                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Register') }}
                        </button>

                        <hr>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
