@extends('layouts.plantilla')

@section('title', 'Noticias')

@section('content-head')
    <link rel="stylesheet" href="{{URL::asset('css/secondary-pages.css'); }}">
@endsection

@section('content')
    <div>
        <img style="width: 100%; filter: brightness(60%)" src="https://www.elmueble.com/medio/2018/12/18/salon-en-blanco-con-techo-de-vigas-de-madera-y-dos-sofas-enfrentados_9862685e_1280x650.jpg" class="img-fluid" alt="...">
    </div>

    <div data-aos="flip-up" class="row p-5 m-5 rounded" style="background: #f4f4f4">
        <h1 class="text-center">
            PRUEBA2
        </h1>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-8">
                <div class="card mb-5" data-aos="fade-up">
                    <div class="card-body">
                    <h5 class="card-title fw-bold">10 CONSEJOS PARA VENDER SU HOGAR</h5>
                    <p class="card-text"><small class="text-muted">NOV 11, 2021</small></p>
                    </div>
                    <img src="https://images.adsttc.com/media/images/5d34/e507/284d/d109/5600/0240/newsletter/_FI.jpg?1563747560" class="card-img-bottom" alt="imagen casa">
                    <div class="card-body">
                        <p class="card-text text-justify">
                            Hagasé una auto-evaluación financiera. Antes de comprar es importante analizar su situación financiera. Lo más importante es determinar
                            nuestros ingresos y el capital que tenemos disponible como cuota inicial (downpayment). 
                        </p>
                        <a href="{{ route('blogs.blog') }}" class="btn btn-danger">Leer más</a>
                    </div>
                </div>

                <div class="card mb-5" data-aos="fade-up">
                    <div class="card-body">
                    <h5 class="card-title fw-bold">ERRORES QUE DEBES EVITAR AL COMPRAR UNA CASA</h5>
                    <p class="card-text"><small class="text-muted">NOV 10, 2021</small></p>
                    </div>
                    <img src="https://images.adsttc.com/media/images/5d34/e507/284d/d109/5600/0240/newsletter/_FI.jpg?1563747560" class="card-img-bottom" alt="imagen casa">
                    <div class="card-body">
                        <p class="card-text text-justify">
                            Pensar demasiado las cosas. Es importante analizar bien el mercado y tener paciencia, pero tampoco es recomendable esperar demasiado.
                        </p>
                        <a href="{{ route('blogs.blog') }}" class="btn btn-danger">Leer más</a>
                    </div>
                </div>

                <!--PAGINATION-->
                <nav aria-label="Page navigation example" style="float: right">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link text-secondary" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link text-secondary" href="#">1</a></li>
                      <li class="page-item"><a class="page-link text-secondary" href="#">2</a></li>
                      <li class="page-item"><a class="page-link text-secondary" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link text-secondary" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                        </a>
                      </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-4" data-aos="fade-up" style="padding-left: 5%;">
                @include('layouts.sidebar-news')
            </div>
        </div>
    </div>
@endsection

@section('section-scripts')
    <script src="{{ URL::asset('js/homepage.js') }}"></script>    
@endsection