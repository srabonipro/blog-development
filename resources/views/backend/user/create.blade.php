<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">User</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create User</h3>
                            </div>
                            <div class="card-body">
                                {{-- <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" value="{{ old('title') }}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Post Category</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" class="d-none">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                                @error('category')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>

                                        <label>Select Tags</label>
                                        <div class="form-group d-flex">
                                            @foreach ($tags as $tag)
                                            <div class="form-check mr-3">
                                                <input class="form-check-input" type="checkbox" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                                                <label for="tag{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="image" name="image">
                                                <label class="custom-file-label" for="image">Choose Image</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Enter category description">{{ old('description') }}</textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
