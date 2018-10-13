@if(Auth::guard('web')->check())
    you are User
@else
    You are not logged in User
@endif
<br/>
@if(Auth::guard('admin')->check())
    you are Admin
@else
    You are not logged in Admin
@endif
