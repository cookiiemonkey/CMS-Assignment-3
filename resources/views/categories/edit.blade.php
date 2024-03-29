@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Edit Categories</div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item text-danger">
                                {{$error}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{route('categories.update', $category)}}" method="POST">
                {{method_field('PUT')}}
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="name" value="{{$category->name}}">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Add Category</button>
                </div>
            </form>

        </div>
    </div>
@endsection('content')