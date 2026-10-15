<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'sort',
        'degree',
        'spec',
        'university',
        'degree_type',
        'level',
        'fee_per_semester',
        'duration',
        'image',
        'link',
    ];

    public function label(): string
    {
        return $this->spec
            ? "{$this->degree} in {$this->spec}"
            : $this->degree;
    }

    public function semesters(): int
    {
        return max(1, (int) round(((float) filter_var($this->duration, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)) * 2));
    }

    public function fullFee(): int
    {
        return $this->fee_per_semester * $this->semesters();
    }

    public function emi(): int
    {
        return (int) round($this->fullFee() / 24);
    }
}
