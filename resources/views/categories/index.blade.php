@extends('layouts.app')

@section('content')
    <div class="card card-default">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Name</th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <a style="color: white;" class="btn btn-danger float-right mr-3 remove-record" data-toggle="modal" data-url="{{route('categories.destroy', $category)}}" data-id="{{$category}}" data-target="#custom-width-modal">Delete</a>
                                <a href="{{route('categories.edit', $category)}}" class="btn btn-primary float-right mr-3">Edit</a>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <a href="{{route('categories.create')}}" class="btn btn-success mt-2">Add Category</a>

<!-- Delete Model -->
<form action="{{route('categories.destroy', $category)}}" method="POST" class="remove-record-model">
    {{method_field('DELETE')}}
    @csrf
    <div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Delete Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>You Sure To Delete This Category?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection('content')