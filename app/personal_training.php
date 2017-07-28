<?php

namespace gymuss;

use Illuminate\Database\Eloquent\Model;

class personal_training extends Model
{
    protected $table='personal_training';
    protected $primaryKey='PERS_TRAI_ID';
    protected $keyType='ADM_ID';

    public $timestamps=true;

    protected $fillable=[
        'PERS_TRAI_NOM',
        'PERS_TRAI_APE_PAT',
        'PERS_TRAI_APE_MAT',
        'PERS_TRAI_EST'
    ];

    protected $guarded=[

    ];

}

