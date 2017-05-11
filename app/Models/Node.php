<?php

namespace App\Models;

use App\Models\Model;

class Node extends Model
{
	 /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'node';

     /**
     * The primary key associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'nid';
    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'created';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'changed';
    

    public function user() {
        return $this->belongsTo('App\Models\User', 'uid', 'uid');
    }

    public function field() {

    }
    
    public function body() {
        return $this->morphMany('App\Models\Fields\Body', 'body', 'entity_type', 'entity_id');
    }
}
