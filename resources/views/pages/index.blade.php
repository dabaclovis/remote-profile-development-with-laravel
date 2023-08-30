@extends('layouts.main')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">welcome to my website</h1>
    <p class="lead">Subtitle</p>
    <hr class="my-4">
    <p>Content</p>
</div>
<table class="table table-light table-striped">
    <thead class="thead-light">
        <tr>
            <th class=" text-center">#</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Created_at</th>
        </tr>
    </thead>
    @if (count($users) > 0)
    @foreach ($users as $user)
    <tbody>
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->fname }}</td>
            <td>{{ $user->lname }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    </tbody>
    @endforeach

    @endif

</table>
    <div class=" d-flex justify-content-center">
        <p>{{ $users->links() }}</p>
    </div>
@endsection
