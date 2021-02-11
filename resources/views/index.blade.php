@extends('master')

@section('title')
My Home page
@endsection
@section('meta')
<meta name="pagename" content="index page meta data">
@endsection
@section('main_contents')
@include('inc.top')
@include('inc.pricing')
@endsection
