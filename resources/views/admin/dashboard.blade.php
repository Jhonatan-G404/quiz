@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mt-4">Admin Dashboard - Manage Questions</h3>
    <div class="jumbotron mt-4">
        <div class="d-md-flex justify-content-md-between mb-4">
            <form action="{{ route('admin.dashboard') }}" method="GET">
                <input type="text" name="search" placeholder="Cari berdasarkan judul..."
                    value="{{ request('search') }}"
                    class="border px-3 py-2 rounded-lg">
                <button type="submit" class="bg-primary px-4 py-2 text-white rounded-lg">
                    Cari
                </button>
            </form>
            <div>
                <a href="{{ route('questions.create') }}" class="btn btn-primary mt-3 mt-md-0">Add New Question</a>
                <a href="{{ route('reports.answers') }}" class="btn btn-info mt-3 mt-md-0">View Answer Reports</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
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
                            <div class="d-flex">
                                <a href="{{ route('questions.answers', $question->id) }}" class="btn btn-info btn-sm mr-2"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-warning btn-sm mr-2"><i class="fa-solid fa-square-pen"></i></a>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4 align-items-center">
            {{ $questions->onEachSide(2)->links() }}
        </div>
    </div>
</div>
@endsection