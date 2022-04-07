<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class DashboardController extends Controller
{
    public function index()
    {
		$model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket()
		];
        $session = session();
		echo view('templates/header', $data);
        echo view('dashboard', $data);
		echo view('templates/footer', $data);
    }

}