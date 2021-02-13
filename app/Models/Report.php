<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Report extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item',
        'naver_url',
        'item_code',
        'title',
        'naver_detail',
        'company',
        'report_url',
        'reg_date',
        'target_price',
        'comment',
        'summary',
        'collect_date',
    ];
   
}
