<?php
use yii\widgets\LinkPager;
?>
<div class="left_pillar">
    Filter
</div>
<div class="content">
    <h1><?=$category_data->title;?></h1>
    <?php
    foreach ($models as $model){
        echo '<a href="/p'.$model->id.'_'.$model->name.'">'.$model->title.'</a>';
    }

    // display pagination
    echo LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div>