<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clip extends Model
{
    public function formatTime()
    {
        try {
            $date = new \DateTime($this->created_at);
            return $date->format('d.m.Y H:i');
        } catch (\Exception $e) {
        }
    }
}
