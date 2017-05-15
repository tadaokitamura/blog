<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* add -->> //
    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * 代入を許可するカラム
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
    ];
    /* add <<-- */
}
