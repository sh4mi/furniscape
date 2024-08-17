@extends('web.layouts.app')
@section('content')
<section class="mt-50 mb-50 overflow-hidden d-flex justify-content-center align-items-center p-4">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="col-md-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Bootstrap Nav Tabs -->
            <ul class="nav nav-tabs" id="profileTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="profile-info-tab" data-bs-toggle="tab"
                        data-bs-target="#profile-info" type="button" role="tab" aria-controls="profile-info"
                        aria-selected="true">Profile Information</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password"
                        type="button" role="tab" aria-controls="password" aria-selected="false">Update Password</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="delete-user-tab" data-bs-toggle="tab" data-bs-target="#delete-user"
                        type="button" role="tab" aria-controls="delete-user" aria-selected="false">Delete
                        Account</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders" type="button"
                        role="tab" aria-controls="orders" aria-selected="false">Orders</button>
                </li>
            </ul>

            <!-- Bootstrap Tab Content -->
            <div class="tab-content" id="profileTabContent">
                <div class="tab-pane fade show active" id="profile-info" role="tabpanel"
                    aria-labelledby="profile-info-tab">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mt-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mt-3">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="delete-user" role="tabpanel" aria-labelledby="delete-user-tab">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mt-3">
                        <div class="max-w-xl">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg mt-3">
                        <div class="max-w-xl">
                            @include('web.orders.index', ['orders' => $orders])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection