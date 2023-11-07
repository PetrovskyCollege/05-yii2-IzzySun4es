<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Авторы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="search-recipe">
        <form action="" method="post">
            <div class="form-group">
                <label for="category">Категория</label>
                <select class="form-control" name="category_id" id="category">
                    <option value="">Все категории</option>
                </select>
            </div>
            <div class="form-group">
                <label for="kitchen">Кухня</label>
                <select class="form-control" name="kitchen_id" id="kitchen">
                    <option value="">Все кухни</option>
                </select>
            </div>
            <div class="form-group">
                <label for="menu">Меню</label>
                <select class="form-control" name="menu_id" id="menu">
                    <option value="">Все меню</option>
                </select>
            </div>
            <button type="submit">Подобрать рецепты</button>
        </form>
    </div>

    <div class="main main-recipe">
        <h1 class="main-h1-recipe">Рецепты</h1>
        <p class="main-p-recipe">Ищите рецепты, выбирая категорию блюда, кухню или меню.</p>
            <div class="recipe-content">
                <div class="recipe-content-left">
                    <img src="img/cook.jpg" alt="1" width="500">
                </div>
                <div class="recipe-content-right">
                    <ul class="sort-first">
                        <li>Категория:</li>
                        <li>Кухня: </li>
                        <li>Меню: </li>
                    </ul>
                    <h2></h2>
                    <p>Автор</p>
                    <ul class="sort-second">
                        <li>Ингредиенты</li>
                        <li>Порции</li>
                        <li>Время</li>
                    </ul>
                    <div class="like-container">
                        <button class="like-button">👍</button>
                        <p>Добавить в книгу рецептов</p>
                        <span class="like-count">0</span>
                        <button class="like-button">💕</button>
                        <span class="like-count">0</span>
                    </div>
                </div>
            </div>
    </div>

    <code><?= __FILE__ ?></code>
</div>
