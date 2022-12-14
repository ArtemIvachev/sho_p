<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/product">Управление Товарами</a></li>
                    <li class="active">Редактировать Товар</li>
                </ol>
            </div>

            <a href="/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i>Add product</a>

            <h4>Add new product</h4>

            <br/>
            <?php if(isset($errors) && (is_array($errors))): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li style="color: red;"> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="control-group">
                    <label class="control-label" for="name">Название <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="name" id="name" value="" placeholder="Name">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="code">Код <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="code" id="code" value="" placeholder="Code">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="price">Цена <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" name="price" id="input_email" value="" placeholder="Price">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="price">Категория <sup>*</sup></label>
                    <div class="controls">
                        <select name="category_id">
                            <?php if (is_array($categoriesList)): ?>
                                <?php foreach ($categoriesList as $category): ?>
                                    <option value="<?php echo $category['id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="price">Подкатегория <sup>*</sup></label>
                    <div class="controls">
                        <select name="subcategory_id">
                            <?php if (is_array($subCategoriesList)): ?>
                                <?php foreach ($subCategoriesList as $subCategory): ?>
                                    <option value="<?php echo 1; ?>">
                                        <?php echo $subCategory['name']; ?>
                                    </option>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="brand">Бренд</label>
                    <div class="controls">
                        <input type="text" name="brand" id="brand" value="" placeholder="Brand">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="image">Изображение</label>
                    <div class="controls">
                        <input type="file" name="image" id="image" value="">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="image">Описание</label>
                    <div class="controls">
                        <textarea name="description"></textarea>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="availability">Доступность</label>
                    <div class="controls">
                        <select id="availability" name="availability">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="is_new">Новый</label>
                    <div class="controls">
                        <select id="is_new" name="is_new">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="is_featured">Рекомендован</label>
                    <div class="controls">
                        <select id="is_featured" name="is_featured">
                            <option value="1" selected="selected">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <div class="control-group">
                    <label class="control-label" for="status">Статус</label>
                    <div class="controls">
                        <select id="status" name="status">
                            <option value="1" selected="selected">Показано</option>
                            <option value="0">Скрытый</option>
                        </select>
                    </div>
                </div>
                <br/><br/>
                <input type="submit" name="submit" class="btn btn-default" value="Save" />    
                <br/><br/>
            </form>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>


