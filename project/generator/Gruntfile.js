module.exports = function(grunt) {
	'use strict';

	// 加载插件
	grunt.loadNpmTasks('grunt-contrib-htmlmin'); // 压缩html
	grunt.loadNpmTasks('grunt-contrib-cssmin'); // 压缩css
	grunt.loadNpmTasks('grunt-contrib-jshint'); // 检测js语法
	grunt.loadNpmTasks('grunt-contrib-uglify'); // 压缩js
	grunt.loadNpmTasks('grunt-contrib-clean'); // 清除文件(夹)
	grunt.loadNpmTasks('grunt-contrib-watch'); // 文件监听
	grunt.loadNpmTasks('grunt-contrib-copy'); // 复制文件(夹)
	grunt.loadNpmTasks('grunt-contrib-concat'); // 文件合并
	grunt.loadNpmTasks('grunt-contrib-connect'); // 连接服务器
	grunt.loadNpmTasks('grunt-autoprefixer'); // 自动加上浏览器支持前缀

	// 项目配置
	grunt.initConfig({
		// 压缩html(暂错)
		htmlmin: {
			options: {
				collapseWhitespace: true, // 删除空行
				removeComments: true, // 删除注释
				minifyCSS: true, // css也压缩
				minifyJS: true, // js也压缩
				collapseBooleanAttributes: true, // 布尔值简写
				useShortDoctype: true, // 使用html5声明文档
				removeScriptTypeAttributes: true, // 删除默认的script的类型
				removeStyleLinkTypeAttributes: true, // 默认样式
				processScripts: ['text/template'] // 模板也压缩
			}
		},

		clean: ['dist/**'],

		// 复制文件(夹)
		copy: {
			ToSrc: {
				files: [{
					// bootstrap
					'src/Public/js/bootstrap.min.js': 'bower_components/bootstrap/dist/js/bootstrap.min.js',
					'src/Public/css/bootstrap.min.css': 'bower_components/bootstrap/dist/css/bootstrap.min.css',
					// jquery
					'src/Public/js/jquery.min.js': 'bower_components/jquery/dist/jquery.min.js',
					
				},{
					// bootstrap字体
					expand: true,
					cwd: 'bower_components/bootstrap/dist/fonts/',
					src: ['**'],
					dest: 'src/Public/fonts/'
				}]
			},
			ToDist: {
				files: [{
					// bootstrap
					'dist/Public/js/bootstrap.min.js': 'bower_components/bootstrap/dist/js/bootstrap.min.js',
					'dist/Public/css/bootstrap.min.css': 'bower_components/bootstrap/dist/css/bootstrap.min.css',
					// jquery
					'dist/Public/jquery.min.js': 'bower_components/jquery/dist/jquery.min.js',
					
				},{
					// bootstrap字体
					expand: true,
					cwd: 'bower_components/bootstrap/dist/fonts/',
					src: ['**'],
					dest: 'dist/Public/fonts/'
				}]
			}
		},

		// 自动加上浏览器支持前缀
		autoprefixer: {},

		// 文件合并
		concat: {
			options: {
				separator: ';' // 使用分号来做连接符
			},
			template: {
				files: {

				}
			}
		},

		// 压缩css
		cssmin: {
			options: {
				shorthandCompacting: false, // 不简写压缩
				roundingPrecision: -1 // 精确度
			},
			cssMin: {
				files: [{
					expand: true,
					cwd: 'fp/',
					src: ['**/*.css'],
					dest: 'public/',
					ext: '.css',
					extDot: 'frist'
				}]
			}
		},

		// 检测js语法
		jshint: {
			options: {
				eqnull: true, // 等于null
				eqeqeq: true, // 使用全等
				undef: true, // 未定义
				browser: true, // 运行在浏览器上，location等为全局
				globals: { // 全局对象
					$: true, // 平台模板管理的jq
					define: true, // 使用sea.js的define
					sID: true // 平台模板管理的用户ID
				}
			},
			jsTest: ['js/*.js']
		},

		// 压缩js
		uglify: {
			options: {
				mangle: {
					except: ['require', 'exports', 'module'] // 指定不混搅的变量名
				},
				quoteStyle: 3 // 保留原始引号
			},
			jsMin: {
				files: [{
					expand: true,
					cwd: 'fp/js/',
					src: ['**/*.js'],
					dest: 'public/js',
					ext: '.js',
					extDot: 'first'
				}]
			}
		},

		// 文件监听
		watch: {
			// 监听服务器
			watchServer: {
				options: {
					livereload: true
				},
				files: [
					// 刷新指定文件
					'src/**/*',
					// 后台与配置
					'Gruntfile.js'
				]
			}
		},

		// 连接服务器
		// 需要与watch配合后同时启动
		connect: {
			options: {
				port: 4004,
				hostname: '*', //默认
				livereload: 35729
			},
			server: {
				options: {
					open: true, // 自动打开
					base: ['dist'] // 主目录
				}
			}
		}
	});

	// 自动刷新
	grunt.registerTask('live', 'watch');
	
	// 开发项目
	grunt.registerTask('default', ['copy:ToSrc']);
	
	// 发布项目
	grunt.registerTask('public', ['clean', 'copy:ToDist']);
};
