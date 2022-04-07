<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Apis extends BaseController
{
	public function weather()
	{
		$url = "https://api.openweathermap.org/data/2.5/weather?q=Kinshasa&units=metric&appid=144137e05232fc986d71f10c77fea197";
		
		$json = file_get_contents($url);
		$data['weather'] = json_decode($json);
		
		$url = "https://api.openweathermap.org/data/2.5/weather?q=Kinshasa&units=metric&appid=144137e05232fc986d71f10c77fea197";
		
		$json = file_get_contents($url);
		$data['yuh'] = json_decode($json);
		
		echo view('templates/header', $data);
		echo view('apis/weather', $data);
		echo view('templates/footer', $data);
	}
	
	public function socialmedia()
	{
		$model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket()
		];
		
		$opts = [
			"http" => [
				"method" => "GET",
				"header" => "Authorization: Bearer AAAAAAAAAAAAAAAAAAAAAPPsawEAAAAA2O1vhOrDgZMoOuqx3Jd0zcjwBO0%3DDldVcvNJi2l2SlXv2vnajwqeJjCJMUMaFdd5TbFwihyM6CSz90"
			]
		];
		
		$twitterurl = "https://api.twitter.com/2/users/1509623359503536140/tweets?expansions=author_id&tweet.fields=created_at,author_id&user.fields=username&max_results=10"; 
		
		$context = stream_context_create($opts);
		
		$json = file_get_contents($twitterurl, false, $context);
		$data['tweets'] = json_decode($json);
		
		echo view('templates/header', $data);
		echo view('apis/social-media', $data);
		echo view('templates/footer', $data);
	}
}