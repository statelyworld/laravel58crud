<?php

namespace CarListing;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = ['item_name', 'sku_no', 'price'];
}