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
                                    <h5 class="card-title">Hospital de São Paulo</h5>
                                    <p class="card-text">Os médicos, enfermeiros e profissionais da saúde da SPDM estão na linha de frente do combate ao vírus e necessitam de materiais e equipamentos para garantir sua proteção e o atendimento às vítimas da pandemia de COVID-19.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://ogimg.infoglobo.com.br/in/21422542-cb7-e25/FT1086A/652/xhospital-de-bonsucesso.jpg.pagespeed.ic.ULkY4cXecM.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Hospital das Clínicas</h5>
                                    <p class="card-text">O Hospital das Clínicas da Faculdade de Medicina de São Paulo está na linha de frente do combate ao avanço da pandemia. Por isso criou o Movimento #VemPraGuerra, um canal de doações para apoiar o HC na luta mais importante da sua história.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="https://ogimg.infoglobo.com.br/in/21422542-cb7-e25/FT1086A/652/xhospital-de-bonsucesso.jpg.pagespeed.ic.ULkY4cXecM.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Hospital 28 de agosto</h5>
                                    <p class="card-text">em Manaus: O Hospital está sem os materiais necessários para atender os pacientes da covid-19 internados nos leitos de UTI (Unidade de Terapia Intensiva). Os índices de ocupação desse tipo de leito na cidade superam os 95%.</p>
                                    <a href="/epis" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
