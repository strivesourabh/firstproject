@include('layouts/app')
<h1>You can not access our web</h1>
<table class="border">
    <tr>
    <td>name</td>
    
    <td>email</td>
    <td>date</td>
    </tr>
   @foreach ($users as $user)
    <tr>
    <td>{{ $user->name }}</td>
    
    <td>{{ $user->email }}</td>
    <td>{{ $user->created_at }}</td>
    </tr>
    @endforeach
</table>