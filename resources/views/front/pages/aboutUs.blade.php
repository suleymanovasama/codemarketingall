@extends('front.layouts.app')
@section('title','About Us')
@section('content')
<main>
    <section id="work-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 work-one-left">
                    <div class="left-up">
                        <h1>
                            Codemarketinq haqqında
                        </h1>
                    </div>
                    <div class="left-down">
                        <p>
                            Biz tələbələrimizə gələcəyin peşəkar kadrı olması üçün təcrübəli və bilikli müəllimlər və karyera dəstəyi ilə təmin edən təhsil platformasıyıq.2018-ci ildə Social room adı ilə əsası qoyulmuş və rebrendinq edərək CodeMarketinq adı ilə tələbələrimizin öyrənmə səyahətinə həsr olunmuş 100% uğurlu şirkətik.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 work-one-right"
                    style="background-image: url('{{ asset("frontend/img/aboutUs/IMG_7163.jpg") }}'); margin:46px 0 0 0;     border-top-left-radius: 317px;
    height: 279.6px !important;">
                    <!-- <img src="../src/img/outComes/Hero.png" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="four">
        <div class="container">
            <div class="row justify-content-between">
                <ul style="justify-content: space-around;">
                    <!-- <li>
                        <h1>
                            NYC

                        </h1>
                        <h4 class="firsth4">
                            Headquarters
                        </h4>
                    </li> -->
                    <li>
                        <h1>
                            2018


                        </h1>
                        <h4 class="firsth4">
                            Yaranlb
                        </h4>
                    </li>
                    <li>
                        <h1>
                            10
                        </h1>
                        <h4 class="firsth4">
                            Müəllim
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="mentors" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3 mentors-up-side">
                    <h2>
                        Müəllim. Ekspertlər.
                    </h2>
                    <p>
                        Müəllim heyətimiz öz sahələrində ən enerjili və təcrübəli peşəkarlardan ibarətdir. Onlar
                        sürətlə inkişaf edən sənaye ilə ayaqlaşmaq üçün tədris təcrübələrini daim təkmilləşdirir və
                        sizin yeni karyeranızda üstün olmanızı təmin edir.
                    </p>
                    <p>
                        Codemarketinq tələbəsi olaraq siz həm proqramda, həm də sahədə uğurunuza sadiq olan
                        təcrübəli mentorla təkbətək əməkdaşlıq edəcəksiniz. Mentorlarımız orta hesabla 10 illik
                        təcrübəyə malikdirlər və motivasiyalı öyrənənlərə gələcəklərini dəyişməkdə kömək etməyə
                        çalışırlar.
                    </p>
                </div>
                <div class="col-12 col-md-4 mentors-card">
                    <div class="mentors-img">
                        <img src="{{ asset('frontend/img/outComes/teacher4.jpg') }}" alt="">
                    </div>
                    <div class="mentors-about">
                        <h6>
                            Pərviz Azərelli
                        </h6>
                        <p>
                            Machine learning mütəxəssis
                        </p>
                        <!-- <p>
                            Associate Software Engineer @ R/GA @ Google
                        </p> -->
                    </div>
                </div>
                <div class="col-12 col-md-4 mentors-card">
                    <div class="mentors-img">
                        <img src="{{ asset('frontend/img/outComes/teacher2.jpg') }}" alt="">
                    </div>
                    <div class="mentors-about">
                        <h6>
                            Elçin Yusubov 
                        </h6>
                        <p>
                            Codemarketoloq mütəxəssis
                        </p>
                        <!-- <p>
                            Associate Software Engineer @ R/GA @ Google
                        </p> -->
                    </div>
                </div>
                <div class="col-12 col-md-4 mentors-card">
                    <div class="mentors-img">
                        <img src="{{ asset('frontend/img/outComes/Mehemmedmellim.jpg') }}" alt="">
                    </div>
                    <div class="mentors-about">
                        <h6>
                        Məhəmməd  Hacıyev
                        </h6>
                        <p>
                        Full-stack developer
                        </p>
                        <!-- <p>
                            Associate Software Engineer @ R/GA @ Google
                        </p> -->
                    </div>
                </div>
                <div class="col-12 col-md-4 mentors-card">
                    <div class="mentors-img">
                        <img src="{{ asset('frontend/img/outComes/Teacher1.jpg') }}" alt="">
                    </div>
                    <div class="mentors-about">
                        <h6>
                        Elviz İsmayılov 
                        </h6>
                        <p>
                        Machine learning mütəxəssis
                        </p>
                        <!-- <p>
                            Associate Software Engineer @ R/GA @ Google
                        </p> -->
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section id="eight" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="eight-h3-side">
                    <h3>
                        Hardan başlayacağınızdan əmin deyilsiniz?
                    </h3>
                </div>

                <p class="eight-p text-center">
                    Codemarketinq təhsil məsləhətçisi düzgün kursu tapmaq üçün sizinlə təkbətək işləyəcək.
                </p>
                <div class="eight-input-side">
                    <form action="">

                        <p>E-poçtunuz</p>
                        <input type="text" name="" id="">

                        <button>
                            Ətraflı
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="aboutUs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-7 py-4">
                    <div class="about-us-left">
                        <h3>
                            Yenilik| Əlçatanlıq
                        </h3>
                        <h1>
                            Tələbə uğuru üçün güclü motivasiya.
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-5 py-4">
                    <div class="about-us-right-up">
                        <!-- <p>
                            Dünyanın ən böyük web texnologiya şirkətlərindən biri tərəfindən dəstəklənən biz
                            karyeraya əsaslanan təhsili bütün uğurlu tələbələr üçün daha əlçatan etmək öhdəliyimizə
                            sadiqik.
                        </p> -->
                        <p>
                            Tələbələrimiz öz sinfində ən yaxşı onlayn öyrənmə, təkbətək mentorluq, çevik ödəniş
                            seçimləri və karyera təlimi ilə uğur qazanmağa hazırlaşırlar.
                        </p>
                        <p>
                            Təklif etdiyimiz hər bir proqram cari iş bazarına uyğunlaşdırılıb və işəgötürənlərə
                            lazım olan bacarıqları öyrətməyimizi təmin etmək üçün mütəmadi olaraq kurikulumlarımızı
                            yeniləyirik.
                        </p>
                    </div>
                    <div class="about-us-down">
                        <a href="{{ route('front.howework') }}">
                            Necə işləyirik
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="partners" class="py-5">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 col-md-6 partners-img">
                    <img src="{{ asset('frontend/img/outComes/logo12-01.png') }}" alt="">
                </div>
                <div class="col-12 col-md-6 partners-text">
                    <h2>
                        Tərəfdaşlar
                    </h2>
                    <p>
                    İllərdir onlarla şirkətin bizneslərinə peşəkar dəstək vermiş tərəfdaşlarımız öz sahələrində ən yaxşılardandir. Və tələbələrimizə, məzunlarımıza öz qapılarını açaraq, bütün işlərə kənardan deyil, elə ən dərindən baxaraq, ən yaxşı mütəxəssis olmaları üçün bizimlədirlər!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="three" class="my-5">
        <div class="container">
            <div class="row">
                <div class=" col-12 programs-title">
                    <h2>Proqramlarımız</h2>
                </div>

                <div class="col-12 col-md-4 cards-area">
                    <div class="card-area">
                        <a href="{{ route('front.courses') }}">
                            <div class="img-side">
                                <img src="{{ asset('frontend/img/faq/sayt3-01.jpg') }}" alt="">
                            </div>
                            <div class="card-content">
                                <span class="first">
                                    <u>
                                        Code marketinq
                                    </u>
                                </span>
                                <p class="second">
                                    Kodlama bilikləri əsasında marketinq sahəsində real biznes layihələri üzərində
                                    işləməyi öyrənin.
                                </p>
                                <p href="" class="third">
                                    <span>
                                        Full-Time:
                                    </span>
                                    Sürətləndirilmiş temp ilə | 25-30 saat/həftə | 6 aya məzun 
                                </p>
                                <p href="" class="fourth">
                                    <span>
                                        Part-Time:
                                    </span>
                                    Sərbəst təhsil al | 10-15 saat/həftə | 8 aya məzun 
                                </p>

                                <div class="card-button-area">
                                    <p href="">
                                        <u>
                                            Kursa baxın
                                        </u>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 cards-area">
                    <div class="card-area">
                        <a href="{{ route('front.programming') }}">
                            <div class="img-side">
                                <img src="{{ asset('frontend/img/faq/sayt2-01.jpg') }}" alt="">
                            </div>
                            <div class="card-content">
                                <span class="first">
                                    <u>
                                        Fullstack development
                                    </u>
                                </span>
                                <p class="second">
                                    Proqramlaşdırmanı və müasir biznesin ehtiyac duyduğu tələbləri öyrənin.
                                </p>
                                <p href="" class="third">
                                    <span>
                                        Full-time:
                                    </span>
                                    Sürətləndirilmiş temp ilə | 25-30 saat/həftə | 6 aya məzun 
                                </p>
                                <p href="" class="fourth">
                                    <span>
                                        Part-Time:
                                    </span>
                                    Sərbəst təhsil al | 10-15 saat/həftə | 8 aya məzun 
                                </p>

                                <div class="card-button-area">
                                    <p href="">
                                        <u>
                                            Kursa baxın
                                        </u>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 cards-area">
                    <div class="card-area">
                        <a href="./public/digitalMarketing.html">
                            <div class="img-side">
                                <img src="{{ asset('frontend/img/main/eeeeeeee-2.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <span class="first">
                                    <u>
                                        Machine learning
                                    </u>
                                </span>
                                <p class="second">
                                    ML nəzəriyyələri uyğun riyazi bilikləri, kodlama və öz ML layihənizi yaratmağı
                                    öyrənin. </p>
                                <p href="" class="third">
                                    <span>
                                        Full-time:
                                    </span>
                                    Sürətləndirilmiş temp ilə | 25-30 saat/həftə | 6 aya məzun 
                                </p>
                                <p href="" class="fourth">
                                    <span>
                                        Part-time:
                                    </span>
                                    Sərbəst təhsil al | 10-15 saat/həftə | 8 aya məzun 
                                </p>

                                <div class="card-button-area">
                                    <p href="">
                                        <u>
                                            Kursa baxın:
                                        </u>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="chooseProgram" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-7 program-left">
                    <div class="content-area-last">
                        <h1>
                            Səyahətinizə başlamaq üçün proqram seçin.
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <form action="">
                        <div class="form-area">
                            <div class="select-box-area">
                                <label for="programmers">Hansı proqramla maraqlanırsınız?</label>
                                <select name="programmers" id="programmers">
                                    <option value="1">Code Marketing</option>
                                    <option value="2">Full-Stack proqramlaşdırma</option>
                                    <option value="3">Machine learning</option>
                                </select>
                            </div>
                            <div class="select-box-area">
                                <label for="email">E-poçtunuz</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="button-area">
                                <button>
                                    Qeydiyyatdan keçin
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
