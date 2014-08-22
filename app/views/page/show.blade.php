@extends('layout')

@section('content')

@foreach($page as $page)
{{ $page->title}}
@endforeach
@stop