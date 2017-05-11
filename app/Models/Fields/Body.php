<?php

namespace App\Models\Fields;

use App\Models\Fields\BaseField;

class Body extends BaseField
{

    public function body() {
    	return $this->morphTo(null, 'entity_type', 'entity_id');
    }

    public function getFieldTable() {
    	return 'field_data_body';
    }
}
