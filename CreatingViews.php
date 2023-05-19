<?php

$dir = 'Newimage htmls';

echo 'Изменение файлов...';

$files = scandir($dir);
foreach($files as $key=>$value)
{
    if($value == '.'
      |$value == '..'
      |is_dir("$dir/$value")
      |$value === 'Gallery2.html'
      |$value === 'Gallery3.html'
    )
    unset($files[$key]);
}

$totalcount = 0;
$totalarray =[];

foreach($files as $file) 
{

$old_html = file_get_contents("$dir/$file");
      
$patterns = [
    '/<!DOCTYPE.*одежды(\s*-\s*[\w\s]+)*<\/title>.*<body>/su',
    '/\s*<\/body>.*/s',
    '/(id\s*=\s*\"gallery.*ug2\"\s*\/>)(?!\s*<\?=).*?(<\/div>)/s',
    '/(<img src\s*=\s*(?:\"|\'))(?!\s*<)(\s*foto\/)?/',
    '/(<a.*?href\s*=\s*(?:\"|\'))(\w+)\.\w+/',
    '/Gallery\d(.*?\/)((\w+)\.)/',
    '/(?:<p>|<h2.*?>)8 \(968\) 854-57-94(?:<\/p>|<\/h2>)\s*/',
];
$replace = [
    '<?php $this->title = \'$1\' ?>' . PHP_EOL,
    '',
    "$1\n<?= app\components\GalleryWidget::widget(['assets' => \$Galleryassets]) ?>\n$2",
    '$1<?= $NIassetsURL ?>/',
    '$1<?= $URL ?>/$2',
    'gallerypage/$3$1$2',
    '',
];

$count1 = 0;
$count2 = 0;

$new_html = preg_replace($patterns, $replace, $old_html, -1, $count1);

$newest_html = preg_replace_callback(
  '%(\$URL \?>/)([[:upper:]]|\w+/[[:upper:]])%',
  function ($matches) {
    return $matches[1] . strtolower($matches[2]);
  },
  $new_html, -1, $count2
);

if ($count1 != 0 | $count2 != 0) {
  if(!is_dir("$dir/../Newimage phps"))
  {
    mkdir("$dir/../Newimage phps") or die("Не удалось создать папку");
  }
  if ($file == 'Gallery1.html')
  {
    file_put_contents("$dir/../Newimage phps/gallerypage.php", $newest_html) or die("Не удалось создать файл");
  }
  else
  {
    file_put_contents("$dir/../Newimage phps/" . strtolower(pathinfo($file)['filename']) . '.php', $newest_html) or die("Не удалось создать файл");
  }
  $totalcount = $totalcount + $count1 + $count2;
  $totalarray[$file] = $count1 + $count2;
  }
}

echo "<br>Операция выполнена успешно. Произведено замен:<br><br>";
foreach ($totalarray as $key=>$value)
{
  echo "$key: $value<br>";
}
echo "<br>Всего: $totalcount";
?>