<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Registration extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'group_name',
        'password',
        'binusian_status',
        'full_name',
        'email',
        'whatsapp',
        'line_id',
        'github_id',
        'birthplace',
        'birthdate',
        'cv',
        'id_card',
    ];
}
