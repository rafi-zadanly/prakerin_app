<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-4 offset-0 offset-md-4">
                @if (session('message'))
                <div class="alert alert-{{ session('type') }} text-center shadow-sm">
                    {{ session('message') }}
                </div>
                @endif

                <div class="card shadow">
                    <div class="card-header text-center h4 bg-primary text-light">
                        Prakerin Manager
                    </div>
                    <div class="card-body">
                        <form action="/custom/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="" value="{{ old('email') }}" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="">Password :</label>
                                <input type="password" class="form-control" name="password" id="" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script>
    $('button[type=submit]').attr('disabled', 'true');

    $('input[type=email], input[type=password]').keyup(function() {
        let email = $('input[type=email]').val();
        let password = $('input[type=password]').val();

        if ((email && password) != "") {
            $('button[type=submit]').removeAttr('disabled');
        } else {
            $('button[type=submit]').attr('disabled', 'true');
        }
    });
</script>

</html>