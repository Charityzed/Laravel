<ul class="list-group">
    <h2>{{$message}}</h2>
    @foreach($users as $user)
        <li class="list-group-item">{{$user->fullName}} is {{$user->fname}} is {{$user->lname}} and {{$user->emailhom}}</li>
    @endforeach
</ul>
