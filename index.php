<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet">

    <title>Форма регистрации пользователя - тестовое задание</title>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Форма регистрации</h2>
    </div>

    <div class="col-md-8 order-md-1">
        <form class="needs-validation" novalidate method="post" action="lib/routes.php">
            <input type="hidden" name="action" value="registration">
            <div class="mb-6 form-group">
                <label for="username">Имя пользователя <span class="text-muted">(Optional)</span></label>
                <div class="input-group">
                    <input type="text" class="form-control" id="name" placeholder="Имя Фамилия" name="name">
                </div>
            </div>

            <div class="mb-6 form-group">
                <label for="email">Email </label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email" required>
                <div class="invalid-feedback">
                    Пожалуйста введите действительный email-адрес
                </div>
            </div>

            <div class="mb-6 form-group">
                <label for="username">Номер телефона <span class="text-muted">(Optional)</span></label>
                <input type="tel" pattern=".{10}" class="form-control" id="phone" placeholder="(999) 123-45-67" name="phone">
            </div>

            <div class="mb-6 form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="mb-6 form-group">
                <label for="avatar">Файл пользователя <span class="text-muted">(Optional)</span></label>
                <input type="file" class="form-control-file" id="avatar" name="avatar">
            </div>

            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Зарегистрироваться</button>
        </form>
    </div>


    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2019 Company Name</p>
    </footer>
</div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="assets/form-validation.js"></script></body>
</body>
</html>