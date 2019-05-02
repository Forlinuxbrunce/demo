import random
from cmath import *
from filecmp import cmp
from math import ceil, fabs, floor

type()
# 返回其数据类型    <class 'int'>


isinstance(1, int)
# 返回是否属于该数据类型    Boolean


v1, v2 = 10, 100
del v1, v2
# 删除创建的变量   v1, v2 = 10, 20    del v1, v2


'数学函数'
abs(-10)  # 绝对值 10
fabs(-10)  # 绝对值 10.0
ceil(2.1)  # 向上取整
floor(2.1)  # 向下取整
cmp(1, 2)  # 如果 x < y 返回 -1, 如果 x == y 返回 0, 如果 x > y 返回 1.    Python 3 已废弃 。使用 使用 (x>y) - (x<y) 替换。
max()  # 给定参数的 [最大值], 可以是 [序列]
min()  # 给定参数的 [最小值], 可以是 [序列]
pow(2, 3)  # 2 的 3 次方 (2 ** 3)
round(2.0, 2)  # 返回 [浮点数] 的 '四舍五入' 的值, 如果有 [n] n的值, 则代表舍入到小数点后几位.


'随机数函数'
random()  # 随机生成下一个实数, 范围 : [0,1) 之间
random.choice(range(10))  # 0 ~ 10 之间随机数, 如果想1 ~ 10的话, 就在最外边 + 1
random.shuffle()  # 将序列 [打乱]
random.uniform(1, 10)  # 随机生成 [1,10]之间的数, 可以和 round() 搭配使用 ^_^ (验证码)
pi  # 数学常量
e  # 数学常量
