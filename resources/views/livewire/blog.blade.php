@livewireStyles
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">
<link href="{{ asset('css/galery.css') }}" rel="stylesheet">
<style>
    .service-block-two {
        position: relative;
        z-index: 1;
        margin-bottom: 30px
    }

    .service-block-two .inner-box {
        position: relative;
        overflow: hidden;
        padding: 45px 45px;
        border-radius: 6px;
        background-color: #f5f5f5
    }

    .service-block-two .inner-box:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 100%;
        height: 50%;
        opacity: 0;
        background-color: #141d38;
        -webkit-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        transition: all 600ms ease
    }

    .service-block-two .inner-box .shape-one {
        content: '';
        width: 0;
        height: 0;
        border-left: 80px solid transparent;
        border-right: 80px solid transparent;
        border-bottom: 140px solid #0060ff;
        position: absolute;
        top: -80px;
        right: -160px;
        transform: rotate(35deg);
        z-index: 1;
        opacity: 0;
        transition: all 600ms ease;
    }

    .service-block-two .inner-box .shape-two {
        content: '';
        width: 0;
        height: 0;
        border-left: 100px solid transparent;
        border-right: 100px solid transparent;
        border-top: 180px solid #0060ff;
        position: absolute;
        top: -80px;
        right: -180px;
        z-index: 1;
        opacity: 0;
        transform: rotate(-35deg);
        transition: all 600ms ease;
    }

    .service-block-two .inner-box .icon-box {
        position: relative;
        font-size: 65px;
        line-height: 1em;
        color: #0060ff;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .service-block-two .inner-box .icon-box {
        position: relative;
        z-index: 2
    }

    .service-block-two .inner-box .icon-box {
        position: relative;
        font-size: 65px;
        line-height: 1em;
        color: #0060ff;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .service-block-two .inner-box h5 {
        position: relative;
        z-index: 2;
        color: #222222;
        font-weight: 600;
        line-height: 1.3em;
        margin: 20px 0px 15px
    }

    .service-block-two .inner-box .text {
        position: relative;
        color: #222222;
        z-index: 2;
        font-size: 16px;
        line-height: 1.8em;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        transition: all 300ms ease
    }

    .service-block-two .inner-box:hover::before {
        height: 100%;
        opacity: 1
    }

    .service-block-two .inner-box:hover .shape-one {
        transform: scale(1);
        webkit-transition-delay: 300ms;
        -ms-transition-delay: 300ms;
        transition-delay: 300ms
    }

    .service-block-two .inner-box:hover .shape-two {
        opacity: 0.4;
        transform: scale(1);
        webkit-transition-delay: 600ms;
        -ms-transition-delay: 600ms;
        transition-delay: 600ms
    }

    .service-block-two .inner-box:hover .icon-box,
    .service-block-two .inner-box:hover h5 a,
    .service-block-two .inner-box:hover .text {
        color: #ffffff
    }

    .service-block-two .inner-box:hover .icon-box,
    .service-block-two .inner-box:hover h5 a,
    .service-block-two .inner-box:hover .text {
        color: #ffffff
    }

    .service-block-two .inner-box:hover .icon-box,
    .service-block-two .inner-box:hover h5 a,
    .service-block-two .inner-box:hover .text {
        color: #ffffff
    }
</style>
@show
<div>
<div id="js" class="container">
    <div style="background-color: #f0f8ff; padding: 20px; margin-top: 0;">
        <h1 id="tletra" style="text-align: center; margin-top: 10px;">{{ trans('menu.News and Events') }}</h1>
    </div>
    <div class="row justify-content-md-center">

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card newspaper-card">
                    <img src="../images/news/new12.png" class="card-img-top" alt="..." style="object-fit: cover; height: 350px;">
                    <div class="card-body">
                        <h5 class="card-title newspaper-title">
                            Velamar presenta su nueva sala de proceso para elevar la calidad de nuestros servicios
                        </h5>
                        <p class="card-text newspaper-text">
                            ¡Gran inauguración! Velamar da un paso adelante con su nueva sala de procesamiento de pescado,
                            prometiendo frescura y calidad inigualables.
                        </p>
                        <div class="news-meta">
                            <a href="/news/details" class="leer-mas">{{ trans('menu.Read more') }}</a>
                            <span class="news-date">12/04/2024</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card newspaper-card">
                    <img src="../images/news/441546860_423650363907967_6931552384191987336_n.jpg" class="card-img-top" alt="..." style="object-fit: cover; height: 350px;">
                    <div class="card-body">
                        <h5 class="card-title newspaper-title">
                           Celebración del dia de la madre
                        </h5>
                        <p class="card-text newspaper-text">
                            ¡Celebramos a todas las maravillosas madres en nuestro equipo de Velamar Comercializadora! 🌸💕 En este día especial, queremos expresar nuestro más sincero agradecimiento por todo lo que hacen. ¡Gracias por ser ejemplos de amor, dedicación y fortaleza! 💐👩‍👧‍👦
                        </p>
                        <div class="news-meta">
                            <a href="#" class="leer-mas">{{ trans('menu.Read more') }}</a>
                            <span class="news-date">10/05/2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <div style="background-color: #f0f8ff; padding: 20px; margin-top: 0;">
        <h1 id="tletra" style="text-align: center; margin-top: 10px;">{{ trans('menu.Washing Gutting') }}
        </h1>
    </div>
    <div class="row justify-content-md-center">
        <div class="process-map">
            <div class="step">
                <div class="step-number">1</div>
                <img src="../images/proceso1/vaciado.png" alt="{{ trans('menu.Reception') }}"
                    style="height: 250px; width: 250px;">
                <div class="step-description" style="margin-top: -20px;"><b>{{ trans('menu.Reception') }}</b></div>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <img src="../images/proceso1/descargue.png" alt="{{ trans('menu.Unloading') }}"
                    style="height: 250px; width: 250px;">
                <div class="step-description" style="margin-top: -20px;"><b>{{ trans('menu.Unloading') }}</b></div>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <img src="../images/proceso1/rayado.png" alt="{{ trans('menu.Striped') }}"
                    style="height: 250px; width: 250px;">
                <div class="step-description" style="margin-top: -20px;"><b>{{ trans('menu.Striped') }}</b></div>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <img src="../images/proceso1/lavado.png" alt="{{ trans('menu.Washing') }}"
                    style="height: 250px; width: 250px;">
                <div class="step-description" style="margin-top: -20px;"><b>{{ trans('menu.Washing') }}</b></div>
            </div>
            <div class="step">
                <div class="step-number">5</div>
                <img src="../images/proceso1/seleccionado.png"
                    alt="{{ trans('menu.Selection and Classification') }}" style="height: 250px; width: 250px;">
                <div class="step-description" style="margin-top: -20px;">
                    <b>{{ trans('menu.Selection and Classification') }}</b>
                </div>
            </div>
        </div>
    </div><br>
    <div id="galle" class="lightbox-gallery">
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
$directory = 'images/';
if (file_exists($directory)) {
    ?>
                <div class="row photos">
                    <?php
        for ($i = 1; $i <= 100; $i++) {
            $imagePath = $directory . $i . '.jpg';
            if (file_exists($imagePath)) {
                ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                        <a href="<?php echo asset($imagePath); ?>" data-lightbox="photos" target="_blank">
                            <img class="img-fluid" src="<?php echo asset($imagePath); ?>">
                        </a>
                    </div>
                    <?php
            }
        }
        ?>
                </div>
                <?php
} else {
    echo "El directorio de imágenes no existe. No se pueden mostrar las fotos.";
}
?>


            </div>
        </div>
    </div>
</div>
</div>
