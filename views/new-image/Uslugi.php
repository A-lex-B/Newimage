<?php
use app\assets\NewImageAsset;
use yii\helpers\url;

$NIassets = NewImageAsset::register($this);
$NIassetsURL = $NIassets->baseUrl;
$URL = rtrim(Url::current(['view' => null]), '/');

$this->registerLinkTag([
  'rel' => 'shortcut icon',
  'type' => 'image/x-icon',
  'href' => "$NIassetsURL/favicon.ico",
]);
$this->registerMetaTag([
  'http-equiv' => 'Content-Type', 'content' => 'text/html; charset=UTF-8'
]);
$this->registerMetaTag([
  'name' => 'description', 'content' => 'Студия моды Новый образ осуществляет индивидуальный пошив одежды любой сложности из трикотажа, кожи, текстиля: платьев, костюмов, юбок, брюк, блузок,  вечерней одежды, верхней одежды; ремонт одежды из кожи, меха, трикотажа, текстиля; подгонку по фигуре; изготовление дизайнерских аксессуаров.'
]);
$this->registerMetaTag([
  'name' => 'keywords', 'content' => 'одежда, пошив, пошива одежды, пошив одежды, ателье по пошиву одежды, пошив одежды ателье, раскрой, выкройки, заказ пошива одежды, пошив одежды москва, ателье, салон-ателье, дизайн-ателье, студия моды,  индивидуальный пошив одежды, пошив платьев, пошив вечерних платьев, пошив вечерней одежды, пошив юбок, пошив костюмов, пошив брюк, пошив верхней одежды, пошив блузок, услуги дизайнера, ремонт одежды, подгонка по фигуре, одежда на заказ, дизайнерские аксессуары,  вышивка'
]);

$this->beginPage()
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Newimage.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Студия моды &quot;Новый образ&quot; - индивидуальный пошив и ремонт одежды - услуги</title>
<!-- InstanceEndEditable -->
<?php $this->head() ?>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="bottommenu" type="boolean" value="true" -->
<!-- InstanceParam name="galleryscript" type="boolean" value="false" -->
</head>
<body>
<?php $this->beginBody() ?>
<div class="headline">
  <img src="<?= $NIassetsURL ?>/HeadlineBG.jpg" class="bg" />
  <img src="<?= $NIassetsURL ?>/Newimage.png" id="newimg" />
  <img src="<?= $NIassetsURL ?>/Venzeltop.png" id="vt" /></div>
