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

                        <form class="theme-form" method="POST" action="{{route('admin.shops.agents.attach',[$shop['id']])}}">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-3 col-form-label" for="exampleFormControlSelect17">Agent</label>
                                <div class="col-sm-9">
                                    <select  class="form-select input-air-primary digits" id="exampleFormControlSelect17" name="user_id">
                                        <option selected > -----</option>

                                        @forelse ($accountAgents as $agent)
                                            <option value="{{$agent['id']}}">{{$agent['firstname'].' '.$agent['name']}}</option>

                                        @empty
                                            <option >Aucun</option>

                                        @endforelse

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

            <div class="col-sm-12">
	            <div class="card">

	                <div class="card-body">

	                    <div class="table-responsive">

	                        <table class="display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th>No.</th>
	                                    <th>Prénom</th>
                                        <th>Nom</th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                             @forelse ($agents as $agent)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{$agent['firstname']}}</td>
                                        <td>{{$agent['name']}}</td>


                                    </tr>
                                 @empty
                                     <div class="alert alert-info">Aucune Boutique pour l'instant!</div>
                                 @endforelse


	                            </tbody>
	                        </table>
	                    </div>
	                </div>
	            </div>
	        </div>
		</div>
	</div>

	@push('scripts')
	<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>

    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>


	@endpush

@endsection
