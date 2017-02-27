# -*- coding: utf-8 -*-

#### #### dict #### ####
# 键值对
oDict = {'lin': 10, 'ze': 14, 'chao': 18};
# 键一定要加上引号

# 判断是否有key
# print 'ze' in oDict;
# print oDict.get('super', 'super');

# 删除
oDict.pop('ze');

# print oDict;

#### #### set #### ####
# 一组key的集合，但不保存value
aSet1 = set([2, 3, 4]);
aSet2 = set([4, 5, 6]);

# aSet.add(4);

# aSet.remove(3);

# print aSet;

# print aSet1 & aSet2; # 交集
# print aSet1 | aSet2; # 并集

# 不允许用可变对象来存
# aSet = set([1, 2, 3, [1]]);
aSet = set([1, 2, 3, (1, )]);
aDict = {(1, ): 1};
# print aSet;
print aDict;