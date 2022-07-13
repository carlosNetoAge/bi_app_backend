<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuSubItem extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'menu_subitens';
    protected $fillable = ['subitem', 'iframe', 'item_id'];


    public function submenu_allowed()
    {
        return $this->hasMany(MenuSubitemPermission::class, 'subitem_id');
    }

}
