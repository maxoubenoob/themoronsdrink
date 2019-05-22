@extends('templates.main')

@section('title', 'Home')

@section('main')

    <div class="title d-flex justify-content-center align-items-center text-light">
        <h1 style="text-align: center;">
            The Morons Drink
            <br>
            <span class="text-warning rules">Make two teams, the team who lose drink</span>
        </h1>
    </div>
    
    <!-- Les différents boutons -->
    <div class="container text-center container-buttons text-light">
        
        <div id="getCategory" class="my-3"></div>
        <div id="getQuestion" class="my-3"></div>
        <div id="getTime" class="my-3 text-danger"></div>
        <div id="getAnswer" class="my-3 text-success"></div>
        
        <button class="btn-primary" data-url="{{ route('data.get') }}">
            Play !
        </button>     
        
    </div>

@endsection