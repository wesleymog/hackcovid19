@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Hospitais</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://ogimg.infoglobo.com.br/in/21422542-cb7-e25/FT1086A/652/xhospital-de-bonsucesso.jpg.pagespeed.ic.ULkY4cXecM.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Hospital Geral de Bonsucesso</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <button data-toggle="modal" data-target="#exampleModalLong" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://ogimg.infoglobo.com.br/in/21422542-cb7-e25/FT1086A/652/xhospital-de-bonsucesso.jpg.pagespeed.ic.ULkY4cXecM.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">UFRJ</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://ogimg.infoglobo.com.br/in/21422542-cb7-e25/FT1086A/652/xhospital-de-bonsucesso.jpg.pagespeed.ic.ULkY4cXecM.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">UFRJ</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
