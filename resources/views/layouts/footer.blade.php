<!-- Footer -->
<footer id="foter" class="text-center text-lg-start text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>{{ trans('menu.Connect with us on social networks:') }}</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="https://www.facebook.com/ComercializadoraVelamarS.A.S" style="text-decoration: none;" class="me-4 text-reset">
                <i class="fa-brands fa-square-facebook" style="color: #005eff; font-size: 24px;"></i>
            </a>
            <a href="https://wa.me/+573134986866" style="text-decoration: none;" class="me-4 text-reset" target="_blank">
                <i class="fa-brands fa-whatsapp" style="color: #23e130; font-size: 24px;"></i>
            </a>
            <a href="mailto:gerenciaadm@velamar.com.co" style="text-decoration: none;" class="me-4 text-reset" target="_blank">
                <i class="fab fa-google" style="color: #ff3d3d; font-size: 24px;"></i>
            </a>
            <a href="https://www.instagram.com/comercializadoravelamars.a.s/" style="text-decoration: none;" class="me-4 text-reset" target="_blank">
                <i class="fa-brands fa-instagram" style="color: #ff0095; font-size: 24px;"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fa fa-gem me-3"></i>Comercializadora Velamar S.A.S
                    </h6>
                    <p>{{ trans('menu.description_company') }}</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">{{ trans('menu.Products & Services') }}</h6>
                    <p><a href="{{ route('velamar.sas.eviscerated') }}" style="text-decoration: none;" class="text-reset" wire:navigate>{{ trans('menu.Eviscerated') }}</a></p>
                    <p><a href="{{ route('velamar.sas.bones') }}" style="text-decoration: none;" class="text-reset" wire:navigate>{{ trans('menu.Fresh Tilapia') }}</a></p>
                    <p><a href="{{ route('velamar.sas.ice_sale') }}" style="text-decoration: none;" class="text-reset" wire:navigate>{{ trans('menu.Ice') }}</a></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">{{ trans('menu.credits') }}</h6>
                    <p><a href="{{ route('velamar.sas.developers') }}" style="text-decoration: none;" class="text-reset" wire:navigate>{{ trans('menu.developer') }}</a></p>
                    <p><a href="https://laravel.com/" style="text-decoration: none;" class="text-reset">Laravel</a></p>
                    <p><a href="https://www.php.net/" style="text-decoration: none;" class="text-reset">PHP</a></p>
                    <p><a href="https://fontawesome.com/icons" style="text-decoration: none;" class="text-reset">Font Awesome</a></p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Contact Links -->
                    <h6 class="text-uppercase fw-bold mb-4">{{ trans('menu.contact') }}</h6>
                    <p><i class="fa-solid fa-house"></i> 200 Mts. Margen Izq. Vía, 2.574260, -75.456465, El, Hobo, Gigante, Huila</p>
                    <p><i class="fas fa-envelope"></i> gerenciaadm@velamar.com.co</p>
                    <p><i class="fa-solid fa-mobile"></i>+57 3138153006</p>
                    <p><i class="fa-solid fa-phone"></i>+57 3134986866</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a style="text-decoration: none;" class="text-reset fw-bold" href="/">VELAMAR.S.A.S</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
