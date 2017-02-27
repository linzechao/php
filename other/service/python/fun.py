# -*- coding: utf-8 -*-

#### #### def #### ####
# 定义函数
def my_abs(x):
    if not isinstance(x, (int, float)):
        raise TypeError('bad operand type');

    if x >= 0:
        return x;

    else:
        return -x;

# print my_abs(-44);
# print my_abs(None);

#### #### None #### ####
# 如果默认参数为可变对象，那么就用None来代替
def add_end(arr = None):
    if arr is None:
        arr = []
    arr.append('end...')
    return arr;

# print add_end();
# print add_end();

#### #### * #### ####
# 可变参数
def var(*num):
    sum = 0;
    for n in num:
        sum = sum + n * n;
    return sum;

varArr = [1, 2, 3, 4];

# print var(1, 2);
# print var(1, 2, 3);
# print var(*varArr);

#### #### ** #### ####
# 关键字参数，参数会组建成一个tuple
def person(name, age, **kw):
    print 'name: ', name, ' age: ', age, ' other: ', kw;

# person('super', 24, like='game', post='fe');
other = {'like': 'game', 'post': 'fe'};
# person('chao', 22, **other);

## 对于任意函数，都可以通过类似func(*args, **kw)的形式调用它，无论它的参数是如何定义的。
# 递归
def fact(n):
    if n == 1:
        return 1;
    return n * fact(n - 1);

print fact(5);