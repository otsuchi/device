<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mode;
class ModeController extends Controller
{
    public function add()
    {
        return  view('admin.mode.create');
    }
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Mode::$rules);
      
        $modes = new Mode;
        $form = $request->all();
        // フォームから画像が送信されてきたら、保存して、$modes->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $modes->image_path = basename($path);
        } else {
            $modes->image_path = null;
        }
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);
      
        // データベースに保存する
        $modes->fill($form);
        $modes->save();
        
        return  redirect('admin/mode/create');
    }
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Mode::where('title', $cond_title)->get();
            
        } else {
          // それ以外はすべてのニュースを取得する
          $posts = Mode::all();
            
        }
        return view('admin.mode.index', ['posts' => $posts, 'cond_title' => $cond_title]);
        
    }
}
