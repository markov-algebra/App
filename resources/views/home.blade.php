@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>

            

@if (auth()->user()->hasRole('admin'))
<h2><a href="{{ url('/admin') }}">Admin Operacije</a></h2>
@elseif (auth()->user()->hasRole('operator'))
<h2><a href="{{ url('/operator') }}">Operator Zadaci</a></h2>
@else (!Auth::guest())



@endif
            </div>
        </div>
    </div>
</div>
@endsection
