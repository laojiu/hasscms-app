<?php

/**
* HassCMS (http://www.hassium.org/)
*
* @link http://github.com/hasscms for the canonical source repository
* @copyright Copyright (c) 2016-2099 Hassium Software LLC.
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

use hass\base\misc\adminlte\ActiveForm;
use hass\base\misc\editor\EditorWidget;

use yii\helpers\Html;
use yii\helpers\Url;
/**
*
* @package hass\package_name
* @author zhepama <zhepama@gmail.com>
* @since 0.1.0
*/
?>

<?php

$form = ActiveForm::begin([
    'options' => [
        'enctype' => 'multipart/form-data',
        'class' => 'model-form'
    ]
]);
?>

<?php echo $form->field($model,"title")?>

<?php echo $form->field($model,"slug")?>

<?php echo $form->field($model,"cache")?>

<?=$form->field($model, 'template')->label(false)->widget(EditorWidget::className(), ["config" => ["class" => '\vova07\imperavi\Widget','settings' => ['lang' => 'zh_cn','minHeight' => 200,'imageManagerJson' => Url::to(['/attachment/upload/images-get']),'imageUpload' => Url::to(['/attachment/upload/create-imperavi']),'fileUpload' => Url::to(['/attachment/upload/create-imperavi']),'plugins' => ['clips','fullscreen','imagemanager','filemanager']]]]);?>
	<?=Html::submitButton($model->isNewRecord ? '发布' : '更新', ['class' => 'btn bg-maroon btn-flat margin-bottom btn-block' ])?>
<?php ActiveForm::end();?>