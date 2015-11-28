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

    // $arr = array(1, '', '    ', ' ', 2);
    // array_filter($arr, function ($ele) {
    //     return trim($ele);
    // });
    // echo var_dump($arr);

    /*$example = array('name' => 'Super', 'age' => 24); 
    // 将key转换大小写
    var_dump(array_change_key_case($example, CASE_UPPER)); // 大写
    echo '<br>';
    var_dump(array_change_key_case($example, CASE_LOWER)); // 小写
    echo '<br>';

    // 以个数为准，分割数组
    // true: 保留原来的key值，false全部从0开始
    var_dump(array_chunk($example, 1, true));
    echo '<br>';*/

    $example = array(
        array(
            'id' => 5698,
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
        ),
        array(
            'id' => 4767,
            'first_name' => 'Ben',
            'last_name' => 'Smith',
        ),
        array(
            'id' => 3809,
            'first_name' => 'Joe',
            'last_name' => 'Doe',
        )
    );

    // PHP5.5+
    // var_dump(array_column($example, 'first_name'));

    $key = array('age', 'name');
    $val = array(24, 'super');

    var_dump(array_combine($key, $val));
    echo '<br>';

    // 区分大小写，计算总数
    $count = array('A', 'Cat', 'Dog', 'A', 'DOG');
    var_dump(array_count_values($count));

    echo '<br>';
    $theme = array('Silvery', 'WZA', 'TON');
    var_dump(in_array('TON', $theme));
?>
