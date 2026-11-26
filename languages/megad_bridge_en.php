<?php
$dictionary=array(
'MEGAD_BRIDGE_ENDPOINT'=>'API endpoint',
'MEGAD_BRIDGE_METHOD'=>'HTTP method',
'MEGAD_BRIDGE_TOKEN'=>'Access token',
'MEGAD_BRIDGE_REGION'=>'Region / route',
'MEGAD_BRIDGE_TRACKING'=>'Tracking number',
'MEGAD_BRIDGE_PAYLOAD'=>'POST payload template',
'MEGAD_BRIDGE_HINT'=>'Local-first module. No data leaves the system until api() is called.',
'MEGAD_BRIDGE_LAST'=>'Last result',
'MEGAD_BRIDGE_SEC'=>'MegaD secret',
'MEGAD_BRIDGE_PORT'=>'Port',
'MEGAD_BRIDGE_VALUE'=>'Value',
'MEGAD_BRIDGE_QUEUE_MODE'=>'Queue mode',
);
foreach($dictionary as $k=>$v){if(!defined('LANG_'.$k))define('LANG_'.$k,$v);}