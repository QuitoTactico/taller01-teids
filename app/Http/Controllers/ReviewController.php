<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Reviews - PIXEL PLAZA';
        $viewData['subtitle'] = 'List of reviews';
        $viewData['reviews'] = Review::all();

        return view('review.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        try {
            $review = Review::findOrFail($id);
        } catch (\Exception $e) {
            return redirect()->route('home.index');
        }
        $viewData['title'] = 'Review #'.$id.' - PIXEL PLAZA';
        $viewData['subtitle'] = 'Review #'.$id.' - Review information';
        $viewData['review'] = $review;

        return view('review.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create review';

        return view('review.create')->with('viewData', $viewData);
    }

    public function save(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'required|max:500',
            'game' => 'required',
            'client' => 'required',
        ]);
        dd($request->all());
        //here will be the code to call the model and save it to the database
    }
}
