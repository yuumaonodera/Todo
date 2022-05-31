<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $item = Author::all();
        return view('index', ['items' => $items]);
    }

    public function index()
    {
        $item = [
            'content' = '本文',
        ];
        return view('index', $item);
    }
    public function list()
    {
        $content_infos = $this->contentService->getAiiContentList();
        dd($content_infos);
        return view('contents.list', ['content_infos' => $content_infos]);
    }
}
