# 作者：JIE Brunce
# 1.1,2,3,4能组成多少个互不相同的三位数？格式多少？
# for i in range(1,5):
#     for j in range(1,5):
#         for k in range(1,5):
#             if (i!=k) and (j!=k) and (i!=k):
#                 print(i,j,k)
#

# 九九乘法表
# for m in range (0,10):
#     for n in range(0,10):
#         if m>=n:
#             print('%s×%s=%s'%(m,n,m*n),end=' ')
#     print()

# i = 1
# while i<=9:
#     j =1
#     while j <= i:
#         print('%d×%d=%-2d'%(i,j,i*j),end=' ')
#         j+=1
#     print()
#     i+=1

# for i in range(1,85):
#     if 168 % i == 0:
#         j = 168 / i;
#         if  i > j and (i + j) % 2 == 0 and (i - j) % 2 == 0 :
#             m = (i + j) / 2
#             n = (i - j) / 2
#             x = n * n - 100
#             print(x)

# import time
#
# myD = {1: 'a', 2: 'b'}
# for key, value in dict.items(myD):
#     print (key, value,end=" ")
#     time.sleep(1)

# for n in range(100,1000):
#     i = n/100
#     j = n/10%10
#     k = n%10
#     if n == i**3+j**3+k**3:
#         print(n)


# 打印出所有的"水仙花数"，所谓"水仙花数"是指一个三位数，其各位数字立方和等于该数本身。例如：153是一个"水仙花数"，因为153=1的三次方＋5的三次方＋3的三次方。
#
# 程序分析：利用for循环控制100-999个数，每个数分解出个位，十位，百位。
# for n in range(100, 1000):
#     i = int(n / 100)
#     j = int(n / 10 % 10)
#     k = int(n % 10)
#     if n == i ** 3 + j ** 3 + k ** 3:
#         print(n)
#


# for i in range(100,1000):
#     if i==(i//100)**3+(((i-i%10)/10)%10)**3+(i%10)**3:
#         print(i)
#

# for i in range(100, 1000):
#     j = str(i)
#     if int(j[0]) ** 3 + int(j[1]) ** 3 + int(j[2]) ** 3 == i:
#         print(i)
#

# score = int(input('输入分数：\n'))
# if score>=90:
#     print('A')
# elif score >=60:
#     print('B')
# else:print('C')


# 利用条件运算符的嵌套来完成此题：学习成绩>=90分的同学用A表示，
# 60-89分之间的用B表示，60分以下的用C表示。
# score = int(input('输入分数:\n'))
# if score >= 90:
#     grade = 'A'
# elif score >= 60:
#     grade = 'B'
# else:
#     grade = 'C'
# print ('%d 属于 %s' % (score, grade))

# # 题目：输出指定格式的日期。
#
# import datetime
# print('当前年月日：',datetime.date.today())

# 关键字
# import keyword
# keyword.kwlist
# print(keyword.kwlist)

input("\n\n按下enter键退出")

