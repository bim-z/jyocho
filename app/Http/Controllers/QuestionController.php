<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("question.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("question.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $title = $request->input("title");

      $question = Question::create(['title' => $title,"user_id" => Auth::id()]);

      return redirect("dashboard");
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
