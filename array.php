<?php
    // 索引数组
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
    }
?>
