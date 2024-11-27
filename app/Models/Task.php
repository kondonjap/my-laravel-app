<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // データベースに保存可能なカラムを指定
    protected $fillable = ['title', 'description']; // 保存可能なカラムを指定
}
