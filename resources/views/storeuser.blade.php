<h1>add new member</h1>
@if(session('user'))
<h3>data saved for {{session('user')}}</h3>
@endif
<form action="storecontroller" method="POST">  
    @csrf
    <input type="text" name="name" id="name" placeholder="name"> <br><br>
    <input type="password" name="password" id="password" placeholder="password"> <br><br>
    <input type="text" name="email" id="email" placeholder="email"><br><br>
    <input type="submit" value="Add user">
</form>