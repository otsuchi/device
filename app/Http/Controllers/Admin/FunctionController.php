<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Function;
class FunctionController extends Controller
{
    public function index()
    {
        return  view('admin.function.index');
    }
    public function add()
    {
        return  view('admin.function.create');
    }
    public function create(Request $request)
    {
       // Varidationを行う
      $this->validate($request, Function::$rules);
​
      $functions = new Function;
      $form = $request->all();
​
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $functions->image_path = basename($path);
      } else {
          $functions->image_path = null;
      }
​
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
​
      // データベースに保存する
      $functions->fill($form);
      $functions->save();
        
        return  redirect('admin/function/create');
    }
    
}
