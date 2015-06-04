
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="toshe"><a href="{{ asset('')}}">toshe.net</a></div>

    <!-- main wrapper -->
    <div id="wrapper">

<!-- header -->
    <header>
        @include('includes.header')
    </header>
    <!-- search bar -->
    <div>
    @include('includes.searchbar')
    </div>

<!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.sidebar')
        </div>
    <div id="main" class="row">

    <!-- main content -->
    <div id="b-content" class="col-md-8">
        @yield('content')
    </div>

        </div>



<!-- footer -->
    <footer class="footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
