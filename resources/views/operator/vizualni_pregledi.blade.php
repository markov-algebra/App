@extends('layouts.app')

@section('content')



<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Vizualni pregledi </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Datum i vrijeme unosa</th>
                    <th>Korisnik</th>
                    <th>Vizualni pregled opreme za kontrolu i doziranje kemije</th>
                    <th>Vizualni pregled ostale opreme</th>
                    <th>Vizualni pregled stanja bazena vanjski dio</th>
                    <th>Vizualni pregled stanja strojarske i elektro opreme</th>
                    <th>Napomena</th>
                    
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                 
               
                <tr>

                    <td>{{ $post->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{ $post->user->name }}</td>                  
                    <td>{{ $post->vizualni_pregled_opreme_za_dk  }}</td>
                    <td>{{ $post->vizualni_pregled_sve_ostale_o  }}</td>
                    <td>{{ $post->vizualni_pregled_stanja_bazena_v  }}</td>
                    <td>{{ $post->viz_pregl_stanja_str_i_el_o_srt_b  }}</td>
                    <td>{{ $post->body  }}</td>

                   
                </tr>
               
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Dodaj unos</a>

</div>

@endsection
