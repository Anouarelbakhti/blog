@extends('layouts.default')
@section('title', $page->title)
@section('content')
    {{ $page->title }}
    {{ $page->slug }}<br>
    {{ $page->body }}
@stop
