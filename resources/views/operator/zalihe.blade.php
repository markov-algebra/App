@extends('layouts.app')

@section('content')


<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Pregled Zaliha </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Datum i vrijeme unosa</th>
                    <th>Korisnik</th>
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
