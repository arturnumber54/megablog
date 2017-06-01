<div class="container">
    <h3>Регистрация</h3>
    <div class="col-xs-8 col-sm-6 col-md-4 col-lg-4">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputName2">Имя</label>
                <input type="text" class="form-control" id="exampleInputName2" name="userName" placeholder="Имя">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputName2">Придумайте логин</label>
                <input type="text" class="form-control" id="exampleInputName2" name="login" placeholder="Логин">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Придумайте пароль</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Повторите пароль, чтобы не ошибиться</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="passwordConfirm" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="dateBirth">Дата рождения</label>
                <input type="date" class="form-control" id="dateBirth" name="dateBirth" placeholder="">
            </div>
            <div class="form-group">
                <label for="gender">Пол</label>
                <select class="form-control" id="gender" name="gender" >
                    <option>Мужской</option>
                    <option>Женский</option>
                </select>
            </div>
            <div class="form-group">
                <label for="aboutYourself">О себе</label>
                <textarea class="form-control" rows="3" id="aboutYourself" name="aboutYourself"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Зарегистрироваться</button>
        </form>
    </div>
</div>
