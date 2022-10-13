
@extends('layouts.admin.master')

@section('title')
{{$shop['name']}}
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
			<h3>{{$shop['name']}}</h3>
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
                            <a  href="{{route('admin.shops.create')}}" class="btn btn-success mb-2 float-end">
                                <i class="size-15" data-feather="plus-circle"></i>
                                Nouvelle session de travail
                              </a>
	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>No.</th>
	                                    <th>Date</th>
	                                    <th>Status</th>
	                                    <th>Recette</th>

	                                    <th>Action</th>

	                                </tr>
	                            </thead>
	                            <tbody>
	                             @forelse ($sessions as $session)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$session['created_at']}}</td>
                                        <td>{{$session['status']}}</td>
                                        <td>100 240 Fc</td>

                                        <td style="text-align: center">

                                            <a href="{{route('sessions.operations.index',[($session['id'])])}}" class="btn btn-primary">
                                                <i class="size-15" data-feather="layers"></i>
                                                Opérations
                                            </a>

                                        </td>
                                    </tr>
                                 @empty
                                     <div class="alert alert-info">Aucune Session pour l'instant!</div>
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
