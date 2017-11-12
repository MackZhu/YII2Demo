<?php
use yii\helpers\Html;
use app\models\EntryForm;

$model = new EntryForm();
$model->name = "MackZhu";
$model->email = "Bad Email";

if($model->validate())
{
    echo "Success";
}
else
{
    echo "Error";
}
?>
<?= Html::encode($message) ?>
