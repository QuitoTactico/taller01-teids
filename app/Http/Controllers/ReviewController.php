<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public static $reviews = [
        ["id" => "1", "rating" => 5, "comment" => "Great game!", "date" => "2021-09-01", "user" => "John", "game" => "Super Mario"],
        ["id" => "2", "rating" => 4, "comment" => "Good game!", "date" => "2021-09-02", "user" => "Jane", "game" => "The Legend of Zelda"],
        ["id" => "3", "rating" => 3, "comment" => "Average game.", "date" => "2021-09-03", "user" => "Bob", "game" => "Minecraft"],
        ["id" => "4", "rating" => 2, "comment" => "Not a fan.", "date" => "2021-09-04", "user" => "Alice", "game" => "Fortnite"]
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData["title"] = "Reviews - Online Store";
        $viewData["subtitle"] = "List of reviews";
        $viewData["reviews"] = ReviewController::$reviews;
        return view('review.index')->with("viewData", $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $review = ReviewController::$reviews[$id - 1];
        $viewData["title"] = "Review #" . $id . " - Online Store";
        $viewData["subtitle"] = "Review #" . $id . " - Review information";
        $viewData["review"] = $review;
        return view('review.show')->with("viewData", $viewData);
    }
}
