@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Universidades</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="/unnamed.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">UFRJ</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div style="height: 18rem;">
                                    <img class="card-img-top" src="https://logodownload.org/wp-content/uploads/2015/02/UFMG-logo.png" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">UFMG</h5>
                                    <p class="card-text">pesquisadores da UFMG buscam 1,6 milhão em doações para desenvolver teste rápido da covid. A expectativa é que um milhão de testes por meses seriam possíveis , caso a pesquisa receba investimentos.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</button>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <div style="height: 18rem;" class= "">
                                    <img class="card-img-top align-self-center" src="https://www.ufpr.br/portalufpr/wp-content/uploads/2015/11/ufpr_alta.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">USP</h5>
                                    <p class="card-text">: as pesquisas desenvolvidas pela instituição são no desenvolvimento de vacina e novos fármacos, ações diagnósticas, material de proteção para pacientes e profissionais de saúde e desenvolvimento de equipamentos.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>
                        <!-- The Modal -->
                        <div class="modal fade"id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            
                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                
                                <!-- Modal body -->
                                <div class="modal-body">
                                Modal body..
                                </div>
                                
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
