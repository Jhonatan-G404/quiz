@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4 mb-4">Add New Question</h1>
        <form action="{{ route('questions.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <select class="form-control" id="description" name="description">
                    <option value="1">Paragraph</option>
                    <option value="2">Multiple</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection