{{--todo 25--}}
<!-- edit.blade.php -->

@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Book
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <form method="post" action="{{ route('books.update', $book->id) }}">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="name">Book Name:</label>
                    <input type="text" class="form-control" name="book_name" value="{{$book->book_name}}"/>
                </div>
                <div class="form-group">
                    <label for="price">Book ISBN Number :</label>
                    <input type="text" class="form-control" name="isbn_no" value="{{$book->isbn_no}}"/>
                </div>
                <div class="form-group">
                    <label for="quantity">Book Price :</label>
                    <input type="text" class="form-control" name="book_price" value="{{$book->book_price}}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update Book</button>
            </form>
        </div>
    </div>
@endsection
{{--todo 26 kunjungi http://localhost/crud2/public/books/1/edit--}}
{{--todo 27 http://localhost/crud2/public/books--}}
{{--todo 28 test delete update data--}}
{{--todo 29 php artisan make:auth--}}
