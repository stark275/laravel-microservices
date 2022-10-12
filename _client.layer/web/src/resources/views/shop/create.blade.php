@extends('layouts.admin.master')

@section('title')
 Nouvelle boutique
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Nouvelle boutique</h3>
		@endslot
		<li class="breadcrumb-item">Boutique</li>
		<li class="breadcrumb-item active">Nouveau</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-12">

                <div class="card">

                    <div class="card-body">
                        <form class="theme-form" method="POST" action="{{route('admin.shops.store')}}">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputPassword3">Nom de la boutique</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="name" id="url" type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="inputEmail3">Domaine</label>
                                <div class="col-sm-9">
                                    <input class="form-control" name="type" id="inputEmail3" type="text" placeholder="" />
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
