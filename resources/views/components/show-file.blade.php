<x-home>
    @section('title', $doc->name)

    <!-- Section 5 -->
    <div class="section-5-container section-container" id="section-5">
        <div class="container">

            <div class="row mt-3 mx-auto">

                <div class="col-sm-6 section-5-box wow fadeInUp border border-primary">
                    <div class="section-5-box-image text-center">
                        <img src="{{ asset('images/portada.jpg.svg') }}" alt="{{ $doc->name }}" height="250">
                    </div>
                    <h3>{{ $doc->name }} <i class="fas fa-angle-right"></i></h3>
                    <div class="section-5-box-date"><i class="far fa-calendar"></i> {{ $doc->date }} </div>
                    <p> <strong>Tamaño: </strong> {{ $doc->$carrer->size }}</p>
                    <p>
                        <strong>Linea de investigación:</strong>
                        <a class="btn btn-primary btn-customized bg-primary" href="{{-- route('showLines', [$doc->carrer, $doc->$carrer->line]) --}}">
                            <i class="fas fa-at"></i>{{ __($doc->$carrer->line) }}
                        </a>
                    </p>
                </div>

                <div class="mx-2 my-2"></div>

                <div class="col-sm-5 section-5-box wow fadeInUp border border-primary">

                    {!! $doc->$carrer->description !!}

                    <p> <strong>Autores: </strong> {{ $doc->$carrer->authors }}.</p>
                    <p> <strong>Carrera: </strong>Ingenería {{ $doc->carrer }} </p>
                    <p> <strong>Modalidad: </strong> {{ ucfirst($doc->$carrer->category) }} </p>
                    <div class="text-center">
                        <a class="btn btn-primary btn-customized text-white" href="{{ $doc->$carrer->url }}">
                            <i class="fas fa-angle-right"></i> Ver
                        </a>
                    </div>
                    <div class="my-3"></div>
                </div>

            </div>
        </div>
    </div>

</x-home>
