@extends('front.layouts.app')
@section('title','Homework')
@section('content')
<main>
    <section id="work-one">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-6 work-one-left">
                    <div class="left-up">
                        <h1>
                            Təcrübəli müəllim heyəti və karyera dəstəyi ilə Codemarketing komandası sizin yanınızda.
                        </h1>
                    </div>
                    <div class="left-down">
                        <p>
                            Dinamik, daima inkişafda olan peşəkar komanda ilə siz tədris müddətində və
                            karyera yolunda yüksək nəticələr əldə edəcəksiniz. </p>
                    </div>
                </div>
                <div class="col-12 col-md-5"></div>
            </div>
        </div>
    </section>
    <section id="work-two" class="my-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 work-two-img">
                    <img src="{{ asset('frontend/img/faq/gfjn-01.jpg') }}" alt="">
                    <!-- <img src="../src/img/faq/gfjn-01.jpg" alt=""> -->
                </div>
                <div class="col-12 col-md-6 work-two-content">
                    <h3>Addım 1:</h3>
                    <h2>Proqram seçin</h2>
                    <p>
                        Karyera yolunuz barədə kömək almaq, sizə uyğun tədris proqramı seçmək üçün Karyera
                        məsləhətçisinin dəstəyindən yararlanın. Özünüzə uyğun ödəniş və tədris proqramlarından birini
                        seçin.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="work-three" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 work-three-content">
                    <h3>Addım 2 :</h3>
                    <h2>Öyrənməyə başlayın</h2>
                    <p>
                        Güclü komanda ilə bacarıqlara yiyələnin və ya daha da inkişaf etdirin. Siz
                        şəxsi mentorunuzun , karyera məsləhətçilərinin canlı və onlayn görüşləri ilə tam dəstəyi
                        alacaqsınız. Öyrənmənin intensiv və sürətli olmağından asılı olaraq part-time və full-time
                        tədrislərdən birini seçə bilərsiniz.
                    </p>
                </div>
                <div class="col-12 col-md-6 work-three-img">
                        <img src="{{ asset('frontend/img/faq/testphoto4.jpg') }}" alt="">

                    <!-- <img src="../src/img/faq/testphoto4.jpg" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="work-two" class="my-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 work-two-img">
                    <img src="{{ asset('frontend/img/faq/photo2-01.jpg') }}" alt="">

                    <!-- <img src="../src/img/faq/photo2-01.jpg" alt=""> -->
                </div>
                <div class="col-12 col-md-6 work-two-content">
                    <h3>Addım 3:</h3>
                    <h2>Karyeraya başlayın</h2>
                    <p>
                        Codemarketing yalnız tədris sahələri üzrə mütəxəssislər deyil, həm də sektorun tələblərinə
                        uyğun kadrlar yetişdirir. Karyera məsləhətçilərimiz sizə cv düzəltməkdə, müsahibələri uğurla
                        keçməkdə dəstək olacaqlar. </p>
                </div>
            </div>
        </div>
    </section>
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
                        @foreach($logos as $logo)

                            <li>
                                <img src="{{asset('storage/'.$logo['image'])}}" alt="">
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="support-network">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>
                        Dəstək komandamızla tanış olun:
                    </h2>
                </div>
                <div class="col-12 col-md-3">
                    <div class="buttons-area">
                        <button class="forjsbtn btnActive" data-for-panel="first">
                            <span>
                                Müəllimlər
                            </span>
                            <span class="hello cart">
                                >
                            </span>
                        </button>
                        <button class="forjsbtn" data-for-panel="second">
                            <span>
                                Karyera Məsləhətçisi
                            </span>
                            <span class="hello">
                                >
                            </span>
                        </button>
                        <button class="forjsbtn" data-for-panel="three">
                            <span>
                                Həmyaşıdlar
                            </span>
                            <span class="hello">
                                >
                            </span>
                        </button>
                        <button class="forjsbtn" data-for-panel="four">
                            <span>
                                Akademik Uğur Kouçu
                            </span>
                            <span class="hello">
                                >
                            </span>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-md-8 right-one ok" data-panel-id="first">
                    <div class="row">
                        <div class="col-12 col-md-6 support-text">
                            <h3>
                                Müəllimlər
                            </h3>
                            <p>
                                Canlı və ya video dərslər vasitəsilə təcrübəli mentorunuzla görüşlərdə iştirak edə
                                bilərsiniz. Onlar sizin suallarınıza
                                cavab vermək və ilk gündən təhsil planınızı tərtib etmək üçün şəxsi
                                bələdçilərinizdir.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 support-img">
                            <img src="{{ asset('frontend/img/faq/post7-01.jpg') }}" alt="">

                            <!-- <img src="../src/img/faq/post7-01.jpg" alt=""> -->
                        </div>
                        <div class="col-12 support-contents">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Online_32x32.svg') }}" alt="">

                                    <!-- <img src="../src/img/howWeWork/Online_32x32.svg" alt=""> -->
                                    <h6>Onlayn təhsil</h6>
                                    <p>
                                        Onlayn təhsillə uzaq məsafədən kodlama öyrənin.

                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/NoRisk_32x32.svg') }}" alt="">

                                    <!-- <img src="../src/img/howWeWork/NoRisk_32x32.svg" alt=""> -->
                                    <h6>Dəstək komandası </h6>
                                    <p>
                                        Güclü dəstək komandası ilə sizə faydalı xidmət verməyə hazırıq.
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Communication_32x32.svg') }}" alt="">

                                    <!-- <img src="../src/img/howWeWork/Communication_32x32.svg" alt=""> -->
                                    <h6>Codechat</h6>
                                    <p>
                                        Mövzu üzrə mütəxəssislərimiz canlı söhbət vasitəsilə suallarınıza
                                        cavab verməyə hazırdır.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 right-one" data-panel-id="second">
                    <div class="row">
                        <div class="col-12 col-md-6 support-text">
                            <h3>
                                Karyera məşqçisi
                            </h3>
                            <p>
                                Təhsil aldığınız proqram üzrə peşəkar kadr kimi yetişdirməkdən savayı, eyni zamanda
                                sizə uyğun iş tapmaqda kömək göstərməsi üçün karyera məsləhətçilərimizdən dəstək ala
                                bilərsiniz.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 support-img">
                            <img src="{{ asset('frontend/img/faq/photo3-01.jpg') }}" alt="">
                            <!-- <img src="../src/img/faq/photo3-01.jpg" alt=""> -->
                        </div>
                        <div class="col-12 support-contents">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Online_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/Online_32x32.svg" alt=""> -->
                                    <h6>Real layihələrlə iş</h6>
                                    <p>
                                        Artıq öyrənmə müddətində sizin real layihələr üzərində işləmək və onları
                                        anlamaq imkanınız yaranacaq
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/NoRisk_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/NoRisk_32x32.svg" alt=""> -->
                                    <h6>Güclü komanda </h6>
                                    <p>
                                        Təlimçilərimiz təcrübəli peşəkarlardırlar. Hər dərs siz mövzular
                                        incələyəcək, tapşırıqlar yerinə yetirəcəksiniz.
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Communication_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/Communication_32x32.svg" alt=""> -->
                                    <h6>Codechat</h6>
                                    <p>
                                        Təhsil müddəti ərzində və bitirdikdən sonra da sizə köməklik göstərməyə
                                        hazırıq.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 right-one" data-panel-id="three">
                    <div class="row">
                        <div class="col-12 col-md-6 support-text">
                            <h3>
                                Həmyaşıdlar
                            </h3>
                            <p>
                                Təhsil müddətində bilik və bacarıqlarınızı bölüşə biləcəyiniz, eyni zamanda gələcək
                                karyeranızda sizə dəstək ola biləcək tələbələrlə təhsil almaq şansı qazanın.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 support-img">
                            <img src="{{ asset('frontend/img/faq/pos78-01.jpg') }}" alt="">
                            <!-- <img src="../src/img/faq/pos78-01.jpg" alt=""> -->
                        </div>
                        <div class="col-12 support-contents">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Online_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/Online_32x32.svg" alt=""> -->
                                    <h6>Real layihələrlə iş</h6>
                                    <p>
                                        Artıq öyrənmə müddətində sizin real layihələr üzərində işləmək və onları
                                        anlamaq imkanınız yaranacaq
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/NoRisk_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/NoRisk_32x32.svg" alt=""> -->
                                    <h6>Güclü komanda </h6>
                                    <p>
                                        Təlimçilərimiz təcrübəli peşəkarlardırlar. Hər dərs siz mövzular
                                        incələyəcək, tapşırıqlar yerinə yetirəcəksiniz.
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Communication_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/Communication_32x32.svg" alt=""> -->
                                    <h6>Codechat</h6>
                                    <p>
                                        Təhsil müddəti ərzində və bitirdikdən sonra da sizə köməklik göstərməyə
                                        hazırıq.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 right-one" data-panel-id="four">
                    <div class="row">
                        <div class="col-12 col-md-6 support-text">
                            <h3>
                                Meneceriniz
                            </h3>
                            <p>
                                Meneceriniz tədris müddəti ərzində dərs saatları və ödəniş üsulları barədə eyni
                                zamanda qarşılaşa biləcəyiniz hər hansı problemi həll etmək üçün sizə kömək edəcək.
                            </p>
                        </div>
                        <div class="col-12 col-md-6 support-img">
                            <img src="{{ asset('frontend/img/faq/fg-01.jpg') }}" alt="">
                            <!-- <img src="../src/img/faq/fg-01.jpg" alt=""> -->
                        </div>
                        <div class="col-12 support-contents">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Online_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/Online_32x32.svg" alt=""> -->
                                    <h6>Real layihələrlə iş</h6>
                                    <p>
                                        Artıq öyrənmə müddətində sizin real layihələr üzərində işləmək və onları
                                        anlamaq imkanınız yaranacaq
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/NoRisk_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/NoRisk_32x32.svg" alt=""> -->
                                    <h6>Güclü komanda </h6>
                                    <p>
                                        Təlimçilərimiz təcrübəli peşəkarlardırlar. Hər dərs siz mövzular
                                        incələyəcək, tapşırıqlar yerinə yetirəcəksiniz.
                                    </p>
                                </div>
                                <div class="col-12 col-md-4 support-content">
                                    <img src="{{ asset('frontend/img/howWeWork/Communication_32x32.svg') }}" alt="">
                                    <!-- <img src="../src/img/howWeWork/Communication_32x32.svg" alt=""> -->
                                    <h6>Codechat</h6>
                                    <p>
                                        Təhsil müddəti ərzində və bitirdikdən sonra da sizə köməklik göstərməyə
                                        hazırıq.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        Full-stack development
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
                            Səyahətinizə başlamaq üçün proqram seçin
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
                                    <option value="2">Full-stack development</option>
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
