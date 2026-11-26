<?php
$dictionary=array(
'MEGAD_BRIDGE_ENDPOINT'=>'Адрес API',
'MEGAD_BRIDGE_METHOD'=>'HTTP-метод',
'MEGAD_BRIDGE_TOKEN'=>'Токен доступа',
'MEGAD_BRIDGE_REGION'=>'Регион / маршрут',
'MEGAD_BRIDGE_TRACKING'=>'Номер отправления',
'MEGAD_BRIDGE_PAYLOAD'=>'Шаблон POST-запроса',
'MEGAD_BRIDGE_HINT'=>'Локальный модуль. Данные не отправляются, пока сценарий не вызовет api().',
'MEGAD_BRIDGE_LAST'=>'Последний результат',
'MEGAD_BRIDGE_SEC'=>'Секрет MegaD',
'MEGAD_BRIDGE_PORT'=>'Порт',
'MEGAD_BRIDGE_VALUE'=>'Значение',
'MEGAD_BRIDGE_QUEUE_MODE'=>'Режим очереди',
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}