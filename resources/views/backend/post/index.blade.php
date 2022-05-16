<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New Post</a>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th style="width: 40px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>
                                                <div style="max-width:70px; max-height:70px; overflow:hidden;">
                                                    <img src="{{ asset($post->image) }}" class="img-fluid" alt="">
                                                </div>
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->category->name }}</td>
                                            <td>
                                                @foreach ($post->tags as $tag)
                                                    <span class="badge badge-primary">{{ $tag->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>{{ $post->user->name }}</td>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-warning mr-2" title="Show"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info mr-2" title="Edit"><i class="fas fa-edit"></i></a>
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger" title="Delete"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6">
                                                <p class="text-danger" style="text-align: center; margin: 10px 0;">Nothing found</p>
                                            </td>
                                        </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
