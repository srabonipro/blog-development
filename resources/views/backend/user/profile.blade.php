<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Your Profile</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle"
                                        src="{{ $user->image }}" alt="User profile picture">
                                </div>
                                <h3 class="profile-username text-center">{{ $user->name }}</h3>
                                <p class="text-info text-center mb-0">{{ $user->email }}</p>
                                <p class="text-danger text-center mt-0">{{ $user->username }}</p>
                                <hr>
                                <p class="text-muted text-center">{{ $user->about }}</p>
                                <div class="text-center">
                                    <a href="{{ route('admin.profile.setting') }}" class="btn btn-primary"><b>Update Profile</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
