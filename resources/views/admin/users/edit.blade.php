<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <!-- Edit User Card -->
        <div class="card mb-4">
            <div class="card-header">
                <h4 class="mb-0">Edit User</h4>
            </div>
            <div class="card-body">

                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ old('name', $user->name) }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                value="{{ old('email', $user->email) }}" required>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" id="password" name="password" class="form-control">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="password_confirmation" class="form-label">Confirm Password:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="role" class="form-label">Role:</label>
                            <select id="role" name="role" class="form-select">
                                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin
                                </option>
                                <option value="customer" {{ old('role', $user->role) == 'customer' ? 'selected' : ''
                                    }}>Customer</option>
                            </select>
                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="phone_number" class="form-label">Phone Number:</label>
                            <input type="text" id="phone_number" name="phone_number" class="form-control"
                                value="{{ old('phone_number', $user->phone_number) }}">
                            @error('phone_number')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="city" class="form-label">City:</label>
                            <input type="text" id="city" name="city" class="form-control"
                                value="{{ old('city', $user->city) }}">
                            @error('city')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="state" class="form-label">State:</label>
                            <input type="text" id="state" name="state" class="form-control"
                                value="{{ old('state', $user->state) }}">
                            @error('state')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="country" class="form-label">Country:</label>
                            <input type="text" id="country" name="country" class="form-control"
                                value="{{ old('country', $user->country) }}">
                            @error('country')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="zip_code" class="form-label">Zip Code:</label>
                            <input type="text" id="zip_code" name="zip_code" class="form-control"
                                value="{{ old('zip_code', $user->zip_code) }}">
                            @error('zip_code')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="shipping_address" class="form-label">Shipping Address:</label>
                        <textarea id="shipping_address" name="shipping_address"
                            class="form-control">{{ old('shipping_address', $user->shipping_address) }}</textarea>
                        @error('shipping_address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="billing_address" class="form-label">Billing Address:</label>
                        <textarea id="billing_address" name="billing_address"
                            class="form-control">{{ old('billing_address', $user->billing_address) }}</textarea>
                        @error('billing_address')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

</x-app-layout>