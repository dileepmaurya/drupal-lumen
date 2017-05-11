<?php

namespace App\Models\Fields;

use Illuminate\Database\Eloquent\Model as BaseModel;

abstract class BaseField extends BaseModel
{

	public function __construct(array $attributes = []) {
		parent::__construct($attributes);
		$this->table = $this->getFieldTable();
	}

	abstract public function getFieldTable();
}
