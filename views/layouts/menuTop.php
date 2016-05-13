  <?php
  
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>

<style>
.btn-link{
    color: #5f666f;
    font-family: "HPSimplified_Rg";
    font-size: 18px;
    padding: 1px 15px;
}
</style>

    <?php
     NavBar::begin([
        'brandLabel' => '<img src="/img/asdad.svg">',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'nav',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => ''],
        'items' => [
            ['label' => 'Компания', 'url' => ['/about']],
			['label' => 'Портфолио', 'url' => ['/news']],
			['label' => 'Цены', 'url' => ['/partnery']],
            ['label' => 'Контакты', 'url' => ['/contact']],

          Yii::$app->user->isGuest ? ''
		  //(     ['label' => 'Войти', 'url' => ['/login']]   )
		  : (
                '
				<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Пользователь : ' . Yii::$app->user->identity->username . '',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            ),
		
        ],
    ]);
 //   NavBar::end();
    ?>


