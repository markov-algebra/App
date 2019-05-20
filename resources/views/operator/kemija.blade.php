@extends('layouts.app')

@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Pregled ph i Cl vrijednosti </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Datum i vrijeme unosa</th>
                    <th>Korisnik</th>
                    <th>ph</th>
                    <th>Cl</th>
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
                    <td>{{ $post->body  }}</td>


                   
                </tr>
               
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('posts.create') }}" class="btn btn-success">Dodaj unos</a>

</div>

@endsection


