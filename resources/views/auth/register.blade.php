<x-base>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="mt-5 text-center">
            <a href="{{ route('/') }}"><img src="{{ asset('imgs/assets/title-logo.png') }}" alt=""
                    style="width: 3.8rem"></a>
            <h2>Hi! Mentee, Find Your Mentor on CasvaLabs</h2>
            {{-- <h5>Register</h5> --}}
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card box-shadow2" style="margin-bottom: 5rem">
                    <div class="card-header">Register</div>
                    {{-- @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach --}}

                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{ route('auth.register') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="user_type" value="is_mentee">
                            <div class="col-md-6 form-floating">
                                <input type="text"
                                    name="first_name"class="form-control @error('first_name') is-invalid @enderror"
                                    value="{{ old('first_name') }}" placeholder="Kwaku" autocomplete="first_name"
                                    autofocus id="first_name">
                                @error('first_name')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror


                                <label for="floatingInput">First Name</label>
                            </div>
                            <div class="col-md-6 form-floating">
                                <input type="text"
                                    name="last_name"class="form-control @error('last_name') is-invalid @enderror"
                                    placeholder="Frimpong" value="{{ old('last_name') }}" autocomplete="last_name"
                                    autofocus id="last_name">
                                @error('last_name')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput">Last Name</label>
                            </div>
                            <div class="col-12 form-floating">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    name="email" autocomplete="email" autofocus placeholder="kwakufrimpong@ghana.com"
                                    value="{{ old('email') }}" id="email">
                                @error('email')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput" class="form-label">Email</label>
                            </div>
                            <div class="col-6 form-floating">
                                <input type="tel" class="form-control  @error('contact') is-invalid @enderror"
                                    name="contact" placeholder="0555055055" autocomplete="contact"
                                    value="{{ old('contact') }}" id="contact">
                                @error('contact')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput" class="form-label">Contact</label>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Gender</label>
                                @error('gender')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="Male"
                                        id="gender1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" value="Female"
                                        id="gender2">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Female
                                    </label>
                                </div>

                            </div>
                            <div class="col-12 form-floating">
                                <input type="password" class="form-control  @error('password') is-invalid @enderror"
                                    name="password" data-toggle="password" placeholder="!@*(@#$343333)"
                                    autocomplete="password" id="password">
                                @error('password')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput" class="form-label">Password</label>
                            </div>
                            <div class="col-12 form-floating">
                                <input type="text" class="form-control" name="address"
                                    placeholder="Amasaman, Accra" value="{{ old('address') }}" id="address">
                                @error('address')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                                <label for="floatingInput" class="form-label">Address</label>
                            </div>
                            <div class="col-md-12 form-floating">
                                <input type="text" value="{{ old('institution') }}" name="institution"
                                    class="form-control  @error('institution') is-invalid @enderror"
                                    placeholder="Accra Technical Univeristy" id="institution">
                                @error('institution')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <label for="institution">School/Workplace</label>
                            </div>

                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Interest/Motivation (3)*</label>
                                <span id="chk-btn-err" style="color: red; font-size: .8rem"></span>
                                @error('interests')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(0)" name="interests[]" value="Paired programming"
                                        id="interests1">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Paired Programming
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(1)" name="interests[]" value="Web Development"
                                        id="interests2">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Web Development
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(2)" name="interests[]"
                                        value="Mobile App Development" id="interests3">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Mobile App Development
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(3)" name="interests[]" value=" Data Science"
                                        id="interests4">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Data Science
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(4)" name="interests[]" value="Machine Learning"
                                        id="interests5">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Machine Learning
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(5)" name="interests[]" value="Software Testing"
                                        id="interests6">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Software Testing
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(6)"name="interests[]" value="UI/UX Design"
                                        id="interests7">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        UI/UX Design
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(7)" name="interests[]" value="Cyber Security"
                                        id="interests8">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Cyber Security
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(8)" name="interests[]" value="Cloud Computing "
                                        id="interests9">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Cloud Computing
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input chk-btn" type="checkbox"
                                        onclick="checkboxControl(9)" name="interests[]" value="Augmented Reality"
                                        id="interests10">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Augmented Reality
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Level of Experience</label>
                                @error('level_of_experience')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level_of_experience"
                                        value="Novice" id="experience1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Novice
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level_of_experience"
                                        value="Getting Started" id="experience2">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Getting Started
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level_of_experience"
                                        value="Have Some Experience" id="experience3">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Have Some Experience
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level_of_experience"
                                        value="Have Adequate Experience" id="experience4">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Have Adequate Experience
                                    </label>
                                </div>
                                <br><br>
                                <div class="input-group mb-3">
                                    {{-- <input type="file" class="form-control" id="inputGroupFile02"
                                        accept=".png,.jpg,.jpeg">
                                    <label class="input-group-text" for="inputGroupFile02">Upload Profile
                                        Picture</label> --}}
                                </div>


                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">In short, why would
                                    you
                                    need a mentor</label>
                                <textarea class="form-control  @error('mentee_message') is-invalid @enderror" name="mentee_message"
                                    placeholder=" Ex. I find it distrubing to understanding basic programming concepts" id="mentee_message"
                                    rows="3"></textarea>
                                <span id="mentee_message_word_count" class=" float-end"
                                    style="font-size: .6rem">225/225</span>
                                @error('mentee_message')
                                    <span class="alert text-danger"
                                        style="color: red; font-size: .8rem">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-3" style="margin: 2.5rem auto 0 auto">
                                <button type="submit" class="btn special-btn" style="width:10rem">Sign
                                    up</button>
                            </div>
                            <div class="row">
                                <div class="text-center">
                                    <a class="btn-link" href="{{ route('login') }}">
                                        Have an Account Already? Sign in
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Settig limit on number of interests to be selected

        function checkboxControl(j) {
            let total = 0;
            let elem = document.getElementsByClassName("chk-btn");
            let error = document.getElementById("chk-btn-err");
            for (let i = 0; i < elem.length; i++) {
                if (elem[i].checked == true) {
                    total = total + 1;
                }
                if (total > 3) {
                    error.textContent = "You Must Select at Least 3";
                    elem[j].checked = false;
                    return false;
                }
            }
        }

        // Setting limit on number of words to be typed in mentee message

        let mentee_message = document.getElementById("mentee_message");
        let mentee_message_word_count = document.getElementById(
            "mentee_message_word_count"
        );
        mentee_message.addEventListener("input", function() {
            mentee_message_word_count.textContent =
                mentee_message.value.length + "/225";
            if (mentee_message.value.length > 225) {
                mentee_message.value = mentee_message.value.substring(0, 225);
            }
            // if (mentee_message.value.length > 200) {
            //     mentee_message_word_count.textContent.style.color = "red";
            // } else if (mentee_message.value.length < 100) {
            //     mentee_message_word_count.textContent.style.color = "green";
            // } else {
            //     mentee_message_word_count.textContent.style.color = "orange";
            // }
        });
    </script>

</x-base>
