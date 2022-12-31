@extends('master')
@section('ListaQualidade')
<div class="container text-center bm">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('img/icon/icons8-happy-64.png')}}" alt="" srcset="">
                <h3 class="title-icon">100% de satisfação</h3>
                <p class="DescIcon">A satisfação dos nossos clientes é a nossa prioridade!</p>
            </div>
            <div class="col-4">
                <img src="{{asset('img/icon/icons8-like-64.png')}}" alt="">
                <h3 class="title-icon">Serviço de Excelencia</h3>
                <p class="DescIcon">Damos o nosso máximo para fazer um serviço de qualidade.</p>
            </div>
            <div class="col-4">
               <img src="{{asset('img/icon/icons8-relogio-64.png')}}" alt="">
               <h3 class="title-icon">Cumprimos com os Prazos</h3>
               <p class="DescIcon">Entregamos os projetos dentro dos prazos estabelecidos com o cliente!</p>

            </div>
        </div>

    </div>
    <hr>
@endsection 
@section('listaColaboradores')
{{--Lista de icons de colaboradores--}}
    <div class="container logoColaborador">
        <img src="{{asset('img/kalil.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
        <img src="{{asset('img/kalil.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
        <img src="{{asset('img/kalil.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
        <img src="{{asset('img/kalil.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
     
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
        </div>

    </div>
@endsection