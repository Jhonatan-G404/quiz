@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Edit Question</h1>
        <form action="{{ route('questions.update', $question->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $question->title }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <select class="form-control" id="description" name="description">
                    <option value="1" {{ $question->title == '1' ? 'selected' : '' }}>Paragraph</option>
                    <option value="2" {{ $question->title == '2' ? 'selected' : '' }}>Multiple</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection