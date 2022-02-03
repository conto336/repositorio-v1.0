<x-home>
    @section('title', 'Inicio')

    @section('metadata')
        <meta name="description" content="Repositorio departamento de Tecnología UNAN-MANAGUA">
        <meta name="keywords"
            content="repositorio del departamento de tecnología de la Unan Managua, repositorio, departamento de tecnología, Unan Managua, Ingeniería Electrónica, Ingeniería Industrial, Ingeniería Geológica ">
        <meta name="theme-color" content="#4285f4" >
    @endsection
    <!-- Top content -->
    <div class="top-content section-container" id="top-content">
        <div class="container">
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h1 class="wow fadeIn top-cnt"><strong>Univerdad Nacional Autónoma de Nicaragua</strong></h1>
                    <h1 class="wow fadeIn top-cnt"><strong>Facultad de Ciencias e Ingenierías</strong></h1>
                    <h1 class="wow fadeIn top-cnt"><strong>Departamento de Tecnología</strong></h1>
                    <div class="description wow fadeInLeft">
                        <p>
                            Este sitio es un Repositorio para los documentos de graduación de las
                            carreras comprendidas en el <strong>Departamento de Tecnología</strong>
                        </p>
                    </div>
                    <div class="buttons wow fadeInUp">
                        <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                            <i class="fas fa-book-open"></i> Lea más
                        </a>
                        <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-3" role="button">
                            <i class="fas fa-user-alt"></i> Docentes
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div class="section-1-container section-container" id="section-1">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h2>Carreras</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 section-1-box wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('electronicFiles') }}">
                                <h3>Ingeniería Electrónica <i class="fas fa-microchip"></i></h3>
                                <img src="{{ asset('/images/Logo-utilidades/electronica.png') }}" alt="Electrónica">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 section-1-box wow fadeInDown">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('geologyFiles') }}">
                                <h3>Ingeniería Geológica <i class="fas fa-dice-d20"></i></h3>
                                <img src="{{ asset('/images/Logo-utilidades/geologia.png') }}" alt="Geológia">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 section-1-box wow fadeInUp">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="{{ route('industrialFiles') }}">
                                <h3>Ingeniería Industrial <i class="fas fa-industry"></i></h3>
                                <img src="{{ asset('/images/Logo-utilidades/industrial.png') }}" alt="Industrial">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Section 5 -->
    <div class="section-5-container section-container" id="section-5">
        <div class="container">
        
            <div class="row">

                <div class="col-md-4 section-5-box wow fadeInUp">
                    <div class="section-5-box-image">
                        <img src="{{ asset('images/3.jpg') }}" alt="">
                    </div>
                    <h3><a href="#">Acme branding</a> <i class="fas fa-angle-right"></i></h3>
                    <div class="section-5-box-date"><i class="far fa-calendar"></i> Fecha </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>
                <div class="col-md-4 section-5-box wow fadeInDown">
                    <div class="section-5-box-image">
                        <img src="{{ asset('images/3.jpg') }}" alt="">
                    </div>
                    <h3><a href="#">Created 150 flyers</a> <i class="fas fa-angle-right"></i></h3>
                    <div class="section-5-box-date"><i class="far fa-calendar"></i> Fecha </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>
                <div class="col-md-4 section-5-box wow fadeInUp">
                    <div class="section-5-box-image">
                        <img src="{{ asset('images/3.jpg') }}" alt="">
                    </div>
                    <h3><a href="#">WordPress design</a> <i class="fas fa-angle-right"></i></h3>
                    <div class="section-5-box-date"><i class="far fa-calendar"></i> Fecha </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et.</p>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- Section 2 -->
    <div class="section-2-container section-container section-container-gray-bg" id="section-2">
        <div class="container">
            <div class="row">
                <div class="col section-2 section-description wow fadeIn">
                </div>
            </div>
            <div class="row">
                <div class="col-8 section-2-box wow fadeInLeft">
                    <h3>Acerca de Nosotros</h3>
                    <p class="medium-paragraph">
                        El Departamento de tecnología comprometido con la calidad, perseguimos el mejoramiento
                        continuo de forma sistemática, con el fin de cumplir...
                    </p>
                    <a class="btn btn-primary btn-customized" href="{{ route('about') }}" role="button">
                        <i class="fas fa-book-open"></i> Leer más
                    </a>
                </div>
                <div class="col-4 section-2-box wow fadeInUp">
                    <img src="{{ asset('images/about-us.jpg') }}" alt="about-us">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section-3-container section-container mb-3" id="section-3">
        <div class="container">

            <div class="row">
                <div class="col section-3 section-description wow fadeIn">
                    <h2>Autoridades</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('/images/Logo-utilidades/industrial.png') }}" alt="Industrial">
                        </div>
                        <div class="col-md-9">
                            <h3>MSc. Elim Campos</h3>
                            <p>
                                <strong>Director del Departamento de Tecnología</strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>MSc. Milciades Delgadillo</h3>
                            <p>
                                <strong>Coordinador de Ingeniería Electrónica </strong> <i class="fas fa-microchip"></i>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('/images/Logo-utilidades/industrial.png') }}" alt="Industrial">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('/images/Logo-utilidades/industrial.png') }}" alt="Industrial">
                        </div>
                        <div class="col-md-9">
                            <h3>MSc. Sergio Ramirez</h3>
                            <p>
                                <strong>Coordinador de Ingeniería Industrial</strong> <i class="fas fa-industry"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-9">
                            <h3>MSc. Francisco</h3>
                            <p>
                                <strong>Coordinador de Ingeniería Geológia</strong> <i class="fas fa-dice-d20"></i>
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('/images/Logo-utilidades/industrial.png') }}" alt="Industrial">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Section 4 -->
    {{-- <div class="section-4-container section-container section-container-image-bg" id="section-4">
                <div class="container">
                    <div class="row">
                        <div class="col section-4 section-description wow fadeInLeftBig">
                            <p>
                                <strong>"Si quieres encontrar los secretos del universo, piensa en términos de energía,
                                    frecuencia y vibración"</strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col section-bottom-button wow fadeInUp">
                            <a class="btn btn-primary btn-customized-2 scroll-link" href="#section-6" role="button">
                                <i class="fas fa-bolt"></i> Nikola Tesla
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}


    <!-- Section 6 -->
    <div class="section-6-container section-container section-container-image-bg" id="section-6">
        <div class="container">
            <div class="row">
                <div class="col section-6 section-description wow fadeIn">
                    <h2><strong>Donde estamos ubicados</strong></h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 section-6-box wow fadeInUp">
                    <div class="section-6-form">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1238.1395648932578!2d-86.27415361187518!3d12.105851010742722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7155971203e433%3A0x6bc3061da15e9de9!2sPabellon%2013%2C%20UNAN-MANAGUA%2C%20Managua!5e1!3m2!1sen!2sni!4v1621532794092!5m2!1sen!2sni"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            aria-hidden="false" tabindex="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-home>
