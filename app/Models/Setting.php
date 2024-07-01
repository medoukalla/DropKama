<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class Setting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'keywords',
        'description',
        'facebook',
        'twitter',
        'instagram',
        'whatsApp',
        'tiktok',
        'telegram',
        'snapchat',
        'reddit',
        'pinterest',
        'skype',
        'linkedIn',
        'bonus',
    ];



    /**
     * function to do some validations on discord 
     */
    static function check_discord($discord) {

        // first check if there any #
        // $dash = Str::contains($discord, '#');
        // // if # not found return with invalid format
        // if ($dash == false) {
        //     return 'Discord invalide format';
        // }

        // // split discord using the # inro array
        // $explode = Str::of($discord)->explode('#');
        // $discord_array['discord_username'] = $explode[0];
        // $discord_array['discord_id'] = $explode[1];
        // first check if there any #
        // $dash = Str::contains($discord, '#');
        // // if # not found return with invalid format
        // if ($dash == false) {
        //     return 'Discord invalide format';
        // }

        // // split discord using the # inro array
        // $explode = Str::of($discord)->explode('#');
        // $discord_array['discord_username'] = $explode[0];
        // $discord_array['discord_id'] = $explode[1];

        // now validate the discord_array
        $validator = Validator::make(Request()->all(), [
            'discord' => 'required'
        ]);
        if ( $validator->fails() ) {
            return $validator->errors()->first();
        }

        // everything is good
        // everything is good
        return 'success';
        
    }

}
