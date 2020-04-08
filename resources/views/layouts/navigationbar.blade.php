<div class="header">
    <h1 class="header_name">Cinema Management System</h1>
    <div class="navbar">
    <li class="@if(Request::is('/')) {{ 'active' }} @endif"><a href="{{url('/')}}">Home</a></li>
    <li class="@if(Request::is('aboutproject/main')) {{ 'active' }} @endif"><a href="{{url('aboutproject/main')}}">About Project</a></li>
    <li class="@if(Request::is('*/abc*')) {{ 'active' }} @endif"><a href="#contact">All Movies</a></li>
    <li class="@if(Request::is('*/abc*')) {{ 'active' }} @endif"><a href="#contact">Book Ticket</a></li>
    <li class="@if(Request::is('*/abc*')) {{ 'active' }} @endif"><a href="#contact">Register</a></li>
    <li class="@if(Request::is('*/abc*')) {{ 'active' }} @endif"><a href="#contact">Login</a></li>
    <li class="@if(Request::is('*/abc*')) {{ 'active' }} @endif"><a href="#contact">Contact Us</a></li>
    </div>
</div>