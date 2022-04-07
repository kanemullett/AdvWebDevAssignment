<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class Logout extends Controller
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
        echo view('logout', $data);
		echo view('templates/footer', $data);
    }
}