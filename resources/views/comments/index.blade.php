<a href="/comments/create">Create a new comment</a>

@foreach ($comments as $comment)
    <h1>{{ $comment->id }}</h1>
    <p>{{ $comment -> content}}</p><br>
@endforeach