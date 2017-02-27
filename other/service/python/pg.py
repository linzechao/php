# -*- coding: utf-8 -*-

#### #### 函数式编程 #### ####
# 高阶函数：一个函数可以接收另一个函数作为参数

# map/reduce

# print map(str, [1, 2, 3, 4])
def add(x, y):
    return x + y

# print reduce(add, [1, 3, 5, 7, 9])

#### 利用map()函数，把用户输入的不规范的英文名字，变为首字母大写，其他小写的规范名字。输入：['adam', 'LISA', 'barT']，输出：['Adam', 'Lisa', 'Bart']。
def flb(ele):
    # return ele[0].upper() + ele[1:].lower()
    return ele.capitalize()

# print map(flb, ['adam', 'LISA', 'barT', 'a']);

list = [2, 4, 6];

def prod(x, y):
    return x * y;

# print reduce(prod, list);


#### filter ####
# def su(ele):
    # return

# print filter(su, range(1, 101))

#### 排序算法 ####
def cmp_ignore_case(s1, s2):
    u1 = s1.upper()
    u2 = s2.upper()
    if u1 < u2:
        return -1
    if u1 > u2:
        return 1
    return 0

sorted(['bob', 'about', 'Zoo', 'Credit'], cmp_ignore_case)