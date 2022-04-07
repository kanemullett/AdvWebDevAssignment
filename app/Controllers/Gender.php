<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Gender extends BaseController
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

    public function view($gender = null)
	{
		$model = model(ProductsModel::class);
		$model = $model->where(['gender' => $gender]);
		$other = model(BasketModel::class);

		$data = [
			'products'  => $model->getProducts(),
			'title' => ucfirst($gender) . "'s Products",
			'basket' => $other->getBasket()
		];

		echo view('templates/header', $data);
		echo view('products/overview', $data);
		echo view('templates/footer', $data);
	}
}