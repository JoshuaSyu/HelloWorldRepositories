<?php
namespace Joshua\HelloWorld\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Joshua\HelloWorld\News;

class HelloWorldController extends Controller
{
    public function index()
    {
        dd(News::paginate(20));
        return view('HelloWorld::welcome');
    }
}
