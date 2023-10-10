@extends('front.layouts.app')
@section('title','Hire Of Guards')
@section('content')
<main>
    <section id="course-one" class="for-guards">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 course-one-left for-guards-left">
                    <div class="course-one-up">

                        <h1>Ən son texnoloji bacarıqlara etibarlı və sürətli yollarla yiyələnin​</h1>
                        <p>
                        Tələbələrimiz ilk gündən etibarən displinli şəkildə proqrama başlayır, kurs müddətində təcrübəli müəllimlər və kariyera dəstəyi ilə təmin olunurlar.​
                        </p>
                        <a href="">
                            Bizimlə əlaqə
                        </a>
                    </div>
                    <div class="course-one-middle-up">


                    </div>

                </div>
                <div class="col-12 col-md-5 course-one-right">
                    <img style="width:100%" src="{{ asset('frontend/img/aboutUs/IMG_7281.jpg') }}" alt="">

                    <!-- <img src="../src/img/course/SE_HERO_IMAGE_20210224.jpg" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="six">
        <div class="container">
            <div class="row six-row-side">
                <div class="col-12">
                    <h4>
                        Codemarketinq məzunlarının iş yerləri
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
                            <img id="for-special" src="{{ asset('frontend/img/main/Jugaad-logo.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="accordion-side">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion">
                        <div class="contentbx">
                            <div class="label">
                            Təhsil haqqının geri qaytarılması siyasəti nədir? 
                                <img class="hello" src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">

                                <!-- <img class="hello" src="../src/img/course/arrow.svg" alt=""> -->
                            </div>
                            <div class="content">
                            Təhsil haqqının qaytarılması siyasəti” ilə iləri gələrək CodeMarketinq müvafiq kurs proqramı uyğun olaraq bitirdikdən sonra tələbə 180 gün ərzində iş tapa bilmirsə kursa ödənilən məbləğ geri qaytaılır. 
Qeyd etmək vacibdir ki, Təhsil Haqqının Geri qaytarılması Siyasətinə uyğun olub-olmamasından asılı olmayaraq hər bir tələbə eyni səviyyədə karyera dəstəyi alır və məzun olduqdan dərhal sonra 180 gün ərzində 20 saatlıq karyera xidmətləri dəstəyinə çıxış əldə edir. Məzun olmamışdan əvvəl sizə bu dəstəyi almaq üçün qoşulmaq və ya imtina etmək imkanı veriləcək. İmtina etmək uyğunluğunuza təsir edir. Həmçinin nəzərə alın ki, Təhsil haqqının geri qaytarılması siyasəti tələbə müvafiq kursdan məzun kimi bitirdikdən sonra Codemarketinq tərəfindən iş ilə təmin olunma zamanı imtina edildiyi təqdirdə qüvvədən düşmüş hesab olunur.
                            </div>
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
                        Biz tələbələrərimizə karyera qurmaqda kömək edirik.
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
                                ₼14K
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
                        <div class="owl-carousel">
                            <div class="slide-area">
                                <div class="img-area">
                                    <img src="{{ asset('frontend/img/faq/sliderimg1.png') }}" alt="">
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
                                    <img src="{{ asset('frontend/img/faq/sayt2.png') }}" alt="">
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
                                    <img src="{{ asset('frontend/img/faq/sliderimg3.png') }}" alt="">
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
                    <img src="{{ asset('frontend/img/main/TopicPagePhoto_SE_Outcomes_Desktop.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="whycyber" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <div class="cybre-text-area">
                        <h2>
                        Niyə Codemarketing?
                        </h2>
                        <p>
                        İnformasiya texnologiyaları sahəsi bu günün və sabahın ən tələb edilən sahələrindən biridir.İstər ölkəmizdə istərsə də, xaricdə proqramlaşdırma üzrə rəqabət kifayət qədər yüksəkdir.Kodlamaya yönələn insanlar üçün davamlı məşğul olmaqdan əlavə düzgün metodika və müəllim dəstəyi onları daha sürətli öyrənməyə kömək edir.​

Proqramlaşdırma üzrə rəqabətin çox olduğunu nəzərə alaraq bu sahə üzrə təcrübəli kadr olmaq daha da çətinləşir.
                        </p>
                        <p>
                        Təcrübəli müəllim heyəti və karyera dəstəyi ilə Codemarketinq komandası sizə həm sıfırdan bilikləri qazanmaqda həm kodlama bacarıqlarınızı daha da artırmaqda həm də, karyera qurmaqda dəstək verir.​

Dinamik, daima inkişafda olan peşəkar komanda ilə siz tədris müddətində və karyera yolunda yüksək nəticələr əldə edəcəksiniz.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="cyber-img">
                    <img src="{{ asset('frontend/img/aboutUs/IMG_7175.jpg') }}" alt="">

                        <!-- <img src="../src/img/aboutUs/DA_HERO_IMAGE_20210224.webp" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                    Leyla Hacıyeva, Codemarketinq məzunu
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
                                    Xəyalımı reallaşdırmaq üçün yaratdığı imkana görə Codemarketinq kursuna dərin
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
                                    Gülşən Suleymanova Codemarketinq məzunu
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
                                    edirdim.Codemarketinqdə aldığım təhsil düşünürəm ki, çox professionalcasına
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
                                    Xəyal Qurbanov Codemarketinq məzunu
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
</main>
@endsection
