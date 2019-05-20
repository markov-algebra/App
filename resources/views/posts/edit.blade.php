@extends('layouts.app')

@section('title', '| Edit Post')



@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <center><h1>Zapisnik</h1>
        <hr>
            {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}
        
        <div class="form-group">
        
            {{ Form::label('ph', 'pH vrijednost vode je:') }}
            {{Form::select('ph', $ph_voda,['placeholder' => $post->ph])}}
          
            <br>
            <br>
            {{ Form::label('Cl', 'Slobodni klor u vodi je:') }}
            {{Form::select('Cl', $klor, ['placeholder' => $post->Cl])}}
            <br>
            <br>

            {{ Form::label('temp_vode', 'Temperatura vode u bazenu je:') }}
            {{Form::select('temp_vode', $temperatura, ['placeholder' => $post->temp_vode])}}
            <br>
            <br>
            {{ Form::label('ubaceno_flokulanta', 'Količina ubačenog flokulanta u gramima:') }}
            {{Form::select('ubaceno_flokulanta', $flokulant, ['placeholder' => $post->ubaceno_flokulanta])}}
            <br>
            <br>
            {{ Form::label('stanje_tekuceg_klora', 'Preostala zaliha tekućeg klora u litrama:') }}
            {{Form::select('stanje_tekuceg_klora', $kemija, ['placeholder' => $post->stanje_tekuceg_klora])}}
            <br>
            <br>
            {{ Form::label('stanje_sumporne_kiseline', 'Preostala zaliha sumporne kiseline u litrama:') }}
            {{Form::select('stanje_sumporne_kiseline', $kemija, ['placeholder' => $post->stanje_sumporne_kiseline])}}
            <br>
            <br>
            {{ Form::label('ciscenje_skoljke_bazena_pod', 'Čišćenje školjke bazena pod:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('ciscenje_skoljke_bazena_pod', 'da', $post->ciscenje_skoljke_bazena_pod == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('ciscenje_skoljke_bazena_pod', 'ne', $post->ciscenje_skoljke_bazena_pod == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('ciscenje_skoljke_bazena_zid', 'Čišćenje školjke bazena zid:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('ciscenje_skoljke_bazena_zid', 'da', $post->ciscenje_skoljke_bazena_zid == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('ciscenje_skoljke_bazena_zid', 'ne', $post->ciscenje_skoljke_bazena_zid == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('ciscenje_preljevnih_kanala', 'Čišćenje preljevnih kanala:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('ciscenje_preljevnih_kanala', 'da', $post->ciscenje_preljevnih_kanala == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('ciscenje_preljevnih_kanala', 'ne', $post->ciscenje_preljevnih_kanala == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('pranje_pjescanog_filtera', 'Pranje pjescanog filtera:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('pranje_pjescanog_filtera', 'da', $post->pranje_pjescanog_filtera == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('pranje_pjescanog_filtera', 'ne', $post->pranje_pjescanog_filtera == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('pranje_mehanickog_predfiltera_u', 'Pranje mehaničkog predfiltera usisa:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('pranje_mehanickog_predfiltera_u', 'da', $post->pranje_mehanickog_predfiltera_u == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('pranje_mehanickog_predfiltera_u', 'ne', $post->pranje_mehanickog_predfiltera_u == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            
            {{ Form::label('vizualni_pregled_opreme_za_dk', 'Vizualni pregled opreme za kontrolu i doziranje kemije:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('vizualni_pregled_opreme_za_dk', 'da', $post->vizualni_pregled_opreme_za_dk == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('vizualni_pregled_opreme_za_dk', 'ne', $post->vizualni_pregled_opreme_za_dk == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('vizualni_pregled_sve_ostale_o', 'Vizualni pregled ostale opreme:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('vizualni_pregled_sve_ostale_o', 'da', $post->vizualni_pregled_sve_ostale_o == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('vizualni_pregled_sve_ostale_o', 'ne', $post->vizualni_pregled_sve_ostale_o == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('vizualni_pregled_stanja_bazena_v', 'Vizualni pregled stanja bazena vanjski dio:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('vizualni_pregled_stanja_bazena_v', 'da', $post->vizualni_pregled_stanja_bazena_v == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('vizualni_pregled_stanja_bazena_v', 'ne', $post->vizualni_pregled_stanja_bazena_v == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('viz_pregl_stanja_str_i_el_o_srt_b', 'Vizualni pregled stanja strojarske i elektro opreme:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('viz_pregl_stanja_str_i_el_o_srt_b', 'da', $post->viz_pregl_stanja_str_i_el_o_srt_b == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('viz_pregl_stanja_str_i_el_o_srt_b', 'ne', $post->viz_pregl_stanja_str_i_el_o_srt_b == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>
            {{ Form::label('pranje_kompenzacije_bazena', 'Pranje kompenzacije bazena:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('pranje_kompenzacije_bazena', 'da', $post->pranje_kompenzacije_bazena == 'da' ? 'checked' : 'da'  )}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('pranje_kompenzacije_bazena', 'ne', $post->pranje_kompenzacije_bazena == 'ne' ? 'checked' : 'ne'  )}}
            <br>
            <br>

            {{ Form::label('body', 'Napomena:') }}
            {{ Form::text('body', null, ['placeholder' => $post->body], array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Spremi', array('class' => 'btn btn-primary')) }}

            {{ Form::close() }}
        </div>
        
    </div>

@endsection