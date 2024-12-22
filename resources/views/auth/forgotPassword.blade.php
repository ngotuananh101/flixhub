@extends('layouts.auth')

@section('title', __('Forgot password'))

@section('content')
    <form action="{{ route('password.email') }}" method="post" class="card-body flex flex-col gap-5 p-10"
        id="forgot_password_form">
        @csrf
        <div class="text-center mb-1">
            <h3 class="text-lg font-medium text-gray-900 leading-none mb-2.5">
                {{ __('Forgot password') }}
            </h3>
            <p class="text-sm text-gray-600">
                {{ __('Enter your email address to reset your password') }}
            </p>
        </div>
        <div class="flex flex-col gap-1">
            <label class="form-label font-normal text-gray-900">
                {{ __('Email') }}
            </label>
            <input class="input" placeholder="email@email.com" type="text" value="" name="email" />
            <x-input.message :message="$errors->first('email')" type="error" />
            <x-input.message :message="session('status')" type="success" />
        </div>
        <button class="btn btn-primary flex justify-center grow capitalize" type="submit">
            <i class="fa-solid fa-spinner-third animate-spin hidden"></i>
            {{ __('Submit') }}
        </button>
    </form>
@endsection

@section('scripts')
    <script>
        let form = document.getElementById('forgot_password_form');
        let btnSubmit = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function(event) {
            btnSubmit.setAttribute('disabled', 'disabled');
            btnSubmit.querySelector('i').classList.remove('hidden');
        });
    </script>
@endsection
