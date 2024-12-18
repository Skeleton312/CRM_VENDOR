<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects'; // Sesuaikan nama tabel
    protected $primaryKey = 'project_id';

    protected $fillable = [
        'vendor_id',
        'customer_id',
        'product_id',
        'project_header',
        'project_value',
        'project_duration_start',
        'project_duration_end',
        'project_detail'
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'vendor_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}