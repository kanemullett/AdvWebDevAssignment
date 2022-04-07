<?php

namespace App\Models;

use CodeIgniter\Model;

class BasketModel extends Model
{
    protected $table = 'basket';
	
	public function getBasket($itemID = false)
	{
		if ($itemID === false) {
			return $this->findAll();
		}

		return $this->where(['itemID' => $itemID])->first();
	}
}