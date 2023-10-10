<section id="admissions-process" class="py-5">
    <div class="container">
        <div class="row px-4 py-5 first-row">
            <div class="col-12 col-md-6">
                <div class="admissions-text-area">
                    <h3>Qeydiyyat </h3>
                    <h2>
                        Uğurlu karyeraya aparan yolunuzu seçin.
                    </h2>
                    <p>
                        Və Codemarketinq ilə səyahətinizə başlayın.
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="admissions-inputs-area">
                     <form action="{{route('front.mail.programMailSubscribe')}}" method="POST">
                         @csrf
                         <!-- <div class="job-select">
                                <div class="button-group">
                                    <input type="radio" id="html" name="full" value="full">
                                    <label for="html" class="for-button-input active-button" style="height:50px;">Full Time</label><br>
                                    <input type="radio" id="css" name="part" value="part">
                                    <label for="css" class="for-button-input" style="height:50px;">Part Time</label><br>
                                </div>
                          </div> -->
                          <div class="job-select">
                                <div class="button-group">
                                    <input type="radio" id="html" name="full" value="full">
                                    <label for="html" class="for-button-input active-button" style="height:50px;">Full Time</label><br>
                                    <input type="radio" id="css" name="part" value="part">
                                    <label for="css" class="for-button-input" style="height:50px;">Part Time</label><br>
                                </div>
                          </div>
                        <div class="admissions-inputs">
                            <div class="row">
                                <div class="col-12 col-md-7 inpust-side">
                                    <label for="email-area">Your email</label>
                                    <input type="email" required id="email-area" name="email">
                                </div>
                                <div class="col-12 col-md-5 button-side">
                                    <button type="submit">Müraciət edin</button>
                                </div>
                                <div class="col-12 admissions-inputs-down">
                                    <p>
                                        E-poçt ünvanınızı daxil etməklə siz Chegg-dən e-poçt almağa
                                        razılaşırsınız. Siz bizim Məxfilik Siyasətimizlə də razılaşırsınız.
                                    </p>
                                </div>
                            </div>
                        </div>
                     </form>    
                </div>
            </div>
        </div>
    </div>
</section>