<div class="page">
  <div class="page2"></div>
  <div class="page3"></div>
  <div class="menudiv"><img src="<?= $NIassetsURL ?>/MenuBG.jpg" class="bg" /><!-- InstanceBeginEditable name="menu" -->
    <a href="<?= $URL ?>/index"><img src="<?= $NIassetsURL ?>/Menu-main.png" /><img src="<?= $NIassetsURL ?>/Menu-main2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Uslugi" class="active"><img src="<?= $NIassetsURL ?>/Menu-uslugi.png" /><img src="<?= $NIassetsURL ?>/Menu-uslugi2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Gallery"><img src="<?= $NIassetsURL ?>/Menu-gallery.png" /><img src="<?= $NIassetsURL ?>/Menu-gallery2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Polezno" id="pz"><img src="<?= $NIassetsURL ?>/Menu-polezno.png" /><img src="<?= $NIassetsURL ?>/Menu-polezno2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Contacts" id="cont"><img src="<?= $NIassetsURL ?>/Menu-contacts.png" /><img src="<?= $NIassetsURL ?>/Menu-contacts2.png" class="hoverimage"/></a>
    <!-- InstanceEndEditable --><br style="clear:left"/>
  </div>
  <!-- InstanceBeginEditable name="text" -->
  <div class="txt">
    <img src="<?= $NIassetsURL ?>/Ugolok1.png" name="ug1" id="ug1" /><img src="<?= $NIassetsURL ?>/Ugolok2.png" id="ug2"/>
    <img src="<?= $NIassetsURL ?>/Woman.png" id="woman" />
    <h2>&nbsp;</h2>
    <h2>Пошив одежды.</h2>
    <p>&nbsp;</p>
    <p>Индивидуальный пошив &ndash; это возможность воплотить в реальность все свои мечты, создать свой неповторимый и поистине уникальный стиль. </p>
    <p>Основные направления: </p>
    <p>&nbsp;</p>
    <ul class="lc">
      <li>Пошив женской одежды </li>
      <li>Пошив детской одежды </li>
      <li>Пошив свадебных вечерних нарядов </li>
      <li>Пошив корпоративной одежды </li>
      <li>Консультация дизайнера </li>
      <li>Выезд дизайнера </li>
    </ul>
    <p>&nbsp;</p>
    <h2>Ремонт одежды.</h2>
    <p>&nbsp;</p>
    <p>Студия моды &quot;Новый образ&quot; предлагает широкий спектр услуг по ремонту одежды: </p>
    <p>&nbsp;</p>
    <ul class="lc">
      <li>Идеальная подгонка по фигуре</li>
      <li>Реставрация одежды </li>
      <li>Рестайлинг одежды </li>
      <li>Замена молний, установка кнопок и многое другое </li>
    </ul>
    <p>&nbsp;</p>
    <p>Индивидуальный подход к выполнению каждого заказа и высокий уровень  профессионализма мастеров позволит в кратчайшие сроки выполнить мелкие операции  по ремонту одежды.</p>
    <p>&nbsp;</p>
    <h2>Текстильный  дизайн.</h2>
    <p>&nbsp;</p>
    <p>Качественный, эксклюзивный и изысканный текстильный дизайн от мастеров  нашей студии моды - это лучшее решение для оформления любого  интерьера: </p>
    <p>&nbsp;</p>
    <ul class="lc">
      <li>Пошив штор </li>
      <li>Пошив ламбрекенов</li>
      <li>Пошив текстильных аксессуаров </li>
      <li>Ресторанный текстиль</li>
      <li>Выезд дизайнера</li>
    </ul>
    <p>&nbsp;</p>
    <h2>Дизайн аксессуаров.</h2>
    <p>&nbsp;</p>
    <p>Завершающим штрихом к безупречному образу любой женщины являются  аксессуары. Верно подобранные, они способны подчеркнуть любую красоту и  женственность, добавить шарма и загадки. </p>
    <p>Наши дизайнеры выполнят любой ваш каприз:</p>
    <p>&nbsp;</p>
    <ul class="lc">
      <li>Изготовление бижутерии </li>
      <li>Изготовление цветов (брошь) </li>
      <li>Изготовление шарфов, палантинов </li>
    </ul>
    <p>&nbsp;</p>
    <p>Аксессуары всегда выгодно дополнят ваш гардероб. Мы готовы творить для Вас! </p>
  </div>
  <!-- InstanceEndEditable -->
  <div class="bottomMenu">
    <a href="<?= $URL ?>/index">Главная</a>
    <a href="<?= $URL ?>/Uslugi">Услуги</a>
    <a href="<?= $URL ?>/Gallery">Галерея</a>
    <a href="<?= $URL ?>/Polezno">Полезно знать</a>
    <a href="<?= $URL ?>/Contacts">Контакты</a>
  </div>
  
  <div class="footer"><img src="<?= $NIassetsURL ?>/MenuBG.jpg" class="bg" />
    <img src="<?= $NIassetsURL ?>/Venzelbott.png" id="vb" />
    <p>www.atelier-newimage.ru</p>
    <p>ул. Большая Серпуховская, д.44</p>
    <p>тел. 8 (499) 236-66-05</p>
    </div>
</div>
<?php $this->endBody() ?>
</body>
<!-- InstanceEnd -->
</html>
<?php $this->endPage() ?>
