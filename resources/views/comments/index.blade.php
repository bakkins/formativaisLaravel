index.blade.php file content

{{-- display a list of comments in laravel blade view --}}

<ul>

</ul>

{{-- create a link back to create form --}}

@foreach ($comments as $comment)
    <h1>{{ $comment->id }}</h1>
    <p>{{ $comment -> content}}</p><br>
@endforeach