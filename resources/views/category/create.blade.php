@extends('layout.base')

@section('title','All Categories')

@section('content')
    <h1 class="text-center text-info my-5">Create Category</h1>

    <div class="d-flex justify-content-center">
        <form action="{{route('cats.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <x-input name="name" type="text"/>
            <x-input name="image" type="file"/>
            <button type="submit" class="btn btn-primary btn-sm float-start">Create</button>
        </form>
    </div>
@stop
