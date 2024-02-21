@extends('home')

@section('contenuforfait')
    <!-- forfait -->
    @if(session('message')  == null)

    @else
    <div class="alert alert-success" role="alert">

    {{ session('message') }}
    </div>
    @endif
        
        
        @foreach($forfaits  as $forfait)
            <div class="card text-center bg-dark mb-3"   >
                
                <div class="card-header" style="background-color: #0e0e0e;">
                    
                </div>
                
                <div class="card-body " style="background-color: #142d2a;">
                    <h1 class="card-title">Forfait Numéro  : {{ $forfait->NumFor }}</h1>
                    <h3 class="card-text">{{ $forfait->TypeFor }}</h3>
                    <h2 class="card-text">{{ $forfait->Prix }} Dhs</h2>
                    <a href="{{ route('forfait.inscriptionForm', $forfait->NumFor ) }}" class="btn btn-primary">S'inscrire</a>
                </div>
                
                <div class="card-footer text-muted" style="background-color: #0e0e0e;">
                    
                </div>
                
            </div>
    @endforeach
    <!-- End forfait -->
@endsection
