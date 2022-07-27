<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getByLimit(int $limit_count = 10){
        // updated_atで降順に並べた後、limitで件数制限をかける
        return $this->orderBy("updated_at","DESC")->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 10){
        // updated_atで降順に並べた後、limitで件数制限をかける
        return $this->orderBy("updated_at","DESC")->paginate($limit_count);
    }
}
