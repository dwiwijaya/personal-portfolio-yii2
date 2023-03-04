<?php

use app\models\Project;
use richardfan\widget\JSRegister;
use yii\bootstrap4\Modal;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
// echo '<pre>';print_r($dataProvider);die;
$this->title = 'Projects';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-index">

    <div class="row mt-3">
        <div class="col">
            <h2 class="title-content"><?= Html::encode($this->title) ?></h2>
        </div>
        <div class="col">
            <p class="float-right">
                <?= Html::a('<i class="fa fa-plus"></i>&nbsp; Project', '#', ['class' => 'btn trans fw-300 text-upper create-btn btn-success', 'style' => 'float:right;']) ?>
            </p>
        </div>
    </div>

    <hr>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            // 'detail',
            [
                'attribute' => 'color',
                'value' => function ($m) {
                    return $m->color ? "<span style='background-color:$m->color ;' class='badge text-white p-2'>$m->color</span>" : '-';
                },
                'format' => 'html'
            ],
            'order',
            [
                'class' => 'app\helpers\ButtonActionColumn',
                'contentOptions' => ['class' => 'text-center', 'style' => 'min-width:175px;vertical-align:middle'],

                'urlCreator' => function ($action, Project $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->idproject]);
                }
            ],
        ],
    ]); ?>


</div>
<?php 
Modal::begin([
    'title' => '',
    'id' => 'modal-form',
    'size' => 'modal-lg',
]);
echo "<div id='modal-content'>Mohon Tunggu ...</div>";
Modal::end();
?>
<?php JSRegister::begin() ?>
<script>
        $('.create-btn').click(function() {
        // var id = $(this).attr('data');
        // console.log("id : " + id);
        $('#modal-form').modal('show');
        var url = "<?= Url::to(['project/create']) ?>";
        $.post(url, {
            data: {
                id: null
            }
        }, function(data) {
            $('#modal-content').html(data);
        });
    });
    const navMenu = $('#nav-menu');
  const navToggle = $('#nav-toggle');
  const navClose = $('#nav-close');

  if (navToggle.length) {
    navToggle.click(() => {
      navMenu.addClass('show-menu');
    });
  }

  if (navClose.length) {
    navClose.click(() => {
      navMenu.removeClass('show-menu');
    });
  }
</script>
<?php JSRegister::end() ?>