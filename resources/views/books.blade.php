<div>
    @foreach($books as $book)
        <h1>{{ $book->title }}</h1>
        <p>{{ $book->author }}</p>
        <hr>
    @endforeach
</div>