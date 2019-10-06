# study
学习学习学习


MySQL常见的数据类型
1、整数类型
TINYINT    		1个字节   	-128〜127
SMALLINT		2个宇节		-32768〜32767
MEDIUMINT		3个字节		-8388608〜8388607
INT (INTEGHR)	4个字节		-2147483648〜2147483647
BIGINT			8个字节		-9223372036854775808〜9223372036854775807

2、小数类型
FLOAT（单精度浮点） 	4 个字节
DOUBLE（双精度浮点）	8 个字节
DECIMAL（定点类型）	M+2 个字节

3、日期和时间类型
YEAR			YYYY 					1 个字节
TIME 			HH:MM:SS 				3 个字节
DATE 			YYYY-MM-DD 				3 个字节
DATETIME		YYYY-MM-DD HH:MM:SS 	8 个字节
TIMESTAMP		YYYY-MM-DD HH:MM:SS 	4 个字节

4、字符串类型
CHAR(M)		固定长度非二进制字符串	M 字节，1<=M<=255
VARCHAR(M)	变长非二进制字符串		L+1字节，在此，L< = M和 1<=M<=255
TINYTEXT	非常小的非二进制字符串	L+1字节，在此，L<2^8
TEXT		小的非二进制字符串		L+2字节，在此，L<2^16
MEDIUMTEXT	中等大小的非二进制字符串	L+3字节，在此，L<2^24
LONGTEXT	大的非二进制字符串		L+4字节，在此，L<2^32
ENUM		枚举类型，只能有一个枚举字符串值	1或2个字节，取决于枚举值的数目 (最大值为65535)
SET			一个设置，字符串对象可以有零个或多个SET成员1、2、3、4或8个字节，取决于集合成员的数量				（最多64个成员）

5、二进制类型
BIT、BINARY、VARBINARY、TINYBLOB、BLOB、MEDIUMBLOB 和 LONGBLOB。

