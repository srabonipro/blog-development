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
                                <h3 class="card-title">Edit User</h3>
                            </div>
                            <div class="card-body">
                                {{-- <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" value="{{ $post->title }}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Post Category</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" class="d-none">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option {{ $category->id == $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </option>
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
                                                    <input class="form-check-input" type="checkbox" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}"
                                                        @foreach ($post->tags as $t)
                                                            @if ($tag->id == $t->id) checked @endif
                                                        @endforeach
                                                    >
                                                    <label for="tag{{ $tag->id }}" class="form-check-label">{{ $tag->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>

                                        <input type="hidden" name="old_image" value="{{ $post->image }}">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="image">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Choose Image</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width:100px; max-height:100px; overflow:hidden; margin-left:auto;">
                                                        <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="Enter category description">{{ old('description') }}
                                                {{ $post->description }}
                                            </textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="btn btn-primary">Update</button>
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
