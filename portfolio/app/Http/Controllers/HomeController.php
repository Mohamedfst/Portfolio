<?php namespace app\Http\Controllers;

use Exception;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class HomeController extends Controller  {

    public function index()
	{
      return view('public.index');
           
	}
}
