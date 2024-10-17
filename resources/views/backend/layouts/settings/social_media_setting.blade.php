@extends('backend.app')

@section('title', 'Social Media Settings')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Social Media Settings</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Social Media Settings</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}


    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form method="POST" action="{{ route('media.update', $social_link->id) }}"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="twitter" class="form-label">Twitter:</label>
                                <input type="url" class="form-control @error('twitter') is-invalid @enderror"
                                    name="twitter" placeholder="Enter Twitter URL" id="twitter"
                                    value="{{ old('twitter', $social_link->twitter) }}">
                                @error('twitter')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="facebook" class="form-label">Facebook:</label>
                                <input type="url" class="form-control @error('facebook') is-invalid @enderror"
                                    name="facebook" placeholder="Enter Facebook URL" id="facebook"
                                    value="{{ old('facebook', $social_link->facebook) }}">
                                @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="youtube" class="form-label">Youtube:</label>
                                <input type="url" class="form-control @error('youtube') is-invalid @enderror"
                                    name="youtube" placeholder="Enter Youtube URL" id="youtube"
                                    value="{{ old('youtube', $social_link->youtube) }}">
                                @error('youtube')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="linkedin" class="form-label">Linkedin:</label>
                                <input type="url" class="form-control @error('linkedin') is-invalid @enderror"
                                    name="linkedin" placeholder="Enter Linkedin URL" id="linkedin"
                                    value="{{ old('linkedin', $social_link->linkedin) }}">
                                @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
