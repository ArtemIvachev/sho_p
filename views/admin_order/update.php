<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/order">Управление Заказами</a></li>
                    <li class="active">Редактировать Заказ</li>
                </ol>
            </div>

            <h4>Редактировать Заказ</h4>

            <br/>
            <?php if(isset($errors) && (is_array($errors))): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: red;"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form class="form-horizontal" action="" method="post">
                <div class="control-group">
                    <label class="control-label" for="userName">Имя пользователя <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="userName" id="name" value="<?php echo $order['user_name'];?>" placeholder="Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="userPhone">Телефон пользователя <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="userPhone" id="code" value="<?php echo $order['user_phone'];?>" placeholder="Phone">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="userComment">Комментарий пользователя <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="userComment" id="userComment" value="<?php echo $order['user_comment'];?>" placeholder="Comment">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="userId">ID пользователя:</label>
                    <div class="controls">
                        <input type="text" name="userId" id="userId" value="<?php echo $order['user_id'];?>" placeholder="User ID">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="status">Статус</label>
                    <div class="controls">
                        <select id="status" name="status">
                            <option value="3" <?php if ($order['status'] == 3) echo ' selected="selected"'; ?>>Sent</option>
                            <option value="2" <?php if ($order['status'] == 2) echo ' selected="selected"'; ?>>In Delivery</option>
                            <option value="1" <?php if ($order['status'] == 1) echo ' selected="selected"'; ?>>Processing</option>
                            <option value="0" <?php if ($order['status'] == 0) echo ' selected="selected"'; ?>>Showing</option>
                        </select>
                    </div>
                </div>
                
                <h5>Products:</h5>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th>ID Товара:</th>
                            <th>Название</th>
                            <th>Код</th>
                            <th>Заголовок</th>
                            <th>Цена</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo $product['id'];?></td>
                                <td><?php echo $product['name'];?></td>
                                <td><?php echo $product['code'];?></td>
                                <td><?php echo $product['title'];?></td>
                                <td><?php echo $product['price'];?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <br/><br/>
                <input type="submit" name="submit" class="btn btn-default" value="Save" />    
                <br/><br/>
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>