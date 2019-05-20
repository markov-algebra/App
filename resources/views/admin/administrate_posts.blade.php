@extends('layouts.app')
@section('content')



<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Administracija i pregled Zapisnika <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
    <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

        <thead>
                <tr>
                    <th>Vrijeme i datum unosa</th>
                    <th>Korisnik</th>
                    <th>ph</th>
                    <th>Cl</th>
                    <th>Temp vode</th>
                    <th>Pranje pjescanog filtera</th>
                    <th>Pranje mehaničkog predfiltera usisa</th>
                    <th>Vizualni pregled opreme za kontrolu i doziranje kemije</th>
                    <th>Vizualni pregled ostale opreme</th>
                    <th>Vizualni pregled stanja bazena vanjski dio</th>
                    <th>Vizualni pregled stanja strojarske i elektro opreme</th>
                    <th>Čišćenje školjke bazena pod</th>
                    <th>Čišćenje školjke bazena zid</th>
                    <th>Pranje komp. bazena</th>
                    <th>Količina ubačenog flokulanta u gramima</th>
                    <th>Preostala zaliha tekućeg klora u litrama</th>
                    <th>Preostala zaliha sumporne kiseline u litrama</th>
                    <th>Napomena</th>
                    <th>Unos je izmjenjen / vrijeme</th>
                    <th>Operacije</th>
                    
                    
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
                    @if ($post->updated_at ==$post->created_at) <td><center>NE</td>
                    @else 
                    <td><center><b>DA</b><br>{{ $post->updated_at->format('F d, Y h:ia') }}</h3></td>
                    @endif
                    <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                    {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td>
                </tr>
               
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Dodaj unos</a>

</div>

@endsection
