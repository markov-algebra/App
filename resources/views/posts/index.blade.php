@extends('layouts.app')
@section('content')



<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Pregled Zapisnika </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Datum i vrijeme unosa</th>
                    <th>Korisnik</th>
                    <th>ph</th>
                    <th>Cl</th>
                    <th>Temperatura vode</th>
                    <th>Pranje pjescanog filtera</th>
                    <th>Pranje mehaničkog predfiltera usisa</th>
                    <th>Vizualni pregled opreme za kontrolu i doziranje kemije</th>
                    <th>Vizualni pregled ostale opreme</th>
                    <th>Vizualni pregled stanja bazena vanjski dio</th>
                    <th>Vizualni pregled stanja strojarske i elektro opreme</th>
                    <th>Čišćenje školjke bazena pod</th>
                    <th>Čišćenje školjke bazena zid</th>
                    <th>Pranje kompenzacije bazena</th>
                    <th>Količina ubačenog flokulanta u gramima</th>
                    <th>Preostala zaliha tekućeg klora u litrama</th>
                    <th>Preostala zaliha sumporne kiseline u litrama</th>
                    <th>Napomena</th>
                    
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                 
               
                <tr>

                    <td>{{ $post->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->ph }}</td>
                    <td>{{ $post->Cl  }}</td>
                    <td>{{ $post->temp_vode  }}</td>
                    <td>{{ $post->pranje_pjescanog_filtera  }}</td>
                    <td>{{ $post->pranje_mehanickog_predfiltera_u  }}</td>
                    <td>{{ $post->vizualni_pregled_opreme_za_dk  }}</td>
                    <td>{{ $post->vizualni_pregled_sve_ostale_o  }}</td>
                    <td>{{ $post->vizualni_pregled_stanja_bazena_v  }}</td>
                    <td>{{ $post->viz_pregl_stanja_str_i_el_o_srt_b  }}</td>
                    <td>{{ $post->ciscenje_skoljke_bazena_pod  }}</td>
                    <td>{{ $post->ciscenje_skoljke_bazena_zid  }}</td>
                    <td>{{ $post->pranje_kompenzacije_bazena  }}</td>
                    <td>{{ $post->ubaceno_flokulanta  }}</td>
                    <td>{{ $post->stanje_tekuceg_klora  }}</td>
                    <td>{{ $post->stanje_sumporne_kiseline  }}</td>
                    <td>{{ $post->body  }}</td>






                   
                </tr>
               
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Dodaj unos</a>

</div>

@endsection
