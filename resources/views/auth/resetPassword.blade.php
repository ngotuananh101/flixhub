@extends('layouts.auth')

@section('title', __('Reset Password'))

@section('content')
    <form action="{{ route('password.update') }}" method="post" class="card-body flex flex-col gap-5 p-10"
        id="reset_password_form">
        @csrf
        <div class="text-center mb-1">
            <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
                {{ __('Reset Password') }}
            </h3>
            <p class="text-sm text-gray-600">
                {{ __('Set new password for your account') }}.
            </p>
        </div>
        <input type="hidden" name="token" value="{{ $token }}" />
        <input type="hidden" name="email" value="{{ $email }}" />
        <div class="flex flex-col gap-1">
            <label class="form-label font-normal text-gray-900">
                {{ __('Password') }}
            </label>
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
            <x-input.message :message="session('status')" type="success" />
        </div>
        <div class="flex flex-col gap-1">
            <label class="form-label font-normal text-gray-900">
                {{ __('Confirm Password') }}
            </label>
            <div class="input" data-toggle-password="true">
                <input name="password_confirmation" placeholder="Enter Password" type="password" value="" />
                <button class="btn btn-icon" data-toggle-password-trigger="true" type="button">
                    <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
                    </i>
                    <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
                    </i>
                </button>
            </div>
            <x-input.message :message="$errors->first('password_confirmation')" type="error" />
        </div>
        <button class="btn btn-primary flex justify-center grow capitalize" type="submit">
            <i class="fa-solid fa-spinner-third animate-spin hidden"></i>
            {{ __('Submit') }}
        </button>
    </form>
@endsection

@section('scripts')
    <script>
        let form = document.getElementById('reset_password_form');
        let btnSubmit = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function(event) {
            btnSubmit.setAttribute('disabled', 'disabled');
            btnSubmit.querySelector('i').classList.remove('hidden');
        });
    </script>
@endsection
