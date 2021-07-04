<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Cdr extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public $table = 'cdrs';

    protected $appends = [
        'record',
    ];

    protected $dates = [
        'calldate',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'calldate',
        'clid',
        'src',
        'dst',
        'dcontext',
        'channel',
        'dstchannel',
        'lastapp',
        'lastdata',
        'duration',
        'billsec',
        'disposition',
        'amaflags',
        'accountcode',
        'uniqueid',
        'userfield',
        'peeraccount',
        'linkedid',
        'sequence',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getCalldateAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setCalldateAttribute($value)
    {
        $this->attributes['calldate'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getRecordAttribute()
    {
        return $this->getMedia('record')->last();
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
