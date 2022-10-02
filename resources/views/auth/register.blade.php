@extends('layouts.register')
@section('title','inscription')

@section('content')
<form method="POST" action="{{ route('register') }}" class="signin-form">
	@csrf			      		<div class="form-group mb-3">
			      			<label class="label" for="name">{{ __('Nom') }}</label>
                              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                              @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Prenom') }}</label>
                            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>


                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror						
                        </div>

						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Téléphone') }}</label>
                            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                            @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

						<div class="form-group mb-3">
							<label class="label" for="name">>{{ __('Ville') }}</label>
                            <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

@error('ville')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                        </div>

						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Arrondissement') }}</label>
                            <input id="arron" type="text" class="form-control @error('arron') is-invalid @enderror" name="arron" value="{{ old('arron') }}" required autocomplete="arron" autofocus>

                            @error('arrondissement')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror 
                                </div>

						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Quartier') }}</label>
                            <input id="quartier" type="text" class="form-control @error('quartier') is-invalid @enderror" name="quartier" value="{{ old('quartier') }}" required autocomplete="quartier" autofocus>

                            @error('quartier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       </div>

						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Adresse') }}</label>
                            <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>

@error('adresse')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                        </div>
						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Addresse Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
					
		           		<div class="form-group mb-3">
		            		<label class="label" for="password">{{ __('Mot de passe') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

						<div class="form-group mb-3">
							<label class="label" for="name">{{ __('Confirmé mot de passe') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

		           	    <div class="form-group">
		            		<button type="submit" class="form-control btn btn-primary rounded submit px-3"> {{ __('inscription') }}</button>
		            	</div>

		           		 <div class="form-group d-md-flex">
		            			<div class="w-50 text-left">
			            			<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
								</div>

								<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
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
