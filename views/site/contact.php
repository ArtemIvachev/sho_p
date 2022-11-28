<?php include ROOT . '/views/layouts/header.php'; ?>

<!-- Main -->
<div id="mainBody">
    <div class="container">
        <hr class="soften">
        <h1 class="sv" style="color: white">Об интернет-магазине</h1>
        <hr class="soften"/>	
        <div class="row">
            <div class="span4" style="color: white">
                <h4>ARTShop</h4>
                <p class="shop" style="font-size: 20px">ARTShop - интернет-магазин игрушек, комиксов, LEGO.
                    <br>На этом сайте вы можете купить товары в разы дешевле, чем на других сайтах.
                    <br>К тому же, вы сможете окунуться в мир вселенных Marvel и DC.
                    <br>Прошу любить и жаловать!
                </p>
            </div>

            <div class="span4" style="color: white; font-size: 20px">
                <h4>Часы работы</h4>
                <h5 class="shop" style="font-size: 20px"> Понедельник - Пятница</h5>
                <p class="shop" style="font-size: 20px">09:00 - 18:00<br/><br/></p>
                <h5 class="shop" style="font-size: 20px">Суббота</h5>
                <p class="shop" style="font-size: 20px">09:00 - 15:00<br/><br/></p>
                <h5 class="shop" style="font-size: 20px">Воскресенье</h5>
                <p class="shop" style="font-size: 20px">10:00 - 17:00<br/><br/></p>
            </div>
            <div class="span4">
                <h4 class="sv" style="color: white">Обратная связь</h4>
                <?php if ($result == false) : ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <?php foreach ($errors as $error): ?>
                            <ul>
                                <li> - <?php echo $error; ?></li>
                            </ul>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <div class="control-group">
                                <input type="text" name="name" placeholder="name" class="input-xlarge"/>
                            </div>
                            <div class="control-group">
                                <input type="text" name="email" placeholder="email" class="input-xlarge"/>
                            </div>
                            <div class="control-group">
                                <input type="text" name="subject" placeholder="subject"  class="input-xlarge"/>
                            </div>
                            <div class="control-group">
                                <textarea rows="3" id="textarea" name="message" class="input-xlarge"></textarea>
                            </div>
                            <input class="btn btn-large" name="submit" type="submit" value="Отправить сообщение">
                        </fieldset>
                    </form>
                <?php else: ?>
                    <p>Ваше сообщение отправлено. Нас менеджер свяжется с вами позднее.</p>
                <?php endif; ?> 
            </div>
        </div>
<br><br><br><br><br><br><br><br>
    </div>
</div>
<!-- MainBody End -->

<?php include ROOT . '/views/layouts/footer.php'; ?>

