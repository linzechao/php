# -*- coding: utf-8 -*-

print 'Hello, Mr. Super!';

# 输入
# name = raw_input();
# print 'Hello,', name, '!';

# 不转义
r'\n\t\\\d';

# 多行文本
'''1, one line
2, two line
3, three line''';

# 字母与数字转换
ord('A');
chr(4);

# 转成utf-8
u'中文'.encode('utf-8');

# 转成Unicode
'abc'.decode('utf-8');

# 长度
len('中文');

# Unicode
print '你好，超级先生！'; # 乱码
print u'你好，超级先生！'; # so cool