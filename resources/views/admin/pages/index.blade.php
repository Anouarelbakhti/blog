@extends('layouts.admin')
@section('content')

    <a href="{{ route('admin.pages.create') }}" class="btn btn-success float-right ">Create</a>
    <h1 class="">Page overview</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Active</th>
            <th>Created</th>
            <th>Options</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

        @foreach($pages as $page)
            <tr>
                <td>{{ $page->title }}</td>
                <td>{{ $page->slug }}</td>
                <td>{{ ($page->active) ? 'Yes' : 'No'}}</td>
                <td>{{ $page->created_at->format('d-m-v')}}</td>
                <td>
                    <a href="{{ route('admin.pages.edit',['id' =>$page->id])}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <a href="{{ route('admin.pages.destroy',['id' =>$page->id])}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@stop
