@extends('layouts.header')

@section('title')
  Electricité
@endsection
@section('content')
<br> <br>
<h1 >Créer une entreprise</h1>
<br> <br>
	<!-- Le formulaire est géré par la route "entreprises.store" -->
	<form method="POST" action="{{ route('entreprises.store') }}" enctype="multipart/form-data" >

		<!-- Le token CSRF -->
		@csrf

		<p>
			<label for="nom" >Nom de l'entreprise </label><br/>
			<input type="text" name="nom" value="{{ old('nom') }}"  id="nom" >

			<!-- Le message d'erreur pour "nom" -->
			@error("nom")
			<div>{{ $message }}</div>
			@enderror
		</p>


		<p>
			<label for="responsable" >Nom du responsable</label><br/>
			<input type="text" name="responsable" value="{{ old('responsable') }}"  id="responsable" >

			<!-- Le message d'erreur pour "responsable" -->
			@error("responsable")
			<div>{{ $message }}</div>
			@enderror
		</p>

        <p>
			<label for="domaine" >Selectionnez un domaine</label><br/>
			<input type="text" name="domaine" value="{{ old('domaine') }}"  id="domaine" >

			<!-- Le message d'erreur pour "responsable" -->
			@error("responsable")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="telephone" >Telephone</label><br/>
			<input type="text" name="telephone" value="{{ old('telephone') }}"  id="telephone" >

			<!-- Le message d'erreur pour "telephone" -->
			@error("telephone")
			<div>{{ $message }}</div>
			@enderror
		</p>


		<p>
			<label for="addresse" >Addersse</label><br/>
			<input type="text" name="addresse" value="{{ old('addresse') }}"  id="addresse" >

			<!-- Le message d'erreur pour "addresse" -->
			@error("addresse")
			<div>{{ $message }}</div>
			@enderror
		</p>


		<p>
			<label for="ville" >Ville</label><br/>
			<input type="text" name="ville_id" value="{{ old('ville_id') }}"  id="ville" >

			<!-- Le message d'erreur pour "ville" -->
			@error("ville")
			<div>{{ $message }}</div>
			@enderror
		</p>


		<p>
			<label for="quartier" >Quartier</label><br/>
			<input type="text" name="quartier_id" value="{{ old('quartier_id') }}"  id="quartier" >

			<!-- Le message d'erreur pour "quartier" -->
			@error("quartier")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<p>
			<label for="description" >description</label><br/>
			<textarea name="description" id="description" lang="fr" rows="10" cols="50" placeholder="Décrivez votre entreprise" >{{ old('description') }}</textarea>

			<!-- Le message d'erreur pour "description" -->
			@error("description")
			<div>{{ $message }}</div>
			@enderror
		</p>

		<input type="submit" name="valider" value="Valider" >

	</form>

    @endsection
