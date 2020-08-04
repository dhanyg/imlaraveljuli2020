@extends('layouts.app')
@section('title', 'Welcome')
    
@section('content')
<h2>SELAMAT DATANG {{ $data['firstname'] }} {{ $data['lastname'] }}</h2>
<h3>Terima kasih telah bergabung di Sanberbook. Social Media kita bersama!</h3>
<a href="/">Home</a>
@endsection