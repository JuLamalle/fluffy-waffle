@extends('Layouts.adlayout')
@section('title','Sushiland Ajoutez une annonce')
@section('contenu')
<form action="/addarticle" method="post">
{{ csrf_field() }}
<fieldset>     <!--Ajoute un encadré-->
<legend>Add an ad</legend>
    <label for='title' >Title: </label><br>
    <input type="text" name="title" placeholder="--Insert a Title--"><br>
    <label for='category' >Category: </label><br>
    <select name="category" required>
        <option value="">--Please choose a category--</option>
        <option value="Immobilier">Immobilier</option>
        <option value="Nourriture">Nourriture</option>
        <option value="Service">Service</option>
    </select><br>
    <label for='description' >Briefly describe the ad: </label><br>
    <textarea name="description" placeholder="--200 charachters max--"></textarea><br>
    <label for='picture' >Picture: </label><br>
    <input type="text" name="picture" placeholder="--Insert the picture's name--"><br>
    <label for='price' >Your price: </label><br>
    <input type="text" name="price" placeholder="--Insert your price--"><br>
    <label for='location' >Location: </label><br>
    <input type="text" name="location" placeholder="--Insert Location--"><br>

    <input type="submit" name="SubmitButton" placeholder="Submit"> 
</form>

@endsection