<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">About Page Settings</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <form action="{{ route('about_settings.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card card-primary">
                                <div class="card-header">Hero Section</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ $about->description }}</textarea>
                                        @error('description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="old_banner" value="{{ $about->banner }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-8">
                                                <label for="image">Background Banner</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="banner" name="banner">
                                                    <label class="custom-file-label" for="banner">Choose Image</label>
                                                </div>
                                            </div>
                                            <div class="col-4 text-right">
                                                <div style="max-width:100px; max-height:100px; overflow:hidden; margin-left:auto;">
                                                    <img src="{{ asset($about->banner) }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">Team Section</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="team_title">Title</label>
                                        <input type="text" name="team_title" value="{{ $about->team_title }}" class="form-control @error('team_title') is-invalid @enderror" id="team_title">
                                        @error('team_title')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="team_description">Description</label>
                                        <textarea name="team_description" class="form-control @error('team_description') is-invalid @enderror" rows="3">{{ $about->team_description }}</textarea>
                                        @error('team_description')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">First Section</div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="title1">Title</label>
                                        <input type="text" name="title1" value="{{ $about->title1 }}" class="form-control @error('title1') is-invalid @enderror" id="title1">
                                        @error('title1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description1">Description</label>
                                        <textarea name="description1" class="form-control @error('description1') is-invalid @enderror" rows="3">{{ $about->description1 }}</textarea>
                                        @error('description1')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <input type="hidden" name="old_image1" value="{{ $about->image1 }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-8">
                                                <label for="image1">Side Banner</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image1" name="image1">
                                                    <label class="custom-file-label" for="image1">Choose Image</label>
                                                </div>
                                            </div>
                                            <div class="col-4 text-right">
                                                <div style="max-width:100px; max-height:100px; overflow:hidden; margin-left:auto;">
                                                    <img src="{{ asset($about->image1) }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">Last Section</div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="title2">Title</label>
                                        <input type="text" name="title2" value="{{ $about->title2 }}" class="form-control @error('title2') is-invalid @enderror" id="title2">
                                        @error('title2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description2">Description</label>
                                        <textarea name="description2" class="form-control @error('description2') is-invalid @enderror" rows="3">{{ $about->description2 }}</textarea>
                                        @error('description2')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <input type="hidden" name="old_image2" value="{{ $about->image2 }}">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-8">
                                                <label for="image">Side Banner</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image2" name="image2">
                                                    <label class="custom-file-label" for="image2">Choose Image</label>
                                                </div>
                                            </div>
                                            <div class="col-4 text-right">
                                                <div style="max-width:100px; max-height:100px; overflow:hidden; margin-left:auto;">
                                                    <img src="{{ asset($about->image2) }}" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mb-4">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
