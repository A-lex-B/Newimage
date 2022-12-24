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
      <span>1</span>
      <a href="<?= $URL ?>/Polezno2">2</a>
      <a href="<?= $URL ?>/Polezno3">3</a>
    </p>
    <p>&nbsp;</p>
    <h2>Как завязать платок.</h2>
    <p>&nbsp;</p>
    <h3>1. Завязывание головного платка.</h3>
    <img src="<?= $NIassetsURL ?>/Platok1.jpg" id="platok" />
    <p>Такой тип завязывания подойдет для волос любой длины.</p>
    <ol>
      <li>Сложите  платок по диагонали таким образом, чтобы один конец был ниже другого. </li>
      <li>Возьмите  платок в руки и наденьте на голову. </li>
      <li>Завяжите  сзади одинарным узлом. </li>
      <li>Можете  завязать бантом или еще одним узлом. </li>
      <li>И вы  неотразимы! </li>
    </ol>
    <p>Тут можно взять гофрированный платок. Так головной убор в месте  завязывания будет более пышным и объемным.</p>
    <p>&nbsp;</p>
    <h3>2. Завязывание шейного платка.</h3>
    <img src="<?= $NIassetsURL ?>/Platok2.jpg" id="platok" />
    <p><strong>Этот  вариант отлично подойдет женщинам с волосами средней длины.</strong>
    </p>
    <ol>
      <li>Разверните  шейный платок изнаночной стороной к коже и заведите его за шею. </li>
      <li>Завяжите  спереди одинарным узлом так, чтобы части платка лежали одна на другой. </li>
      <li>Образуйте  из них петлю, и проденьте один конец платка в нее. </li>
      <li>Стяните,  до образования узла нужного вам размера. </li>
      <li>Завяжите  сзади. </li>
      <li>Готово! </li>
    </ol>
    <p>Такое завязывание очень хорошо подходит под рубашки, если не  застегивать их до воротничка.</p>
    <p>&nbsp;</p>
    <h3>3. Завязывание платков на пояс</h3>
    <img src="<?= $NIassetsURL ?>/Platok3.jpg" id="platok" />
    <p>Отличный способ оживить однотонное платье или костюм.</p>
    <ol>
      <li>Возьмите  платок. </li>
      <li>Расположите  платок в руках так, чтобы он симметрично лег на талию, заведите концы за спину. </li>
      <li>Завяжите  одинарный узел. </li>
      <li>Проденьте  концы еще раз так, чтобы получился аккуратный узелок. </li>
      <li>Несложно  и стильно! </li>
    </ol>
    <p>&nbsp;</p>
    <p><strong>Страница</strong>
      <span>1</span>
      <a href="<?= $URL ?>/Polezno2">2</a>
      <a href="<?= $URL ?>/Polezno3">3</a>
    </p>
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
