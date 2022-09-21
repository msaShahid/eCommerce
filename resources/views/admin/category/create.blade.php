@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Category
                    <a href="{{ url('admin/category') }}" class="btn btn-dark btn-sm float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf 
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Category Name" />
                            @error('name') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter Category Slug">
                            @error('slug') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Enter Category Description...." rows="3"></textarea>
                            @error('description') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Upload Category Image">
                            @error('image') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Status</label></br>
                            <input type="checkbox" name="status" />
                            <!-- @error('status') <samll class="text-danger">{{ $message }}</samll> @enderror -->
                        </div>
                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Meta title</label>
                            <input type="text" name="meta_title" class="form-control" placeholder="Enter Category Meta Title">
                            @error('meta_title') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">Meta Keyword</label>
                            <input type="text" name="meta_keyword" class="form-control" placeholder="Enter Category Meta Keyword">
                            @error('meta_keyword') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="">Meta Description</label>
                            <textarea type="text" name="meta_description" class="form-control" rows="3" placeholder="Enter Category Meta Description"></textarea>
                            @error('meta_description') <samll class="text-danger">{{ $message }}</samll> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection