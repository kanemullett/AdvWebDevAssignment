<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController
{
    public function index()
    {
        $model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket(),
			'title' => 'All Products',
		];
		
		echo view('templates/header', $data);
		echo view('products/overview', $data);
		echo view('templates/footer', $data);
    }

    public function view($slug = null)
	{
		$other = model(BasketModel::class);
		$model = model(ProductsModel::class);
		$AddToBasket = model(AddToBasketModel::class);
		
		$data = [
			'products'  => $model->getProducts($slug),
			'basket' => $other->getBasket(),
		];

		if (empty($data['products'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the products item: ' . $slug);
		}

		$data['title'] = $data['products']['title'];
		
		if ($this->request->getMethod() === 'post' && $this->validate([
			'quantity'  => 'required',
		])) {
			$AddToBasket->save([
				'customerID'  => $this->request->getPost('customerID'),
				'productName' => $this->request->getPost('productName'),
				'productID' => $this->request->getPost('productID'),
				'quantity'  => $this->request->getPost('quantity'),
				'price'  => $this->request->getPost('price'),
				'image'  => $this->request->getPost('image'),
			]);
			echo view('templates/header', $data);
			echo view('templates/successbanner', $data);
			echo view('products/view', $data);
			echo view('templates/footer', $data);
		} else {
			echo view('templates/header', $data);
			echo view('products/view', $data);
			echo view('templates/footer', $data);
		}
	}
}