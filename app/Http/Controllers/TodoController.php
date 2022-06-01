<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index', ['items' => $items]);
    }
    public function list()
    {
        $content_infos = $this->contentService->getAiiContentList();
        dd($content_infos);
        return view('contents.list', ['content_infos' => $content_infos]);
    }
}
