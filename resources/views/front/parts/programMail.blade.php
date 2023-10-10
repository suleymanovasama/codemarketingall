<!-- <section id="job-skills">
    <div class="container">
        <div class="row" style="padding: 48px 80px;">

            <div class="job-up">
                <div class="up-left">
                    <h3>kurikulum</h3>
                    <h2>
                        Müasir biznesin ehtiyac duyduğu bacarıqları öyrənin.
                    </h2>
                </div>
                <div class="up-right">
                    <img src="{{ asset('frontend/img/faq/fg.jpg') }}" alt="">
                </div>
            </div>
            <div class="syllabus-gradient" id="first-gradient" color="#f2eddf"></div>
            <div class="syllabus-list">
                <div class="list-up">
                    <h2>
                        01
                    </h2>

                    <div class="list-area-middle">
                        <h5>Başlanğıc səviyyədən marketinq öyrən.</h5>
                        <p>
                            Başlamaq üçün biliklərə sahib olmağa ehtiyac yoxdur.Biz hər şeyi sıfırdan öyrədirik.
                        </p>
                    </div>

                    <div class="list-right">
                        <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                    </div>
                </div>
                <div class="list-up">
                    <h2>
                        01
                    </h2>

                    <div class="list-area-middle">
                        <h5>Peşəkar təlimçilərlə bacarıqlarını təkmilləsdir.</h5>
                        <p>
                            Real praktikaya əsaslanan aktual biliklər əldə edin.
                        </p>
                    </div>

                    <div class="list-right">
                        <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="syllabus-gradient" id="second-gradient" color="#f2eddf"></div>
            <div class="job-form-area">
                <form action="{{ route('front.mail.programMailPost') }}" method="POST">
                    @csrf
                    <div class="eight-h3-side">
                        <span id="alert5" class="alert alert-info d-none"><br></span>
                    </div>
                    <div class="job-area-left">
                        <h5>
                            Kursun formatını seçin və bütün proqrama baxmaq üçün e-poçtunuzu daxil edin.
                        </h5>
                        <div class="job-select">
                            <div class="button-group">
                                <input type="radio" id="html" name="full" value="full">
                                <label for="html">Full Time</label><br>
                                <input type="radio" id="css" name="part" value="part">
                                <label for="css">Part Time</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="job-area-right">
                        <div class="input-and-button-area">
                            <div class="job-input">
                                <label for="email-side">
                                    <p>E-poçtunuz</p>
                                </label>
                                <input type="email" name="email" id="programEmail" placeholder="Elektron Poçtunuz">
                                <label for="email-side">
                                    <p>Telefonunuz</p>
                                </label>
                                <input type="tel" name="phone" id="programPhone" placeholder="Telefon Nömrəniz">
                            </div>
                            <div class="job-button">
                                <button class="programMailPost" type="submit"> Proqrama baxın</button>
                            </div>
                        </div>
                        <div class="input-down-write">
                            <p>
                                E-poçt ünvanınızı daxil etməklə siz Chegg-dən e-poçt almağa razılaşırsınız. Siz
                                həmçinin Məxfilik Siyasətimizlə razılaşırsınız.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->

<section id="job-skills">
            <div class="container">
                <div class="row" style="padding: 48px 80px;">
        
                    <div class="job-up">
                        <div class="up-left">
                            <h3>Kurikulum</h3>
                            <h2>
                                Müasir biznesin ehtiyac duyduğu bacarıqları öyrənin
                            </h2>
                        </div>
                        <div class="up-right">
                            <img src="{{ asset('frontend/img/faq/fg.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="syllabus-gradient" id="first-gradient" color="#f2eddf"></div>
                    <div class="syllabus-list">
                        <div class="list-up">
                            <h2>
                                01
                            </h2>
        
                            <div class="list-area-middle">
                                <h5>@yield("course-name")</h5>
                                <p>
                                    Başlamaq üçün biliklərə sahib olmağa ehtiyac yoxdur. Biz hər şeyi sıfırdan öyrədirik.
                                </p>
                            </div>
        
                            <div class="list-right">
                                <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="list-up">
                            <h2>
                                01
                            </h2>
        
                            <div class="list-area-middle">
                                <h5>Peşəkar təlimçilərlə bacarıqlarını təkmilləsdirin</h5>
                                <p>
                                    Real praktikaya əsaslanan aktual biliklər əldə edin.
                                </p>
                            </div>
        
                            <div class="list-right">
                                <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="syllabus-gradient" id="second-gradient" color="#f2eddf"></div>
                    <div class="job-form-area">
                        <form action="{{ route('front.mail.programMailPost') }}" method="POST">
                            @csrf
                            <div class="eight-h3-side">
                                <span id="alert5" class="alert alert-info d-none"><br></span>
                            </div>
                            <div class="job-area-left">
                                <h5>
                                    Kursun formatını seçin və bütün proqrama baxmaq üçün epoçtunuzu daxil edin.
                                </h5>
                                <div class="job-select">
                                    <div class="button-group">
                                        <input type="radio" id="html" name="full" value="full">
                                        <label for="html" class="for-button-input active-button" style="height:50px;">Full Time</label><br>
                                        <input type="radio" id="css" name="part" value="part">
                                        <label for="css" class="for-button-input" style="height:50px;">Part Time</label><br>
                                    </div>
                                </div>
                            </div>
                            <div class="job-area-right">
                                <div class="input-and-button-area">
                                    <div class="job-input">
                                        <label for="email-side">
                                            <p>E-poçtunuz</p>
                                        </label>
                                        <input type="email" name="email" id="programEmail" placeholder="Elektron Poçtunuz">
                                        <label for="email-side">
                                            <p>Telefonunuz</p>
                                        </label>
                                        <input type="tel" name="phone" id="programPhone" placeholder="Telefon Nömrəniz">
                                    </div>
                                    <div class="job-button">
                                        <button class="programMailPost" type="submit"> Proqrama baxın</button>
                                    </div>
                                </div>
                                <div class="input-down-write">
                                    <p>
                                        E-poçt ünvanınızı daxil etməklə siz Chegg-dən e-poçt almağa razılaşırsınız. Siz
                                        həmçinin Məxfilik Siyasətimizlə razılaşırsınız.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
