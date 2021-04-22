

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
        <meta name="author" content="Gambolthemes">
        @include('front_layout.css')
    </head>
    <body>
        <div class="sign-inup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="sign-form">
                            <div class="sign-inner">
                                <div class="sign-logo" id="logo">
                                    <a href="/"><img src="{{asset('front_pages/images/logo.svg')}}" alt=""></a>
                                    <a href="/"><img class="logo-inverse" src="{{asset('front_pages/images/dark-logo.svg')}}" alt=""></a>
                                </div>
                                <div class="form-dt">
                                    <div class="form-inpts checout-address-step">
                                        <form>
                                            <div class="form-title">
                                                <h6>Sign In</h6>
                                            </div>
                                            <div class="form-group pos_rel">
                                                <input id="phone[number]" name="phone" type="text" placeholder="Enter Phone Number" class="form-control lgn_input" required="">
                                                <i class="uil uil-mobile-android-alt lgn_icon"></i>
                                            </div>
                                            <div class="form-group pos_rel">
                                                <input id="password1" name="password1" type="password" placeholder="Enter Password" class="form-control lgn_input" required="">
                                                <i class="uil uil-padlock lgn_icon"></i>
                                            </div>
                                            <button class="login-btn hover-btn" type="submit">Sign In Now</button>
                                        </form>
                                    </div>
                                    <div class="password-forgor">
                                        <a href="/forgot_password">Forgot Password?</a>
                                    </div>
                                    <div class="signup-link">
                                        <p>Don't have an account? - <a href="/sign_up">Sign Up Now</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="copyright-text text-center mt-3">
                            <i class="uil uil-copyright"></i>Copyright {{date('Y')}} <b>Synetoss</b> . All rights reserved
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('front_layout.javascript')
    </body>
</html>

