
               <div id="header-right">
                   <ul>
                       <li><a href=""></a></li>
                       <li><a href="#" onclick="showHtml()"><img src="{{asset('img/html_icon.png')}}"></a></li>
                       <li><a href=""><img src="{{asset('img/css_icon.png')}}"></a></li>
                       <li><a href=""><img src="{{asset('img/js_icon.png')}}"></a></li>
                       <li><a href=""><img src="{{asset('img/php_icon.png')}}"></a></li>
                       <li><a href=""><img src="{{asset('img/java_icon.png')}}"></a></li>
                       <li><a href=""><img src="{{asset('img/andr_icon.png')}}"></a></li>
                       <li><a href="/">Home</a></li>
                       <li><a href="/article">Статии</a></li>
                       <li><a href="/projects">Проекти</a></li>
                       <li><a href="/quest">Quest</a></li>
                       <li><a href="/contact">Контакти</a></li>
                       <li><a href="#" onclick="showButtonExam()">Държавен изпит</a></li>
                       <li><a href="/about">CV</a></li>
                       <li><a href="#" onclick="showSearch()" ><img  src="{{ asset('img/search_icon.png')}}"></a></li>
                      
                       </ul>
                       <ul>
                       @if(Auth::guest())
                       <li><a href="#" onclick="showLogin()">Login</a></li>
                       <li><a href="#" onclick="showRegistar()">Register</a></li>

                       @elseif(Auth::user()->group == 2)
                       <li><a href="/" >{{ Auth::user()->name }}</a></li>
                       <li><a href="/admin">Admin panel</a></li>                       
                       <li><a href="/auth/logout">Logout</a></li>
                       @else
                       <li><a href="/" >{{ Auth::user()->name }}</a></li>
                       <li><a href="/auth/logout">Logout</a></li>
                       @endif
                      </ul>

                   </div>
               <div class="clearfix" />
           
           
