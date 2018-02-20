<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function getall($limit){
        $this->productt = Product::paginate($limit);
        return $this->productt;
    }
}
