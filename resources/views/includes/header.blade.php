
               <div id="header-right">
                   <ul>
                       <li><a href=""></a></li>
                       <li><a href="#" onclick="showButtonExam()">Държавен изпит</a></li>
                       </ul>
                       <ul class="login-reg">
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
           
           
