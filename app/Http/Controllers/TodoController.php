<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;



class TodoController extends Controller
{
    public function index()
    {
        $item = Todo::all();
        return view('index', ['item' => $item]);
    }
    public function list()
    {
        $content_infos = $this->contentService->getAiiContentList();
        dd($content_infos);
        return view('contents.list', ['content_infos' => $content_infos]);
    }
    public function create(Request $request)
    {
        $validate_rule = [
            'content' => 'required | max:20'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }
    public function update($id, Request $request)
    {
        $validate_rule = [
            'content' => 'required | max:20'
        ];
        $this->validate($request, $validate_rule);
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $id)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        $author = Todo::find($request->id);
        Todo::find($request->id)->delete($author);
        return redirect('/');
    }
}
