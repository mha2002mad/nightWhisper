<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class messages extends Model
{
    protected $table = "messages";
    protected $fillable = ["groupChatID", "sentBy", "message", "groupChatID"];
    const CREATED_AT = "sentAt";
    const UPDATED_AT = null;
    public function belongToChat() : BelongsTo {
        return $this->belongsTo(groupChats::class, "groupChatID", "groupChatID");
    }
}
