@extends('backend.master')
@section('content')

    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <h2>Category Form</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ url('/save/category') }}" method="POST" id="category_form">
                        @csrf
                        <div class="form-group">
                            <label>Category Name : </label>
                            <input type="text" required name="category_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description : </label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Status : </label>
                            <select class="form-control" name="status">
                                <option>---Select Category---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                        <input type="submit" name="btn" class="btn btn-sm btn-success" value="SubmiT">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection