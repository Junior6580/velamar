@livewireStyles
    <link href="{{ asset('css/galery.css') }}" rel="stylesheet">
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@show
<div>
    <div id="js" class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="jumbotron" class="jumbotron jumbotron-fluid">
                    <div class="container d-flex justify-content-center align-items-center vh-100">
                        <div class="text-center">
                            <h1 id="welcom" class="display-4"><b></h1>
                            <p id="welms" class="lead"></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div style="padding: 20px;">
            <h1 id="tletra" style="text-align: center;">{{ trans('menu.about us') }}</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div id="card_objetivo" class="card border-0 fade-in card-home">

                <div class="row set-p justify-content-center">
                    <div id="colors" class="col-sm-4 px-0">
                        <i id="icono1" class="fa-solid fa-book-open-reader"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{ trans('menu.objective') }}</b></h5>
                            <p id="viymi" class="card-text">{{ trans('menu.description_objective') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <a class="btn btn-primary btn-cloud" href="{{ route('velamar.sas.about') }}"
                role="button">{{ trans('menu.more_info') }}</a>
        </div>
        <div style="padding: 20px; margin-bottom: 100px;">
            <h1 id="tletra" style="text-align: center; margin-bottom: -350px;">
                {{ trans('menu.Products & Services') }}</h1>
        </div>
        <div class="video-container">
            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/7.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/6.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/5.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/4.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/9.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/canastillas.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/cargue1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/cargue2.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>


            <div class="video-item">
                <video controls autoplay muted loop>
                    <source src="videos/cargue3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>



        <div class="row justify-content-center mt-5">
            <img src="images/eviscerado.svg" alt="#" style="border-radius: 20px;" height="500px" width="500px">
        </div>
        <div class="lightbox-gallery">
            <br>
            <br>
            <div class="container">
                <div class="intro">
                    <div style="padding-top: -15px;">
                        <h1 id="tletra" style="text-align: center;">{{ trans('menu.gallery') }}</h1>
                    </div>
                </div>
                <div class="row photos">
                    <?php
                    // Array de números de imágenes disponibles
                    $image_numbers = range(1, 99);

                    // Mezcla el orden de las imágenes
                    shuffle($image_numbers);

                    // Selecciona las primeras imágenes (puedes cambiar el número según tus necesidades)
                    $selected_images = array_slice($image_numbers, 0, 99);

                    // Itera sobre las imágenes seleccionadas
                    foreach ($selected_images as $image_number) {
                        $image_path = 'images/' . $image_number . '.jpg';
                        if (file_exists($image_path)) {
                            echo '<div class="col-sm-6 col-md-4 col-lg-3 item"><a href="' . $image_path . '" data-lightbox="photos" target="_blank"><img class="img-fluid" src="' . $image_path . '"></a></div>';
                        }
                    }
                    ?>
                </div>


                <div class="row justify-content-center mt-5">
                    <div class="col-md-2">
                        <a class="btn-cloud" href="{{ route('velamar.sas.blog') }}" role="button"
                            style="text-decoration: none;">{{ trans('menu.more_info') }}</a>
                    </div>
                </div><br>
            </div>
        </div>
    </div>
</div>
