<?php
    /*// 索引数组
    $index_arr = array('Super', 'Chao');

    // 关联数组
    $key_arr = array('Super' => 24, 'Chao' => 20);

    $i = 0;
    $len = count($index_arr);

    // 索引数组遍历
    for (; $i < $len; $i++) {
        echo '<br>'.$i.': '.$index_arr[$i];
    }

    // 关联数组
    forEach($key_arr as $key => $val) {
        echo '<br>'.$key.'今年'.$val.'岁.';
    }*/

    /*// 索引数组
    // 根据值进行排序操作
    $nums = array(20, 10, 32, 4);
    sort($nums);
    var_dump($nums);
    echo '<br>';
    rsort($nums);
    var_dump($nums);

    $student = array('Mr' => 'Super', 'Ze' => 'Chao');
    // 关联数组
    // 根据值进行升序操作
    asort($student);
    echo '<br>';
    var_dump($student);
    // 根据键进行升序操作
    ksort($student);
    echo '<br>';
    var_dump($student);
    // 根据值进行降序操作
    arsort($student);
    echo '<br>';
    var_dump($student);
    // 根据键进行降序操作
    krsort($student);
    echo '<br>';
    var_dump($student);*/

    // $result = array();

    // if (empty($result['banner'])) {
    //     $result['banner'] = array();
    // }

    // array_push($result['banner'], array(array('name' => 'Super'), array('age' => 24)));

    // $box = end($result['banner'][0]);

    // array_push($box, array('like', '??'));

    // array_push($result['banner'][0], array('like', '??'));

    // echo var_dump($result['banner'][0]);

    // echo '<br>';

    // echo intval('abac', 10);

    $arr = array(1, '', '    ', ' ', 2);
    array_filter($arr, function ($ele) {
        return trim($ele);
    });
    echo var_dump($arr);
?>
