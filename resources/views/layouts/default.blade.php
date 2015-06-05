
<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
    <div class="toshe"><a href="{{ asset('')}}">Final Exam</a>
    <div id="wrapper">

    <header>
        @include('includes.header')
    </header>

        <div>
        @include('includes.searchbar')        
        </div>
        
          <div>
        @include('includes.loginform')        
        </div>
           <div>
          @include('includes.registarform')
           </div>
          <div>
           @include('includes.buttonexam')
           </div>

<nav>      
        <div id="sidebar" class="col-md-4">
            <!--@include('includes.sidebar')-->
        </div>
 </nav>  


 <main>
         <div id="mainsec">
         @yield('content')
      </div>
</main>

        
        
        <footer class="footer">
        @include('includes.footer')
    </footer>

</div>
  </div>
</body>
</html>
