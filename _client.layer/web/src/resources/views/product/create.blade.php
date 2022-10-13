@extends('layouts.admin.master')

@section('title')
 Nouveau Produit
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Nouveau Produit</h3>
		@endslot
		<li class="breadcrumb-item">Produit</li>
		<li class="breadcrumb-item active">Nouveau</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-12">

                <div class="card">

                    <div class="card-body">
                        <form class="theme-form" method="POST" action="{{route('accounts.products.store',[$accountId])}}">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="exampleFormControlSelect17">Produit</label>
                                <div class="col-sm-9">
                                    <select  class="form-select input-air-primary digits" id="exampleFormControlSelect17" name="type">
                                        <option selected > -----</option>
                                            <option value="good" >Bien</option>
                                            <option value="service" >Service</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputPassword3">Nom du produit</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" id="url" type="text" placeholder="" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputPassword3">Modèle</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="model" id="url" type="text" placeholder="" />
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputPassword3">Marque</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="brand" id="url" type="text" placeholder="" />
                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Créer</button>
                                <button class="btn btn-secondary">Annuler</button>
                            </div>

                        </form>
                    </div>

                </div>

			</div>


		</div>
	</div>

	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
	@endpush

@endsection
