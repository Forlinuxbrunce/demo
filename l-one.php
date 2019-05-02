1: 'print'
    该方法不只是可以进行[简单输出], 默认是[换行输出], 而且是有参数的, 第三个参数可以指定 '不换行输出'.
    print("xiaomu", end='')



2: '转义符'
    'r'如果加在'含转义符'的字符串中, 那么转义符'失效', 原样输出.
    print(r"xiaomu\n")



3: '同行显示'
    Py的一行结束默认是没有';'号的, 如果想要一行写'多条语句', 就要用';' 隔开!
    print("xiaomu", end=''); print("^_^")



4: '代码组'
    缩进相同的一组语句构成一个代码块，我们称之代码组。
    像if、while、def和class这样的复合语句，首行以关键字开始，以冒号( : )结束，该行之后的一行或多行代码构成代码组。
    我们将首行及后面的代码组称为一个子句(clause)。
    if 5 > 3:
          print("s > 3")
    elif 5 > 2:
          print("5 > 2")
    else:
         print("5 < 0")



5: '导入'
    在 python 用 import 或者 from...import 来导入相应的模块。
    将整个模块(somemodule)导入，格式为： import somemodule
    从某个模块中导入某个函数,格式为： from somemodule import somefunction
    从某个模块中导入多个函数,格式为： from somemodule import firstfunc, secondfunc, thirdfunc
    将某个模块中的全部函数导入，格式为： from somemodule import *
    import sys
    from sys import argv,path      //  导入特定的成员



6: '基本数据类型'(弱语言 - PHP)
    在定义时, 不需要指定指定'数据类型', 运行时会根据定义的进行'翻译'.
    name = "xiaomu"
    num = 100
    floot = 100.0
    '顺序赋值'
    name, age, money = '小木', 188, 9000.0
    (其值会'顺序自动'赋值)



7: '标准数据类型'
    '不可变数据'
    ->Number(数字)
    ->String(字符串)
    ->Tuple(元组)

    '可变数据'
    ->List(列表)
    ->Set(集合)
    ->Dictionary(字典)



8: 'Number - 数字'
    Py3只支持: int、float、bool、complex（复数）.
    只有一种整数类型 int，表示为长整型，没有 python2 中的 Long。

    '创建'
    当你指定一个值时, Number 对象就会被创建：
    var1 = 10
    var2 = 100

    '删除'
    v1, v2 = 10, 100
    del v1, v2

    '类型装换'
    int(x) 将x转换为一个整数。

    float(x) 将x转换到一个浮点数。

    complex(x) 将x转换到一个复数，实数部分为 x，虚数部分为 0。

    complex(x, y) 将 x 和 y 转换到一个复数，实数部分为 x，虚数部分为 y。x 和 y 是数字表达式。
    在整数除法中，除法 / 总是返回一个浮点数，如果只想得到整数的结果，丢弃可能的分数部分，可以使用运算符 //
    '向上转型' : 不同类型的数混合运算时会将整数转换为浮点数.


9: 'String - 字符串'
    索引值以 0 为开始值，-1 为从末尾的开始位置。其中'字符串截取'时, '含头不含尾' [)
    '截取' : 变量[头下标 : 尾下标 : 步长]
    '步长' : 指的是'跳过' (跳过的个数 = 步长 - 1)

    加号 + 是字符串的连接符， 星号 * 表示'复制当前字符串'，紧跟的数字为复制的次数。
    1、反斜杠可以用来转义，使用r可以让反斜杠不发生转义。
    2、字符串可以用+运算符连接在一起，用*运算符重复。
    3、Python中的字符串有两种索引方式，从左往右以0开始，从右往左以-1开始。
    4、Python中的字符串不能改变。
    '注意 :
        1. print() 里面做字符串 拼接的话, '点进方法' 里面去!
        2. 字符串截取获取的是 '截取后的值'.

    '字符串运算符'
    + : 字符串'拼接'(HelloXm)
    * : 字符串'重复次数'
    [] : '索引'获取字符串中字符
    [start : end] : 截取字符串中的一部分，遵循'左闭右开'原则. [start, end)
    in : 成员运算符 - 如果字符串中'包含'给定的字符返回 True.
    not in : 成员运算符 - 如果字符串中'不包含'给定的字符返回 True
    r/R : 使'转义符失效'.

    '格式化字符串 - %'



