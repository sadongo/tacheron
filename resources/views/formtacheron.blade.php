@extends('layouts.header')

@section('title')
  Mon entreprise
@endsection
@section('content')



<style>



.centered-bold {
  text-align: center;
  font-weight: bold;
  font-size: 30px;
  color: rgb(26, 158, 81);
}

.user-form {
  width: 600px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  padding-right: 10px; /* Ajoute un espace à droite de la bordure */
  box-sizing: border-box; /* Inclut la bordure dans la largeur totale du formulaire */

}

.left-column {
  float: left;
  width: 50%;
  box-sizing: border-box;
}

.right-column {
  float: right;
  width: 50%;
  padding-left: 10px;
  box-sizing: border-box;
}

.clear {
  clear: both;
}

.centered-row {
  text-align: center;
  margin-top: 20px;
}

.form-row {
  margin-bottom: 10px;
}

label {
  display: inline-block;
  width: 120px;
  text-align: right;
  margin-right: 10px;
}

input[type="text"] {
  width: 250px;
  padding: 5px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

</style>

<br> <br>

<p class="centered-bold">Rempissez le formulaire suivant pour creer un profil tâcheron</p>
<hr>
<br>


<form method="POST" class="user-form">
    @csrf

    <div class="left-column">
    <fieldset>

      <div class="form-row">
        <label for="nom">Nom de l'entreprise:</label>
        <input type="text" id="nom" name="nom" required>
      </div>

      <div class="form-row">
        <label for="prenom">Nom de du responsable:</label>
        <input type="text" id="prenom" name="prenom" required>
      </div>

      <div class="form-row">
        <label for="email">E-mail professionnelle :</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-row">
        <label for="telephone">Téléphone 1 :</label>
        <input type="tel" id="telephone" name="telephone" required>
      </div>
    </fieldset>
</div>

<div class="right-column">
    <fieldset>

        <div class="form-row">
            <label for="telephone">Téléphone 2 :</label>
            <input type="tel" id="telephone" name="telephone" required>
          </div>

        <div class="form-row">
            <label for="telephone">WhatsApp :</label>
            <input type="tel" id="telephone" name="telephone" required>
          </div>

          <div class="form-row">
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>
          </div>

          <div class="form-row">
            <label for="quartier">Quartier :</label>
            <select id="quartier" name="quartier" required>
              <option value="saaba">Saaba</option>
              <option value="nioko1">Nioko1</option>
              <option value="nioko2">Nioko2</option>
              <option value="bilbalogo">Bilbalogo</option>
              <option value="koulouba">Koulouba</option>
              <option value="kamsonghin">Kamsonghin</option>
              <option value="samandin">Samandin</option>
              <option value="kouritenga">Kouritenga</option>
              <option value="dapoya">Dapoya</option>
              <option value="gounghin">Gounghin</option>
              <option value="ouidi">Ouidi</option>
              <option value="paspanga">Paspanga</option>
              <option value="larlé">Larlé</option>
              <option value="kologh naba">Kologh Naba</option>
            </select>
          </div>

      <div class="form-row">
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse" >
      </div>
    </fieldset>
</div>



<div class="clear"></div>

    <div class="centered-row">
      <input type="submit" value="Envoyer">
    </div>
  </form>
  @endsection
