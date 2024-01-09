@extends('layouts.auth')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">New Booking</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form autocomplete="off" method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <div class="row mb-4" hidden>
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Blog Date</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" name="blog_date" value="{{ $today }}" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Master Blog Tag </label>
                                            <div class="col-sm-9">
                                                <select class="form-control js-example-basic-single" name="master_blog_id">
                                                    <option value="" disabled selected hidden class="text-muted">
                                                        Select master blog</option>
                                                    @foreach ($blogmaster as $blogmasters)
                                                    <option value="{{ $blogmasters->id }}">{{ $blogmasters->master_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Title <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="title" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Slug URL <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug_url" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Quotes </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="quotes" placeholder="Enter here ">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Writer Name <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="writer_name" placeholder="Enter here ">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Writer Mail Address <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" name="writer_mail_address" placeholder="Enter here " value="blog@zworktechnology.com">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Writer Web Address <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="url" class="form-control" name="writer_web_address_address" placeholder="Enter here " value="https://zworktechnology.com">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Blog Image <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="blog_image" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Image Alt <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="image_alt" placeholder="Enter here " required>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Keywords <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="meta_keywords" placeholder="Enter here ">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Short Content <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control" name="short_content" placeholder="Enter here "></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">
                                                Blog Content <span style="color: red;">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea id="myeditorinstance" type="text" class="form-control" name="blog_content" placeholder="Enter here "></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save now</button>
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
