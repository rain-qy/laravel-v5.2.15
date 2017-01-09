<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //设置表中字段可自动填充
    protected $fillable=['title','content','published_at'];

    protected $dates = ['published_at'];

    //自动补充时间格式字段的时、分、秒  (命名格式 set字段名Attribute)
    public function setPublishedAtAttribute($date){
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
    }

    //查询数据过滤(过滤小于等于当前时间的文章)
    public function scopePublished($query){
        $query->where('published_at','<=',Carbon::now());
    }
}
