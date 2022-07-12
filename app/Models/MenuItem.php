<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'menu_itens';
    protected $fillable = ['item', 'iframe'];


    public function menu_allowed()
    {
        return $this->hasMany(MenuItemPermission::class, 'item_id');
    }
}
