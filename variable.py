# 作者：JIE Brunce

#1.变量的覆盖
# name = "brunce"
# name2 = name
# name = "xhj"
# print("my name is",name,name2)

#2.可变变量
# massage = "zxc"
# massage = "asd"
# print(massage)

#3.修改字符串的大小写
# a = "Xhj Gnx"
# print("nihao",a.title())
# print("nihao",a.upper())
# print("nihao",a.lower())

#4.拼接字符串
# a = "xhj"
# b = "gnx"
# ab = a.title() + " "+ b.upper()+ "!"
# print(ab)

#5.使用制表符换行符来添加空白
#制表符是排列整齐，数据多时，更能体现他的作用。
# print("Languages:\n\tpython\n\tevn\n\txhj")

#6.删除多余空白格
#暂时删除空白格，下次使用就还是有空白格。
# a = "xhj "
# print(a.rstrip())
# print(a)
#永久性删除空白格
b = "xhj  "
b = b.rstrip()
print(b)
print(b)


