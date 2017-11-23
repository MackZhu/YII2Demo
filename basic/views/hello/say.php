<?php
use yii\helpers\Html;
use app\models\EntryForm;
use app\models\Country;

$model = new EntryForm();
$model->name = "MackZhu";
$model->email = "Bad Email";

if($model->validate())
{
    echo "<BR>Success<BR>";
}
else
{
    echo getModelError($model->getErrors());
}

$countries = Country::find()->orderBy('name')->all();

echo var_dump(Country::getDb());
//echo var_dump($countries[0]);
//echo var_dump(Yii::$app->db->dsn);
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

