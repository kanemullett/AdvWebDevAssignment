<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Search extends BaseController
{
    public function index()
    {
        $model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket(),
		];
		
		echo view('templates/header', $data);
		echo view('search/overview', $data);
		echo view('templates/footer', $data);
    }
}