<!-- create.blade.php -->

@extends('includes.layout')

@section('container')

    <div class="container w-75">
        <div class="row">
            <h1>Ajouter une Commune</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
        </div>
        <div class="row">
            <form method="post" action="{{ route('communes.store') }}">
                @csrf
                <div class="mb-3">
                  <label for="commune_nom" class="form-label">Nom de la Commune</label>
                  <input type="text" name="nom" class="form-control" id="commune_nom">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Departement</label>
                  <select class="form-select" name="id_departement">
                    <option selected>Selectionner le département</option>
                    @foreach($departements as $departement)
                        <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                    @endforeach
                </select>
                </div>

                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>

    </div>

@endsection
