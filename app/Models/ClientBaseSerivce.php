<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class clientBaseSerivce extends Model
{
    public function client(){
        return $this->belogsTo(Client::class);
    }
}