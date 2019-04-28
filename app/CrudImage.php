<?php

namespace CarListing;

use Illuminate\Database\Eloquent\Model;

class CrudImage extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'image'
       ];
}
