@extends('layouts.addpage')
@section('content')
    <body>
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            <h5>Add category</h5>  
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif     

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="post" action="{{ url('/category/add') }}">
                <label>Name</label>
                <input class="form-control" type="text" name="category_name" id="category_name"><br/>

                {{ csrf_field() }}
                <input class="btn btn-success" type="submit" name="add_category" id="add_category" value="Add Category">
            </form>
            </div>
            </div>
        </div>
@endsection