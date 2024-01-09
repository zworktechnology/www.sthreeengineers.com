@extends('layouts.auth')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Update Comment</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form autocomplete="off" method="POST" action="{{ route('blog.comment.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Master Blog </label>
                                            <div class="col-sm-9">
                                                <select class="form-control js-example-basic-single" name="blog_id" required>
                                                    <option value="" disabled selected hidden class="text-muted">
                                                        Select master blog</option>
                                                    @foreach ($blog as $blogs)
                                                    <option value="{{ $blogs->id }}" @if ($blogs->id === $data->blog_id) selected='selected' @endif>{{ $blogs->short_title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" value="{{ $data->name }}" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Email Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="email" value="{{ $data->email }}" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Phone Number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="phone_number" value="{{ $data->phone_number }}" placeholder="Enter here ">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Massage</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control" name="message" placeholder="Enter here " required>{!! $data->message !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
