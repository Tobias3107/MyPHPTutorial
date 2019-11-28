<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurs2 extends Model
{

    public function tabs() {
        return $this->hasMany('App\kurs_tabs', 'kurs2sid');
    }

    public function maxTabs() {
        return $this->tabs()->max('order');
    }
}
