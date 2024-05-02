<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form action="/authentication" method="post">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                         class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input  type="email" id="form1Example13" class="form-control form-control-lg"/>
                            <label  class="form-label" for="form1Example13">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="form1Example23" class="form-control form-control-lg"/>
                            <label class="form-label" for="form1Example23">Password</label>
                        </div>

                        <div class="d-flex justify-content-around align-items-center mb-4">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked/>
                                <label class="form-check-label" for="form1Example3"> Remember me </label>
                            </div>
                            <a href="#!">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-primary btn-lg btn-block">Sign in
                        </button>

                        <!-- Divider -->
                        <div class="text-center my-4">
                            <hr class="w-25 mx-auto">
                            <p class="fw-bold mb-0 text-muted">OR</p>
                            <hr class="w-25 mx-auto">
                        </div>

                        <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block"
                           style="background-color: #3b5998" href="#!"
                           role="button">
                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                        </a>
                        <a data-mdb-ripple-init class="btn btn-primary btn-lg btn-block"
                           style="background-color: #55acee" href="#!"
                           role="button">
                            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>