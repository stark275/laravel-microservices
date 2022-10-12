@extends('admin.authentication.master')

@section('title')Connexion

@endsection

@push('css')
@endpush

@section('content')
    <section>
	    <div class="container-fluid">
	        <div class="row">
	            <div class="col-xl-12 p-0">
	                <div class="login-card">
	                    <form class="theme-form login-form" method="POST" action="{{route('authenticate')}}">
                            @csrf
	                        <h4>Authentification</h4>
	                        <h6>Bienvenu(e)! Connectez-vous à votre compte</h6>
	                        <div class="form-group">
	                            <label>Email </label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-email"></i></span>
	                                <input class="form-control" type="email" name="email" required="" placeholder="mon-adresse@gmail.com" />
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label>Mot de passe</label>
	                            <div class="input-group">
	                                <span class="input-group-text"><i class="icon-lock"></i></span>
	                                <input class="form-control" type="password" name="password" required="" placeholder="*********" />
	                                <div class="show-hide"><span class="show"> </span></div>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="checkbox">
	                                <input id="checkbox1" type="checkbox" />
	                                <label class="text-muted" for="checkbox1">Se rappeler de moi</label>
	                            </div>
	                            <a class="link" href="#">Mot de passe oublié</a>
	                        </div>
	                        <div class="form-group">
                                <button class="btn btn-primary btn-block"  type="submit">Connexion</button>
                            </div>
	                        <div class="login-social-title">
	                            <h5>Autre</h5>
	                        </div>

	                        <p>Vous n'avez pas de compte?<a class="ms-2" href="#">Contactez le comité</a></p>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>


    @push('scripts')
    @endpush

@endsection
