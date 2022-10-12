@extends('layouts.admin.master')

@section('title')
 Mettre jour la boutique
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3> Mettre jour la boutique</h3>
		@endslot
		<li class="breadcrumb-item">Boutique</li>
		<li class="breadcrumb-item active">Mise à jour</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-12">

                <div class="card">

                    <div class="card-body">
                        <form class="theme-form" method="POST" action="{{route('admin.shops.update',[$shop['id']])}}">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputPassword3">Nom</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" value="{{$shop['name']}}"   id="url" type="text"  placeholder="" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputEmail3">Type</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="type" value="{{$shop['type']}}"  id="inputEmail3"  type="text" placeholder="" />
                                </div>
                            </div>


                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Actualiser</button>
                                <button class="btn btn-secondary">Annuler</button>
                            </div>

                        </form>
                    </div>

                </div>

			</div>
		</div>
	</div>
    <div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-12">

                <div class="card">
                    <div class="card-body">
                    <h3><strong>Affectation</strong> </h3><br>

                        <form class="theme-form" method="POST" action="">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="exampleFormControlSelect17">Culte</label>
                                <div class="col-sm-9">
                                    <select class="form-select input-air-primary digits" id="exampleFormControlSelect17">
                                        <option>Premier culte</option>
                                        <option>Deuxième culte</option>
                                        <option>Troisième culte</option>

                                      </select>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="exampleFormControlSelect17">Classe</label>
                                <div class="col-sm-9">
                                    <select class="form-select input-air-primary digits" id="exampleFormControlSelect17">
                                        <option>Niveau 1</option>
                                        <option>Niveau 2</option>
                                        <option>Niveau 3</option>
                                        <option>Niveau 4</option>
                                        <option>Niveau 5</option>

                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Actualiser</button>
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
