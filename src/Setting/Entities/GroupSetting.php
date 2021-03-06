<?php

namespace LibLaravel\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class GroupSetting extends Model
{
    protected $table = 'setting_groups';

    protected $guarded = [];

    public function settings()
    {
        return $this->hasMany('LibLaravel\Setting\Entities\Setting');
    }
}
