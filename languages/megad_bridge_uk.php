<?php
$dictionary=array(
'MEGAD_BRIDGE_ENDPOINT'=>'Адреса API',
'MEGAD_BRIDGE_METHOD'=>'HTTP-метод',
'MEGAD_BRIDGE_TOKEN'=>'Токен доступу',
'MEGAD_BRIDGE_REGION'=>'Регіон / маршрут',
'MEGAD_BRIDGE_TRACKING'=>'Номер відправлення',
'MEGAD_BRIDGE_PAYLOAD'=>'Шаблон POST-запиту',
'MEGAD_BRIDGE_HINT'=>'Локальний модуль. Дані не надсилаються, доки сценарій не викличе api().',
'MEGAD_BRIDGE_LAST'=>'Останній результат'
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}