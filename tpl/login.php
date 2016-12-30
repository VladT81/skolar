<div class="login">
    <h4 style="text-align: left; margin-left: 25%">Ещё не зарегистрировались?<br>Для регистрации нажмите <a href="/?auth">ТУТ</a>.</h4>
    <form method="post">
        <div>
            <label for="inputEmail"><b>Email:</b></label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <br>
        <div>
            <label for="inputPassword"><b>Пароль:</b></label>
            <input type="password" name="pass" id="inputPassword" placeholder="Password">
        </div>
        <br>
        <!--
        <div>
            <label for="inputNick"><b>Ник:</b></label>
            <input type="text" naame="nick" id="inputNick" placeholder="Nick_Name">
        </div>
        <br>--><span class="error"><?=@$this->error?></span>

        <div>
            <button type="submit" class="btn btn-default"><b>ВОЙТИ</b></button>
        </div>
    </form>
</div>



<?php
//echo md5('admin');