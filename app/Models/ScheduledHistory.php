<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduledHistory extends Model
{
    use HasFactory;

    protected $table = 'scheduled_history';

    protected $fillable = [
        'id_campaign',
        'customer_name',
        'customer_phone',
        'scheduled_date',
        'status',
    ];

    public $timestamps = true;

    public function campaign()
    {
        return $this->belongsTo(MarketingCampaign::class, 'id_campaign');
    }
}
