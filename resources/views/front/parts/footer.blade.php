<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 footer-up-side">
                <h2 class="my-3">CodeMarketing</h2>
            </div>

            <div class="col-12 footer-middle pb-3">
                <div class="row">

                    <div class="col-12 col-md-5">
                        <form>
                            <div class="footer-write-side">
                                <p>
                                    Öyrənmə resursları üçün qeydiyyatdan keçin
                                </p>
                            </div>
                            <div class="footer-input">
                                <div class="footer-email-side">
                                    <span id="alert3" class="alert alert-info d-none"><br></span>
                                    <label for="">
                                        E poçtunuz
                                    </label>
                                    <input type="email" name="email" id="footerEmail" placeholder="Email adresiniz">
                                </div>
                                <div class="footer-button-side">
                                    <button class="subscribeFooter" type="submit">
                                        >
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-2">
                        <ul>
                            <li class="font-weight-area">Şirkət </li>
                            <li>
                                <a href="{{ route('front.aboutUs') }}">
                                    Haqqımızda
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Karyera
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Bloq
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-2">
                        <ul>
                            <li class="font-weight-area">
                                Məlumat
                            </li>
                            <li>
                                <a href="{{ route('front.howework') }}">
                                    Missiyamız
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Nəticələr
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('front.hireOfGuards') }}">
                                    Məzunların iş imkanı
                                </a>
                            </li>
                            <!-- <li>
                                <a href="">
                                    Kurs kataloqu
                                </a>
                            </li> -->
                            <li>
                                <a href="{{ route('front.communities') }}">
                                    CodeMarketing vebinarları
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('front.learningCenter') }}">
                                    Tədris mərkəzi
                                </a>
                            </li>
                            <!-- <li>
                                <a href="">
                                    Təlim düşərgələri
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="">
                                    Tənzimləyici məlumatlar
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-12 col-md-2">
                        <ul class="footer-social-medias">
                            <li class="font-weight-area">Bizi izləyin</li>
                            <li class="footer-social-media">
                                <a href="">
                                    <i class="bi bi-instagram"></i>
                                    Instagram
                                </a>
                            </li>
                            <li class="footer-social-media">
                                <a href="">
                                    <i class="bi bi-twitter"></i>
                                    Twitter
                                </a>
                            </li>
                            <li class="footer-social-media">
                                <a href="">
                                    <i class="bi bi-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-1">
                        <ul>
                            <li class="font-weight-area">Suallar</li>
                            <li>
                                <a href="{{ route('front.faq') }}">
                                    Faqs
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-4 footer-down-left">
                        <p>
                            © 2023 CodeMarketing
                        </p>
                    </div>
                    <div class="col-12 col-md-8 footer-down-right">



                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="{{ asset('frontend/owl-folder/owl.carousel.min.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/owlForCourse.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/owl.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/nav.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/forMobileNav.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/WeWork.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/buttonClick.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/slider.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/forProgramming.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/forMachine.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/option.js?v='.time()) }}"></script>
<script src="{{ asset('frontend/js/accordion.js?v='.time()) }}"></script>
<script>
    $(document).on('click','.subscribeFooter',function(e){
        e.preventDefault();
        var email = $('#footerEmail').val();
        var token = $('input[name="_token"]').val();
        $.ajax({
            url: '{{ route('front.mail.subscribeFooter') }}',
            type: 'POST',
            data: {
                '_token': token,
                'email': email,
            },
            success: function(response){
                if(response.error){
                        $('#alert3').html(response.error);
                        $('#alert3').removeClass('d-none');
                        setTimeout(function() { $("#alert3").addClass('d-none'); }, 2500);
                    }
                if(response.success){
                    $('#alert3').html(response.success);
                    $('#alert3').removeClass('d-none');
                    setTimeout(function() { $("#alert3").addClass('d-none'); }, 2500);
                }
            },
        });
    });

</script>
@yield('scripts')
