<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionMenu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'menu_permissoes';
    protected $fillable = ['item_id', 'user_id'];


    public function menuItems()
    {
        return $this->belongsTo(MenuItem::class, 'id')->select('id', 'item');
    }
}
