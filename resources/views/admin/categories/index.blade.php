<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card">
        <div class="border-bottom title-part-padding row">

            <div class="border-bottom title-part-padding row">
                <div class="col">
                <h4 class="card-title mb-0">Categories</h4>
                </div>
                <div class="col d-flex justify-content-end">
               <a class="btn btn-danger text-white ms-3 d-none d-md-block" href="{{ url('/categories/create') }}">Add Category</a>
                </div>
            </div>


        </div>
        <div class="card-body">

            <div class="table-responsive m-t-40">
                <table id="zero_config" class="table display table-bordered table-striped no-wrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                            @foreach($categories as $category)
                             <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="text-dark pe-2">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a onclick="deleteCategory({{ $category->id }})" class="text-dark">
                                    <i  class="fa fa-trash"></i>
                                </a>


                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    function deleteCategory(categoryId) {
        if (confirm('Are you sure you want to delete this category?')) {
            fetch('/categories/' + categoryId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                if (response.ok) {
                    // Category deleted successfully
                    window.location.reload(); // Refresh the page to reflect changes
                } else {
                    // Error occurred while deleting category
                    alert('An error occurred while deleting the category.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred while deleting the category.');
            });
        }
    }
    </script>
