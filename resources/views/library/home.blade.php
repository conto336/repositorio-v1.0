<x-home>
    @section('title', 'Repositorio del departamento de tecnológia')
    @section('css')
        <style>
            .btn-link:hover {
                color: #0056b3;
                text-decoration: none !important;
            }

            .btn-link.focus,
            .btn-link:focus {
                text-decoration: none;
                box-shadow: none;
            }

        </style>
    @endsection
    <!-- Top content -->
    <div class="top-content section-container" id="top-content">
        <div class="container">
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    @if (request()->routeIs('library'))

                        <div class="description wow fadeInLeft top-cnt">
                            <h1 class="wow fadeIn text-content"><strong>Aquí encontrarás los documentos de graduación de
                                    las siguientes carreras</strong></h1>
                            <p class="text-content">
                                <strong>Ingenería Electrónica, Industrial y Geológia</strong>
                            </p>
                        </div>
                        <div class="buttons wow fadeInUp">
                            <a class="btn btn-primary btn-customized scroll-link" href="#section-1" role="button">
                                <i class="fas fa-book-open"></i> Lea más
                            </a>
                        </div>
                    @endif
                    <div class="mt-3"></div>
                    <x-navegation-menu-library />
                </div>
            </div>
        </div>
    </div>

    <!-- Section 1 -->
    <div class="section-1-container section-container" id="section-1">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h2>Roles de</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 section-1-box wow fadeInUp">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-1-box-icon">
                                <i class="fas fas fa-microchip"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Ingenería Electrónica</h3>
                            <p>El ingeniero electrónico tiene una amplia proyección social, pues las actividades que
                                desarrolla, buscan elevar la calidad de vida de las personas de su entorno, en áreas
                                de gran impacto social. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 section-1-box wow fadeInDown">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-1-box-icon">
                                <i class="fas fas fa-industry"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Ingenería Industrial</h3>
                            <p>El Ingeniero Industrial debe estar preparado científica y tecnológicamente para que
                                puedan
                                identificar, analizar y resolver problemas relacionados a los procesos de transformación
                                de
                                bienes y generación de servicios.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 section-1-box wow fadeInUp">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="section-1-box-icon">
                                <i class="fas fa-dice-d20"></i>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>Ingenería Geológica</h3>
                            <p>El ingeniero geólogo de ser un profesional desde y con una concepción científica y
                                humanística del mundo, capaz de interpretar los fenómenos sociales y naturales con un
                                sentido crítico, reflexivo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2 -->
    <div class="section-2-container section-container section-container-gray-bg" id="section-2">
        <div class="container">
            <div class="row">
                <div class="col section-2 section-description wow fadeIn">
                </div>
            </div>
            <div class="row">
                <div class="col-8 section-2-box wow fadeInLeft">
                    <h3>Acerca de esta página</h3>
                    <p class="medium-paragraph">
                        Este sitio está desarrollado para almacenar los documentos de graduación de las carreras que
                        pertencen al <strong>Departamento de Tecnológia</strong> de la Universidad
                        Nacional Autóma de Nicaragua UNAN-MANAGUA.
                    </p>
                </div>
                <div class="col-4 section-2-box wow fadeInUp">
                    <img src="{{ asset('images/repositorio.jpg') }}" alt="about-us">
                </div>
            </div>
        </div>
    </div>

    <!-- Section 3 -->
    <div class="section-3-container section-container" id="section-3">
        <div class="container">

            <div class="row">
                <div class="col section-3 section-description wow fadeIn">
                    <h2></h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="fas fa-paperclip"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Fácil acceso</h3>
                            <p>
                                Podrás acceder fácilmente a cualquier documentos disponible en este sitio.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-3-box-icon">
                                <i class="fas fa-tasks"></i>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <h3>Información organizada</h3>
                            <p>
                                La Información dispoble en este sitio se encuentra organizada de acuerdo a las
                                modalidades de
                                graduación dispobles de la Universidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="section-5-container section-container" id="section-5">

        {{-- API de WIKIPEDIA --}}
        <x-filtro-wikipedia />
        {{-- END API de WIKIPEDIA --}}

    </div>
    @section('js')
        <script src="{{ asset('vendor/js/custom/wiki.js') }}"></script>
    @endsection
</x-home>
