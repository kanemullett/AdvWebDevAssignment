<?php

namespace App\Models;

use CodeIgniter\Model;

class AddToBasketModel extends Model
{
    protected $table = 'basket';
	
	protected $allowedFields = ['customerID', 'productName', 'productID', 'quantity', 'price', 'image'];
	
	public function getBasketItem($itemID = false)
	{
		if ($itemID === false) {
			return $this->findAll();
		}

		return $this->where(['itemID' => $itemID])->first();
	}
}