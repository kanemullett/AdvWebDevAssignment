<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class LoginController extends Controller
{
    public function index()
    {
		$model = model(ProductsModel::class);
		$other = model(BasketModel::class);

        $data = [
			'products'  => $model->getProducts(),
			'basket' => $other->getBasket(),
		];
        helper(['form']);
		echo view('templates/header', $data);
        echo view('login', $data);
		echo view('templates/footer', $data);
    } 
  
    public function signin()
    {
		$other = model(BasketModel::class);
        $session = session();
        $model = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $model->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $pwd_verify = password_verify($password, $pass);
            if($pwd_verify){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isSignedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/DashboardController');
            }else{
                $session->setFlashdata('msg', 'wrong password.');
                return redirect()->to('/LoginController');
            }
        }else{
            $session->setFlashdata('msg', 'wrong email.');
            return redirect()->to('/LoginController');
        }
    }
}