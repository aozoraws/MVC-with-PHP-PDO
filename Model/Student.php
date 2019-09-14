<?php

include_once('Model/Model.php');

class Student extends Model{
    /**
     * when making new models make sure that its include the Model.php
     * and the class Inherit/Extends from it.
     * 
     * $table is the name of your table in the database
     * 
     * $fillables is an array that contains column(s) that belongs
     * in the table that you set the name in $table.
     * 
     * that is all you need to do, the rest is processed in the Model.php
     */
    protected $table = 'siswa';
    protected $fillables = [
        'name','kelulusan'
    ];
    
}