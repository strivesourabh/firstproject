@include('layouts/app')
<h1 class="text-center">User Login</h1>
<form action="form" method="POST">
    @csrf
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>