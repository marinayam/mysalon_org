<?php
//管理者側のController
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chart;
use App\ChartTrigger;

class SalonController extends Controller
{
    //クライエント情報の一覧を表示させる
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
      if ($cond_name != '') {
          // 検索されたら検索結果を取得する
          $posts = Chart::where('name02', $cond_name)->get();
          
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Chart::all();
      }
      return view('admin.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }
}
    // public function edit()
    // {
    //     return view('admin.edit');
    // }

    // public function update()
    // {
    //     return redirect('admin/edit');
    // }

