<div class="login">
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
        <div>
            <label for="inputNick"><b>Ник:</b></label>
            <input type="text" name="nick" id="inputNick" placeholder="Nick_Name">
        </div>
        <br><span class="error"><?=@$this->error?></span>

        <div>
            <button type="submit" class="btn btn-default"><b>РЕГИСТРАЦИЯ</b></button>
        </div>
    </form>
</div>

<?php
