<?php
//管理者側のController
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalonController extends Controller
{
    //クライエント情報の一覧を表示させる
    public function index()
    {
        // $posts = Salon::all()->sortByDesc('updated_at');

        // if (count($posts) > 0) {
        //     $headline = $posts->shift();
        // } else {
        //     $headline = null;
        // }
        
        // salon/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('admin.index');
    }
}
