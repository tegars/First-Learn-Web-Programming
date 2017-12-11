<?php
$test= array(
	'A' => 'Test A||',
    'B' => 'Test B||',
    'C' => array(
        'CA' => 'Test CA||',
        'CB' => array(
            'CBA' => 'Test CBA||'
        )
    ),
    'D' => 'Test D'
);
echo $test['A'];
echo $test['C']['CA'];
echo $test['C']['CB']['CBA'];


//konversi
$object_test = array_to_object($test);
echo $object_test->A;
echo $object_test->C->CB;
echo $object_test->C->CB->CBA;
?>