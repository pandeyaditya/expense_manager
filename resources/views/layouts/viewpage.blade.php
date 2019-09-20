<html>
    <head>
        <title>
            Expense Manager
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/addcategory') }}">Add Category</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/addexpense') }}">Add Expense</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/allexpenses') }}">All Expenses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/allcategories') }}">All Categories</a>
        </li>
    </ul>

    </nav>
    <div class="row" style="height:100px">
    <div class="col"></div>
    <div class="col"></div>
    <div class="col"></div>
    </div>


       @yield('content')
    </body>
</html>