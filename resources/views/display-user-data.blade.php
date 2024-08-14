<h2>{{$result->name}}</h2>
<h2>{{$result->city}}</h2>
<h2>{{$result->email}}</h2>
<h2>{{$result->gender}}</h2>
<h2>Skills</h2>
<ul>
    @foreach($result->skill as $skill)
    <li>
        {{$skill}}
    </li>
    @endforeach
</ul>