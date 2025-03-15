<?php


namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('user.questions.index', ['questions' => $questions]);
    }

    public function store(Request $request, Question $question)
    {
        $request->validate(['answer' => 'required|string']);

        Answer::updateOrCreate(
            ['question_id' => $question->id, 'user_id' => auth()->id()],
            [
                'answer' => $request->input('answer'),
            ]
        );

        return redirect()->back()->with('success', 'Your answer has been saved!');
    }

    public function update(Request $request, Answer $answer)
    {
        // Ensure the authenticated user is the owner of the answer
        if (auth()->id() !== $answer->user_id) {
            abort(403, 'Unauthorized');
        }

        // Validate the request
        $request->validate([
            'answer' => 'required|string',
        ]);

        // Update the answer
        $answer->update([
            'answer' => $request->input('answer'),
        ]);

        return redirect()->back()->with('success', 'Your answer has been updated!');
    }

}
