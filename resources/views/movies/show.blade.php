@extends('layouts.app')

@section('content')
<div class="container">
    <h1>View Movie</h1>

    <table class="table table-hover">
        <tbody>
            <tr>
                <td><strong> Title </strong> </td>
                <td>{{ $movie->title }}</td>
</tr>
<td><strong> Description </strong> </td>
<td>{{ $movie->description }}</td>
</tr>
<tr>
<td><strong> Category </strong> </td>
                <td>{{ $movie->category }}</td>
</tr>
</tbody>
</body>
</table>
</div>
@endsection