<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mode;
use App\Company;
use App\Device;
use App\Division;
use App\Enums\ModesType;
class ModeController extends Controller
{
    public function add()
    {
        $companies = Company::all()->pluck('name', 'id');
        $devices = Device::all()->pluck('name', 'id');
        $divisions = Division::all()->pluck('name', 'id');
        return  view('admin.mode.create',['companies' => $companies, 'devices' => $devices, 'divisions' => $divisions ]);
        
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
    {   //リストを表示するためのもの。変数変えるの厳禁
        $companies = Company::all()->pluck('name', 'id');
        $devices = Device::all()->pluck('name', 'id');
        $divisions = Division::all()->pluck('name', 'id');
        //検索条件のための変数
        $cond_companies = $request->cond_company_id;
        $cond_devices = $request->cond_device_id;
        $cond_divisions = $request->cond_division_id;
        $cond_body = $request->cond_body;
        $cond_title = $request->cond_title;
        
        $query = Mode::query();
        
        // 検索条件設定
        //メーカーは完全一致なのでこれでよし
        if ($cond_companies != '') {
          $query->where('company_id','like',"$cond_companies");
        }
        if ($cond_devices != '') {
          $query->where('device_id','like',"$cond_devices");
        }
        if ($cond_divisions != '') {
          $query->where('division_id','like',"$cond_divisions");
        }
        if ($cond_title != '') {
          // 検索されたらタイトルを取得する
          $query->where('title', 'like',"%$cond_title%");
        }  
        if($cond_body != ''){
          //次に説明が空白か確認してデータ取得する
          $query->where('body', 'like',"%$cond_body%");
        }
      
        $modes = $query->get();
        
       //dd($modes);
       return view('admin.mode.index',compact('modes','cond_title','cond_body','companies','devices','divisions'));
        
    }
    public function edit(Request $request)
    {
      // Mode Modelからデータを取得する
      $modes = Mode::find($request->id);
      if (empty($modes)) {
        abort(404);    
      }
      $companies = Company::all()->pluck('name', 'id');
      $devices = Device::all()->pluck('name', 'id');
      $divisions = Division::all()->pluck('name', 'id');
      return  view('admin.mode.edit',['companies' => $companies, 'devices' => $devices, 'divisions' => $divisions,'modes_form' => $modes ]);
    }
    public function update(Request $request)
    {
      // Validationをかける
      $this->validate($request, Mode::$rules);
      // Mode Modelからデータを取得する
      $modes = Mode::find($request->id);
      // 送信されてきたフォームデータを格納する
      $modes_form = $request->all();
      // 送信されてきたフォームデータを格納する
      $modes_form = $request->all();
      if ($request->remove == 'true') {
          $modes_form['image_path'] = null;
      } elseif ($request->file('image')) {
          $path = $request->file('image')->store('public/image');
          $modes_form['image_path'] = basename($path);
      } else {
          $modes_form['image_path'] = $modes->image_path;
      }

      unset($modes_form['image']);
      unset($modes_form['remove']);
      unset($modes_form['_token']);

      // 該当するデータを上書きして保存する
      $modes->fill($modes_form)->save();

      return redirect('admin/mode');
    }
    public function delete(Request $request)
    {
      // 該当するMode Modelを取得
      $mode = Mode::find($request->id);
      // 削除する
      $mode->delete();
      return redirect('admin/mode/');
    }  
}
