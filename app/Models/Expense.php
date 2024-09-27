<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = ['description', 'payment_date', 'due_date', 'amount', 'category_id'];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
