<?php
//一般ユーザー側のController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//追記。ファサード継承。
use Illuminate\Support\Facades\HTML;

// Model取り込み
use App\Staff;

class SalonController extends Controller
{
   public function index(Request $request)
    {
        $posts = Staff::all()->sortByDesc('updated_at');

        if (count($posts) > 0) {
            $staff = $posts->shift();
        } else {
            $staff = null;
        }

        
        // また View テンプレートに staff、 posts、という変数を渡している
        return view('salon.staff', ['staff' => $staff, 'posts' => $posts]);
    }

}
