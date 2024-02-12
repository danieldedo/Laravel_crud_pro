@extends('includes.layout')

@section('container')

<div class="d-flex justify-content-around align-items-center">

    <form  method="post" action="{{ route('communes.update', $commune->id ) }}" style="width: 30rem;">
        <h1>Modifier une commune</h1>
        <!-- Name input -->
        <div data-mdb-input-init class="form-outline mb-4">
            @csrf
            @method('put')
            <label for="name">Nom :</label>
            <input type="text" class="form-control" name="nom" value="{{ $commune->nom }}" />
        </div>

        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label for="departement">Departement:</label>
            <select name="id_departement" class="form-control form-control-sm" id="exampleFormControlSelect3">
                <option value="{{$commune->departement->id}}">{{ $commune->departement->nom }}</option>
                @foreach ($departements as $departement)
                @if ($commune->departement->id == $departement->id)

                @else
                <option value="{{$departement->id}}">{{ $departement->nom }}</option>
                @endif
                @endforeach
            </select>
        </div>

        <!-- Submit button -->
        <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Modifier</button>
      </form>

</div>

@endsection
