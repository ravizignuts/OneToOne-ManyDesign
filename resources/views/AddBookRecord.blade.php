@extends('layout.master')
@section('Content')
    <form action="/addbook" method="post">
        @csrf
        <legend>Book Information</legend>
        <div class="form-group">
          <label for="author_id">Author ID</label>
          <input type="text" name="author_id" id="author_id" class="form-control" value="{{ $authors->id }}" readonly>
        </div>


        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Book Title">
        </div>
        <button type="submit" name='submit' value="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
