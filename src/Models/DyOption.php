<?php

namespace Peterzaccha\DyForm\Models;

use Illuminate\Database\Eloquent\Model;

class DyOption extends Model
{

    protected $fillable = ['name','hint','value'];

    public function columns()
    {
        return $this->belongsToMany(DyOption::class,
            'options_columns','option_id', 'column_id');
    }

    public function nextColumns()
    {
        return $this->belongsToMany(DyOption::class,
            'next_column','option_id', 'next_column');
    }
}
