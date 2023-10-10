<section id="strat-learning" class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-7 learning-left">
                <div class="left-up">
                    <h3>
                        Sınaq dərslərində iştirak edin
                    </h3>
                </div>
                <div class="left-down">
                    <p>
                        Biliklərinizi yoxlamaq, kurs mühiti və təlimçilərimizlə tanış olmaq istəyirsinizsə
                        ödənişsiz konsultasiya üçün qeydiyyatdan keçin və tədris proqram haqqında ətraflı
                        məlumat alın.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-5 learning-right">
                <div class="form-area">
                    <form>
                        @csrf
                        <div class="eight-h3-side">
                            <span id="alert4" class="alert alert-info d-none"><br></span>
                        </div>
                        <div class="input-area">
                            <label for="for-email">E-poçtunuz</label>
                            <input type="email" id="emailTrial" name="email" placeholder="Email adresiniz">
                        </div>
                        <div class="button-area">
                            <button class="trialLessons" type="submit">
                                Qeydiyyatdan keçin
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@section('scripts')
<script>
        $(document).on('click','.trialLessons',function(e){
            e.preventDefault();
            var email = $('#emailTrial').val();
            var token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{ route('front.mail.trialLessons') }}',
                type: 'POST',
                data: {
                    '_token': token,
                    'email': email,
                },
                success: function(response){
                    if(response.error){
                            $('#alert4').html(response.error);
                            $('#alert4').removeClass('d-none');
                            setTimeout(function() { $("#alert4").addClass('d-none'); }, 2500);
                        }
                    if(response.success){
                        $('#alert4').html(response.success);
                        $('#alert4').removeClass('d-none');
                        setTimeout(function() { $("#alert4").addClass('d-none'); }, 2500);
                    }
                },
            });
        });

</script>
@endsection
