@extends('front.layouts.app')
@section('title','Digital Marketing')
@section('course-name','Front end və Back end öyrən, praktika et​')
@section('content')
<main>
    <section id="course-one">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 course-one-left">
                    <div class="course-one-up">

                        <h1>Machine learning</h1>
                    </div>
                    <div class="course-one-middle-up">
                        <p>
                            Gələcək karyeranız burdan başlayır. Asan ödəniş üsulları, peşəkar təlimçilərin və
                            karyera mentorlarının dəstəyi ilə təhsil alın.
                        </p>
                        <a href="">
                            İndi başlayın
                        </a>
                    </div>
                    <div class="course-one-down">
                        <ul>
                            <li>
                                <img src="../src/img/course/FullPartTime_32x32.svg" alt="">

                                Sürətləndirilmiş templə nəzəriyyə və iş təcrübəsi

                            </li>
                            <li>
                                <img src="../src/img/course/MoneyBack_32x32.svg" alt="">

                                Asan ödəniş üsulları

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-5 course-one-right">
                    <iframe class="course-iframe" src="{{_setting('kurs_ucun_youtube_link')}}"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="course-two" class="py-3">
        <div class="container">
            <div class="row">
                <div class="option-area">
                    <div class="option-side">
                        <a href="#course-select-first">
                            Giriş
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#job-skills">
                            Kurikulum
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#schedule-options">
                            Dərs cədvəli
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#payment-options">
                            Ödəniş planları
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#five">
                            Təlimçilər
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#circle-area">
                            Karyera xidməti
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#seven">
                            Nəticələr
                        </a>
                    </div>
                    <div class="option-side">
                        <a href="#admissions-process">
                            İndi başlayın
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.parts.trialLessons')
    <section id="course-select-first" class="py-5 my-3">
        <div class="container">
            <div class="row">
                <div class="table-for-padding">
                    <div class="table-area-up col-12">
                        <h3>
                            Machine learning-ə giriş
                        </h3>
                        <h2>
                            Müasir və perspektivli sahədə işləmək şansı qazanın.
                        </h2>
                    </div>
                    <div class="table-area col-12">
                        <div class="table-left">
                            <p>
                                Hər gün yenilənən, inkişafda olan texnologiyaların olduğu dünyada sürətlə təlabatı artan Machine learning üzrə mütəxəssis olmaq sizi həm yerli həm də xarici bazarda ən vacib kadra çevirəcək.​
                            </p>
                            <h5 class="first-h5">Ortalama əmək haqqı artımı</h5>
                            <h5 class="second-h5">₼14K</h5>
                        </div>
                        <div class="table-right">
                            <div class="leftSide">
                                <div class="leftSide-up">
                                    <img src="{{ asset('frontend/img/course/jobtitles_32x32.svg') }}" alt="" >

                                    <img src="../src/img/course/jobtitles_32x32.svg" alt="">
                                    <h5>Ümumi iş başlıqları</h5>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        
                                        Machine learning mütəxəssisi
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Data Scientist
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Süni intellekt mütəxəssisi
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Blockchain​
                                    </li>

                                </ul>
                            </div>
                            <div class="leftSide">
                                <div class="leftSide-up">
                                     <img src="{{ asset('frontend/img/course/jobtitles_32x32.svg') }}" alt="" >
                                    <h5>Ümumi biliklər</h5>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Python proqramlaşdırma dili
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Data Science
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Alqoritmlər
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Riyazi biliklər
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                        Machine learning teoremləri
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="accordion-side">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion">
                        <div class="contentbx">
                            <div class="label">
                                * A note on our salary data
                                <img class="hello" src="../src/img/course/arrow.svg" alt="">
                            </div>
                            <div class="content">
                                Average salary increase for grads is based on our Outcomes report, which you can
                                find here. <br>

                                Results reflect a CodeMarketing online survey conducted among CodeMarketing graduates who
                                reported an in-field job between September 2018 and February 2020. Respondent base
                                (n=232) among 336 graduate invites. (Sample size represents this population of
                                customers within a margin of error of 6.4% at 95% confidence.) Survey responses are
                                not a guarantee of any particular results as individual experiences may vary. The
                                survey was fielded between February 16th and February 28th, 2021. Graduates invited
                                to the survey were offered a ₼ 25 gift card.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="six" class=" mt-5">
        <div class="container">
            <div class="row six-row-side">
                <div class="col-12">
                    <h4>
                        Codemarketing məzunlarının iş yerləri
                    </h4>
                </div>
                <div class="col-12  six-donw-side">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/img/faq/logo1.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/faq/logo2.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/faq/logo3.jpg') }}" alt="">
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/faq/logo4.jpg') }}" alt="">
                        </li>
                        <li>
                            <img style="width:50%" src="{{ asset('frontend/img/main/Jugaad-logo.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="flexible">
        <div class="container">
            <div class="row justify-content-center">
                <div class="flexible-area">
                    <div class="flexible-left">
                        <h3>
                        Karyeranızı maliyyələşdirmək üçün sizə uyğun seçimlər
                        </h3>
                    </div>
                    <div class="flexible-right">
                        <p>Ödəniş planlarımız ehtiyaclarınız əsasında qurulub.İstər təhsilinizi əvvəlcədən
                            maliyyələşdirə, istərsə də iş tapdığınız zaman ödəniş edə bilərsiniz.
                        </p>
                        <div class="flexible-button-area">
                            <a href="#payment-options">
                                Ödəniş planlarına baxın
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.parts.programMail')
    <section id="schedule-options" class="py-5">
        <div class="container">
            <div class="row" style="padding: 0 80px 0 80px;">
                <div class="option-title-area">
                    <p class="options-first-p">
                        Cədvəl Seçimləri
                    </p>
                    <h3>
                        Bir proqramın öyrənməyin iki fərqli yolu.
                    </h3>
                    <p class="option-second-p">
                        Vaxtınızın böyük hissəsini proqrama sərf edərək sürətli şəkildə öyrənə bilər və ya digər öhdəçilikləriniz varsa, part-time şəkildə iştirak edə bilərsiniz.​
                    </p>
                </div>
                <div class="option-table-area">
                    <div class="table-one">
                        <div class="table-first"></div>
                        <div class="table-second">
                            <div class="table-img">
                            <img src="{{ asset('frontend/img/course/FullPartTime_32x32.svg') }}" alt="">
                            </div>
                            <div class="table-write-area">
                                <h4>Full-time</h4>
                                <p>
                                    Sürətləndirilmiş templə kursda təhsil alın
                                </p>
                            </div>
                        </div>
                        <div class="table-second">
                            <div class="table-img">
                            <img src="{{ asset('frontend/img/course/FullPartTime_32x32.svg') }}" alt="">
                            </div>
                            <div class="table-write-area">
                                <h4>Part-time</h4>
                                <p>
                                    Müstəqil və çevik şəkildə sərbəst öyrənin
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Müddət</p>
                        </div>
                        <div class="table-common-second">
                            <p>6 aylıq</p>
                        </div>
                        <div class="table-common-second">
                            <p>
                                8 aylıq
                            </p>
                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Vaxt öhdəliyi </p>
                        </div>
                        <div class="table-common-second">
                            <p>25-30 saat/həftə</p>
                        </div>
                        <div class="table-common-second">
                            <p>
                                15-20 saat/həftə​
                            </p>
                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Canlı video dərslər</p>
                        </div>
                        <div class="table-common-second">
                            <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                        </div>
                        <div class="table-common-second">
                            <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >

                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Gündəlik canlı onlayn mühazirələr və seminarlar</p>
                        </div>
                        <div class="table-common-second">
                            <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                        </div>
                        <div class="table-common-second">
                        <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Əlavə seçimlər</p>
                        </div>
                        <div class="table-common-second">
                            <p>Xüsusi təlim köməkçiləri </p>
                        </div>
                        <div class="table-common-second">
                            <p>
                                Könüllü ofis saatları
                            </p>
                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Tələblər</p>
                        </div>
                        <div class="table-common-second">
                            <p>Dərhal başlayın</p>
                        </div>
                        <div class="table-common-second">
                            <p>
                                Dərhal başlayın
                            </p>
                        </div>
                    </div>
                    <div class="table-common">
                        <div class="table-common-first">
                            <p>Təhsil haqqı </p>
                        </div>
                        <div class="table-common-second">
                            <p>5500 manat</p>
                        </div>
                        <div class="table-common-second">
                            <p>
                                5400 manat
                            </p>
                        </div>
                    </div>
                    <div class="table-down">
                        <div class="table-down-textArea">
                            <p>
                                *Proqrama qəbul hazırlıq kursunu uğurla başa vurmaqdan asılıdır.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="payment-options" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 payment-text-area">
                        <p class="text-center">
                            Təhsil haqqının  ödənilmə üsulları
                        </p>
                    </div>
                    <div class="col-12 payment-second-text-area">
                        <h2 class="text-center">
                            Sizə uyğun ödəniş planlarımız
                        </h2>
                    </div>
                    <div class="col-12 payment-button-area">
                        <form action="">
                            <button class="machine-full  payment-button-left payment-backGround">
                                Full-time
                            </button>
                            <button class="machine-part payment-button-right">
                                Part-time
                            </button>
                        </form>
                    </div>
                    <div class="payment-information-common">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div class="payment-information">
                                    <div class="payment-up-inf">
                                        <div class="common-left">
                                            <div class="common-up">
                                                <h6>Aylıq ödəniş</h6>
                                                <p class="mach-cost">916 manat</p>
                                            </div>
                                            <div class="common-down">
                                                <p class="common-down-first">
                                                    Tədris müddəti ərzində ay əvvəli ödənişlər həyata keçirilir.​
                                                </p>
                                                <p class="common-down-second">
                                                    Ümumi ödəniş.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="common-right">
                                        <img src="{{ asset('frontend/img/main/arrow.svg') }}" alt="">

                                        </div>
                                    </div>
                                    <div class="common-downs">
                                        <div class="common-down-title">
                                            <!-- <p class="for-mobile-p">
                                                Pay in full before you start, at the lowest possible rate. No
                                                additional
                                                costs, and nothing to pay when you’re done.
                                            </p> -->
                                            <p>
                                                Full – time və part – time proqramlarımıza əsasən aylıq ödəniş planları
                                                ilə tanış ola bilərsiniz.

                                            </p>
                                            <!-- <p>
                                                Məzun olduqdan sonra 0 azn borcludur
                                            </p> -->
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 d-flex justify-content-center">
                                <div class="payment-information">
                                    <div class="payment-up-inf">
                                        <div class="common-left">
                                            <div class="common-up">
                                                <h6>Tam ödəniş (6 ay)</h6>
                                                <p class="mach-full">5000 manat</p>
                                            </div>
                                            <div class="common-down">
                                                <p class="common-down-first">
                                                    Başlamazdan əvvəl mümkün olan ən aşağı tariflə tam ödəniş edin.Heç
                                                    bir əlavə xərc yoxdur və təhsiliniz bitdikdə ödəniş yekunlaşmış
                                                    olur.
                                                </p>
                                                <p class="common-down-second">
                                                    Ümumi ödəniş.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="common-right">
                                        <img src="{{ asset('frontend/img/main/arrow.svg') }}" alt="">

                                        </div>
                                    </div>
                                    <div class="common-downs">
                                        <div class="common-down-title">
                                            <!-- <p class="for-mobile-p">
                                                Pay in full before you start, at the lowest possible rate. No
                                                additional
                                                costs, and nothing to pay when you’re done.
                                            </p> -->
                                            <p>
                                                Full – time və part – time proqramlarımıza əsasən aylıq ödəniş planları
                                                ilə tanış ola bilərsiniz.

                                            </p>
                                            <!-- <p>
                                                Məzun olduqdan sonra 0 azn borcludur
                                            </p> -->
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section id="schedule-call"
        style="background-image: url('{{ asset("frontend/img/course/lent.png") }}'); background-repeat: no-repeat; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 schedule-text-area">
                <h2 style="font-size:29px">
                        Bu sahədə işə başlamaq üçün ilk addımı atın </br> Elə indi zəng edin və ətraflı məlumat alın
                    </h2>
                </div>
                <div class="col-12 schedule-button-area">
                    <a href="{{ route('front.contact') }}">
                        Əlaqə
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="table-different">
        <div class="container mt-3 mt-5">
            <div class="row ">
                <div class="col-12 for-padding">
                    <h2>
                        Niyə biz ?
                    </h2>
                </div>
                <div class="col-12 col-md-4">
                    <div class="for-card-table">
                        <img src="{{ asset('frontend/img/course/proqramlasdirma-kursu-1.png.png') }}" alt="">

                        <!-- <img src="../src/img/course/proqramlasdirma-kursu-1.png.png" alt=""> -->
                        <p>Karyera mərkəzi</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="for-card-table">
                    <img src="{{ asset('frontend/img/course/proqramlasdirma-kursu-2.png.png') }}" alt="">
                        <!-- <img src="../src/img/course/proqramlasdirma-kursu-2.png.png" alt=""> -->
                        <p>Hər gün praktiki məşğələ</p>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="for-card-table">
                    <img src="{{ asset('frontend/img/course/proqramlasdirma-kursu-3.png.png') }}" alt="">

                        <!-- <img src="../src/img/course/proqramlasdirma-kursu-3.png.png" alt=""> -->
                        <p>Mentor dəstəyi</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="for-card-table">
                    <img src="{{ asset('frontend/img/course/proqramlasdirma-kursu-4.png.png') }}" alt="">

                        <!-- <img src="../src/img/course/proqramlasdirma-kursu-4.png.png" alt=""> -->
                        <p>İnternshiplərə qəbul</p>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="for-card-table">
                    <img src="{{ asset('frontend/img/course/proqramlasdirma-kursu-5.png.png') }}" alt="">

                        <!-- <img src="../src/img/course/proqramlasdirma-kursu-5.png.png" alt=""> -->
                        <p>Bootcamp sistemi</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="five" class="mb-5 py-5">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 five-side-left py-3">
                    <p class="first-p">Üzbəüz mentorluq </p>
                    <h2 class="five-h2-upside">Biz necə işləyirik</h2>
                    <div class="five-side-middle">
                        <h2>
                            Şəxsi mentorla danışın
                        </h2>
                        <ul>
                            <li>
                                <img  src="{{ asset('frontend/img/main/acces.svg') }}" alt="" >
                                <img src="../src/img/main/acces.svg" alt="">
                                Ekspertlərdən canlı ,şəxsi mentorluq
                            </li>
                            <li>
                                <img  src="{{ asset('frontend/img/main/acces.svg') }}" alt="" >

                                <img src="../src/img/main/acces.svg" alt="">
                                Ətraflı rəy
                            </li>
                            <li>
                                <img  src="{{ asset('frontend/img/main/acces.svg') }}" alt="" >

                                <img src="../src/img/main/acces.svg" alt="">
                                Karyera xidmətləri
                            </li>
                        </ul>
                    </div>
                    <div class="five-side-down">
                        <img src="{{ asset('frontend/img/main/owl.svg') }}" alt="" >

                        <img src="../src/img/main/owl.svg" alt="">
                        <div class="p-title">
                            <p class="title-first">Tələb üzrə texniki təlimlər</p>
                            <p class="for-1300">
                                Canlı söhbət xidmətimizlə real vaxt rejimində mütəxəssis müəllimlərimizlə əlaqə
                                saxlayın.Suallarınızı verin və sürətli cavablar alın.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 five-right-side py-3">
                    <img class="w-100" src="{{ asset('frontend/img/faq/sayt4-01.jpg') }}" alt="" >
                    <img class="w-100" src="../src/img/faq/sayt4-01.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="five" class="mb-5 py-5">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 five-side-left py-3">
                    <p class="first-p">Üzbəüz mentorluq </p>
                    <h2 class="five-h2-upside">Biz necə işləyirik</h2>
                    <div class="five-side-middle">
                        <h2>
                            Şəxsi mentorla danışın
                        </h2>
                        <ul>
                            <li>
                                <img src="../src/img/main/acces.svg" alt="">
                                Ekspertlərdən canlı ,şəxsi mentorluq
                            </li>
                            <li>
                                <img src="../src/img/main/acces.svg" alt="">
                                Ətraflı rəy
                            </li>
                            <li>
                                <img src="../src/img/main/acces.svg" alt="">
                                Karyera xidmətləri
                            </li>
                        </ul>
                    </div>
                    <div class="five-side-down">
                        <img src="../src/img/main/owl.svg" alt="">
                        <div class="p-title">
                            <p class="title-first">Tələb üzrə texniki təlimlər</p>
                            <p class="for-1300">
                                Canlı söhbət xidmətimizlə real vaxt rejimində mütəxəssis müəllimlərimizlə əlaqə
                                saxlayın.Suallarınızı verin və sürətli cavablar alın.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 five-right-side py-3">
                    <img class="w-100" src="../src/img/faq/sayt4-01.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="circle-area" class="my-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 for-order">
                    <div class="circle-img-area">
                        <img src="../src/img/course/Career_services_20210224_desktop.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="circle-content-area">
                        <h3>
                            Karyera xidməti
                        </h3>
                        <h2>
                            Fərdi karyera planı
                        </h2>
                        <div class="ul-side">
                            <h2>
                                Hər addımda sənin yanında.
                            </h2>
                            <ul class="circle-ul">
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                    <span>İlk gündən tam zamanlı karyera dəstəyi</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                    <span>Limitsiz texniki müsahibə təcrübəsi</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                    <span>Əmək haqqı anlayışları </span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                    <span>Linkedin və bloq yazma dəstəyi</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >
                                    <span>Təcrübə proqramlarına qoşulma imkanı</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="circle-area" class="my-5 py-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 for-order">
                    <div class="circle-img-area">
                        <img src="{{ asset('frontend/img/course/Career_services_20210224_desktop.png') }}" alt="" >

                        <img src="../src/img/course/Career_services_20210224_desktop.png" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="circle-content-area">
                        <h3>
                            Karyera xidməti
                        </h3>
                        <h2>
                            Fərdi karyera planı
                        </h2>
                        <div class="ul-side">
                            <h2>
                                Hər addımda sənin yanında.
                            </h2>
                            <ul class="circle-ul">
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >

                                    <img src="../src/img/course/large.svg" alt="">
                                    <span>İlk gündən tam zamanlı karyera dəstəyi</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >

                                    <img src="../src/img/course/large.svg" alt="">
                                    <span>Limitsiz texniki müsahibə təcrübəsi</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >

                                    <img src="../src/img/course/large.svg" alt="">
                                    <span>Əmək haqqı anlayışları </span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >

                                    <img src="../src/img/course/large.svg" alt="">
                                    <span>Linkedin və bloq yazma dəstəyi</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/img/course/large.svg') }}" alt="" >

                                    <img src="../src/img/course/large.svg" alt="">
                                    <span>Təcrübə proqramlarına qoşulma imkanı</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="seven">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 seven-side-left">
                    <h3>
                        Tələbələrin nəticələri
                    </h3>
                    <h2>
                        Biz tələbələrə karyera qurmaqda kömək edirik.
                    </h2>
                    <div class="seven-right-middleside">
                        <div class="seven-middle">
                            <p>
                                İşə götürmə reytinqi
                            </p>
                            <div class="seven-border-side"></div>
                            <div class="seven-num">
                                81%
                            </div>
                        </div>
                        <div class="seven-middle">
                            <p>
                                Ortalama əmək haqqı artımı
                            </p>
                            <div class="seven-border-side"></div>
                            <div class="seven-num">
                                ₼ 14K
                            </div>
                        </div>
                    </div>

                    <div class="slider-area-side">
                        <div class="for-span-area">
                            <span class="first-bar">
                                <div class="first-time"></div>
                            </span>
                            <span class="second-bar">
                                <div class="second-time"></div>
                            </span>
                            <span class="third-bar">
                                <div class="third-time"></div>
                            </span>
                        </div>
                        <h6>
                            Son iş təklifləri
                        </h6>
                        <div class="owl-carousel one-slide">
                            <div class="slide-area">
                                <div class="img-area">
                                    <img src="{{ asset('frontend/img/faq/sayt2.png') }}" alt="" >
                                </div>
                                <div class="content-area">
                                    <ul>
                                        <li>
                                            <p class="first-p">Tələbə</p>
                                            <p class="second-p">Günel Hacıyeva</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Vəzifələri </p>
                                            <p class="second-p">Full Stack Developer</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Şirkət </p>
                                            <p class="second-p">Pashabank</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slide-area">
                                <div class="img-area">
                                <img src="{{ asset('frontend/img/faq/sliderimg1.png') }}" alt="" >
                                    <img src="../src/img/faq/sliderimg1.png" alt="">
                                </div>
                                <div class="content-area">
                                    <ul>
                                        <li>
                                            <p class="first-p">Tələbə</p>
                                            <p class="second-p">Əhməd Verdiyev</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Vəzifələri </p>
                                            <p class="second-p">Marketoloq</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Şirkət </p>
                                            <p class="second-p">Procter & Gamble</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slide-area">
                                <div class="img-area">
                                    <img src="{{ asset('frontend/img/faq/sliderimg3.png') }}" alt="" >
                                </div>
                                <div class="content-area">
                                    <ul>
                                        <li>
                                            <p class="first-p">Tələbə</p>
                                            <p class="second-p">Leyla Haqverdiyeva </p>
                                        </li>
                                        <li>
                                            <p class="first-p">Vəzifələri </p>
                                            <p class="second-p">Frontend developer</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Şirkət </p>
                                            <p class="second-p">Umico</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                    <a href="">
                        Başqa nəticələrə bax
                    </a>

                </div>
                <div class="col-12 col-md-6 seven-side-img">
                    <img src="{{ asset('frontend/img/main/TopicPagePhoto_SE_Outcomes_Desktop.jpeg') }}" alt="" >
                </div>
            </div>
        </div>
    </section>
    @include("front.parts.programSubscribe")
    <section id="lastSlider" class="py-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 py-3 caruesel-title">
                    <h1>Tələbə rəyləri</h1>
                </div>
                <div class="owl-carousel two-slide">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 caruesel-img|">
                            <img src="{{ asset('frontend/img/course/picture1.jpg') }}" alt="" >
                        </div>
                        <div class="col-12 col-md-5 caruesel-content">
                            <div class="caruesel-content-up">
                                <p class="content-first-p">
                                    Leyla Hacıyeva, Codemarketing məzunu
                                </p>
                                <p>
                                    Əvvəlki vəzifəsi: Operator
                                </p>
                                <p>
                                    Cari vəzifəsi: Marketinq menecer
                                </p>
                            </div>

                            <div class="caruesel-text">
                                <div class="caruesel-img-unit">
                                    <img src="{{ asset('frontend/img/course/Vector (2).svg') }}" alt="" >
                                </div>
                                <p>
                                    Xəyalımı reallaşdırmaq üçün yaratdığı imkana görə Codemarketing kursuna dərin
                                    minnətdarlığımı bildirirəm. Peşəkar bacarıqlara yiyələnməklə yanaşı, təhsil
                                    aldığım müddətdə müsbət emosiyalar aldım və daha da irəliləmək arzusuna düşdüm.
                                </p>
                                <div class="caruesel-img-unit-two">
                                    <img src="{{ asset('frontend/img/course/Vector (2).svg') }}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 caruesel-img">
                            <img src="{{ asset('frontend/img/course/5.jpg') }}" alt="" >
                        </div>
                        <div class="col-12 col-md-5 caruesel-content">
                            <div class="caruesel-content-up">
                                <p class="content-first-p">
                                    Gülşən Suleymanova Codemarketing məzunu
                                </p>
                                <p>
                                    Əvvəlki iş yeri: Content meneceri
                                </p>
                                <p>
                                    Current Job: Developer
                                </p>
                            </div>

                            <div class="caruesel-text">
                                <div class="caruesel-img-unit">
                                    <img src="{{ asset('frontend/img/course/Vector (2).svg') }}" alt="" >
                                </div>
                                <p>
                                    İxtisas olaraq öncə proqramlaşdırmada qərarlaşmışdım çünki o da mənim böyük
                                    arzularımdan biri idi. Hər zaman proqramlaşdırma və marketinqi bir arada xəyal
                                    edirdim.Codemarketingdə aldığım təhsil düşünürəm ki, çox professionalcasına
                                    verilmiş təhsil idi. Bundan əlavə burada karyera dəstəyi mənə
                                    gələcək karyera addımlarımda çox kömək oldu. Ümumilikdə isə həyatıma rəng qatdı.
                                </p>
                                <div class="caruesel-img-unit-two">
                                    <img src="{{ asset('frontend/img/course/Vector (2).svg') }}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-5 caruesel-img">
                            <img src="{{ asset('frontend/img/course/picture2.jpg') }}" alt="" >
                        </div>
                        <div class="col-12 col-md-5 caruesel-content">
                            <div class="caruesel-content-up">
                                <p class="content-first-p">
                                    Xəyal Qurbanov Codemarketing məzunu
                                </p>
                                <p>
                                   Əvvəlki iş yeri: Dizayner
                                </p>
                                <p>
                                    İndiki iş yeri: Marketinq mütəxəssisi
                                </p>
                            </div>

                            <div class="caruesel-text">
                                <div class="caruesel-img-unit">
                                    <img src="{{ asset('frontend/img/course/Vector (2).svg') }}" alt="" >
                                </div>
                                <p>
                                   Tələbə olduğum müddətdə marketinqə marağım yaranmışdır.İşlədiyim müddətdə dizaynerliyin mənə görə olmadığına qərar verdim və marağımın arxasınca getdim.Bu kursda həm kod həm də marketinq öyrənərək tələb olunan kadrlardan biri oldum.
                                </p>
                                <div class="caruesel-img-unit-two">
                                    <img src="{{ asset('frontend/img/course/Vector (2).svg') }}" alt="" >

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section id="lastAccordion" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        FAQs
                    </h2>
                </div>
                <div class="accordion-top">
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Codemarketing kursları nə vaxt başlayır ?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="" >
                        </button>
                        <div class="accordion-content">
                            <p>
                               
                                    Öncədən hansı təklif olunan kursla maraqlandığınızı qeyd edin və başlama tarixlərini sizə məlumatlandıraq.

                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Tam ştat işləyənlər üçün tədris proqramında hansı seçimlər var ?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="" >
                        </button>
                        <div class="accordion-content">
                            <p>
                                Təklif olunan kurslarımızda sizə uyğun olaraq tam zamanlı (Full time) və yarım zamanlı (Part time) mövcuddur. Əlavə məlumat əldə etmək üçün bizimlə əlaqə saxlayın.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Kurs müəllimlərinin təcrübəsi nə qədərdir?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="" >
                        </button>
                        <div class="accordion-content">
                            <p>
                               Code Markerketinqdə dərs keçən müəllimlər tədris və proqramlaşdırma sahəsində 3-5 ildən artıq təcrübəsi olan, xaricdə təhsil almış və beynəlxalq sertifikatlara sahib olan şəxslərdir.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Proqram zamanı tələbələrə hansı dəstəyi təmin edəcəksiniz? 
                            </span>
                               <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="" >
                        </button>
                        <div class="accordion-content">
                            <p>
                                Proqram zamanı hər tərəfli istərsə də fərdi yanaşma ilə sizə tam dəstək veriləcək. Seçdiyiniz proqramdan asılı olmayaraq, aşağıdakılara giriş əldə edəcəksiniz: </br>
                                o   1:1 Mentorluq -- Sizi praktiki bacarıqlarınızı və güclü tərəflərinizi ən yaxşı şəkildə inkişaf etdirməyə dəstək verəcəkdir. </br> 
                                o	Lazımi olan veb və kitab resurslarına çıxış ələd etmək <br/>
                                o	Lazımi avandanlıqlarla təmin olunma  </br>
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Tədris proqramı yekunlaşdıqdan sonra karyera xidmətləri göstərilirmi?
                            </span>
                               <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="" >
                        </button>
                        <div class="accordion-content">
                            <p>
                                Tədris müddəti bitirdikdən sonra təcrübə proqramlarına qoşulma şansı eyni
                                    zamanda iş tapmaqda karyera təmsilçilərimiz tam dəstək göstərir.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Təcrübə proqramına nə daxildir?
                            </span>
                               <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="" >
                        </button>
                        <div class="accordion-content">
                            <p>
                                Təcrübə proqramı sizə şirkətin proqramçılarının çalışdığı layihələr üzərində tapşırıqları icra etməyə və onun inkişafında iştirak etmək imkanı verir. Təcrübə proqramının sonunda xüsusi tövsiyə məktubu alacaqsınız ki, bu da sizin gələcək karyeranızda vacib bir sənəddir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
