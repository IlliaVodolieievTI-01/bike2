<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>
        Авторизация
    </h2>
	<form action="autorization/check" method="post">
        @csrf
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите свой пароль">
		<button type="submit">Войти</button>
        <p>
            Нет аккаунта? <a href="register">Зарегистрироваться</a>
        </p>
	</form>
</body>
</html>
