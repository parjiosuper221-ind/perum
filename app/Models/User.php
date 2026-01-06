<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // 1. Beritahu Laravel nama tabelnya bukan 'users' (jika di SQL-mu kustom) 
    // tapi karena di SQL kamu 'users', ini sudah benar.
    protected $table = 'users';

    // 2. Beritahu Laravel Primary Key-nya adalah id_user
    protected $primaryKey = 'id_user';

    /**
     * Atribut yang bisa diisi (Mass Assignable).
     * Sesuaikan dengan nama kolom di SQL kamu.
     */
    protected $fillable = [
        'id_role',
        'nama_lengkap',
        'email',
        'no_telepon',
        'alamat',
        'password_hash', // Gunakan password_hash sesuai SQL
        'foto_profil',
        'status_aktif',
    ];

    /**
     * Sembunyikan atribut sensitif.
     */
    protected $hidden = [
        'password_hash',
        'remember_token',
    ];

    /**
     * 3. SANGAT PENTING: Beritahu Laravel bahwa kolom password 
     * di database kamu bernama 'password_hash'
     */
    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password_hash' => 'hashed', // Cast kolom password_hash
            'status_aktif' => 'boolean',
        ];
    }
}