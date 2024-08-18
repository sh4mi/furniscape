<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Users Report</h2>
            <!-- PDF Generation Button -->
            <a href="{{ route('reports.users.pdf') }}" class="btn btn-dark">
                Generate PDF
            </a>
        </div>

        <table id="usersTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone Number</th>
                    <th>City</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>{{ $user->phone_number ?? '--'}}</td>
                    <td>{{ $user->city ?? '--'}}</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>

<script>
    $(document).ready(function() {
        $('#usersTable').DataTable();
    });
</script>
