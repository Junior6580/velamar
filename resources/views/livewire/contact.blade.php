<div>
    <div id="js" class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="h1-responsive font-weight-bold text-center my-4">{{ trans('menu.Contact us at') }}</h2>
                        <!--Section description-->
                        <p class="text-center w-responsive mx-auto mb-5">
                            {{ trans('menu.questions') }}
                        </p>

                        <form method="post" action="{{ route('velamar.contact.submit') }}">
                            @csrf

                            <div class="row">
                                <!--Grid column-->
                                <div class="col">
                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">{{ trans('menu.Name') }}</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">{{ trans('menu.Email') }}</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">{{ trans('menu.Subject') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <!--Grid column-->
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                <label for="message">{{ trans('menu.Message') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <div class="text-center text-md-left">
                                        <button type="submit" name="submit" class="btn btn-primary">{{ trans('menu.Send') }}</button>
                                    </div>
                                    <div class="status">
                                        {{ isset($status) ? $status : '' }}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 id="tletra" style="text-align: center;">{{ trans('menu.How to get there') }}...</h4>
                <video controls width="100%" height="450px" border-radius="20px">
                    <source src="../videos/llegar.mp4" type="video/mp4">
                    Tu navegador no soporta la etiqueta de video.
                </video>
            </div>

        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="row justify-content-center">
            <div class="col">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15943.161433431811!2d-75.45675709999999!3d2.5747809999999998!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b3bad787f90b9%3A0x16e0ee0de0477d9!2sComercializadora%20Velamar%20S.A.S!5e0!3m2!1ses-419!2sco!4v1708048110275!5m2!1ses-419!2sco"
                    width="1000px" height="460" style="border-radius: 15px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

    <br>
</div>
