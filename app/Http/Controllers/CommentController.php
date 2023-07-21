<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CommentRequest $request)
    {
        $validated = $request->validated();

        Comment::create([
            'province_id' => (int) $validated['province_id'],
            'user_name' => str($validated['user_name'])->title(),
            'comment' => $validated['comment'],
        ]);

        return redirect()->back()->withSuccess('Berhasil berkomentar');
    }

    public function storeReply(Request $request)
    {
        if ($request->ajax()) {
            $rules = [
                'user_name_reply'  => ['required', 'string', 'min:3'],
                'province_id'  => ['required', 'numeric'],
                'comment_id'  => ['required', 'numeric'],
                'reply_txt'  => ['required', 'string'],
            ];

            $messages = [
                'required'  => ':attribute tidak boleh kosong',
                'string'    => ':attribute harus bertipe string',
            ];

            $customAttrs = [
                'user_name_reply'   => 'Nama',
                'province_id'   => 'Provinsi',
                'comment_id'   => 'Komentar Utama',
                'reply_txt'   => 'Komentar Balasan',
            ];

            $validateData = $this->validate($request, $rules, $messages, $customAttrs);

            Comment::create([
                'user_name'   => str($validateData['user_name_reply'])->title(),
                'province_id'   => (int) $validateData['province_id'],
                'parent_id' => (int) $validateData['comment_id'],
                'comment'   => $validateData['reply_txt'],
            ]);
        }

        return response()->noContent();
    }

    public function save_likedislike(Request $request)
    {
        $comment = Comment::whereId($request->comment)->whereProvinceId($request->province)
            ->first(['id', 'province_id', 'like', 'dislike']);

        $request->type == 'like' ? $comment->increment('like', 1) : $comment->increment('dislike', 1);

        return response()->json([
            'bool' => true
        ]);
    }
}
