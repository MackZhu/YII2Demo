<?php
use yii\helpers\Html;
use app\models\EntryForm;

$model = new EntryForm();
$model->name = "MackZhu";
$model->email = "Bad Email";

if($model->validate())
{
    echo "<BR>Success<BR>";
}
else
{
    echo "<BR>Error<BR>";
    echo getModelError($model->getErrors());
}

echo "<BR>".Html::encode($message);

function getModelError($errors)
{
    if(!is_array($errors))
    {
        return true;
    }

    $firstError = array_shift($errors);
    if(!is_array($firstError))
    {
        return true;
    }
    return array_shift($firstError);
}

?>

