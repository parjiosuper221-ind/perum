<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Property extends Model {
    protected $fillable = ['name','location','price','featured'];
    // Tambahkan ini agar Laravel tidak mencari tabel 'properties'
    protected $table = 'plot_tanah'; 
    
    // Pastikan primary key-nya sesuai dengan SQL kamu (id_plot)
    protected $primaryKey = 'id_plot';
}
