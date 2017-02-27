# -*- coding: utf-8 -*-

#### #### 匿名函数 #### ####
print map(lambda x: x * x, [1, 2, 3, 4, 5, 6]);

#### #### 装饰器 #### ####
# def now():
    # print '2015-05-12'

# fun = now
# print fun.__name__

def log(func):
    def wrapper(*ages, **kw):
        print 'call %s():' % func.__name__
        return func(*ages, **kw)
    return wrapper

@log # now = log(now)
def now():
    print '2015-05-12'

now();

#### #### 偏函数 #### ####
import functools
int2 = functools.partial(int, base = 2)
print int2('10010')