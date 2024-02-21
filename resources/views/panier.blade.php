@extends('home')

@section('contenuPanier')
<div class="section" id="product">
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-white">Image</th>
                    <th class="text-white">Nom</th>
                    <th class="text-white">Description</th>
                    <th class="text-white">Prix unitaire</th>
                    <th class="text-white">Quantité</th>
                    <th class="text-white">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    @foreach ($produits[$commande->IdCom] as $produit)
                        <tr>
                            <td class="product"><img src="{{ asset($produit->imagePr) }}" alt="Image du produit" /></td>
                            <td class="text-white">{{ $produit->NomPr }}</td>
                            <td class="text-white">{{ $produit->DescPr }}</td>
                            <td class="text-white">{{ $produit->Prix }} Dhs</td>
                            <td class="text-white">{{ $commande->QteCommander }}</td>
                            <td class="text-white">{{ $produit->Prix * $commande->QteCommander }} Dhs</td>
                        </tr>
                    @endforeach  
                @endforeach
                <tr>
                    <th colspan="4"></th>
                    <th class="text-white">Total:</th>
                    <td class="text-white">{{ $totalQuantity }} Dhs</td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{ route('deleteAllRecords')}}" class="btn btn-primary">Valider commande</a>
        </div>
    </div>
</div>
@endsection