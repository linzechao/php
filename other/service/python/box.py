# -*- coding: utf-8 -*-

#### #### list #### ####
# 有序列表 -> list集合
aList = ['Lin', 'Ze', 'Chao'];
aList[-1]; # 最后一个

# 追加
aList.append('Mr.');
# 指定位置插入
aList.insert(len(aList), 'Super');
aList.insert(len(aList), 'Chao');

# 删除最后一个
aList.pop();
#指定位置删除
aList.pop(-1);
aList.pop(-1);

print aList;

#### #### tuple #### ####
# 有序列表 tuple元组
# 指向不变
oTuple = ('Lin', 'Ze', 'Chao');
# 一个元素的元组
oTuple = (1, );

=======
# -*- coding: utf-8 -*-

#### #### list #### ####
# 有序列表 -> list集合
aList = ['Lin', 'Ze', 'Chao'];
aList[-1]; # 最后一个

# 追加
aList.append('Mr.');
# 指定位置插入
aList.insert(len(aList), 'Super');
aList.insert(len(aList), 'Chao');

# 删除最后一个
aList.pop();
#指定位置删除
aList.pop(-1);
aList.pop(-1);

print aList;

#### #### tuple #### ####
# 有序列表 tuple元组
# 指向不变
oTuple = ('Lin', 'Ze', 'Chao');
# 一个元素的元组
oTuple = (1, );
print oTuple;