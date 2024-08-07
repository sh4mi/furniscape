<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="border-bottom title-part-padding row">
            <h4 class="card-title mb-0">Ratings</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Product Id</th>
                            <th>Rating</th>
                            <th>Comment</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ratings as $rating)
                        <tr>
                            <td>{{ $rating->user->name }}</td>
                            <td>{{ $rating->product->name }}</td>
                            <td>{{ $rating->rating }}</td>
                            <td>{{ $rating->comment }}</td>
                            <td>{{ $rating->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
