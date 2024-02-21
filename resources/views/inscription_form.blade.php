@extends('home')

@section('contenuforfait')

<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="/forfaits/inscription" class="text-center">
                            @csrf

                            <div class="form-group">
                                <label for="DateInsc" class="text-dark text-center">Date d'inscription:</label>
                                <input type="date" class="form-control" id="DateInsc" name="DateInsc" value="{{ old('DateInsc') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="TypeFor" class="text-dark text-center">Type de forfait:</label>
                                <input type="text" class="form-control" id="TypeFor" name="TypeFor" value="{{ old('TypeFor', $forfait->TypeFor) }}" readonly required>
                            </div>

                            <div class="form-group">
                                <label for="NumFor" class="text-dark text-center">Numéro de forfait:</label>
                                <input type="number" class="form-control" id="NumFor" name="NumFor" value="{{ $forfait->NumFor }}" readonly required>
                            </div>

                            <div class="form-group">
                                <label for="IdCl" class="text-dark text-center">Identifiant client:</label>
                                <input type="number" class="form-control" id="IdCl" name="IdCl" value="{{ $id }}" readonly required>
                            </div>
                            <button type="submit" class="btn btn-outline-secondary justify-content-center">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
