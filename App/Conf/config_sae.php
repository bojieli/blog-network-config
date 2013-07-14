<?php
$s=Think::instance('SaeStorage');
$url=$s->getUrl('Public','');
return array(
    'TMPL_PARSE_STRING'=>array(
        '/Public/upload'=>$url.'upload')
);