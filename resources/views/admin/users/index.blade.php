<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="border-bottom title-part-padding row">
            <div class="col">
                <h4 class="card-title mb-0">Users</h4>
            </div>
            <!-- <div class="col d-flex justify-content-end">
                <a class="btn btn-danger text-white ms-3 d-none d-md-block" href="#">Add User</a>
            </div> -->
        </div>
        <div class="card-body">

            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->role}}</td>
                            <td>{{$user->city}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->country}}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" class="text-dark pe-2">
                                    <i data-feather="edit-2" class="feather-sm fill-white"></i>
                                </a>
                                @if($user->role == "customer")
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="background: none; border: none; cursor: pointer; padding: 0;">
                                        <i data-feather="trash-2" class="feather-sm fill-white"></i>
                                    </button>
                                </form>
                                @endif
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>