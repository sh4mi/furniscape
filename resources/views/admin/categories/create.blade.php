<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('categories.store') }}">
                        @csrf
                        <div class="form-body">
                            <h5 class="card-title">Add Category</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                        @error('name')
                                            <div>{{ $message }}</div>
                                        @enderror
                                        </div>
                                </div>
                                <!--/span-->
                                {{-- <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="control-label">Slug</label>
                                        <input type="text" id="slug" class="form-control" name="slug" value="{{ old('slug') }}">
                                        @error('slug')
                                            <div>{{ $message }}</div>
                                        @enderror
                                </div>
                                <!--/span-->
                            </div> --}}
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success rounded-pill px-4"> Save</button>
                            <button type="button" class="btn btn-dark rounded-pill px-4">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</x-app-layout>
