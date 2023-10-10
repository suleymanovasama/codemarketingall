@extends('front.layouts.app')
@section('title','Faq')
@section('content')
<main>
    <section id="work-one" class="for-faq">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 work-one-left">
                    <div class="left-up">
                        <h1>
                            CodeMarketing FAQ's
                        </h1>
                    </div>
                    <div class="left-down">
                        <p>
                            Browse through commonly asked questions to get the answers you need.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-5 faqs-first-right">
                    <img src="{{ asset('frontend/img/faq/FAQ_illustration.png') }}" alt="">

                    <!-- <img src="../src/img/faq/FAQ_illustration.png" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="lastAccordion" class="py-5">
        <div class="container">
            <div class="row for-faq-mobile">
                <div class="col-12 for-faq-title-mobile">
                    <h2>
                        FAQ's
                    </h2>
                </div>
                <div class="accordion-top">
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Kursa yazılmaq üçün hansı biliklərə sahib olmalıyam?
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content">
                            <p>
                                Tələbənin ən azı 18 yaşı olmalıdır </br>
                                Tələbənin minimal (A1 səviyyə) ingilis dili </br>
                                Riyazi və məntiqi biliklərin olması 
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Kursa başlamaq üçün kompüter tələb olunan parametr nə olmaldır?
                            </span>
                           <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content">
                            <p>
                                Ən azı 8 GB RAM, ən azı 2,0 GHz prosessor (GPU tələb olunmur) və ən azı 256 GB HD olan fərdi kompüterə sahib olmalıdır
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Kompüterim yoxdursa kursda məşğul ola bilərəmmi?
                            </span>
                           <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content">
                            <p>
                                Bəli, İstənilən vaxt sadəcə olaraq bu barədə önəcədən bildirməyiniz xahiş olunur.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Codemarktenig kursları nə vaxt başlayır ?
                            </span>
                           <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
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
                                Tədris proqramı yekunlaşdıqdan sonra karyera xidmətləri göstərilirmi?
                            </span>
                           <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content">
                            <p>
                                Tədris müddəti bitirdikdən sonra təcrübə proqramlarına qoşulma şansı eyni zamanda iş tapmaqda karyera təmsilçilərimiz tam dəstək göstərir.
                            </p>
                        </div>
                    </div>
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Kursda tədris almaq üçün kompüterə ehtiyac varmı?
                            </span>
                           <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content">
                            <p>
                                Bəli, verilən tapşırıqları kursdan kənarda yerinə yetirə bilməyiniz və boş zamanlarınızda dərs proqramı ilə məşqul ola bilməyiniz üçün kompüterə ehtiyac var.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="lastAccordion" class="py-5">
        <div class="container">
            <div class="row for-faq-mobile">
                <div class="col-12 for-faq-title-mobile">
                    <h2>
                        Təhsil haqqı FAQ
                    </h2>
                </div>
                <div class="accordion-top">
                    <div class="accordion-items">
                        <button id="accordion-button-1" aria-expanded="false">
                            <span class="accordion-title">
                                Təhsil haqqının geri qaytarılması siyasəti nədir? 
                            </span>
                            <img src="{{ asset('frontend/img/course/arrow.svg') }}" alt="">
                        </button>
                        <div class="accordion-content">
                            <p>
                            Təhsil haqqının qaytarılması siyasəti” ilə iləri gələrək Codemarktenig müvafiq kurs proqramı uyğun olaraq bitirdikdən sonra tələbə 180 gün ərzində iş tapa bilmirsə kursa ödənilən məbləğ geri qaytaılır. 
Qeyd etmək vacibdir ki, Təhsil Haqqının Geri qaytarılması Siyasətinə uyğun olub-olmamasından asılı olmayaraq hər bir tələbə eyni səviyyədə karyera dəstəyi alır və məzun olduqdan dərhal sonra 180 gün ərzində 20 saatlıq karyera xidmətləri dəstəyinə çıxış əldə edir. Məzun olmamışdan əvvəl sizə bu dəstəyi almaq üçün qoşulmaq və ya imtina etmək imkanı veriləcək. İmtina etmək uyğunluğunuza təsir edir. Həmçinin nəzərə alın ki, Təhsil haqqının geri qaytarılması siyasəti tələbə müvafiq kursdan məzun kimi bitirdikdən sonra Codemarktenig tərəfindən iş ilə təmin olunma zamanı imtina edildiyi təqdirdə qüvvədən düşmüş hesab olunur.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="question" class="py-5">
        <div class="container">
            <div class="row justify-content-center for-faq-mobile">
                <div class="col-12 col-md-6 question-left">
                    <h2>
                        Sualınıza cavab tapa bilmirsiz?
                    </h2>
                    <div class="question-left-p-side">
                        <p>
                            Sizi maraqlandıran suallarınızı qeyd edin tez bir zamanda cavablandırılacaq.Təşəkkürlər!
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 question-right">
                    <form action="">
                        <div class="inputs-div">
                            <label for="name">Adınız</label>
                            <input type="text" id="name">
                        </div>
                        <div class="inputs-div">
                            <label for="number">Əlaqə nömrəniz</label>
                            <input type="text" id="number">
                        </div>
                        <div class="inputs-div">
                            <label for="email">Email ünvanı</label>
                            <input type="email" id="email">
                        </div>

                        <div class="what-selected">
                            <label>Hansı mövzu ilə maraqlanırsan?</label>
                            <select name="" id="select-zone">
                                <option value="" disabled selected value></option>
                                <option value="">CodeMarketing</option>
                                <option value="">Full-stack development</option>
                                <option value="">Rəqəmsal marketing</option>
                            </select>
                            <div class="faq-select-img">
                                <img src="../src/img/main/arrow.svg" alt="">
                            </div>
                        </div>

                        <button type="submit">Submit</button>

                        <div class="title-area-faq">
                            <p>
                                By clicking submit, you agree to our <a href="">Terms of Service</a> and <a
                                    href="">Privacy Policy</a>, and confirm you will be physically located in the
                                US.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
