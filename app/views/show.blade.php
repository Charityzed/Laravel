<ul>

    <h2>{{$message}}</h2>
    @foreach($users as $user)
        <li>{{$user->fullName}} is {{$user->email}} is {{$user->phoneNumber}} and {{$user->username}}</li>
        @endforeach


</ul>