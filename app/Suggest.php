<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table = 'suggest';
    protected $fillable = [
        'info',
        'addtime',
        'contact',
        'uid',
        'ua',
        'from',
    ];
    //定义Carbon 类型的日期字段该字段可用于Carbon函数
    protected $dates = ['addtime'];
    /**
     * 应该被转换成原生类型的属性。当对象调用显示时会进行转化
     *
     * @var array
     */
    protected $casts = [
        'contact' => 'integer',
    ];
    //调用后可以对字段进行过滤等处理，无需到处重复写过滤条件
    public function scopeLimitId($query){
        $query->where('id', '>', 2);
}
  public function scopeLimitInfo($query){
        $query->where('info', '!=', '');
}
/**
     * 获取意见信息。
     *
     * @param  string  $value
     * @return string
     */

//对字段进行改变时会自动调用
  public function setContactAttribute($date)
  {
        $this->attributes['contact'] = $date.'@4399.com';
    }
//关系模型 意见信息只属于一个用户同时编辑（一对一）
//还有：belongsToMany（一对多，属于），hasmany（一对多，拥有）
 public function user()    
    { 
    return $this->belongsTo('App\User','user_id','id');     
   // return $this->hasone('App\User','id','user_id');    //和上面等价
    
    //在user中用hasmany
    } 
}
