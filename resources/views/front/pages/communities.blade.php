@extends('front.layouts.app')
@section('title','Communities')
@section('content')
<main>
    <section id="work-one">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-5 work-one-left first-communities-upside">
                    <div class="left-up communities-up">
                        <h3>Onlayn | Çevik ödəniş variantları </h3>
                        <h1>
                            Texnologiya karyerasına başlayın
                        </h1>
                    </div>
                    <div class="left-down communities-down">
                        <p>
                            Düzgün bacarıqlarla gələcəyinizi dəyişə bilərsiniz. Biz sizi layihə əsaslı kurikulum,
                            şəxsi mentorluq və karyera kouçluğu ilə uzunmüddətli uğur qazanmağa hazırlayırıq.
                        </p>

                        <a href="" class="button-communities">Müraciət et</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 communities-first-left">
                    <img src="{{ asset('frontend/img/faq/22.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="whycyber" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="cyber-img">
                        <img src="{{ asset('frontend/img/faq/23.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <div class="cybre-text-area communities-cyber-area">
                        <h2 class="h2-communities">
                            Texnologiyadan daha çoxu olan sahil texnologiya mərkəzi.
                        </h2>
                        <p>
                            Texnologiya sahəsində karyeralar maraqlı çətinliklər və inkişaf imkanları ilə gəlir - və
                            sizin LA-da çoxlu seçimləriniz var. Geniş əyləncə, sağlam həyat, müxtəlif mədəniyyətlər.
                        </p>
                        <p>
                            Layihə əsaslı proqramlarımızda siz işə götürənlər tərəfindən diqqətinizi cəlb etməyə
                            kömək edən bir portfel quracaqsınız.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="four" class="mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <ul>
                    <li>
                        <h1>
                            ₼14K ortalama ilə
                        </h1>
                        <h4 class="firsth4">
                            CodeMarketing məzunları maaş artımını qeyd edir
                        </h4>
                    </li>
                    <li>
                        <h1>
                            81%
                        </h1>
                        <h4 class="firsth4">
                            İşlə təmin olunan məzunzlar 180 gün ərzində işə qəbul olunduğunu bildirirlər.
                        </h4>
                    </li>
                    <li>
                        <h1>
                            4.8/5
                        </h1>
                        <h4 class="firsth4 secondh4">
                            karyers reytinqi
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="whycyber">
        <div class="container">
            <div class="row for-comminutes-mob-cyber">
                <div class="col-12 col-md-6 p-0">
                    <div class="cybre-text-area">
                        <h2>
                            Onlayn öyrənmənin çevikliyindən həzz alın
                        </h2>
                        <p>
                            Şəbəkə imkanları və cəlb olunmuş təlimatçılarla birlikdə təlim düşərgəsinin
                            rahatlığından faydalanacaqsınız. Bizim texnoloji mütəxəssislər və tələbələrdən ibarət
                            onlayn icmalarımız siz öyrənərkən və hətta məzun olduqdan sonra sizinlə əlaqə saxlayır.
                        </p>
                        <p>
                            Digər kodlaşdırma təlim düşərgələrindən fərqli olaraq, materialı mənimsəmək və işə qəbul
                            olmaq üçün lazım olan bütün dəstəyə sahib olacaqsınız. Düşüncəli bir tələbə olaraq, kurs
                            materialını emal etməyə və real həyat tətbiqlərini anlamağa kömək etmək üçün hər addımda
                            şəxsi mentorunuz olacaq.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="cyber-img">
                        <img class="in-communities" src="{{ asset('frontend/img/communities/Forweb.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="whycyber">
        <div class="container">
            <div class="row for-comminutes-mob-cyber">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="cyber-img">
                        <img src="{{ asset('frontend/img/communities/InstructorsTSAs_Color_Tablet.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <div class="cybre-text-area">
                        <h2 class="h2-communities">
                            LA Grads və İşəgötürənlərin Dedikləri budur:
                        </h2>
                        <p>
                            “Slack texniki yardımı demək olar ki, həmişə bir neçə dəqiqə ərzində mövcuddur və son
                            dərəcə məlumatlıdır. Mentorum çox faydalı və çox ruhlandırıcıdır. Proqram menecerim məni
                            işdə saxlayır və cəmiyyətlə əlaqə saxlayır”. - Məlumat Elmi Tələbəsi
                        </p>
                        <p>
                            “Anna LAZ-a verilənlərə əsaslanan layihələr üçün lazım olan bütün alətlərlə gəldi. O,
                            komandamıza dəyər qatmaqla digər bacarıqları tez öyrəndi”. - Data Analytics məzununu işə
                            götürdükdən sonra LAZ Parking-də menecer
                        </p>
                        <p>
                            “Endryunun təfərrüatlara göstərdiyi diqqət məni çox heyran etdi. O, həll etməyə
                            çalışdığımız problemlərə çox dəyərli rəy və perspektiv verir." - Lynx Wallet-də menecer,
                            Mühəndislik məzununu işə götürdükdən sonra.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="whycyber">
        <div class="container">
            <div class="row for-comminutes-mob-cyber">
                <div class="col-12 col-md-6 p-0">
                    <div class="cybre-text-area">
                        <h2 class="h2-communitiestwo">
                            Tələb olunan bacarıqları öyrənin
                        </h2>
                        <p>
                            Karyeranızı başlatmağınıza kömək etmək üçün buradayıq. Bugünkü iş bazarı ətrafında
                            qurulmuş kurrikulumdan öyrənin.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                    <div class="cyber-img">
                        <img class="in-communities" src="{{ asset('frontend/img/communities/tfzeroadvanced-web.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="webinarsevent">
        <div class="container py-5">
            <div class="row for-first-row-learning">
                <div class="col-12">
                    <h2>
                        Vebinarlar
                    </h2>
                </div>
                <div class="col-12 webinars-card">
                    <div class="row">
                        <div class="col-12 col-md-2" style="padding: 0;">
                            <div class="card-left">
                                <span class="first-span">Fevral</span>
                                <span class="second-span">25</span>
                                <span class="first-span">13:00PM</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-10" style="padding: 0;">
                            <div class="card-right" style="height:100%">
                                <div class="card-right-first communities-card">
                                    <h3>
                                        CodeMarketing Webinar || Full stack: Back end və Front end
                                    </h3>
                                </div>
                                <div class="card-right-second communities-card">
                                    <p>
                                        Full stack developer nə iş görür?  Back end və Front end arasındakı fərqlər nələrdir?Full stack developerin yol xəritəsi.
                                    </p>
                                    <a href="{{ route('front.contact') }}">
                                        Detalları gör və qeydiyyat et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 webinars-card">
                    <div class="row">
                        <div class="col-12 col-md-2" style="padding: 0;">
                            <div class="card-left">
                                <span class="first-span">Mart</span>
                                <span class="second-span">4</span>
                                <span class="first-span">14:00PM</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-10" style="padding: 0;">
                            <div class="card-right" style="height:100%">
                                <div class="card-right-first   communities-cardcommunities-card">
                                    <h3>
                                        CodeMarketing Webinar || Codemarketing nədir?

                                    </h3>
                                </div>
                                <div class="card-right-second communities-card">
                                    <p>
                                    Codemarketoloq nə iş görür? Niyə kod və marketinq birlikdə? Codemarketing  yol xəritəsi.
                                    </p>
                                    <a href="{{ route('front.contact') }}">
                                        Detalları gör və qeydiyyat et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 webinars-card">
                    <div class="row">
                        <div class="col-12 col-md-2" style="padding: 0;">
                            <div class="card-left">
                                <span class="first-span">Mart</span>
                                <span class="second-span">8</span>
                                <span class="first-span">15:00PM</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-10" style="padding: 0;">
                            <div class="card-right" style="height:100%">
                                <div class="card-right-first communities-card">
                                    <h3>
                                        CodeMarketing Webinar ||  Machine learning

                                    </h3>
                                </div>
                                <div class="card-right-second communities-card">
                                    <p>
                                    Machine learning nədir?  Machine learning mütəxəssisi olmaq üçün hansı bacarıqlar tələb olunur?
                                    </p>
                                    <a href="{{ route('front.contact') }}">
                                        Detalları gör və qeydiyyat et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 addtion-button">
                    <a href="">
                    Bütün Vebinarları gör​
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="six">
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
                            <img id="for-special" src="{{ asset('frontend/img/main/Jugaad-logo.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="lastAccordion" class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 for-border-communities">
                    <h2>
                        FAQs
                    </h2>
                </div>
                <div class="accordion-top p-0">
                    <div class="accordion-items for-correct-distances">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                            Kursa başlamaq üçün kompüter tələb olunan parametr nə olmaldır?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content for-correct-distances-content">
                            <p>
                            Ən azı 8 GB RAM, ən azı 2,0 GHz prosessor (GPU tələb olunmur) və ən azı 256 GB HD olan fərdi kompüterə sahib olmalıdır
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items for-correct-distances">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                            Kompüterim yoxdursa, kursda məşğul ola bilərəmmi?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content for-correct-distances-content">
                            <p>
                            Bəli, İstənilən vaxt sadəcə olaraq bu barədə önəcədən bildirməyiniz xahiş olunur.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items for-correct-distances">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                            Codemarketing kursları nə vaxt başlayır ?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content for-correct-distances-content">
                            <p>
                            Öncədən hansı təklif olunan kursla maraqlandığınızı qeyd edin və başlama tarixlərini sizə bildirək.
                            </p>
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
                    <h2 style="font-size:35px">
                        Yeni karyera üçün ilk addımı atın. Zəng edin və qəbula yazılın.
                    </h2>
                </div>
                <div class="col-12 schedule-button-area">
                    <a href="">
                        Zəng edin
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
