<ol>
    <h2>{{$message}}</h2>
    @foreach($users as $user)
        <li>{{$user->fullName}} is {{$user->fname}} is {{$user->lname}} and {{$user->emailhom}}</li>
    @endforeach
</ol>
