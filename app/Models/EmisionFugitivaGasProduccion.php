<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmisionFugitivaGasProduccion extends Model
{
    protected $table = 'emisiones_fugitivas_gases_produccion';

    protected $fillable = [
        'HFC_32',
        'HFC_41',
        'HFC_125',
        'HFC_134',
        'HFC_134a',
        'HFC_143',
        'HFC_143a',
        'HFC_152',
        'HFC_152a',
        'HFC_161',
        'HFC_227ea',
        'HFC_236cb',
        'HFC_236ea',
        'HFC_236fa',
        'HFC_245ca',
        'HFC_245fa',
        'HFC_365mfc',
        'HFC_43_10mee',
        'R_404A',
        'R_407A',
        'R_407B',
        'R_407C',
        'R_407F',
        'R_410A',
        'R_410B',
        'R_413A',
        'R_417A',
        'R_417B',
        'R_422A',
        'R_422D',
        'R_424A',
        'R_426A',
        'R_427A',
        'R_428A',
        'R_434A',
        'R_437A',
        'R_438A',
        'R_442A',
        'R_449A',
        'R_452A',
        'R_453A',
        'R_507A',
        'CO2',
        'CH4',
        'N2O',
        'SF6',
        'NF3',
        'HCFE_235da2',
        'HFE_236ea2',
        'HFE_347mmz1',
        'C2F6_PFC_116',
        'C3F8_PFC_218',
    ];

    public $timestamps = false;
}
