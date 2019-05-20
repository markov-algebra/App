@extends('layouts.app')

@section('title', '| Create New Post')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <center><h1>Zapisnik</h1>
        <hr>
        
    {{-- Using the Laravel HTML Form Collective to create our form --}}
        {{ Form::open(array('route' => 'posts.store')) }}
        
        <div class="form-group">
        
            {{ Form::label('ph', 'pH vrijednost vode je:') }}
            {{Form::select('ph', $ph_voda)}}
            <br>
            <br>
            {{ Form::label('Cl', 'Slobodni klor u vodi je:') }}
            {{Form::select('Cl', $klor)}}
            <br>
            <br>
            {{ Form::label('temp_vode', 'Temperatura vode u bazenu je:') }}
            {{Form::select('temp_vode', $temperatura)}}
            <br>
            <br>
            {{ Form::label('ubaceno_flokulanta', 'Količina ubačenog flokulanta u gramima:') }}
            {{Form::select('ubaceno_flokulanta', $flokulant)}}
            <br>
            <br>
            {{ Form::label('stanje_tekuceg_klora', 'Preostala zaliha tekućeg klora u litrama:') }}
            {{Form::select('stanje_tekuceg_klora', $kemija)}}
            <br>
            <br>
            {{ Form::label('stanje_sumporne_kiseline', 'Preostala zaliha sumporne kiseline u litrama:') }}
            {{Form::select('stanje_sumporne_kiseline', $kemija)}}
            <br>
            <br>
            {{ Form::label('ciscenje_skoljke_bazena_pod', 'Čišćenje školjke bazena pod:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('ciscenje_skoljke_bazena_pod','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('ciscenje_skoljke_bazena_pod','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('ciscenje_skoljke_bazena_zid', 'Čišćenje školjke bazena zid:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('ciscenje_skoljke_bazena_zid','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('ciscenje_skoljke_bazena_zid','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('ciscenje_preljevnih_kanala', 'Čišćenje preljevnih kanala:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('ciscenje_preljevnih_kanala','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('ciscenje_preljevnih_kanala','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('pranje_pjescanog_filtera', 'Pranje pjescanog filtera:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('pranje_pjescanog_filtera','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('pranje_pjescanog_filtera','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('pranje_mehanickog_predfiltera_u', 'Pranje mehaničkog predfiltera usisa:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('pranje_mehanickog_predfiltera_u','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('pranje_mehanickog_predfiltera_u','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            
            {{ Form::label('vizualni_pregled_opreme_za_dk', 'Vizualni pregled opreme za kontrolu i doziranje kemije:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('vizualni_pregled_opreme_za_dk','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('vizualni_pregled_opreme_za_dk','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('vizualni_pregled_sve_ostale_o', 'Vizualni pregled ostale opreme:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('vizualni_pregled_sve_ostale_o','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('vizualni_pregled_sve_ostale_o','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('vizualni_pregled_stanja_bazena_v', 'Vizualni pregled stanja bazena vanjski dio:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('vizualni_pregled_stanja_bazena_v','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('vizualni_pregled_stanja_bazena_v','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('viz_pregl_stanja_str_i_el_o_srt_b', 'Vizualni pregled stanja strojarske i elektro opreme:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('viz_pregl_stanja_str_i_el_o_srt_b','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('viz_pregl_stanja_str_i_el_o_srt_b','ne',true,["class" => "form-group"])}}
            <br>
            <br>
            {{ Form::label('pranje_kompenzacije_bazena', 'Pranje kompenzacije bazena:') }}
            {{ Form::label('da', 'da') }}
            {{Form::radio('pranje_kompenzacije_bazena','da',["class" => "form-group"])}}
            {{ Form::label('ne', 'ne') }}
            {{Form::radio('pranje_kompenzacije_bazena','ne',true,["class" => "form-group"])}}
            <br>
            <br>

            {{ Form::label('body', 'Napomena:') }}
            {{ Form::text('body', null, array('class' => 'form-control')) }}
            <br>

            {{ Form::submit('Potvrdi', array('class' => 'btn btn-success btn-lg btn-block')) }}
            {{ Form::close() }}
        </div>
        </div>
    </div>

@endsection