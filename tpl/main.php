<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>skolar</title>
    <link rel="stylesheet"  href="css/default.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body >

<div class="main">
    <div class="header">

        <div class="navigation">
            <ul>
                <li>
                    <a href="/" >ГЛАВНАЯ</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="/?employes/" >ВСЕ СОТРУДНИКИ</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="/?employes/[administration]" >АДМИНИСТРАЦИЯ</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="/?employes/[depatment1]" >ОТДЕЛ1</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="/?employes/[depatment2]" >ОТДЕЛ2</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="/?employes/[depatment3]" >ОТДЕЛ3</a>
                    <span>|</span>
                </li>
                <li>
                    <a href="/?employes/[depatment4]" >ОТДЕЛ4</a>
                </li>
                <li style="float: right;">
                    <a href="/?login" style="color: white;">ВОЙТИ</a>
                </li>

            </ul>
        </div><!--end navigation-->
    </div><!--end header-->

    <div class="logo">
        <h1>ООО ТЕСТ</h1>
        <h2>тестовый вариант</h2>
        <hr>
    </div><!--end logo-->

    <div class="content">


        <? $this->out($this->tpl, true);?>

    </div><!--end content-->

    <div class="navigation footer">
            <a href="https://ua.linkedin.com/in/vladimir-tkachenko" target="blank_"><span>Copyright &#169; 2016 Vladimir Tkachenko</span></a>
    </div><!--end footer-->

</div><!--end main-->



</body>
</html>



