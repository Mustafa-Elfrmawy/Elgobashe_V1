<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'phone_number', 'address', 'manager_id'];

    /**
     * العلاقة مع قسم (Department) الموظف.
     * هنا العمود manager_id يشير إلى سجل في جدول departments.
     */
    public function department()
    {
        return $this->belongsTo(Department::class, 'manager_id');
    }

    public function user()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }
}
