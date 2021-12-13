<?php
//一般ユーザー側のController
namespace App\Http\Controllers;

use Illuminate\Http\Request;
//追記。ファサード継承。
use Illuminate\Support\Facades\HTML;

// 追記。 以下を追記することでSalon Modelが扱えるようになる。
use App\Salon;

class SalonController extends Controller
{
  public function index(Request $request)
  {
      return view('index');
  }

}
