<?
    # 迷你Smarty类
    class Smarty {
        public $tpl_dir = './template/'; // 模板目录
        public $view_dir = './view/'; // 生成目录文件

        # 变量容器
        public $aVar = array();

        # 存入变量
        function assign($key, $val) {
            $this -> aVar[$key] = $val;
        }

        # 显示视图
        function display($tpl) {
            $view = $this -> compile($tpl);
            require($view);
        }

        # 渲染模板
        function compile($tpl) {
            $com_file = $this -> view_dir.$tpl.'.php';
            $tpl_file = $this -> tpl_dir.$tpl;
            # 该文件如果存在
            # 并且该文件的修改时间比模板文件的修改时间要前
            if (file_exists($com_file) && filemtime($com_file) > filemtime($tpl_file)) {
                # 返回文件路径
                return $com_file;
            }
            # 反之
            # 读取模板
            $cxt = file_get_contents($tpl_file);
            # 替换模板标记
            $cxt = str_replace('{$', '<?php echo $this -> aVar["', $cxt);
            $cxt = str_replace('}', '"]; ?>', $cxt);
            # 写入磁盘
            file_put_contents($com_file, $cxt);
            # 返回文件路径
            return $com_file;
        }
    }
