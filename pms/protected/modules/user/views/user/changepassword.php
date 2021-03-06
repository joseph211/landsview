<? 
$this->pageTitle = Yum::t("change password");
echo '<h2>'. Yum::t('Change password') .'</h2>';

$this->breadcrumbs = array(
	Yum::t("Change password"));

if(isset($expired) && $expired)
	$this->renderPartial('password_expired');
?>

<div class="form">
<? echo CHtml::beginForm(); ?>
	<? echo Yum::requiredFieldNote(); ?>
	<? echo CHtml::errorSummary($form); ?>

	<? if(!Yii::app()->user->isGuest) {
		echo '<div class="row">';
		echo CHtml::activeLabelEx($form,'Current password',array('class'=>'txt_label')); 
		echo CHtml::activePasswordField($form,'currentPassword'); 
		echo '</div>';
	} ?> 
<? $this->renderPartial(
		'application.modules.user.views.user.passwordfields', array(
			'form'=>$form)); ?>

	<div class="row submit">
	<? echo CHtml::submitButton(Yum::t("Save")); ?>
        <?php echo CHtml::Button('Cancel', array('submit' => '/ete/public/index')); ?>
	</div>

<? echo CHtml::endForm(); ?>
</div><!-- form -->
