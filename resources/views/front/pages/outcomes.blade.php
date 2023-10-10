@extends('front.layouts.app')
@section('title','Outcomes')
@section('content')
<main>
    <section id="outcomes-one">
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-12 col-md-6">
                    <div class="one-left">
                        <div class="one-left-up">
                            <h3>
                                Tələbə nəticələri haqqında
                            </h3>
                            <h1>
                                Məzunlarımız uzunmüddətli uğur qazanırlar.
                            </h1>
                        </div>
                        <div class="one-left-middle">
                            <p>
                                Kod bacarıqlarınızı inkişaf etdirmək və ya fəaliyyət sahənizi dəyişmək istəyirsinizsə, Codemarketing sizin üçün əla fürsətdir. Tədris proqramı ilə yanaşı məzunlarımıza iş imkanlarından yararlanmağa köməklik göstəririk.
                            </p>
                            <p>
                                Proqram müddəti ərzində real layihələr işləyərək portfolionuza əlavə edə bilərsiniz.
                                Aşağıdakı qeydiyyat bölməsini əlavə edərək biz sizin bütün suallarınızı bir iş günü müddətində cavablandıracağıq.
                            </p>
                            <br>
                        </div>
                        <div class="one-left-down">
                            <div class="inputs-left-up">
                                <form action="">
                                    <div class="inputs-area">
                                        <div class="input-side">
                                            <label for="email">E-poçtunuz</label>
                                            <input type="email" name="email" id="email">
                                        </div>
                                        <div class="input-side">
                                            <label for="tel">Mobil nömrəniz</label>
                                            <input type="tel" name="tel" id="tel">
                                            <p>
                                                Telefon nömrəniz boşluq və ya xüsusi simvol olmadan 10 rəqəmdən
                                                ibarət olmalıdır.
                                            </p>
                                        </div>
                                        <div class="input-button-side">
                                            <button>
                                                Qeydiyyatdan keç
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 one-right">
                    <img src="{{ asset('frontend/img/faq/sayt4-01.jpg') }}" alt="">

                    <!-- <img src="../src/img/faq/sayt4-01.jpg" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="four">
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
                            Məzunlarımız 180 gün ərzində işə qəbul olunduğunu bildirirlər
                        </h4>
                    </li>
                    <li>
                        <h1>
                            4.8/5
                        </h1>
                        <h4 class="firsth4 secondh4">
                            Karyera reytinqi
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="table-different">
        <div class="container mt-3 mt-5">
            <div class="row ">
                <div class="col-12 for-padding">
                    <h2>
                        Niyə biz?
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

    <section id="highlights" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                    <ul>
                        <li>
                            <img src="{{ asset('frontend/img/course/large.svg') }}" alt="">

                            <!-- <img src="../src/img/course/large.svg" alt=""> -->
                            <p>
                                3-cü tərəf yoxlanılır
                            </p>
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/course/large.svg') }}" alt="">

                            <!-- <img src="../src/img/course/large.svg" alt=""> -->
                            <p>
                                Hər 6 aydan bir yenilənir
                            </p>
                        </li>
                        <li>
                            <img src="{{ asset('frontend/img/course/large.svg') }}" alt="">

                            <p>
                                Yalnız uzunmüddətli nəticələri olan təlim düşərgəsi
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="roadSucces">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 road-left">
                    <h2>
                        Uğura gedən yolda
                    </h2>
                    <p>
                        Kurs proqramından asılı olaraq, məqsədimiz müasir şirkətlərin tələb etdiyi bacarıqları tələbələrimizə mənimsətməkdir.
                    </p>
                    <p>
                        Codemarketing tədris mühiti sayəsində komandada işləməyi öyrənib, real layihələr üzərində təcrübə qazanmaq şansı əldə edəcəksiniz. Eyni zamanda şəxsi portfolionuzu hazırlamaqda üstünlük qazanacaqsınız.
                    </p>
                    <p>
                        Peşəkar təlimçilərimiz çatışmayan bacarıqlarınızı təkmilləşdirməyə köməklik edəcəklər. Bu kurs ən çox tələb olunan peşələrə yiyələnməyiniz üçün əla fürsətdir.
                    </p>
                    <p>
                        Tədris proqramlarımız haqqında ətraflı məlumat üçün tədris proqramlarını yükləyə bilərsiniz.
                    </p>
                </div>
                <div class="col-12 col-md-6 road-right">
                    <div class="road-button">
                        <a href="">
                            Codemarketing pdf
                        </a>
                    </div>
                    <div class="road-button">
                        <a href="">
                            Rəqəmsal marketing  pdf
                        </a>
                    </div>
                    <div class="road-button">
                        <a href="">
                            Full-stack development pdf
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    <section id="schedule-call"
        style="background-image: url('{{ asset('frontend/img/course/lent.png') }}'); background-repeat: no-repeat; background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-12 schedule-text-area">
                    <h2 style="font-size:31px">
                        Yeni karyera üçün ilk addımı atın.</br> Əlavə suallar üçün bizimlə əlaqə saxlayın.​
                    </h2>
                </div>
                <div class="col-12 schedule-button-area">
                    <a href="{{ route('front.contact') }}">
                        Zəng edin
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="mentors" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 py-3">
                    <h2>
                        Məzunlarımız və iş yerləri​
                    </h2>
                </div>
                @foreach($ourgrads as $grad)
                <div class="col-12 col-md-4 mentors-card">
                    <div class="mentors-img">
                        <img src="{{asset('storage/'.$grad['image'])}}" alt="">
                        <!-- <img src="../src/img/main/TopicPagePhoto_SE_Outcomes_Desktop.jpeg" alt=""> -->
                    </div>
                    <div class="mentors-about">
                        <h6>
                            {{$grad->title}}
                        </h6>
                        <p>
                            {{$grad->text}}
                        </p>
                        <p>
                        {{$grad->text2}}
                        </p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section id="six" class="mt-3">
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
                                        Code Marketing
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
