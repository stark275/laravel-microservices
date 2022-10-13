
@extends('layouts.admin.master')

@section('title')
   Produits
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
			<h3>Produits</h3>
		@endslot
		<li class="breadcrumb-item">liste</li>

	@endcomponent

	<div class="container-fluid">
	    <div class="row">
	        <!-- Zero Configuration  Starts-->
	        <div class="col-sm-12">
	            <div class="card">

	                <div class="card-body">

	                    <div class="table-responsive">
                            <a  href="{{route('accounts.products.create',[$accountId])}}" class="btn btn-success mb-2 float-end">
                                <i class="size-15" data-feather="plus-circle"></i>
                                Nouveau produit
                              </a>
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>No.</th>
	                                    <th>Nom</th>
	                                    <th>type</th>
	                                    <th>Model</th>
	                                    <th>Marque</th>

	                                    <th>Action</th>

	                                </tr>
	                            </thead>
	                            <tbody>

	                             @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$product['name']}}</td>
                                        <td>{{$product['type']}}</td>
                                        <td>{{$product['model']}}</td>
                                        <td>{{$product['brand']}}</td>
                                        <td style="text-align: center">
                                            <a href="#" class="btn btn-primary">
                                                <i class="size-15" data-feather="info"></i>
                                                Détails
                                            </a>

                                        </td>
                                    </tr>
                                 @empty
                                     <div class="alert alert-info">Aucune Produit pour l'instant!</div>
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
