@extends('master')

@section('title')
My Admin page
@endsection
@section('main_contents')
<form action="{{route('package.store')}}" method="POST">
    @csrf
    <div>
        <label for="">Package Title</label>
        <input type="text" name="title" class="border-2">
    </div>
    <div>
        <label for="">Description</label>
        {{-- <textarea name="description" id="" cols="30" rows="10"></textarea> --}}
        <input type="text" name="description" class="border-2">
    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name="price" class="border-2">
    </div>
    <input type="submit" value=" Submit Form">
</form>
@endsection
