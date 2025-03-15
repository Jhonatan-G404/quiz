<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function showAnswers(Question $question)
    {
        $answers = $question->answers()->with('user')->get(); // Fetch answers with user details
        return view('admin.questions.answers', ['question' => $question, 'answers' => $answers]);
    }

    public function index(Request $request)
    {
        $search = $request->input('search');
        $questions = Question::where('title', 'like', "%{$search}%")
            ->paginate(5);
        return view('admin.dashboard', compact('questions', 'search'));
    }


    public function create()
    {
        return view('admin.questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Question::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Question created successfully!');
    }

    public function edit(Question $question)
    {
        return view('admin.questions.edit', ['question' => $question]);
    }

    public function update(Request $request, Question $question)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $question->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Question updated successfully!');
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Question deleted successfully!');
    }
}
