@extends('backend.app')

@section('title', 'Google Settings')

@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Google Settings</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                <li class="breadcrumb-item active" aria-current="page">Google Settings</li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}


    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form method="post" action="{{ route('google.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row mb-4">
                            <label for="mail_host" class="col-md-3 form-label">GOOGLE CLIENT ID</label>
                            <div class="col-md-9">
                                <input class="form-control @error('GOOGLE_CLIENT_ID') is-invalid @enderror"
                                    id="GOOGLE_CLIENT_ID" name="GOOGLE_CLIENT_ID" placeholder="Enter your GOOGLE CLIENT ID"
                                    type="text" value="{{ env('GOOGLE_CLIENT_ID') }}">
                                @error('GOOGLE_CLIENT_ID')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="mail_password" class="col-md-3 form-label">GOOGLE CLIENT SECRET</label>
                            <div class="col-md-9">
                                <input class="form-control @error('GOOGLE_CLIENT_SECRET') is-invalid @enderror"
                                    id="GOOGLE_CLIENT_SECRET" name="GOOGLE_CLIENT_SECRET"
                                    placeholder="Enter your GOOGLE CLIENT SECRET" type="text"
                                    value="{{ env('GOOGLE_CLIENT_SECRET') }}">
                                @error('GOOGLE_CLIENT_SECRET')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="mail_password" class="col-md-3 form-label">GOOGLE REDIRECT URI</label>
                            <div class="col-md-9">
                                <input class="form-control @error('GOOGLE_REDIRECT_URI') is-invalid @enderror"
                                    id="GOOGLE_REDIRECT_URI" name="GOOGLE_REDIRECT_URI"
                                    placeholder="Enter your GOOGLE REDIRECT URI" type="text"
                                    value="{{ env('GOOGLE_REDIRECT_URI') }}">
                                @error('GOOGLE_REDIRECT_URI')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
