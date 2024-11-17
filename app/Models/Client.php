<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'email',
        'gender',
        'address',
        'facebook_review',
        'google_review',
        'page_number',
        'client_photo',
        'services',
        'status',
        'facebook_profile_link',
        'date_of_birth',
    ];

    public function services(){
        return $this->belongsToMany(Service::class);
    }

    //for client_base_service_names_on_single_page
    public function client_base_services(){
        return $this->hasMany(Client::class);
    }
}