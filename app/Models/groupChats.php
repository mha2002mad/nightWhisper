<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class groupChats extends Model
{
    protected $table = "groupChats";
    public $incrementing = false;
    protected $primaryKey = "groupChatID";
    protected $keyType = "string";
    protected $fillable = ["groupChatID"];

    public function messages() : HasMany {
        return $this->hasMany(messages::class, "groupChatID", "groupChatID");
    }
}
