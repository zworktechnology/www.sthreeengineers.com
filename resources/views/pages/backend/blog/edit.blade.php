@extends('layouts.auth')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Update Blog</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form autocomplete="off" method="POST" action="{{ route('blog.update', ['id' => $data->id]) }}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Blog Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="blog_date" value="{{ $data->blog_date }}" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Master Blog Tag </label>
                                            <div class="col-sm-9">
                                                <select class="form-control js-example-basic-single" name="master_blog_id" required>
                                                    <option value="" disabled selected hidden class="text-muted">
                                                        Select master blog</option>
                                                    @foreach ($blogmaster as $blogmasters)
                                                    <option value="{{ $blogmasters->id }}" @if ($blogmasters->id === $data->master_blog_id) selected='selected' @endif>{{ $blogmasters->master_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" placeholder="Enter here " required value="{{ $data->title }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Slug URL</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug_url" placeholder="Enter here " required value="{{ $data->slug_url }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Quotes</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="quotes" placeholder="Enter here " required value="{{ $data->quotes }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Writer Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="writer_name" placeholder="Enter here " value="{{ $data->writer_name }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Writer Mail Address</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="writer_mail_address" placeholder="Enter here " value="{{ $data->writer_mail_address }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Writer Web Address</label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" name="writer_web_address_address" placeholder="Enter here " value="{{ $data->writer_web_address_address }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Old Blog Image</label>
                                            <div class="col-sm-9">
                                                <img class="rounded me-2" alt="200x200" width="200" src="{{ asset('assets/backend/blog/blog_image/' . $data->blog_image) }}" data-holder-rendered="true">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Blog Image</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="blog_image" placeholder="Enter here " value="{{ $data->blog_image }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Image Alt</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="image_alt" placeholder="Enter here " required value="{{ $data->image_alt }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Keywords</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="meta_keywords" placeholder="Enter here " value="{{ $data->meta_keywords }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Short Content</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control" name="short_content" placeholder="Enter here ">{!! $data->short_content !!}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Blog Content</label>
                                            <div class="col-sm-9">
                                                <textarea id="myeditorinstance" type="text" class="form-control" name="blog_content" placeholder="Enter here ">{!! $data->blog_content !!}</textarea>
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
