@extends('layouts.viewpage')
@section('content')
    <div class="container">
        <div class="pull-right">
            <a href="{{ url('/addcategory') }}" class="btn btn-primary">Add Category</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table width="100%" class="table table-bordered">
                    <tr>
                        <th>Category Id</th>
                        <th>Category Name</th>
                        <th>Created At</th>
                    </tr>                    
                    @foreach($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection