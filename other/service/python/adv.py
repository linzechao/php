# -*- coding: utf-8 -*-

#### #### 高级特性 #### ####
#### #### 切片 #### ####

list = ['s', 'u', 'p', 'e', 'r'];

# print list[:2];
# print list[2:4];
# print list[-1:];

list = range(101)

# print list[1:10:2]
# print list[5:45:5]
# print list[::10]

tuple = (6, 3, 1, 9, 2, 4, 0, 8, 1)

# print tuple[4:8:1]

string = 'Mr. Super'

# print string[1:6]


#### #### 迭代 #### ####

dict = {'name': 'super', 'age': 24};

# for t in dict:
    # print dict[t]

# for val in dict.itervalues():
    # print val

# for key, val in dict.iteritems():
    # print key, '->', val

from collections import Iterable
# print isinstance('', Iterable);
# print isinstance([], Iterable);
# print isinstance(0, Iterable);

# for i, val in enumerate([1, 2, 3, 4]):
    # print i, val

# for x, y, z in [(1, 1, 2), (2, 4, 6), (3, 9, 12)]:
    # print x, y, z


#### #### 列表生成式 #### ####
# print [x * x for x in range(1, 11)]

# print [x * x for x in range(1, 11) if x % 2 == 0]

# print [m + n for m in 'abc' for n in 'xyz']

# import os
# print [d for d in os.listdir('.')]

# value 不可以为int类型
dict = {'x': 'A', 'y': 'B', 'z': 'C' }
# print [k + '->' + v for k, v in dict.iteritems()]

# print [k + '->' + v.lower() for k, v in dict.iteritems()]

#### #### 生成式 #### ####
def fib(max):
    n, a, b = 0, 0, 1
    while n < max:
        yield b
        a, b = b, a + b
        n = n + 1

fun = fib(5);
fun.next();