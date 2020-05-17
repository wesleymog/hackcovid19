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
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div style="height: 12xs;" class= "">
                                    <img class="card-img-top align-self-center" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Respirador</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</button>
                                    <br>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <span class="txt-gray arrecadado-txt">
                                            R$ <strong>21.916.595</strong><br>arrecadado
                                    </span>

                                    <span class="txt-gray arrecadado-txt" style="margin-left:10px;">
                                        <strong>88</strong>%
                                        <br>
                                        da meta
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div style="height: 12xs;" class= "">
                                    <img class="card-img-top align-self-center" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Respirador</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</button>
                                    <br>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <span class="txt-gray arrecadado-txt">
                                            R$ <strong>21.916.595</strong><br>arrecadado
                                    </span>

                                    <span class="txt-gray arrecadado-txt" style="margin-left:10px;">
                                        <strong>88</strong>%
                                        <br>
                                        da meta
                                    </span>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div style="height: 12xs;" class= "">
                                    <img class="card-img-top align-self-center" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Respirador</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</button>
                                    <br>
                                    <br>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <span class="txt-gray arrecadado-txt">
                                            R$ <strong>21.916.595</strong><br>arrecadado
                                    </span>

                                    <span class="txt-gray arrecadado-txt" style="margin-left:10px;">
                                        <strong>88</strong>%
                                        <br>
                                        da meta
                                    </span>

                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
