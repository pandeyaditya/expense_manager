@extends('layouts.addpage')
@section('content')
        <div class="container">
            <div class="row">
            <div class="col-md-12">
            <h5>Add expense</h5>  
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
            <form method="post" action="{{ url('/expense/add') }}">
                <label>Name</label>
                <input class="form-control" type="text" name="expense_name" id="expense_name"><br/>

                <label>Category</label>
                <select class="form-control" name="expense_category">
                    @foreach($categories as $category)
                        <option value="{{$category->category_name}}">{{ $category->category_name }}</option>
                    @endforeach
                </select><br/>

                <label>Amount</label>
                <input  class="form-control" type="text" name="expense_amount" id="expense_amount"><br/>

                {{ csrf_field() }}
                <input class="btn btn-success" type="submit" name="add_expense" id="add_expense" value="Add Expense">
            </form>
            </div>
            </div>
        </div>
@endsection    