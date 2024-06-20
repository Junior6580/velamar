@livewireStyles
<link href="{{ asset('css/we.css') }}" rel="stylesheet">
<link href="{{ asset('css/card.css') }}" rel="stylesheet">
<style>
    .video-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 800px;
        background-color: #f0f8ff;
    }

    .video-container video {
        border-radius: 20px;
    }
</style>
@show
<div>
<div id="js" class="container">
    <div class="video-container">
        <video controls autoplay loop width="1200">
            <source src="../videos/we.mp4" type="video/mp4">
        </video>
    </div>
<!--
    <div style="background-color: #f0f8ff; padding: 20px;">
        <h1 id="tletra" style="text-align: center;">{{ trans('menu.history') }}</h1>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div id="videwe" class="container" style="margin-bottom: -380px;">
                <div class="row justify-content-center mt-5">
                    <video controls autoplay muted loop>
                        <source src="../videos/MOVIE.mp4" type="video/mp4">
                    </video>
                </div>
            </div><br><br>
            <p style="text-align: justify;" class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing
                elit.
                Omnis dolore
                labore cupiditate possimus velit praesentium ipsum! Esse ipsum rem dolores, hic omnis
                ullam, nemo, impedit minima ducimus dicta quos assumenda!.
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima cumque laudantium
                quidem quas, blanditiis adipisci optio vitae necessitatibus aperiam ratione beatae
                tenetur eligendi quaerat et, atque qui? Repellat, voluptates dolorum!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta officiis recusandae
                officia unde qui beatae vero itaque est molestiae voluptate? Atque autem consectetur
                debitis nulla voluptas quos harum voluptatum
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum dolorem alias quis
                recusandae reprehenderit beatae dolore, vero ad error culpa, deserunt magni
                exercitationem praesentium blanditiis cumque, consequuntur vel voluptates maiores!
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae fugiat explicabo dolores
                dolorum iure harum hic facilis veritatis provident fuga excepturi laboriosam aliquid,
                reprehenderit autem quaerat iusto dicta ad impedit.</p>
        </div>
    </div><br>
