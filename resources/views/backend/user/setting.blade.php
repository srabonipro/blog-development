<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Profile</h1>
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
                                <h3 class="card-title">Edit Your Profile</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{ $user->name }}" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter name">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter email">
                                                @error('email')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" value="{{ $user->username }}" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter username">
                                                @error('username')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label> <small class="text-info">(Enter password to change)</small>
                                            <input type="text" name="password" value="" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter password">
                                                @error('password')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-8">
                                                    <label for="image">Image</label>
                                                    <div class="custom-file">
                                                        <input type="hidden" name="old_image" value="{{ $user->image }}">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Choose Image</label>
                                                    </div>
                                                </div>
                                                <div class="col-4 text-right">
                                                    <div style="max-width:100px; max-height:100px; overflow:hidden; margin-left:auto;">
                                                        <img src="{{ asset($user->image) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="about">About</label>
                                            <textarea id="about" name="about" class="form-control @error('about') is-invalid @enderror" rows="5" placeholder="Enter user details">{{ $user->about }}</textarea>
                                            @error('about')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="d-flex justify-content-between">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
