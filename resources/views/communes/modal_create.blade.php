<div class="modal fade" id="create_commune" tabindex="-1" aria-labelledby="create_communeLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="create_communeLabel">Ajouter une Commune</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form  method="post" action="{{ route('communes.store') }}">
            @csrf
            <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                    @endif
                <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nom de la commune:</label>
                <input type="text" name="nom"class="form-control" id="recipient-name">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
      </div>
    </div>
  </div>
