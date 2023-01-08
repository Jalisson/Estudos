@extends('master')

@section('bannerSObrenos')
   {{--Area do banner--}}
@endsection

@section('sobre')
     
    <div class="container espacoContainer">
        <div class="row">
            <div class="col-6">
                <img class="efectImageBanner" src="{{asset('img/banner/sobrenos.webp')}}" alt="">
            </div>
            <div class="col-6">
                <h2><span>NEVCOD</span> - Venha nos conhecer</h2>
                <p class="Desc">
                A NEVCOD tem o foco em solucionar problemas de empresas
                por meios de Software. Damos um direcionamento de como 
                o seu problema pode ser solucionado sem gerar impacto na
                sua empresa, trazemos soluções para ampliar e melhorar e 
                gerir o seu negocio. Somos especialistas em desenvolvimento 
                de Sites, Loja virtual, Apps e Sistemas totalmente otimizados.
                Tiramos a sua ideia do papel e concretizamos!
                </p>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <strong> INOVAÇÃO </strong>
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="Desc">
                                    A inovação faz parte do nosso DNA e utilizamos a tecnologia sem moderação para entregar e integrar dados, ajudando nossos clientes a tomar as melhores decisões de negócio.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>EVOLUÇÃO</strong>
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <p class="Desc">
                                    Não nascemos para ser algo passageiro ou pontual. Pensamos no futuro e conseguimos evoluir junto com as empresas, oferecendo soluções customizadas e direcionadas para cada estágio da jornada de nossos clientes.
                            </p> 
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           <strong>EXPERIÊNCIA</strong>
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="Desc">
                                    Acreditamos que nos dias atuais a experiência tem alto valor para o usuário e consumidor, e é por isso que cuidamos de cada detalhe para impactar e oferecer uma experiência positiva desde o primeiro contato com o seu projeto.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection