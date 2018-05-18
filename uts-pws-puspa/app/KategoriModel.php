<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class KategoriModel extends Model
{
   protected $table = 'categories'; //nama table yang kita buat lewat migration adalah todo
}
