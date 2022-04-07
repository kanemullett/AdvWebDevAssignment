<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'feedback';
	
	protected $allowedFields = ['name', 'rating', 'title', 'body'];
	
	public function getFeedback($commentID = false)
	{
		if ($commentID === false) {
			return $this->findAll();
		}

		return $this->where(['commentID' => $commentID])->first();
	}
}