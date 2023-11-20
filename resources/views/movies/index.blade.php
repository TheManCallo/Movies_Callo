@extends('layouts.app')

@section('content')
<div class="container">
    <h1>All Books</h1>
    <table class="table">
        <thread>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
</tr>
</thread>
<tbody>
    @foreach ($movies as $movie)
    <tr>
    <td><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></td>
        <td>{{ $movie->description }}</td>
        <td>
            @if ($movie->movie_image)
            <img src="{{ $movie->movie_image }}"
            alt="{{ $movie->title}}"  width="100">
            @else
             no Image
             @endif
</td>
</tr>
@endforeach
</tbody>
</table>
</div>        

