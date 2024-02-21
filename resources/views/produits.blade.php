@extends('home')

@section('contenuBoutique')
    <!-- product -->
    @if(session('message')  == null)

    @else
    <div class="alert alert-success" role="alert">

    {{ session('message') }}
    </div>
    @endif
    @if(session('msg')  == null)

    @else
    <div class="alert alert-success" role="alert">

    {{ session('msg') }}
    </div>
    @endif
    <div class="section " id="product">
        
        <div class="container flex">
            <div class="product-grid row">
                @foreach($produits as $produit)
                <div class="col-sm-4">
                    <div class="product mb-3" >
                    <form method="POST" action="{{ route('cart.store', ['produit' => $produit->IdPr, 'Prix' => $produit->Prix]) }}">
                        @csrf
                        <div class="product mb-3" >
                            <img src="{{ asset($produit->imagePr) }}" alt="Image du produit" />
                            <h3 class="secondary mb">{{ $produit->NomPr }}</h3>
                            <p class="tertiary mb">{{ $produit->DescPr }}</p>
                            <p class="tertiary mb">{{ $produit->Prix }} Dhs</p>
                            
                            <input type="number" name="QteCommander" min="1" required/>
                            <button type="submit" class="btn mt" >ajouter au panier</button>
                        </div>
                    </form>
                    </div> 
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center" >
            <span class="d-flex bg-wh">{{$produits->links()}}</span>
        </div>
        <nav aria-label="Page navigation example">
</nav>
    </div>
    <!-- End product -->
@endsection
    