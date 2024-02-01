<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecurringPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    /** BelongsTo Relations */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** HasMany Relations */
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    public function spendings()
    {
        return $this->hasMany(Spending::class);
    }

    public function laons()
    {
        return $this->hasMany(Loan::class);
    }
}
