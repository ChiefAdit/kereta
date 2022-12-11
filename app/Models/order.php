<?php

namespace App\Models;

use CreatePostTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = ['nama', 'alamat', 'nohp', 'email', 'jenis', 'ukuran', 'jumlah', 'keterangan'];
}
