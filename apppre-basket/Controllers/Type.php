<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Type extends BaseController
{
    public function index()
    {
        $model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket()
		];
		
		echo view('templates/header', $data);
		echo view('products/overview', $data);
		echo view('templates/footer', $data);
    }

    public function view($type = null)
	{
		$model = model(ProductsModel::class);
		$model = $model->where(['type' => $type]);
		$other = model(BasketModel::class);

		$data = [
			'products'  => $model->getProducts(),
			'title' => ucfirst($type) . ' Products',
			'basket' => $other->getBasket()
		];

		echo view('templates/header', $data);
		echo view('products/overview', $data);
		echo view('templates/footer', $data);
	}
}