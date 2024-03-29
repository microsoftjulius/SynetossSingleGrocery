

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        @include('front_layout.css')
    <body>
        <div class="sign-inup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        @include('layouts.admin-partials.messages')
                        <div class="sign-form">
                            <div class="sign-inner">
                                <div class="sign-logo" id="logo">
                                    <a href="/"><img src="{{asset('front_pages/images/logo.svg')}}" alt=""></a>
                                    <a href="/"><img class="logo-inverse" src="{{asset('front_pages/images/dark-logo.svg')}}" alt=""></a>
                                </div>
                                <div class="form-dt">
                                    <div class="form-inpts checout-address-step">
                                        <form method="GET" action="/create-new-account">
                                            <div class="form-title">
                                                <h6>Sign Up</h6>
                                            </div>
                                            <div class="form-group pos_rel">
                                                <label for="fullname">Full Name</label>
                                                <input id="full[name]" name="fullname" type="text" placeholder="Full name" class="form-control lgn_input" required="">
                                                {{-- <i class="uil uil-user-circle lgn_icon"></i> --}}
                                            </div>
                                            <div class="form-group pos_rel">
                                                <label for="email">Email Address</label>
                                                <input id="email[address]" name="emailaddress" type="email" placeholder="Email Address" class="form-control lgn_input" required="">
                                                {{-- <i class="uil uil-envelope lgn_icon"></i> --}}
                                            </div>
                                            <div class="form-group pos_rel">
                                                <label for="Phone">Phone Number</label>
                                                <input id="phone[number]" name="phone" type="text" placeholder="Phone Number" class="form-control lgn_input" required="">
                                                {{-- <i class="uil uil-mobile-android-alt lgn_icon"></i> --}}
                                            </div>
                                            {{-- <div class="form-group pos_rel">
                                                <label class="control-label">Enter Code</label>
                                                <ul class="code-alrt-inputs signup-code-list">
                                                    <li>
                                                        <input id="code[1]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                    </li>
                                                    <li>
                                                        <input id="code[2]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                    </li>
                                                    <li>
                                                        <input id="code[3]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                    </li>
                                                    <li>
                                                        <input id="code[4]" name="number" type="text" placeholder="" class="form-control input-md" required="">
                                                    </li>
                                                    <li>
                                                        <a class="chck-btn hover-btn code-btn145" href="#">Send</a>
                                                    </li>
                                                </ul>
                                                <a href="#" class="resend-link">Resend Code</a>
                                            </div> --}}
                                            <div class="form-group pos_rel">
                                                <label for="password">Password</label>
                                                <input id="password1" name="password1" type="password" placeholder="New Password" class="form-control lgn_input" required="">
                                                {{-- <i class="uil uil-padlock lgn_icon"></i> --}}
                                            </div>
                                            <div class="form-group pos_rel">
                                                <label for="password">Confirm Password</label>
                                                <input id="password2" name="password2" type="password" placeholder="Confirm Password" class="form-control lgn_input" required="">
                                                {{-- <i class="uil uil-padlock lgn_icon"></i> --}}
                                            </div>
                                            <button class="login-btn hover-btn" type="submit">Sign Up Now</button>
                                        </form>
                                    </div>
                                    <div class="signup-link">
                                        <p>I have an account? - <a href="/sign_in">Sign In Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright-text text-center mt-3">
                            <i class="uil uil-copyright"></i>Copyright {{ date('Y')}} <b>Synetoss</b> . All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.javascript')
    </body>
</html>

