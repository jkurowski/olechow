<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Gallery extends Model
{

    use LogsActivity;
    protected static $logName = 'Galeria';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'text',
        'file',
        'file_webp',
        'sort'
    ];

    /**
     * Get images
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany('App\Models\Image')->orderBy('sort');
    }
}
