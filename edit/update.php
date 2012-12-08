<?php
class Configuration {
    public $url_base = "https://raw.github.com/aoloe/htdocs-xox/master/";
    public function get_url($url) {return $this->url_base.$url;}
    public $url_index = "index.md";
    public $url_notes = "notes.md";
    public $path_base = "../";
    public $path_edit = "edit/";
    public $path_data = "data/";
    public $file_list = "list.json";
}
$configuration = new Configuration();

function debug($label, $value) {
    echo("<div style=\"border:1px solid gray;\">$label:<br /><pre style=\"margin-top:0px; padding-top:0px;\">".htmlentities(print_r($value, 1))."</pre></div>");
}

function get_content_from_github($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 1);
    $content = curl_exec($ch);
    curl_close($ch);
    return $content;
}

$filename = 'test.html';
$fileinfo = pathinfo($filename);
debug('fileinfo', $fileinfo);
$file_content = get_content_from_github($configuration->get_url('test.html'));
if (strstr($fileinfo['extension'], 'htm') !== false) {
    debug('it\'s an', 'html');
} else if ($fileinfo['extension'] == 'md') {
}
debug('file_content', $file_content);

debug('json', json_encode(array('my label' => 'my value', 'again' => 'and again')));

define('TEMPLATE_HTML', <<<EOT
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<title>\$title</title>
<link rel="stylesheet" href="css/xox.css" type="text/css" media="screen">
</head>
<body>
\$content
</body>
</html>
EOT
);
