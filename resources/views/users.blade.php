<x-header componentName="user"/>
{{URL::full()}}
<br>
{{URL::previous()}}
<br>
{{URL::current()}}
<h1>user with component</h1>
<a href="{{url::to('/contact')}}">contact</a>
<a href="{{url::previous('/contact')}}">previous</a>


<form action="{{url::to('/contact')}}" method="post">
    <input type="text">
    <input type="submit" value="submit">
</form>
