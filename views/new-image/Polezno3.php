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
<title>Студия моды &quot;Новый образ&quot; - индивидуальный пошив и ремонт одежды - полезно знать</title>
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
    <a href="<?= $URL ?>/Uslugi"><img src="<?= $NIassetsURL ?>/Menu-uslugi.png" /><img src="<?= $NIassetsURL ?>/Menu-uslugi2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Gallery"><img src="<?= $NIassetsURL ?>/Menu-gallery.png" /><img src="<?= $NIassetsURL ?>/Menu-gallery2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Polezno" class="active" id="pz"><img src="<?= $NIassetsURL ?>/Menu-polezno.png" /><img src="<?= $NIassetsURL ?>/Menu-polezno2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Contacts" id="cont"><img src="<?= $NIassetsURL ?>/Menu-contacts.png" /><img src="<?= $NIassetsURL ?>/Menu-contacts2.png" class="hoverimage"/></a>
    <!-- InstanceEndEditable --><br style="clear:left"/>
  </div>
  <!-- InstanceBeginEditable name="text" -->
  <div class="txt">
    <img src="<?= $NIassetsURL ?>/Ugolok1.png" id="ug1" />
    <img src="<?= $NIassetsURL ?>/Ugolok2.png" id="ug2"/>
    <p><strong>Страница</strong>
      <a href="<?= $URL ?>/Polezno">1</a>
      <a href="<?= $URL ?>/Polezno2">2</a>
      <span>3</span></p>
    <p>&nbsp;</p>
    <h2>Как завязать платок.</h2>
    <p>&nbsp;</p>
    <h3>7. Завязывание головного платка.</h3>
    <img src="<?= $NIassetsURL ?>/Platok7.jpg" id="platok" />
    <p><strong>Красиво  и изящно.</strong></p>
    <ol>
      <li>Возьмите  платок и пряжку в виде &laquo;восьмерки&raquo;. Платок положите на шею концами вперед. </li>
      <li>Проденьте  каждый конец платка в отверстие. </li>
      <li>Возьмитесь  руками за каждый конец платка. </li>
      <li>Поднимите  его на голову. Концы платка завяжите под волосами. </li>
      <li>Поправьте  волосы, разровняйте складки на платке. </li>
    </ol>
    <p>Будьте уверены, с таким украшением на голове, вы будете  единственной!</p>
    <p>&nbsp;</p>
    <h3>8. Завязывание платка на пояс</h3>
    <img src="<?= $NIassetsURL ?>/Platok8.jpg" id="platok" />
    <ol>
      <li>Приготовьте  платок и пряжку в виде &laquo;восьмерки&raquo;. </li>
      <li>Оберните  платок вокруг талии. Проденьте его концы в пряжку. </li>
      <li>Оберните  концы платка вокруг той его части, которая лежит на талии, и проденьте их  сквозь получившуюся петлю. </li>
      <li>Такой  пояс можно носить как по центру, так и сместив в любую сторону. </li>
    </ol>
    <p>Подходит как к брюкам, так и к юбкам и платьям.</p>
    <p>&nbsp;</p>
    <h3>9. Завязывание шейных  платков</h3>
    <img src="<?= $NIassetsURL ?>/Platok9.jpg" id="platok" />
    <img src="<?= $NIassetsURL ?>/Platok10.jpg" id="platok" />
    <img src="<?= $NIassetsURL ?>/Platok11.jpg" id="platok" />
    <img src="<?= $NIassetsURL ?>/Platok12.jpg" id="platok" />
    <img src="<?= $NIassetsURL ?>/Platok13.jpg" id="platok" />
    <p>&nbsp;</p>
    <p><strong>Страница</strong>
      <a href="<?= $URL ?>/Polezno">1</a>
      <a href="<?= $URL ?>/Polezno2">2</a>
      <span>3</span></p>
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
