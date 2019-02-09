<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $fillable=['user_id','category_id','name','slug','excerpt','status','file'
    
    ];

//Relaciones  

//Un post pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class); 
    }
 
    //Un post pertenece a una categoria
    public function category()
    {
        return $this->belongsTo(Category::class); 
    }
    //Un post puede tener muchas etiquetas
    public function tags()
    {
        return $this->belongsToMany(Tag::class); 
        
    }
    
    
}

