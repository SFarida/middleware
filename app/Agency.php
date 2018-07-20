<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'agencies';
    protected $fillable = ['name'];
    protected $primaryKey = 'id';


    public function saveAgency($data)
    {
        $this->name = $data['name'];
        $this->save();
        return 1;
    }

    public function updateAgency($data)
    {
        $agency = $this->find($data['id']);
        $agency->name = $data['name'];
        $agency->save();
        return 1;
    }
}
