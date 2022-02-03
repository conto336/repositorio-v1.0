<x-home>
    @section('title', 'Monografías de Ingeniería Electrónica')
    @section('css')
        <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/dataTables.bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/plugins/data-tables/CSS/responsive.bootstrap4.min.css') }}">
        <style>
            @media (max-width: 380px) {
                .head {
                    display: none !important;
                }
            }

            p {
                display: block;
            }

            table {
                overflow-x: auto;
            }

            /*  table td {
                            max-width: 150px;
                            white-space: nowrap;
                            text-overflow: ellipsis;
                            word-break: break-all !important;
                            overflow: hidden !important;
                            vertical-align: middle !important;
                        } */

            /*  table td::nth-last-child(4) {
                            max-width: 150px;
                            white-space: nowrap;
                            text-overflow: ellipsis;
                            word-break: break-all !important;
                            overflow: hidden !important;
                        } */

            #documents td {
                min-width: 150px;
                white-space: inherit;
                overflow: hidden;
                vertical-align: middle !important;
            }

            .modal-content {
                top: 50px;
            }

        </style>
    @endsection

    <div class="top-content section-container" id="top-content">
        <div class="container">
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">

                    <h1 class="wow fadeIn text-content top-cnt"><strong>Aquí encontrarás los documentos de graduación de</strong></h1>
                    <div class="description wow fadeInLeft top-cnt">
                        <p class="h3 text-content">
                            <strong>{{ $title }}</strong>
                        </p>
                    </div>

                    <x-navegation-menu-library />
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5 -->
    <div class="section-5-container section-container mx-auto" id="section-5">

		{{ $slot }}

    </div>
    @section('js')
        <script src="{{ asset('vendor/plugins/data-tables/JS/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendor/plugins/data-tables/JS/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('vendor/plugins/data-tables/JS/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('vendor/js/data-table.js') }}"></script>

    @endsection
</x-home>
