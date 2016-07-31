<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
                            'first_name',
                            'last_name',
                            'email',
                            'password' ,
                            'country',
                            'region',
                            'zip',
                            'phone',
                            'dob',
                            'gender',
                            'billing_address1',
                            'billing_address2',
                            'tax_number',
                            'state',
                            'data'
                          ];
}
