@extends('master')
@section('bannerHome')
    @include('banner.bannerHome')
@endsection
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
@section('sobre_nos')
<div class="container espacoContainer">
    <div class="row">
        <div class="col-6 formatcolSObrenos">
            <div class="container">
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <img class="imgSobreNosForm" src="{{asset('img/home/3.webp')}}" alt="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="colFormLabel" placeholder="Nome">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="colFormLabel" placeholder="E-mail">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="colFormLabel" placeholder="Telefone">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="object" class="form-control" id="colFormLabel" placeholder="Assunto">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="submit" class="form-control" id="colFormLabel" placeholder="Enviar">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 ">
                <h2>Sobre <span>Nós</span></h2>
                <p class="Desc">
                    A NEVCOD tem o foco em solucionar problemas de empresas
                    por meios de Software. Damos um direcionamento de como 
                    o seu problema pode ser solucionado sem gerar impacto 
                    na sua empresa, trazemos soluções para ampliar e melhorar 
                    e gerir o seu negocio. Ficou interessado?  Entre em contato
                    conosco e solicite uma consultoria gratuita!  
                </p>
                <div class="row">
                    <div class="col-6">
                        <h3 class="idenDescSobreNos">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg>      
                            
                            Serviço de Excelência
                        </h3>
                    </div>
                    <div class="col-6">
                        <h3 class="idenDescSobreNos">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                            </svg> 
                             Melhores Preços
                        </h3>
                    </div>
                </div>
        </div>
    </div>
</div>





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
