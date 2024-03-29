<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lending;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    protected $table = 'books';

    protected $fillable = ['id', 'title'];

    public $timestamps = false;

    public function lendings()
    {
        return $this->hasMany(Lending::class);
    }

    public function getData()
    {
        $datas = [
            'id' => $this->id,
            'title' => $this->title,
        ];
        return $datas;
    }
}
