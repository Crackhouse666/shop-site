<div class="dws-wrapper">
    <div class="dws-form">
        <label class="tab active" title="Вкладка 1">Авторизация</label>
        <label class="tab" title="Вкладка 2">Регистрация</label>

        <form id="form2" class="tab-form active"  method="POST" action="form2.php">
            <input class="input" id="email_entry" type="email" name="email_entry" placeholder="Введите E-mail">
            <input class="input" id="password_entry" type="password" name="password_entry" placeholder="Введите пароль">
            <input type="submit"  value="Войти" >
            <a href="#">Я забыл свой E-mail или пароль</a>
        </form>

         <form  id="form1" class="tab-form" method="POST" action="form.php" >
            <input class="input" id="email" type="email" name="email"  placeholder="Введите E-mail адресс" >
            <input class="input" id="password" type="password" name="password"  placeholder="Введите пароль" >
            <input class="input" type="password" name="password2"  placeholder="Введите пароль еще раз" >
            <input   type="submit" value="Регистрация"  >
        </form>
    </div>
    
</div>
