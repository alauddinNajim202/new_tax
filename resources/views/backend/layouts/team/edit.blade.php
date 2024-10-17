@extends('backend.app')
@section('title', 'Teams')
@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">Teams</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Teams</a></li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <h3 class="mb-3">Edit Team</h3>
                    <form method="post" action="{{ route('admin.team.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Enter Name" id="name" value="{{ old('name', $data->name) }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="designation" class="form-label">Designation:</label>
                            <input class="form-control @error('designation') is-invalid @enderror"
                                placeholder="Enter Designation" id="designation" name="designation"
                                value="{{ old('designation', $data->designation) }}">
                            @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image" class="form-label">Image:</label>
                            <input type="file" class="dropify  @error('image') is-invalid @enderror" id="image"
                                name="image"
                                data-default-file="@isset($data){{ asset($data->image_url) }}@endisset">
                            @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <a href="{{ route('admin.team.index') }}" class="btn btn-danger me-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
