@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Admin Dashboard - Manage Questions</h1>
    <a href="{{ route('questions.create') }}" class="btn mt-3 btn-primary mb-3">Add New Question</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->title }}</td>
                <td>
                    @if ($question->description == '1')
                    <span class="badge badge-warning">Paragraph</span>
                    @elseif ($question->description == '2')
                    <span class="badge badge-primary">Multiple</span>
                    @else
                    <span class="badge badge-danger">Belum Di Setting</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('questions.answers', $question->id) }}" class="btn btn-info btn-sm">View
                        Answers</a>
                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('reports.answers') }}" class="btn btn-info mb-5">View Answer Reports</a>

</div>
@endsection