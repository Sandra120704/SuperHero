<?php

namespace App\Models;
use CodeIgniter\Model;

class Publisher extends Model{
  protected $table = 'publisher';
  /* protected $primaryKey = 'id'; */
  protected $allowedFields = [  
    'id','publisher_name'
  ];
}