10: 'List - 列表 - 可变 - PHP数组格式 - 最频繁!!! --- 队列 ^+^'
     和字符串一样，列表同样可以被索引和截取，列表被截取后返回一个包含所需元素的新列表。
     '截取' : 变量[头下标 : 尾下标 : 步长]
     '步长' : 指的是'跳过' (跳过的个数 = 步长 - 1)
     1、List写在方括号之间，元素用逗号隔开。
     2、和字符串一样，list可以被索引和切片。
     3、List可以使用+操作符进行拼接。(直接将两个'数组顺序'放到一起!)
     4、List中的元素是可以改变的。
    name = ['小木','小沐','小啦啦']
    age = [18,17,16]
    hb = name + age



11: 'Tuple - 元组 - 不可变!'
     元组（tuple）与列表类似，不同之处在于元组的元素不能修改。元组写在小括号 () 里，元素之间用逗号隔开。
     元组中的元素类型也'可以不相同'.
     string、list 和 tuple 都属于 sequence（序列）。

    '注意'：
    1、与字符串一样，元组的元素不能修改。
    2、元组也可以被索引和切片，方法一样。
    3、注意构造包含 0 或 1 个元素的元组的特殊语法规则。      // t = ();       t = (1,) ---> 如果不加 ',' 的话, 就不是 [元组]
    4、元组也可以使用+操作符进行拼接。



12: 'Set - 集合 - Java里面的数组格式'
     集合（set）是由一个或数个形态各异的大小整体组成的，构成集合的事物或对象称作元素或是成员。
     基本功能是进行成员关系测试和删除重复元素。
     '创建集合的两种方式':    { }     ----------    set()
     注意：创建一个空集合必须用 set() 而不是 { }，因为 { } 是用来创建一个空字典。
     '每次显示无序 !!! '
     '元素不重复 !!!'
     name = {'小木', '小木', '小沐'}          // {'小木', '小沐'}
     如果存放的是'数字', 那么会将数字'拆分'      // {'2', '1', '3'}

     a - b) : a与b的 '差集'
     a | b) : a与b的 '并集'
     a & b) : a与b的 '交集'
     a ^ b) : a与b的 '交集的补集'



13: 'Dictionary - 字典 - { } - 类似Java中的Hash - 也类似Json'
     字典（dictionary）是Python中另一个非常有用的'内置数据类型'。
     列表是有序的对象集合，字典是'无序'的对象集合。两者之间的区别在于：字典当中的元素是通过键来存取的，而不是通过偏移存取。
     字典是一种映射类型，字典用 { } 标识，它是一个无序的 键(key) : 值(value) 的集合。

     注意: 其 key 是放在'数组中', 然后查找的时候, 也是根据 key 类似从'数组'中查找.
     d1 = {}
     d1['one'] = 1
     d2 = {'name': '小木', 'age': 18}
     print(d1['one'])
     print(d2)

     '快速构建 - dict'
     d3 = dict(name='小木', age=18)           // {'name': '小木', 'age': 18}
     dict(d) : 必须是一个序列 (key,value)元组。

     '所有键' : dict.keys()
     '所有值' : dict.values()

    1、字典是一种映射类型，它的元素是键值对。
    2、字典的关键字必须为不可变类型，且不能重复。
    3、创建空字典使用 { }



14: '注释'
    单行注释 : #
    多行注释 : '''    """



15: '运算符'
    4.3 - 2 = 2.3   // 浮点数计算仍为'浮点数'
    2 / 4 = 0.5     // 除法，得到一个浮点数
    2 // 4 = 0      // 除法，[向下取整] 得到一个整数
    2 ** 5 = 32     // 乘方
    **=	幂赋值运算符	    c **= a 等效于 c = c ** a
    //=	取整除赋值运算符	c //= a 等效于 c = c // a

    '整数':
    a = 0011 1100
    b = 0000 1101

    a & b = 0000 1100
    a | b = 0011 1101
    a ^ b = 0011 0001
    ~a  = 1100 0011
    对于 x2 /2 可以直接 >> << 来实现, 更快!
    Python还支持复数，复数由实数部分和虚数部分构成，可以用a + bj,或者complex(a,b)表示， 复数的实部a和虚部b都是浮点型

    '成员运算符 - in && not in'
    'in' :      如果 x '在' y 序列中返回 True。
    'not in' :  如果 x '不在' y 序列中返回 True。
    a = 10
    num = [1,2,3,10]
    if(a in num):
        print('This list haved ^_^')

    '身份运算符 - is && not is'
    'is' : 类似 id(x) == id(y) , 如果引用的是同一个对象则返回 True，否则返回 False。
    'not is' : 类似 id(a) != id(b)。如果引用的不是同一个对象则返回结果 True，否则返回 False。

    '优先级 - 由高到低'
    **
    ~ + -
    * / % //
    + -
    >> <<