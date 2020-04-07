@extends('layouts.book')


@section('book-content')
    <!-- [ Layout container ] Start -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Parents List </h5>
            </div>
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <a class="btn btn-success btn-sm mb-3 btn-round" href="{{ route('books.create') }}"> Create New Book</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="report-table" class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->description }}</td>
                                <td>
                                    <form action="{{ route('books.destroy',$book->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Layout container ] End -->
@endsection