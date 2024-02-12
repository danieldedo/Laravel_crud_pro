@extends('includes.layout')

@section('nav-active')
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->

@endsection

@section('page-name')
    Dashboard
@endsection

@section('container')

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">

                Dashboard

            </h1>
        </div>
        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nombre de départements</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Nombre de Communes</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">77</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Nombre d'arrondissements
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">545 </div>
                                    </div>
                                    {{-- <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Nombre de ville</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">15</div>
                            </div>
                            {{-- <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->


        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class=" m-0 font-weight-bold text-primary">Liste des communes</h6>
                {{-- <a href="{{ route('communes.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus-circle fa-sm text-white-50"></i> Ajouter</a> --}}
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_commune"><i
                    class="fas fa-plus-circle fa-sm text-white-50"></i> Ajouter</button>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">#</th>
                                <th scope="col">Nom de la commune</th>
                                <th scope="col">Département</th>

                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">#</th>
                                <th scope="col">Nom de la commune</th>
                                <th scope="col">Département</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 0; ?>

                            @foreach ($communes as $commune)
                                <tr>
                                    <td>{{ $i += 1 }}</td>
                                    {{-- <td>{{ $commune->id }}</td> --}}
                                    <td>{{ $commune->nom }}</td>
                                    <td>{{ $commune->departement->nom }}</td>

                                    <td>
                                        <a class="btn btn-success" href="{{ route('communes.edit', $commune->id) }}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            Modifier
                                        </a>

                                        <a class="btn btn-danger" href="#delete{{ $commune->id }}" data-bs-toggle="modal" type="button">
                                            <i class="fa-solid fa-trash-can"></i>
                                            Supprimer
                                        </a>

                                        {{-- <a class="btn btn-danger" href="{{ route('communes.destroy', $commune->id) }}">
                                            <i class="fa-solid fa-trash-can"></i>
                                            Supprimer
                                        </a> --}}
                                    </td>
                                </tr>
                                @include('communes.delete')
                            @endforeach
                        </tbody>
                    </table>
                     {{-- <div class="text-center">
                        {{ $communes->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection





