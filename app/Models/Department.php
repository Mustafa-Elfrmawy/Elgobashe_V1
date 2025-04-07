<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    
    // إذا كان الجدول يحتوي فقط على اسم القسم، يمكن تعديل fillable إلى:
    protected $fillable = ['name'];

    /**
     * علاقة القسم مع المستخدمين الذين يشير عمود manager_id في جدول users إلى هذا القسم.
     */
    public function users()
    {
        return $this->hasOne(User::class, 'manager_id');
    }

    /**
     * علاقة القسم مع الموظفين الذين يشير عمود manager_id في جدول employees إلى هذا القسم.
     */
    public function employees()
    {
        return $this->hasOne(Employee::class, 'manager_id');
    }
}
