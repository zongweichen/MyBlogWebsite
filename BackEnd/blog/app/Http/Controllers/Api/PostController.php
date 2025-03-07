<?php

namespace App\Http\Controllers\Api;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'content' => 'required|string', // 確保內容不為空且為字串
            'slug' => 'required|string|unique:posts,slug', // 確保 slug 唯一
        ]);
    
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400); // 驗證失敗，返回錯誤訊息
        }
    
        // 驗證成功，儲存資料
        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'content' => $request->content,
        ]);
    
        return response()->json($post, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
