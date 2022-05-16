<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
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
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <img src="{{ asset($post->image) }}" class="img-fluid" style="max-width: 350px" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Title</th>
                                        <td>{{ $post->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Slug</th>
                                        <td>{{ $post->slug }}</td>
                                    </tr>
                                    <tr>
                                        <th>Category</th>
                                        <td>{{ $post->category->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tags</th>
                                        <td>
                                            @foreach ($post->tags as $tag)
                                                <span class="badge badge-primary">{{ $tag->name }}</span>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Author</th>
                                        <td>{{ $post->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Published at</th>
                                        <td>{{ $post->published_at->format('M d, Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Description</th>
                                        <td>{!! $post->description !!}</td>
                                    </tr>
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
