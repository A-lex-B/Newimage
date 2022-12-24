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
      <span>2</span>
      <a href="<?= $URL ?>/Polezno3">3</a>
    </p>
    <p>&nbsp;</p>
    <h2>Как завязать платок.</h2>
    <p>&nbsp;</p>
    <h3>4. Завязывание шейного платка.</h3>
    <img src="<?= $NIassetsURL ?>/Platok4.jpg" id="platok" />
    <p><strong>Очень элегантное  решение.</strong></p>
    <ol>
      <li>Расположите  платок на шее таким образом, чтобы его концы симметрично свисали спереди. </li>
      <li>Возьмите  специальную пряжку, и по очереди проденьте через нее каждый конец платка. </li>
      <li>Вот и  все! </li>
    </ol>
    <p>Пара несложных движений руками - и восхищенные взгляды прохожих  вам обеспечены!</p>
    <p>&nbsp;</p>
    <h3>5. Завязывание платка на теле</h3>
    <img src="<?= $NIassetsURL ?>/Platok5.jpg" id="platok" />
    <p>Очень простые действия превратят самый обыкновенный платок в  стильный топ.</p>
    <ol>
      <li>Возьмите  обычный платок. Рисунок может быть любым, но предпочтительнее симметричный.  Середину платка скрепите (можно сшить или заколоть). </li>
      <li>Ту  сторону, на которой скрепляли, направьте к телу. </li>
      <li>возьмитесь  на края платка и завяжите их на спине: сверху и снизу. </li>
      <li>Вуаля!... </li>
    </ol>
    <p>И никто не догадается, что эту модельную одежду вы сделали  собственными руками!</p>
    <p>&nbsp;</p>
    <h3>6. Завязывание шейного  платка</h3>
    <img src="<?= $NIassetsURL ?>/Platok6.jpg" id="platok" />
    <p><strong>Довольно нестандартное решение.</strong></p>
    <ol>
      <li>Возьмите  в руки шейный платок. </li>
      <li>Разместите  его концами спереди так, чтобы один конец был длиннее другого. </li>
      <li>Сделайте  одинарный узел. </li>
      <li>Короткий  конец придерживайте, а длинным продолжайте обкручивать основание платка. </li>
      <li>Сзади  завяжите. </li>
      <li>Разровняйте  платок, сделайте расстояния между скрутками одинаковым. </li>
    </ol>
    <p>Такой платок замечательно выгляди с короткими волосами, причем,  как с пышными, так и с гладкими прическами.</p>
    <p>&nbsp;</p>
    <p><strong>Страница</strong>
      <a href="<?= $URL ?>/Polezno">1</a>
      <span>2</span>
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
