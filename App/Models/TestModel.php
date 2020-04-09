<?php
namespace App\Models;

use Silver\Core\Model;
/**
 *
 */
class TestModel extends Model
{

    protected $table = 'test';
    protected $primaryKey = 'id';

    protected $selectable = [

    ];

    protected $fillable = [

    ];

    protected $filterable = [

    ];

    protected $includable = [

    ];

    protected $hidden = [

    ];

    public function gettests()
    {
        return $this->select('test')->all();
    }
}
