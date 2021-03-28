<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use ValidateOnSave;

    protected $guarded = [ 'id' ];

    protected function rules(){
        return [
            'theater_number' => 'between:1,8',
        ];
    }
}
