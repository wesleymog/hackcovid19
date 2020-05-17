@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Materiais</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"><img class="img-responsive" src="http://placehold.it/100x100">
                            </div>
                            <div class="col-md-5">
                                <p><strong>Material 1</strong></><p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti voluptates blanditiis dolorem expedita! Maiores laudantium, sunt, magni assumenda laborum possimus hic ipsa aut, dicta voluptatibus eius? Fugit impedit in nobis?</p>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <input type="text"></input>
                            </div>

                            <div class="col-md-2">
                                <br>
                                <p>R$ 25,00</p>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><img class="img-responsive" src="http://placehold.it/100x100">
                            </div>
                            <div class="col-md-5">
                                <p><strong>Material 1</strong></><p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti voluptates blanditiis dolorem expedita! Maiores laudantium, sunt, magni assumenda laborum possimus hic ipsa aut, dicta voluptatibus eius? Fugit impedit in nobis?</p>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <input type="text"></input>
                            </div>

                            <div class="col-md-2">
                                <br>
                                <p>R$ 25,00</p>
                            </div>

                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-2"><img class="img-responsive" src="http://placehold.it/100x100">
                            </div>
                            <div class="col-md-5">
                                <p><strong>Material 1</strong></><p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti voluptates blanditiis dolorem expedita! Maiores laudantium, sunt, magni assumenda laborum possimus hic ipsa aut, dicta voluptatibus eius? Fugit impedit in nobis?</p>
                            </div>
                            <div class="col-md-3">
                                <br>
                                <input type="text"></input>
                            </div>

                            <div class="col-md-2">
                                <br>
                                <p>R$ 25,00</p>
                            </div>

                        </div>
                        <div class="row">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
