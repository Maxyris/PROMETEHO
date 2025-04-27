<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'codigo',
        'descripcion',
    ];

    /**
     * Define the relationship with the User model.
     * Assuming a role can have many users (one-to-many).
     */
    public function users()
    {
        return $this->hasMany(User::class, 'rol_id', 'codigo');
    }
}
