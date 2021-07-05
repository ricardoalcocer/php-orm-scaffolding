<?php
    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    Class FirstModel extends Model{
        protected $table        = "name_of_table";
        public $timestamps      = false;
        protected $fillable     = [
            'field_one',
            'field_two',
            'field_three'
        ];
    };