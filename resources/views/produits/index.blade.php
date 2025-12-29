@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-center ">
  <button type="button" class="btn btn-primary mt-3 col-3 mx-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
        produit
    </button>
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Creation Produit</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('categorie.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">produit</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="nom">

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">prix</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="prix">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="description">

                        </div>
                        <div class="mb-3">
                            <label for="select_cat" class="form-label">categorie</label>
                            <select class="form-select" id="select_cat" name="categorie_id" aria-label="Default select example">
                                <option selected>Selectionnez une categorie</option>
                                @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{$categorie->nom}}</option>

                                @endforeach

                            </select>

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">photo</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="photo">

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
