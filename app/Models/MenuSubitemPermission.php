<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MenuSubitemPermission extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "menu_subitens_permissoes";
    protected $fillable = ['item_id', 'subitem_id', 'user_id'];

    public function subItems()
    {
        return $this->belongsTo(MenuSubItem::class,'subitem_id')->select('id', 'subitem', 'iframe', 'item_id');
    }
}
