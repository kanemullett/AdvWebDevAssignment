<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

use App\Models\UserModel;

  
class RegisterController extends Controller
{
    public function index()
    {
		$model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket()
		];
        helper(['form']);
        $data = [];
		echo view('templates/header', $data);
        echo view('user_register', $data);
		echo view('templates/footer', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
			echo view('templates/header', $data);
            echo view('user_register', $data);
			echo view('templates/footer', $data);
        }
          
    }
  
}