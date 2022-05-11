<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		return view('home', [
			'name' => 'Dicky Khusnaedy',
			'address' => 'Perumahan Bida Ayu Blok R No. 127',
			'title' => 'Home'
		]);
	}
	public function about()
	{
		return view('about', [
			'title' => 'About'
		]);
	}
	public function blog()
	{
		return view('blog', [
			'title' => 'Post',
			'post' => Post::all()
		]);
	}
	public function show($slug)
	{
		return view('post', [
			'title' => 'Detail Post',
			'post' => Post::find($slug)
		]);
	}
}
