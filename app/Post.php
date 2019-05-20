<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'ph',
        'Cl',
        'temp_vode',
        'pranje_pjescanog_filtera',
        'pranje_mehanickog_predfiltera_u',
        'vizualni_pregled_opreme_za_dk',
        'vizualni_pregled_sve_ostale_o',
        'vizualni_pregled_stanja_bazena_v',
        'viz_pregl_stanja_str_i_el_o_srt_b',
        'ciscenje_skoljke_bazena_pod',
        'ciscenje_skoljke_bazena_zid',
        'ciscenje_preljevnih_kanala',
        'pranje_kompenzacije_bazena',
        'ubaceno_flokulanta',
        'stanje_tekuceg_klora',
        'stanje_sumporne_kiseline',
        'body',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
