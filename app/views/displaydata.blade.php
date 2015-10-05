<ul class="list-group">
    <h2>{{$message}}</h2>
    @foreach($users as $user)
        <li class="list-group-item">User is {{$user->fname}} is {{$user->lname}} with the email {{$user->email}} and password {{$user->password}}</li>
    @endforeach
</ul>
