<?php

namespace InHub\LaravelH5p\Eloquents;

use Illuminate\Database\Eloquent\Model;

class H5pContentsUserData extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey = ['content_id', 'user_id', 'sub_content_id', 'data_id'];
    protected $fillable = [
        'content_id',
        'user_id',
        'sub_content_id',
        'data_id',
        'data',
        'preload',
        'invalidate',
        'updated_at',
    ];
}
