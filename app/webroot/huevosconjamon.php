<?php
$data = array(
    'Article' => array('title' => 'My first article'),
    'Comment' => array(
        array('body' => 'Comment 1', 'user_id' => 1),
        array('body' => 'Comment 2', 'user_id' => 12),
        array('body' => 'Comment 3', 'user_id' => 40),
    ),
);

$data = array(
	'Cnvrstn' => array('profile_id' => $prflId,
	'title' => $this->request->data('title'),
	'created' => date("Y-m-d H:i:s"),
	'allowadd' => true,
	'count' => 1),
	'Cnvrstnusr' => array(array('cnvrstn_id' => 8))
	//Hay que mirar como salvar primero la conversación, para extraer la ID, 
	//y luego poder añadir todos los campos de las tablas asociadas que se puedan.
);