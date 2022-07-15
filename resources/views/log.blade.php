<h1>User page</h1>
@include('contact')


<h2>{{count($users)}}</h2>

@php
    $lname='soni'
@endphp

@if (count($users)==3)
    @foreach ($users as $item)
       <h3>name: {{$item.' '.$lname}}</h3> 
        <br>
    @endforeach
@endif


<script>
    var data = @json($users);
    console.warn(data);
    alert(data[2]);
</script>