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
                                <img class="card-img-top" src="https://lh3.googleusercontent.com/proxy/O4Wy6tiIFtPQ6Gj0gex5rF1aUuxjJHZc_s3kvtjfRMEi4zRr_BNWqkKitMzRqryTEAIppfP2DIDaUgeR6yQSPRx4uh-2JBcF50_wdMM7OJ66" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">UFRJ</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/materiais" class="btn btn-success">Doar</a>
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
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/materiais" class="btn btn-success">Doar</a>
                                    <button data-toggle="modal" data-target="#myModal" class="btn btn-primary">Saber mais...</a>
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
                                    <h5 class="card-title">UFPR</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="/materiais" class="btn btn-success">Doar</a>
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
