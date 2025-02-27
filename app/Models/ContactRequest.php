<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject','replied'];
    public function markAsReplied($replyMessage)
    {
        $this->update(['replied' => $replyMessage]); 
    }
}
