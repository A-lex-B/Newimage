<?php
namespace app\components;

use yii\base\Widget;
use yii;
use yii\web\NotFoundHttpException;

class GalleryWidget extends Widget
{
    public $pagename = 'odezhda';
    public $dir;
    public $assets;
    
    public function init() {
        parent::init();
        $this->pagename = strtolower(Yii::$app->request->get('pagename', $this->pagename));
        if(!in_array($this->pagename, ['odezhda', 'acsess', 'vyshivka'])) {
            throw new NotFoundHttpException;
        }
        $this->dir = $this->assets->basePath . '/foto/' . $this->pagename;
    }

    //Функция для изменения порядка категорий одежды
    public function cmp ($a, $b) {
        if($a == 'vech') $a=0;
        elseif($a == 'verh') $a=1;
        elseif($a == 'dets') $a=2;
        elseif($a == 'bel') $a=3;
        else return;
        if($b == 'vech') $b=0;
        elseif($b == 'verh') $b=1;
        elseif($b == 'dets') $b=2;
        elseif($b == 'bel') $b=3;
        else return;
        return $a <=> $b;
    }
    
    public function generate_fotolinks ($dir, $level, $mainURL) {
        
        $level++;
        $rel = basename($dir);
        $mainURL = "$mainURL/$rel";
        
        if($rel == 'odezhda') {$title = 'Одежда';}
        elseif($rel == 'vech') {$title = 'Вечерняя одежда';}
        elseif($rel == 'verh') {$title = 'Верхняя одежда';}
        elseif($rel == 'dets') {$title = 'Детская одежда';}
        elseif($rel == 'bel') {$title = 'Бельё';}
        elseif($rel == 'acsess') {$title = 'Аксессуары';}
        elseif($rel == 'vyshivka') {$title = 'Вышивка';}
    
        echo "<h" . $level+1 . ">$title</h" . $level+1 . ">";
    
        $files = scandir($dir);
        foreach($files as $key=>$value){
        if($value == '.'|$value == '..'|preg_match('/s\./', $value))
        unset($files[$key]);
        }
        
        //Изменение порядка отображаемых фото в категории "Одежда"
        if($rel == 'odezhda'){
        usort($files, [$this, 'cmp']);
        $repl=['009.jpg', '003.jpg', '010.jpg', '004.jpg', '001.jpg', '002.jpg', '005.jpg', '006.jpg', '007.jpg', '008.jpg'];
        array_splice($files, 0, 10, $repl);
        }
    
        foreach($files as $file) {
        if(is_file("$dir/$file")) {
            $name = pathinfo($file, PATHINFO_FILENAME);
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            echo "<a href=\"$mainURL/$file\" rel=\"lightbox[$rel]\" title=\"$title\"><img src=\"$mainURL/${name}s.$extension\"/></a>\n";
        }
        }
        foreach($files as $file) {
        if(is_dir("$dir/$file")) {
            $this->generate_fotolinks ("$dir/$file", $level, $mainURL);
            }
        }
    }

    public function run() {
        return $this->generate_fotolinks($this->dir, 0, $this->assets->baseUrl . "/foto");
    }
}