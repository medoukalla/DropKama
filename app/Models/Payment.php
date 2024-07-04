<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // function to get all method payments 
    static function payments() {
        return Payment::all();
    }

    // function to get method payments for vendre system 
    static function vendre_payments() {
        // allowed payment methods for vendre system 
        $allowed = ['Paypal', 'Bank transfer', 'Usdt', 'Skrill'];
        return Payment::whereIn('name', $allowed)->get();
    }
}
