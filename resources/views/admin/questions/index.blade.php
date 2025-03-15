@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Manage Questions</h1>
        <a href="{{ route('questions.create') }}" class="btn btn-primary mb-3">Add New Question</a>
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
                        <td>{{ $question->description }}</td>
                        <td>
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
    </div>
@endsection