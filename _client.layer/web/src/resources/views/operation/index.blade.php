@extends('layouts.admin.master')

@section('title')
   Opération
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
			<h3>Boutique</h3>
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
                            <a  href="#" class="btn btn-success mb-2 float-end">
                                <i class="size-15" data-feather="plus-circle"></i>
                                Facturer
                              </a>
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
	                             @forelse ($sells as $sell)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>01/11/2022</td>
                                        <td>vente</td>
                                        <td>Piston</td>
                                        <td>12 000 </td>
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
