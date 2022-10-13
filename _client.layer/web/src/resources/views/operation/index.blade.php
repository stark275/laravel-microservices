@extends('layouts.admin.master')

@section('title')
   Opérations
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
<style>

    .size-15{
        width: 15px;
        height: 15px;
    }
</style>
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Sessions</h3>
		@endslot
		<li class="breadcrumb-item">Opérations</li>

	@endcomponent

	<div class="container-fluid">
	    <div class="row">
	        <!-- Zero Configuration  Starts-->
	        <div class="col-sm-12">
	            <div class="card">

	                <div class="card-body">

	                    <div class="table-responsive">
                            {{-- <a  href="#" class="btn btn-success mb-2 float-end">
                                <i class="size-15" data-feather="plus-circle"></i>
                                Facturer
                              </a> --}}

                              <button class="btn btn-primary mb-2 float-end" type="button" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal">Operation</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Effectuer une opération</h5>
                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="theme-form" method="POST" action="#">
                                            @csrf
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label" for="exampleFormControlSelect17">Type</label>
                                                <div class="col-sm-9">
                                                    <select  class="form-select input-air-primary digits" id="exampleFormControlSelect17" name="type">
                                                            <option value="sell" >Vente</option>
                                                            <option value="refueling" >Ravitaillement</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label" for="exampleFormControlSelect17">Produit</label>
                                                <div class="col-sm-9">
                                                    <select  class="form-select input-air-primary digits" id="exampleFormControlSelect17" name="type">
                                                            @forelse ($products as $prod)
                                                                <option value="sell" >
                                                                    {{$prod['name']}}</option>
                                                            @empty
                                                                <option >Aucun</option>

                                                            @endforelse

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label" for="inputPassword3">Quantité</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="quantity" id="url" type="number" placeholder="" />
                                                </div>
                                            </div>


                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Créer</button>
                                                <button class="btn btn-secondary">Annuler</button>
                                            </div>

                                        </form>

                                    </div>
                                    <div class="modal-footer">
                                        {{-- <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Fermer</button>
                                        <button class="btn btn-secondary" type="button">Effectuer</button> --}}
                                    </div>
                                    </div>
                                </div>
                                </div>
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>No.</th>
	                                    <th>Date</th>
	                                    <th>type</th>
	                                    <th>Produit</th>
	                                    <th>Prix (Fc)</th>
	                                    <th>Taux 1$ / Fc </th>
	                                    <th>Action</th>

	                                </tr>
	                            </thead>
	                            <tbody>
	                             @forelse ($operations as $operation)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$operation['created_at']}}</td>
                                        <td>
                                            @if ($operation['type'] == 'sell')
                                                Vente
                                            @elseif($operation['type'] == 'refueling')
                                                Ravitaillement
                                            @endif
                                        </td>
                                        <td>
                                            {{$operation['price']['product']['name']}}
                                        </td>
                                        <td>{{$operation['price']['amount']}} </td>
                                        <td>2100</td>
                                        <td>
                                            <a href="#" class="btn btn-warning">
                                                <i class="size-15" data-feather="edit"></i>
                                                Modifier
                                            </a>
                                        </td>
                                    </tr>
                                 @empty
                                     <div class="alert alert-info">Aucune facturation pour l'instant!</div>
                                 @endforelse


	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- Zero Configuration  Ends-->
	    </div>
	</div>


	@push('scripts')
	<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	@endpush

@endsection
