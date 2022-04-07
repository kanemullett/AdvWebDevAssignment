<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
	
	public function getProducts($slug = false)
	{
		if ($slug === false) {
			return $this->findAll();
		}

		return $this->where(['slug' => $slug])->first();
	}
}