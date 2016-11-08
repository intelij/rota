<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rotaschedule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'rotaschedules';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rotaid', 'daynumber', 'staffid', 'slottype', 'starttime', 'endtime', 'workhours', 'premiumminutes', 'roletypeid', 'freeminutes', 'seniorcashierminutes', 'splitshifttimes'];

}
