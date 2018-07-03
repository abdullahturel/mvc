<?php
session_start();
ob_start();

require_once 'Config/Config.php';

// MVC Çekirdek Dosyalarını Yükler
foreach (glob(__DIR__ . '/Core/*.php') as $coreFile){
	require_once strtolower($coreFile);
}

/* Application Classes Dosyalarını Yükler
foreach (glob(PATH .'/'. strtolower(CLASSES_PATH) .'/*.php') as $className){
	require_once strtolower($className);
}*/

//Application Classes Dosyalarını Class Çağrıldığında Yükler
function appClasses($className)
{
    require PATH .'/'. strtolower(CLASSES_PATH) .'/'. strtolower($className) . '.php';
}
spl_autoload_register('appClasses');

// Application Helper Dosyalarını Yükler
foreach (glob(PATH .'/'. strtolower(HELPERS_PATH) .'/*.php') as $helperFile){
	require_once strtolower($helperFile);
}

?>
