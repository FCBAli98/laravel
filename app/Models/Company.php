<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // table-companies
    protected $table = 'companies';

    //custom primary key
    protected $primaryKey = 'id';

    // incrementing 
   /* public $incrementing = false;*/

    //timestamps
    
   /* public $timestamps = false;*/

    //default value
    
   /* protected $attributes=[
        'active' => true
    ];*/
        
        
}
