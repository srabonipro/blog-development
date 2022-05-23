<x-app-layout>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Website General Settings</h1>
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
                            <form action="{{ route('general_settings.update', $general->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="url" name="facebook" value="{{ $general->facebook }}" class="form-control @error('facebook') is-invalid @enderror" id="facebook">
                                        @error('facebook')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">Instagram Link</label>
                                        <input type="url" name="instagram" value="{{ $general->instagram }}" class="form-control @error('instagram') is-invalid @enderror" id="instagram">
                                        @error('instagram')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter Link</label>
                                        <input type="url" name="twitter" value="{{ $general->twitter }}" class="form-control @error('twitter') is-invalid @enderror" id="twitter">
                                        @error('twitter')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="linkedin">Linkedin Link</label>
                                        <input type="url" name="linkedin" value="{{ $general->linkedin }}" class="form-control @error('linkedin') is-invalid @enderror" id="linkedin">
                                        @error('linkedin')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="youtube">Youtube Link</label>
                                        <input type="url" name="youtube" value="{{ $general->youtube }}" class="form-control @error('youtube') is-invalid @enderror" id="youtube">
                                        @error('youtube')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="copywrite">Copy Write Text</label>
                                        <textarea name="copywrite" rows="4" class="form-control @error('copywrite') is-invalid @enderror">{{ $general->copywrite }}</textarea>
                                        @error('copywrite')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea name="about" class="form-control @error('about') is-invalid @enderror" rows="5">{{ $general->about }}</textarea>
                                        @error('about')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>


</x-app-layout>
