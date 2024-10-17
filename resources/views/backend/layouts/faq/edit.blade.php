@extends('backend.app')
@section('title', 'FAQs')
@section('content')
    {{-- PAGE-HEADER --}}
    <div class="page-header">
        <div>
            <h1 class="page-title">FAQs</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">FAQ</a></li>
            </ol>
        </div>
    </div>
    {{-- PAGE-HEADER --}}

    <div class="row">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <h3 class="mb-3">Edit Faq</h3>
                    <form method="post" action="{{ route('admin.faq.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="question" class="form-label">Question:</label>
                            <input class="form-control @error('question') is-invalid @enderror" id="question"
                                name="question" rows="7" value="{{ old('question', $data->question) }}">
                            @error('question')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="answer" class="form-label">Answer:</label>
                            <input class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer"
                                rows="7" value="{{ old('answer', $data->answer) }}">
                            @error('answer')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <a href="{{ route('admin.faq.index') }}" class="btn btn-danger me-2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
