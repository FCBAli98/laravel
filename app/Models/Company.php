<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        
    protected $fillable = ['name', 'address', 'phone'];
    
   /* protected $guarded = ['id'];*/    

    use HasFactory, SoftDeletes;
        
}
