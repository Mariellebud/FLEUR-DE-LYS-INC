@extends('layouts.auth')
@section('title','login')

@section('content')
<form method="POST" action="{{ route('login') }}" class="signin-form">
	@csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">{{ __('Adresse email') }}</label>
			      			<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre email" value="{{ old('email') }}" required autocomplete="email" autofocus>
							  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">{{ __('Mot de passe') }}</label>
		              <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Votre mot de passe" >
					  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">{{ __('connexion') }}</button>
						@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Rappelez-moi
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Mot de passe oublier</a>
									</div>
		            </div>
					
	 </form>
@endsection
@section ('scripts')

<script src="{{asset('assets-admin/js/jquery.min.js')}}"></script>
  <script src="{{asset('assets-admin/js/popper.js')}}"></script>
  <script src="{{asset('assets-admin/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets-admin/js/main.js')}}"></script>

@endsection


