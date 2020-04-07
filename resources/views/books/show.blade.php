@extends('layouts.book')
@section('book-content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Parents List </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2> Show Book</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $book->title }}
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $book->description }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection