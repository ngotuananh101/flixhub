@extends('layouts.auth')

@section('title', __('Sign in'))

@section('content')
    <form action="{{ route('authenticate') }}" method="post" class="card-body flex flex-col gap-5 p-10" id="sign_in_form">
        @csrf
        <div class="text-center mb-1">
            <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
                {{ __('Sign in') }}
            </h3>
        </div>
        <div class="grid grid-cols-2 gap-2.5">
            <a class="btn btn-light btn-sm justify-center" href="#">
                <img alt="" class="size-3.5 shrink-0" src="{{ asset('assets/media/brand-logos/google.svg') }}" />
                {{ __('Use Google') }}
            </a>
            <a class="btn btn-light btn-sm justify-center" href="#">
                <img alt="" class="size-3.5 shrink-0" src="{{ asset('assets/media/brand-logos/facebook.svg') }}" />
                {{ __('Use Facebook') }}
            </a>
        </div>
        <div class="flex items-center gap-2">
            <span class="border-t border-gray-200 w-full">
            </span>
            <span class="text-2xs text-gray-500 font-medium uppercase">
                {{ __('Or') }}
            </span>
            <span class="border-t border-gray-200 w-full">
            </span>
        </div>
        <div class="flex flex-col gap-1">
            <label class="form-label font-normal text-gray-900">
                {{ __('Email') }}
            </label>
            <input class="input" placeholder="email@email.com" type="text" value="" name="email" />
            <x-input.message :message="$errors->first('email')" type="error" />
            <x-input.message :message="session('status')" type="success" />
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex items-center justify-between gap-1">
                <label class="form-label font-normal text-gray-900">
                    {{ __('Password') }}
                </label>
                <a class="text-2sm link shrink-0" href="{{ route('password.request') }}">
                    {{ __('Forgot Password?') }}
                </a>
            </div>
            <div class="input" data-toggle-password="true">
                <input name="password" placeholder="Enter Password" type="password" value="" />
                <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
                    <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
                    </i>
                    <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
                    </i>
                </button>
            </div>
            <x-input.message :message="$errors->first('password')" type="error" />
        </div>
        <div class="flex flex-col gap-1">
            <label class="checkbox-group">
                <input class="checkbox checkbox-sm" name="remember" type="checkbox" value="1" />
                <span class="checkbox-label">
                    {{ __('Remember me') }}
                </span>
            </label>
            <x-input.message :message="$errors->first('remember')" type="error" />
        </div>
        <button class="btn btn-primary flex justify-center grow capitalize" type="submit">
            <i class="fa-solid fa-spinner-third animate-spin hidden"></i>
            {{ __('Sign in') }}
        </button>
    </form>
@endsection

@section('scripts')
    <script>
        let form = document.getElementById('sign_in_form');
        let btnSubmit = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function(event) {
            btnSubmit.setAttribute('disabled', 'disabled');
            btnSubmit.querySelector('i').classList.remove('hidden');
        });
    </script>
@endsection
