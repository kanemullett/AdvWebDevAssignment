<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Brands extends BaseController
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

    public function view($brand = null)
	{
		$model = model(ProductsModel::class);
		$model = $model->where(['brand' => $brand]);
		$other = model(BasketModel::class);

		$data = [
			'products'  => $model->getProducts(),
			'title' => ucfirst($brand) . ' Products',
			'basket' => $other->getBasket()
		];

		echo view('templates/header', $data);
		echo view('products/overview', $data);
		echo view('templates/footer', $data);
	}
}