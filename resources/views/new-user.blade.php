<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{!! asset('assets/libs/bootstrap-4.5.2/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/libs/fontawesome-5.15.0/css/all.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="#" class="bg-white border rounded mt-5" method="POST">


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted form-control-profile px-2 py-1">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-control-profile px-2 py-1" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                        <p class="text-inverse text-center">Already have an account? <a href="" data-abc="true">Login</a>
                        </p>


            </form>
        </div>
    </div>


</div>
</body>
</html>

