<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;

class ReportController extends Controller
{
    public function index()
    {
        // Fetch questions with answer counts
        $questions = Question::withCount('answers')->get();

        // Prepare data for charts
        $questionTitles = $questions->pluck('title');
        $answerCounts = $questions->pluck('answers_count');

        return view('admin.reports.answers', [
            'questionTitles' => $questionTitles,
            'answerCounts' => $answerCounts,
        ]);
    }
}
