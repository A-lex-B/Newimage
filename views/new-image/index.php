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
<title>Студия моды &quot;Новый образ&quot; - индивидуальный пошив и ремонт одежды</title>
<!-- InstanceEndEditable -->
<?php $this->head() ?>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<!-- InstanceParam name="bottommenu" type="boolean" value="false" -->
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
    <a href="<?= $URL ?>/index" class="active"><img src="<?= $NIassetsURL ?>/Menu-main.png" /><img src="<?= $NIassetsURL ?>/Menu-main2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Uslugi"><img src="<?= $NIassetsURL ?>/Menu-uslugi.png" /><img src="<?= $NIassetsURL ?>/Menu-uslugi2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Gallery"><img src="<?= $NIassetsURL ?>/Menu-gallery.png" /><img src="<?= $NIassetsURL ?>/Menu-gallery2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Polezno" id="pz"><img src="<?= $NIassetsURL ?>/Menu-polezno.png" /><img src="<?= $NIassetsURL ?>/Menu-polezno2.png" class="hoverimage" /></a>
    <a href="<?= $URL ?>/Contacts" id="cont"><img src="<?= $NIassetsURL ?>/Menu-contacts.png" /><img src="<?= $NIassetsURL ?>/Menu-contacts2.png" class="hoverimage"/></a>
    <!-- InstanceEndEditable --><br style="clear:left"/>
  </div>
  <!-- InstanceBeginEditable name="text" -->
  <div class="txt">
    <img src="<?= $NIassetsURL ?>/Ugolok1.png" id="ug1" />
    <img src="<?= $NIassetsURL ?>/Ugolok2.png" id="ug2"/>
    <img src="<?= $NIassetsURL ?>/Woman.png" id="woman" />
    <ul>
      <li class="txtright">&quot;Мода меняется &ndash; СТИЛЬ никогда&quot;
      </li>
      <li class="txtright">Коко Шанель </li>
    </ul>
    <br/>
    <br/>
    <ul>
      <li>Мода так стремительно меняется, и купленное вчера становится немодным завтра. Все больше людей приходит к выводу, что собственный стиль важнее моды. Быть стильным, выразить себя, найти свою &quot;изюминку&quot; &ndash; это то, к чему стремится сейчас практически каждый человек. </li>
      &nbsp;
      <li>Что такое &quot;персональный стиль&quot;? Это прежде всего индивидуальность, воплощенная в визуальной форме. То, что видно с первого взгляда. То, что сильнее, чем тенденции и готовые образцы. Как же этого достичь? Как найти свой неповторимый стиль? </li>
      &nbsp;
      <li>Мастера студии моды &quot;Новый образ&quot;, имеющие многолетний опыт работы предлагают вам свои профессиональные услуги от ремонта одежды до индивидуального пошива любой эксклюзивной вещи. </li>
      &nbsp;
      <li>Наша задача &ndash; сформировать образ, который принесет вашей душе внутренний комфорт и позволит достойно выглядеть в любой ситуации! </li>
    </ul>
  </div>
  <!-- InstanceEndEditable -->
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
