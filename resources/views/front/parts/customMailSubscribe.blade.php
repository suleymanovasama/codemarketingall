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
                <form action="{{route('front.mail.customMailSubscribe')}}" method="POST">
                    @csrf
                    <div class="form-area">
                        <div class="select-box-area">
                            <label for="programmers">Hansı proqramla maraqlanırsınız?</label>
                            <select name="program" id="programmers">
                                <option value="Code Marketing">Code Marketing</option>
                                <option value="Full-Stack proqramlaşdırma">Full-Stack proqramlaşdırma</option>
                                <option value="Machine learning">Machine learning</option>
                            </select>
                        </div>
                        <div class="select-box-area">
                            <label for="email">E-poçtunuz</label>
                            <input type="email" name="email" id="email" placeholder="E-poçtunuz">
                        </div>
                        <div class="button-area">
                            <button type="submit">
                                Qeydiyyatdan keçin
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>