<?php
	session_start();
?>

<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Авторизация и регистрация</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>
        Регистрация
    </h2>
	<form action="register/check" method="post">
        @csrf
		<label>ФИО</label>
		<input type="text" name="full_name" placeholder="Введите свое ФИО">
		<label>Логин</label>
		<input type="text" name="login" placeholder="Введите свой логин">
		<label>Ваша почта</label>
		<input type="email" name="email" placeholder="Введите свою почту">
		<label>Пароль</label>
		<input type="password" name="password" placeholder="Введите свой пароль">
		<label>Повторите пароль</label>
		<input type="password" name="password_confirmation" placeholder="Повторите свой пароль">
		<button type="submit">Зарегистрироваться</button>
        <p>
            Уже есть аккаунт? <a href="autorization">Войти</a>
        </p>

	</form>

</body>
</html>
