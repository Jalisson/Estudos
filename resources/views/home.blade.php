@extends('master')
@section('ListaQualidade')
<div class="container text-center bm">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('img/icon/icons8-happy-64.png')}}" alt="" srcset="">
                <h3 class="title-icon">100% de satisfação</h3>
                <p class="Desc">A satisfação dos nossos clientes é a nossa prioridade!</p>
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
    <div class="container espacoContainer">
        <div class="row align-items-center logoColaborador">
            <img src="{{asset('img/jpnebcod.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
            <img src="{{asset('img/dondocaPortfolio.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
            <img src="{{asset('img/kalil.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
        <!-- <img src="{{asset('img/kalil.png')}}" alt="" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"> -->
        </div>
    </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Mensagem</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Mensagem</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
        </div>

@endsection
{{--NOSSOS SERVIÇOS--}}
@section('nossosServicos')
<div class="container text-center">
    <div class="row espacoContainer">
     <h2 >Nossos <span>Serviços</span></h2>
     <p class="Desc">Veja o que a nossa empresa pode fazer para você ter sucesso!</p>
    </div>
</div>
<div class="container text-center descServicos">
        <div class="row">
            <div class="col-3">
                <img src="{{asset('img/home/Online-wishes-list-pana-1536x1536.png')}}" alt="" srcset="">
                <h3 class="title-icon">Desenvolvimento de Aplicativos</h3>
                <p class="Desc">Desenvolvimento de Aplicativos para Celulares Android e iOS (iPhone).</p>
            </div>
            <div class="col-3">
                <img src="{{asset('img/home/Personal-site-pana-1536x1536.png')}}" alt="">
                <h3 class="title-icon">Criação de Sites</h3>
                <p class="Desc">Sites otimizados para serem rápidos e de alto desempenho com uma estrutura e código bem escrito.</p>
            </div>
            <div class="col-3">
               <img src="{{asset('img/home/In-no-time-pana-1536x1536.png')}}" alt="">
               <h3 class="title-icon">Loja Virtual / E-commerce</h3>
               <p class="Desc">Criação de Loja Online, venda produtos ou receba pagamentos através da Internet.</p>

            </div>
            <div class="col-3">
               <img src="{{asset('img/home/Software-code-testing-pana-1536x1536.png')}}" alt="">
               <h3 class="title-icon">Criação de Sistemas</h3>
               <p class="Desc">Fazemos a analise do seu problema e criamos a solução em software.</p>
            </div>
        </div>
    </div>
    <div class="container espacoContainer">
        <div class="row">
            <div class="col-6">
                <h2>A NEVCOD tem <br><span>o que você precisa</span></h2>
                <p class="Desc">
                 Aqui você tem benefícios que pode te ajudar a manter
                 o seu projeto funcionando. Venha conhecer a NEVCLOUD, 
                 o nosso serviço de hospedagem.
                </p>
                <div class="row">
                    <div class="col-2">
                        <img class="imgIcon" src="{{asset('img/icon/icons8-ssl-certificate-60.png')}}" alt="">
                    </div>
                    <div class="col-10">
                        <h3 class="tituloDescNevCold">CERTIFICADO DE SEGURANÇA SSL</h3>
                        <p class="Desc">Navegação segura com SSL Grátis para todas as suas páginas.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img class="imgIcon" src="{{asset('img/icon/icons8-manutencao-64.png')}}" alt="">
                    </div>
                    <div class="col-10">
                        <h3  class="tituloDescNevCold">SUPORTE / MANUTENÇÃO</h3>
                        <p class="Desc">Qualquer problema que o seu site tiver, nós resolvemos.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img class="imgIcon" src="{{asset('img/icon/icons8-server-64.png')}}" alt="">
                    </div>
                    <div class="col-10">
                        <h3 class="tituloDescNevCold">CLOUD SERVER PRO</h3>
                        <p class="Desc">Infraestrutura escalável com autonomia e flexibilidade.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <img class="imgIcon" src="{{asset('img/icon/icons8-email-aberto-50.png')}}" alt="">
                    </div>
                    <div class="col-10">
                        <h3 class="tituloDescNevCold">E-MAIL PROFISSIONAL</h3>
                        <p class="Desc">Crie e-mails profissionais (@seudominio) para alavancar a confiança no seu projeto.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <img class="imgNevcloud" src="{{asset('img/home/servidor-600x899.png')}}" alt="">
            </div>
        </div>
    </div>
@endsection
@section('depoimentos')
<div class="container espacoContainer">
    <div class="row text-center espacoRow ">
        <h2>Oque nossos <span>clientes</span> dizem</h2>
        <p class="Desc">veja os testemunho dos nossos clientes sobre nossos serviços!</p>
    </div>
    <div class="row">
        <div class="col-4 ">
          <div class="card" style="width: 18rem;">
                <img src="{{asset('img/logo_colaborador/kalil.png')}}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-4 ">
          <div class="card" style="width: 18rem;">
                <img src="{{asset('img/logo_colaborador/kalil.png')}}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        
        <div class="col-4 ">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/logo_colaborador/kalil.png')}}" class="card-img-top" alt="...">
                <hr>
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
