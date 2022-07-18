<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="name" id="name" placeholder="Enter User Name">
    <input type="password" name="password" id="password" placeholder="Enter User Password">
    <input type="submit" value="login">
</form>