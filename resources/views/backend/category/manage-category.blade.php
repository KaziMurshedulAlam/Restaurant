@extends('backend.master')

@section('content')

    <div class="container">
        @if(Session::get('message'))
            <h4 class="alert alert-success">{{ Session::get('message') }}</h4>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr style="text-align: center;">
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($show_category as $show)
                        <tr style="text-align: center;">
                            <th>{{$i++}}</th>
                            <td>{{$show->category_name}}</td>
                            <td>{{substr($show->description,0,50)}}......</td>
                            <td>{{$show->status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td width="25%">
                                <a href="#" class="btn btn-sm btn-success">
                                    Published
                                </a>
                                <a href="#" class="btn btn-sm btn-primary">
                                    Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    Delete
                                </a>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @endsection