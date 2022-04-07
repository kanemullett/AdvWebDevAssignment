<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
class Checkout extends Controller
{
  public function index() {
	
	$other = model(BasketModel::class);
	
	$data = [
		'basket' => $other->getBasket(),
	];
	
	echo view('templates/header', $data);
    echo view('index');
	echo view('templates/footer', $data);
  }
  
  public function success() {
	
	$other = model(BasketModel::class);
	
	$data = [
		'basket' => $other->getBasket(),
	];
	
	echo view('templates/header', $data);
    echo view('checkout/success', $data);
	echo view('templates/footer', $data);
  }
}