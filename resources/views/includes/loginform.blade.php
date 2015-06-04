<div id="loginform">
    <form id="tfnewsearch" role="form" action="/auth/login" method="POST" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="tftextinput" type="email" name="email" value="{{ old('email') }}" >
        <input type="password" name="password" class="tftextinput" >
        <input class="tfbutton" type="submit" value="login" >
    </form>
</div>