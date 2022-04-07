<?php

namespace App\Controllers;

use App\Models\FeedbackModel;

class Feedback extends BaseController
{
    public function index()
    {
		$other = model(BasketModel::class);
		
        $model = model(FeedbackModel::class);

        $data = [
			'feedback'  => $model->getFeedback(),
			'title' => 'All Feedback',
			'basket' => $other->getBasket(),
		];
		
		echo view('templates/header', $data);
		echo view('feedback/overview', $data);
		echo view('templates/footer', $data);
    }

    public function create()
	{
		$model = model(FeedbackModel::class);
		$other = model(BasketModel::class);
		
		$data['basket'] = $other->getBasket();

		if ($this->request->getMethod() === 'post' && $this->validate([
			'title' => 'required|min_length[3]|max_length[128]',
			'body'  => 'required',
			'rating' => 'required',
		])) {
			$model->save([
				'name'  => $this->request->getPost('name'),
				'rating' => $this->request->getPost('rating'),
				'title' => $this->request->getPost('title'),
				'body'  => $this->request->getPost('body'),
			]);
			echo view('templates/header', $data);
			echo view('feedback/success', $data);
			echo view('templates/footer', $data);
		} else {
			echo view('templates/header', $data);
			echo view('feedback/create', $data);
			echo view('templates/footer', $data);
		}
	}
}