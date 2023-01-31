<?php $this->title = ' - галерея' ?>

<div class="headline">
  <img src="<?= $NIassetsURL ?>/HeadlineBG.jpg" class="bg" />
  <img src="<?= $NIassetsURL ?>/Newimage.png" id="newimg" />
  <img src="<?= $NIassetsURL ?>/Venzeltop.png" id="vt" /></div>
<div class="page">
  <div class="page2"></div>
  <div class="page3"></div>
  <div class="menudiv"><img src="<?= $NIassetsURL ?>/MenuBG.jpg" class="bg" /><!-- InstanceBeginEditable name="menu" -->
    <a href="<?= $URL ?>/index">
    <img src="<?= $NIassetsURL ?>/Menu-main.png" />
    <img src="<?= $NIassetsURL ?>/Menu-main2.png" class="hoverimage" />
    </a>
    <a href="<?= $URL ?>/uslugi">
    <img src="<?= $NIassetsURL ?>/Menu-uslugi.png" />
    <img src="<?= $NIassetsURL ?>/Menu-uslugi2.png" class="hoverimage" />
    </a>
    <a href="<?= $URL ?>/gallery" class="active">
    <img src="<?= $NIassetsURL ?>/Menu-gallery.png" />
    <img src="<?= $NIassetsURL ?>/Menu-gallery2.png" class="hoverimage" />
    </a>
    <a href="<?= $URL ?>/polezno" id="pz">
    <img src="<?= $NIassetsURL ?>/Menu-polezno.png" />
    <img src="<?= $NIassetsURL ?>/Menu-polezno2.png" class="hoverimage" />
    </a>
    <a href="<?= $URL ?>/contacts" id="cont">
    <img src="<?= $NIassetsURL ?>/Menu-contacts.png" />
    <img src="<?= $NIassetsURL ?>/Menu-contacts2.png" class="hoverimage"/>
    </a>
    <!-- InstanceEndEditable --><br style="clear:left"/>
  </div>
  <!-- InstanceBeginEditable name="text" -->
  <div class="txt" id="gallery">
    <img src="<?= $NIassetsURL ?>/Ugolok1.png" id="ug1" />
    <img src="<?= $NIassetsURL ?>/Ugolok2.png" id="ug2"/>
<?= app\components\GalleryWidget::widget(['assets' => $Galleryassets]) ?>
</div>
  <!-- InstanceEndEditable -->
  <div class="bottomMenu">
    <a href="<?= $URL ?>/index">Главная</a>
    <a href="<?= $URL ?>/uslugi">Услуги</a>
    <a href="<?= $URL ?>/gallery">Галерея</a>
    <a href="<?= $URL ?>/polezno">Полезно знать</a>
    <a href="<?= $URL ?>/contacts">Контакты</a>
  </div>
  
  <div class="footer"><img src="<?= $NIassetsURL ?>/MenuBG.jpg" class="bg" />
    <img src="<?= $NIassetsURL ?>/Venzelbott.png" id="vb" />
    <p>www.atelier-newimage.ru</p>
    <p>ул. Большая Серпуховская, д.44</p>
    <p>тел. 8 (499) 236-66-05</p>
    </div>
</div>