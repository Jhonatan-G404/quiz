@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-3 mb-3 text-2xl">Answer Questions</h1>
        <div class="row">
            @foreach($questions as $question)
                @php
                    $userAnswer = $question->answers->firstWhere('user_id', auth()->id());
                @endphp
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body border-t-4 border-blue-400">
                            <h5 class="card-title font-medium">{{ $loop->iteration }}. {{ $question->title }}</h5>
                            <form
                                action="{{ $userAnswer ? route('answers.update', $userAnswer->id) : route('answers.store', $question->id) }}"
                                method="post">
                                @csrf
                                @if($userAnswer) @method('PATCH') @endif
                                @if ($question->description == '1')
                                    <div class="form-group">
                                        <textarea class="form-control" name="answer"
                                            rows="3">{{ $userAnswer->answer ?? '' }}</textarea>
                                    </div>
                                @elseif ($question->description == '2')
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            value="Rendah" {{ $userAnswer && $userAnswer->answer == 'Rendah' ? 'checked' : '' }}>
                                        <label class="form-check-label">Rendah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            value="Sedang" {{ $userAnswer && $userAnswer->answer == 'Sedang' ? 'checked' : '' }}>
                                        <label class="form-check-label">Sedang</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="answer"
                                            value="Tinggi" {{ $userAnswer && $userAnswer->answer == 'Tinggi' ? 'checked' : '' }}>
                                        <label class="form-check-label">Tinggi</label>
                                    </div>
                                @else
                                    <div class="alert alert-danger" role="alert">
                                        Jawaban Belum di setting
                                    </div>
                                @endif
                                <button type="submit"
                                    class="btn {{ $userAnswer ? 'btn-success' : 'btn-info' }} mt-3 {{ $question->description == null ? 'd-none' : 'd-block' }}">
                                    {{ $userAnswer ? 'Update Answer' : 'Submit Answer' }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection