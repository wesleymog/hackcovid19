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
                                <input type="text" id="value1"></input>
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
                                <input type="text" id="value2"></input>
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
                                <input type="text" id="value3"></input>
                            </div>

                            <div class="col-md-2">
                                <br>
                                <p>R$ 25,00</p>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="p-6"><strong><label for="sum">Total:</label> <input type="number" name="sum" id="sum" class="form-control" readonly /></strong></div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar ajudando</a>
                        </div>
                        <br>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="btn btn-success">Doar <i class="fa fa-angle-right"></i></a>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
            $('#value1, #value2, #value3').keyup(function(){
               var value1 = parseFloat($('#value1').val()) || 0;
               var value2 = parseFloat($('#value2').val()) || 0;
               var value3 = parseFloat($('#value3').val()) || 0;
               $('#sum').val(25*(value1 + value2+ value3));
            });
         });
</script>
@endsection
