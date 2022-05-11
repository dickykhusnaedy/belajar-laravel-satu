<?php

namespace App\Models;

class Post
{
	public static function all()
	{
		return collect(self::$blogPosts);
	}
	public static function find($slug)
	{
		$posts = static::all();
		return $posts->firstWhere('slug', $slug);
	}
	private static $blogPosts = [
		[
			'title'  => 'Judul Post Pertama',
			'slug'   => 'judul-post-pertama',
			'author' => 'Dicky Khusnaedy',
			'image'  => 'dicky.jpg',
			'body'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis suscipit atque numquam ratione deleniti voluptatibus quo minima, ipsa a vitae nam facere molestiae esse modi voluptas quia amet iusto incidunt vel nobis sed nemo fugit tempora. A rem sed enim sit blanditiis laborum commodi eveniet magni porro dolorem architecto molestias, inventore molestiae laudantium modi? Odit minus eius saepe sint. Nesciunt quas aperiam, mollitia commodi sapiente dolore laborum ipsam quis repudiandae impedit ea inventore expedita distinctio eos, qui doloribus magni? Perferendis vel adipisci non omnis numquam velit sint eum officia, dolorum ratione facere reiciendis quam repellat harum provident. Reprehenderit, atque ex?'
		],
		[
			'title'  => 'Judul Post Kedua',
			'slug'   => 'judul-post-kedua',
			'author' => 'Sadhika',
			'image'  => 'dicky.jpg',
			'body'   => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Alias, rerum optio porro saepe quis cupiditate voluptatibus, asperiores officiis in magnam qui reiciendis ab ipsam nisi? Incidunt commodi quidem neque eos autem tempora vero amet, totam laborum quisquam facilis molestiae vel ipsa consequuntur doloremque beatae at repellat similique minus, veritatis ratione? Nihil, iusto natus eius illo dolor assumenda unde nostrum error commodi quaerat aperiam numquam esse dignissimos in minima. Quisquam deserunt, vitae eum suscipit illum maxime doloribus vel porro consequatur quidem modi necessitatibus dicta iste fugiat adipisci id. Illo laboriosam id doloremque distinctio nobis a rem officia tempora amet? Placeat cupiditate omnis eos. Expedita corrupti recusandae perferendis exercitationem, dignissimos quis aliquam praesentium vel temporibus. Quaerat inventore, qui vitae quae dolores porro mollitia? Illo at illum vel fugiat? Error eius, sequi dolor numquam hic praesentium totam, assumenda nam ipsum doloribus at in ducimus enim rerum suscipit distinctio? Enim id fugiat maxime provident!'
		],
	];
}
