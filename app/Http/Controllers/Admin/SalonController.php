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
    //クライエント情報の編集画面
    public function edit(Request $request)
    {
        // Chart Modelからデータを取得する
        $chart= Chart::find($request->id);
        if (empty($chart)) {
            abort(404);    
        }
        return view('admin.edit', ['chart_form' => $chart]);
    }

    //編集画面から送信されたフォームデータを処理
    public function update(Request $request)
        {
          // Validationをかける
          $this->validate($request, Chart::$rules);
          // News Modelからデータを取得する
          $chart = Chart::find($request->id);
          // 送信されてきたフォームデータを格納する
          $chart_form = $request->all();
          unset($chart_form['_token']);
    
          // 該当するデータを上書きして保存する
          $chart->fill($chart_form)->save();
    
          return redirect('admin/salon/index');
        }
}