<?php 
$aData = array(
	'status'=> 1,

	'data'=> array(
		array('id'=> 77577, 'name'=> 'super', 'age'=> 20, 'sex'=> 'man'),
		array('id'=> 12345, 'name'=> 'chao', 'age'=> 10, 'sex'=> 'boy'),
		array('id'=> 12357, 'name'=> 'lin', 'age'=> 30, 'sex'=> 'man'),
		array('id'=> 52311, 'name'=> 'ze', 'age'=> 8, 'sex'=> 'boy')
	),

	'info'=> array(
		'total'=> 4
	)
);
echo json_encode($aData);