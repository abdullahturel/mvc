<?php

class View
{
    public function render($file, $params = [])
    {
        if( file_exists(VIEWS_PATH . "/" . $file .".php") ){
            extract($params);
            require_once VIEWS_PATH . "/" . $file .".php";
        }else{
            exit($file . " görüntü dosyası bulunamadı!");
        }
    }
}

?>