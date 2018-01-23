<?php
use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Menu;

/* @var $this yii\web\View */
$title = $category === null ? '' : $category->title;
$this->title = Html::encode($title);
?>

<h1><?= Html::encode($title) ?></h1>

<h3>Kategori Pesanan :</h3>
<div class="container-fluid">
  <div class="row">
      <div class="col-xs-4">
          <?= Menu::widget([
              'items' => $menuItems,
              'options' => [
                  'class' => 'menu',
              ],
          ]) ?>
      </div>
      <div class="col-xs-8">
          <?= ListView::widget([
              'dataProvider' => $productsDataProvider,
              'itemView' => '_product',
          ]) ?>
      </div>
  </div>
</div>