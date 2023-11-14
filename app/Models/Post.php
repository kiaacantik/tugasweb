<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $dates = ['db_travelumroh'];
    // tambahkan atribut fillable sesuai kebutuhan
    protected $fillable = ['failed_jobs', 'migrations', 'password_reset_tokens', 'personal_acssess_tokens', 'users'];
}
