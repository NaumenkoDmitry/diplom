<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends AppBaseController
{

    public function store(Request $request)
    {
        $request->validate(Comment::$rules);
        $input = $request->all();
        if (!$input['uid']) {
            $input['uid'] = md5(time());
        }
        $comment = Comment::create($request->all());
        return $this->sendResponse($comment, "Кометарий успешно создан.");
    }

    public function show($uid, Request $request)
    {
        $comments = Comment::with(["comments"])->whereUid($uid)->get();
        return $this->sendResponse($comments, "Кометарий успешно создан.");
    }

}
