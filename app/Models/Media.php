<?php

namespace App\Models;
use App\Models\CategoryOfMedia;
use Illuminate\Database\Eloquent\Model;
use App\Http\services\DefaultModelAttributesTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;
    use DefaultModelAttributesTrait;

    protected $guarded = [''];
    public $folder ='media';


    public function category(){
        return $this->belongsTo(CategoryOfMedia::class);
    }

}
