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

    // function to get all active method payments 
    static function active_payments() {
        return Payment::where('active', true)->get();
    }

    // function to get method payments for vendre system 
    static function vendre_payments() {
        // allowed payment methods for vendre system 
        $allowed = ['paypal', 'bank-transfer', 'usdt', 'skrill', 'cih'];
        return Payment::whereIn('svg_name', $allowed)->get();
    }
}
