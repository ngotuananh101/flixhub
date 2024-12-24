@extends('layouts.admin')

@section('title', __('Local Search'))

@section('content')
    <!-- Toolbar -->
    <div class="pb-5">
        <!-- Container -->
        <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
            <div class="flex flex-col flex-wrap gap-1">
                <div class="flex items-center gap-1 text-sm font-normal">
                    <a class="text-gray-700 hover:text-primary" href="{{ route('admin.home') }}">
                        {{ __('Home') }}
                    </a>
                    <span class="text-gray-400 text-sm">
                        /
                    </span>
                    <span class="text-gray-700">
                        {{ __('Settings') }}
                    </span>
                    <span class="text-gray-400 text-sm">
                        /
                    </span>
                    <span class="text-gray-700">
                        {{ __('Local Search') }}
                    </span>
                </div>
                <h1 class="font-medium text-lg text-gray-900">
                    {{ __('Local Search') }}
                </h1>
                <span class="text-xs font-normal text-gray-700">
                    {{ __('Local search is a feature that allows users to search for content within your website.') }}
                </span>
            </div>
            <div class="flex items-center flex-wrap gap-1.5 lg:gap-3.5">
                <a class="btn btn-sm btn-light" href="javascript:window.print();">
                    <i class="ki-filled ki-exit-down">
                    </i>
                    {{ __('Print') }}
                </a>
            </div>
        </div>
        <!-- End of Container -->
    </div>
    <!-- End of Toolbar -->
    <!-- Container -->
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="card pb-2.5">
                <div class="card-body grid gap-5">
                    <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                        <label class="form-label max-w-56">
                            {{ __('Search method') }}
                        </label>
                        <div class="w-full">
                            <select class="select">
                                @foreach ($availableSearchMethods as $key => $searchMethod)
                                    <option value="{{ $key }}">
                                        {{ $searchMethod }}
                                    </option>
                                @endforeach
                            </select>
                            <span class="text-xs text-gray-700">
                                {{ __('Which method should be used for search related functionality across the site.') }}
                            </span>
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <button class="btn btn-primary">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Container -->
@endsection
