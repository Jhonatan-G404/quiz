@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-4">Answers for: {{ $question->title }}</h1>
        <p>{{ $question->description }}</p>

        <table class="table">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Answer</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($answers as $answer)
                    <tr>
                        <td>{{ $answer->user->name }}</td>
                        <td>{{ $answer->answer }}</td>
                        <td>{{ $answer->created_at->format('d M Y, H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back to Questions</a>
    </div>
@endsection