@extends('master')

@section('title')
My Admin page
@endsection
@section('main_contents')
<table class="table-auto w-full">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($packages as $package)
    <tr>
        <td>{{$package->id}}</td>
        <td>{{$package->title}}</td>
        <td>{{$package->description}}</td>
        <td>{{$package->price}}</td>
        <td>
            <a href="{{route('package.edit',['package'=>$package->id])}}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection
