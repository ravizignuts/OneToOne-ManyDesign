@extends('layout.master')
@section('Content')
    <legend>Author Information</legend>
    <form action="addauthor" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Author Name">
        </div>
        <button type="submit" name='submit' class="btn btn-primary">Submit</button>
    </form><br><br>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>Author</th>
                        <th>ADD BOOK</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr>
                            <td scope="row">{{ $author->id }}</td>
                            <td>{{ $author->name }}</td>
                            <td><a href="/getbook/{{ $author->id }}" class="btn btn-success">ADD BOOK</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col">
            <table class="table table-striped table-inverse table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>BOOK TITLE</th>
                        <th>AUTHOR ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td scope="row">{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