-->

    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div style="background-color: #f0f8ff; padding: 20px;">
                <h1 id="tletra" style="text-align: center;">{{ trans('menu.mission') }}</h1>
            </div>
            <div id="card_viymi" class="card border-0 fade-in keep-visible">
                <div class="row set-p justify-content-center">
                    <div id="colors" class="col-sm-4 px-0">
                        <i id="icono2" class="fa-solid fa-chart-column"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p id="viymi" class="card-text">{{ trans('menu.description_mission') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div style="background-color: #f0f8ff; padding: 20px;">
                <h1 id="tletra" style="text-align: center;">{{ trans('menu.Vision') }}</h1>
            </div>
            <div id="card_viymi" class="card border-0 fade-in keep-visible">
                <div class="row set-p justify-content-center">
                    <div id="colors" class="col-sm-4 px-0">
                        <i id="icono2" class="fa-solid fa-chart-line"></i>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <p id="viymi" class="card-text">{{ trans('menu.description_vision1') }}
                                <b>COMERCIALIZADORA VELAMAR S.A.S</b>
                                {{ trans('menu.description_vision2') }} <b>2029</b>
                                {{ trans('menu.description_vision3') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #f0f8ff; padding: 20px;">
        <h1 id="tletra" style="text-align: center;">{{ trans('menu.Management Team') }}</h1>
    </div>
    <div class="row justify-content-md-center">
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-md-center">
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../images/team/avatar.webp" class="card-img-top" alt="..."
                                            height="320px">
                                        <div class="card-body text-center">
                                            <h6 class="card-title"><b>
                                                    Sulein Arciniegas Calderón
                                                </b></h6>
                                            <p style="text-align: center;" class="card-text">
                                                {{ trans('menu.Legal Representative') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../images/team/avatar.webp" class="card-img-top" alt="..."
                                            height="320px">
                                        <div class="card-body text-center">
                                            <h6 class="card-title"><b>
                                                    Robinson Gómez Suaza
                                                </b></h6>
                                            <p style="text-align: center;" class="card-text">
                                                {{ trans('menu.Manager') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../images/team/avatar.webp" class="card-img-top" alt="..."
                                            height="320px">
                                        <div class="card-body text-center">
                                            <h6 class="card-title"><b>
                                                    William Segura Caballero
                                                </b></h6>
                                            <p style="text-align: center;" class="card-text">
                                                {{ trans('menu.Head of room') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="row justify-content-md-center">
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../images/team/avatar.webp" class="card-img-top" alt="..."
                                            height="320px">
                                        <div class="card-body text-center">
                                            <h6 class="card-title"><b>
                                                    Cristian Daniel Perez
                                                </b></h6>
                                            <p style="text-align: center;" class="card-text">
                                                {{ trans('menu.Internal Auditor') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../images/team/avatar.webp" class="card-img-top" alt="..."
                                            height="320px">
                                        <div class="card-body text-center">
                                            <h6 class="card-title"><b>
                                                    Jarrinson Suaza Martínez

                                                </b></h6>
                                            <p style="text-align: center;" class="card-text">
                                                {{ trans('menu.Coordinator SG-SST') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex justify-content-center">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../images/team/avatar.webp" class="card-img-top" alt="..."
                                            height="320px">
                                        <div class="card-body text-center">
                                            <h6 class="card-title"><b>
                                                    Andrea González
                                                </b></h6>
                                            <p style="text-align: center;" class="card-text">
                                                {{ trans('menu.Human Talent Leader') }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <br><br>
    <div class="row justify-content-md-center"><br>
        <section id="valores-compromisos">
            <div class="container">
                <div style="padding: 20px;">
                    <h1 id="tletra" style="text-align: center;">{{ trans('menu.Our Values and Commitments') }}
                    </h1>
                </div>
                <div class="grid">
                    <div class="item" style="background-color: #F1948A;">
                        <h3 style="text-align: center; color: #000000;" id="valor">
                            {{ trans('menu.LEADERSHIP') }}:
                        </h3>
                        <p style="text-align: justify; color: #000000;" id="valor">
                            {{ trans('menu.We are characterized by creating collaborative work schemes to take advantage of the potential of each person within the organization and maintain a creative and proactive work environment.') }}
                        </p>
                    </div>

                    <div class="item" style="background-color: #F1948A;">
                        <h3 style="text-align: center; color: #000000;" id="valor">
                            {{ trans('menu.HONESTY') }}:
                        </h3>
                        <p style="text-align: justify; color: #000000;" id="valor">
                            {{ trans('menu.description_honesty') }}
                        </p>
                    </div>
                </div><br>
                <div class="grid">
                    <div class="item" style="background-color: #F1948A;">
                        <h3 style="text-align: center; color: #000000;" id="valor">
                            {{ trans('menu.RESPONSIBILITY') }}:</h3>
                        <p style="text-align: justify; color: #000000;" id="valor">
                            {{ trans('menu.description_responsibility') }}
                        </p>
                    </div>
                    <div class="item" style="background-color: #F1948A;">
                        <h3 style="text-align: center; color: #000000;" id="valor">
                            {{ trans('menu.CONTINUOUS IMPROVEMENT') }}:</h3>
                        <p style="text-align: justify; color: #000000;" id="valor">
                            {{ trans('menu.description_continuos') }}</p>
                    </div>
                    <div class="item" style="background-color: #F1948A;">
                        <h3 style="text-align: center; color: #000000;" id="valor">
                            {{ trans('menu.TEAMWORK') }}:
                        </h3>
                        <p style="text-align: justify; color: #000000;" id="valor">
                            {{ trans('menu.description_teamwork') }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div><br>

    <div style="background-color: #f0f8ff; padding: 20px; margin-top: 0;">
        <h1 id="tletra" style="text-align: center; margin-top: 10px;">{{ trans('menu.Process map') }}</h1>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8 text-center">
            <div style="display: flex; justify-content: center; align-items: center; height: 100%;">
                <img src="../images/procesos.jpg" class="pic1" alt="" height="600px" width="1000px"
                    style="border-radius: 15px;">
            </div>
        </div>
    </div><br>
    <div style="background-color: #f0f8ff; padding: 20px; margin-top: 0;">
        <h1 id="tletra" style="text-align: center; margin-top: 10px;">{{ trans('menu.Organization chart') }}
        </h1>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8 text-center">
            <div style="display: flex; justify-content: center; align-items: center; height: 100%;">
                <img src="../images/organigrama.png" class="pic1" alt="" height="600px"
                    width="1500px" style="border-radius: 15px;">
            </div>
        </div>
    </div><br>
    <div style="background-color: #f0f8ff; padding: 20px; margin-top: 0;">
        <h1 id="tletra" style="text-align: center; margin-top: 10px;">{{ trans('menu.title_integrated') }}
        </h1>
    </div>
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <p style="text-align: justify; color: #000000;" id="valor">
                {{ trans('menu.description_integrated') }}
            </p>
            <div class="row justify-content-center"> <!-- Updated to center the icons -->
                <div class="col-md-4 text-center"> <!-- Centered the second icon -->
                    <a href="../files/DE-DA-002 OBJETIVOS DEL SIG HSEQ.pdf" download
                        style="color: #000000; text-decoration: none;">
                        <i class="fa-regular fa-file-pdf" style="color: #3498DB; font-size: 50px;"></i>
                        <p style="text-decoration: none;">{{ trans('menu.file1') }}</p>
                    </a>
                </div>
                <div class="col-md-4 text-center"> <!-- Centered the second icon -->
                    <a href="../files/DE-DA-007 VALORES CORPOTARIVOS.pdf" download
                        style="color: #000000; text-decoration: none;">
                        <i class="fa-regular fa-file-pdf" style="color: #17202A; font-size: 50px;"></i>
                        <p style="text-decoration: none;">{{ trans('menu.file2') }}</p>
                    </a>
                </div>
                <div class="col-md-4 text-center"> <!-- Centered the second icon -->
                    <a href="../files/DE-DA-005 MAPA DE PROCESOS.pdf" download
                        style="color: #000000; text-decoration: none;">
                        <i class="fa-regular fa-file-pdf" style="color: #16A085; font-size: 50px;"></i>
                        <p style="text-decoration: none;">{{ trans('menu.Process map') }}</p>
                    </a>
                </div>
                <div class="col-md-4 text-center"> <!-- Centered the second icon -->
                    <a href="../files/DE-DA-008 ORGANIGRAMA.pdf" download
                        style="color: #000000; text-decoration: none;">
                        <i class="fa-regular fa-file-pdf" style="color: #F5B041; font-size: 50px;"></i>
                        <p style="text-decoration: none;">{{ trans('menu.Organization chart') }}</p>
                    </a>
                </div>
                <div class="col-md-4 text-center"> <!-- Centered the first icon -->
                    <a href="../files/DE-DA-001 POLITICA DEL SIG HSEQ.pdf" download
                        style="color: #000000; text-decoration: none;">
                        <i class="fa-regular fa-file-pdf" style="color: #E74C3C; font-size: 50px;"></i>
                        <p style="text-decoration: none;">{{ trans('menu.title_integrated') }}</p>
                    </a>
                </div>
                <div class="col-md-4 text-center"> <!-- Centered the second icon -->
                    <a href="../files/DE-DA-006 REGLAMENTO DE HIGIENE, SEGURIDAD Y SALUD EN EL TRABAJO.pdf"
                        download style="color: #000000; text-decoration: none;">
                        <i class="fa-regular fa-file-pdf" style="color: #EC7063; font-size: 50px;"></i>
                        <p style="text-decoration: none;">{{ trans('menu.title_occupational') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
