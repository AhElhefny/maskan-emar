<?php

namespace App\Models;

use App\Models\Media;
use Illuminate\Database\Eloquent\Model;
use App\Http\services\DefaultModelAttributesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryOfMedia extends Model
{
    use HasFactory;
    use DefaultModelAttributesTrait;
    
    protected $guarded = [''];
    protected $appends=['name'];

    public function media(){
        return $this->hasMany(Media::class);
    }
}
