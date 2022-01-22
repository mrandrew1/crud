<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seo;
use App\Children;

class IndexController extends Controller
{
	public function index() {

		

		//Баннеры верхние

		$children = Children::
			orderBy('id', 'desc')
			->get();
		
		return view('index', [
			'children' => $children,
		]);
	}
}
