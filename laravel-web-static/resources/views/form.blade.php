@extends('layouts.app')
@section('title', 'Register')

@section('content')
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome" method="post">
    @csrf
    Firstname:
    <br><br>
    <input type="text" name="firstname" id="firstname">
    <br><br>
    Lastname:
    <br><br>
    <input type="text" name="lastname" id="lastname">
    <br><br>
    Gender:
    <br><br>
    <input type="radio" name="gender" value="Male" id="gender-male">
    <label for="gender-male">Male</label>
    <br>
    <input type="radio" name="gender" value="Female" id="gender-female">
    <label for="gender-female">Female</label>
    <br>
    <input type="radio" name="gender" value="Other" id="gender-other">
    <label for="gender-other">Other</label>
    <br><br>
    Nationality:
    <br><br>
    <select name="nationality" id="nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="English">English</option>
        <option value="Other">Other</option>
    </select>
    <br><br>
    Language Spoken:
    <br><br>
    <input type="checkbox" name="language" id="language-indonesia" value="indonesia">
    <label for="language-indonesia">Bahasa Indonesia</label>
    <br>
    <input type="checkbox" name="language" id="language-english" value="english">
    <label for="language-english">English</label>
    <br>
    <input type="checkbox" name="language" id="language-other" value="other">
    <label for="language-other">Other</label>
    <br><br>
    Bio:
    <br><br>
    <textarea name="bio" id="bio" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Sign Up</button>
</form>
@endsection