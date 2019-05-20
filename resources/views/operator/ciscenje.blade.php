@extends('layouts.app')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Pregled čišćenja </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Datum i vrijeme unosa</th>
                    <th>Korisnik</th>
                    <th>Pranje pjescanog filtera</th>
                    <th>Pranje mehaničkog predfiltera usisa</th>
                    <th>Čišćenje školjke bazena pod</th>
                    <th>Čišćenje školjke bazena zid</th>
                    <th>Pranje kompenzacije bazena</th>
                    <th>Napomena</th>
                    
                    
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                 
               
                <tr>

                    <td>{{ $post->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->pranje_pjescanog_filtera  }}</td>
                    <td>{{ $post->pranje_mehanickog_predfiltera_u  }}</td>>
                    <td>{{ $post->ciscenje_skoljke_bazena_pod  }}</td>
                    <td>{{ $post->ciscenje_skoljke_bazena_zid  }}</td>
                    <td>{{ $post->pranje_kompenzacije_bazena  }}</td>
                    <td>{{ $post->body  }}</td>






                   
                </tr>
               
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Dodaj unos</a>

</div>

@endsection


