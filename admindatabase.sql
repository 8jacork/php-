-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2022 年 05 月 30 日 13:05
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `admindatabase`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Admin_ID` int(10) NOT NULL,
  `Admin_pwd` int(10) NOT NULL,
  `Admin_name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Admin_phone` int(10) NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='管理员信息';

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_pwd`, `Admin_name`, `Admin_phone`) VALUES
(111, 121, '的', 1231),
(10001, 10001, '小张', 121212312),
(10002, 10002, '小李', 111231231),
(10003, 123456, '旺旺', 1231231),
(10004, 2131, '小浩', 1231),
(10005, 10005, '刘能', 2147483647);

-- --------------------------------------------------------

--
-- 表的结构 `appoint`
--

CREATE TABLE IF NOT EXISTS `appoint` (
  `User_account` int(100) NOT NULL,
  `Equip_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tupiain` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Equip_time` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Equip_ID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='预约信息';

--
-- 转存表中的数据 `appoint`
--

INSERT INTO `appoint` (`User_account`, `Equip_name`, `tupiain`, `Equip_time`, `Equip_ID`) VALUES
(11111, '举重器', '21.jpg', '23', '3119050151');

-- --------------------------------------------------------

--
-- 表的结构 `equip`
--

CREATE TABLE IF NOT EXISTS `equip` (
  `Equip_ID` varchar(100) NOT NULL,
  `Equip_name` varchar(100) NOT NULL,
  `Equip_Price` int(100) NOT NULL,
  `tupian` varchar(100) NOT NULL,
  `time_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `equip`
--

INSERT INTO `equip` (`Equip_ID`, `Equip_name`, `Equip_Price`, `tupian`, `time_price`) VALUES
('3119050152', '进口跑步机', 12999, '20.jpg', 50),
('3119050123', '仰卧起坐支撑板', 19999, '21.jpg', 21),
('3119050124', '国产跑步机', 1787, '23.jpg', 23),
('3119050114', '进口臂力机', 4583, '24.png', 24);

-- --------------------------------------------------------

--
-- 表的结构 `sp`
--

CREATE TABLE IF NOT EXISTS `sp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `news` varchar(300) NOT NULL,
  `tupian` varchar(6) NOT NULL,
  `size` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `sp`
--

INSERT INTO `sp` (`id`, `name`, `price`, `news`, `tupian`, `size`) VALUES
(8, '拳套', '12.6', '能打爆你', '11.jpg', '中型'),
(10, '【诺特兰德授权店】诺特兰德V2氮泵支链氨基酸载体肌酸增肌爆发力健身补剂150g 【混合莓口味】', '69.00', '商品名称：【诺特兰德授权店】诺特兰德V2氮泵支链氨基酸载体肌酸增肌爆发力健身补剂150g 【混合莓口味】商品编号：10045649231997店铺： 诺特兰德征建专卖店商品毛重：15.00g商品产地：中国大陆蓝帽标识：营养膳食补充剂（非食健字）包装形式：罐装剂型：粉剂国产/进口：国产', '17.jpg', '1.【混合莓口味】2.【原味】3.【巧克力口味】'),
(11, 'ON(奥普帝蒙) 金标乳清蛋白粉 香草味2磅 美国原装进口 健身常备', '239.00', '品牌： ON 商品名称：ON907g/桶商品编号：3090981商品毛重：1.08kg商品产地：美国包装形式：罐装剂型：粉剂国产/进口：进口', '18.jpg', '24克蛋白质，100kg氨基酸'),
(12, '魔爪 Monster 维生素饮料 运动饮料 330ml*12罐 整箱装 可口可乐公司出品 新老包装随机发货', '59', '品牌： 可口可乐（Coca-Cola） 商品名称：可口可乐Monster 魔爪能量风味饮料 330ml＊12罐 整箱装商品编号：100012939926商品毛重：4.1kg商品产地：中国大陆包装形式：罐装类别：能量饮料净含量：>2L', '19.jpg', '1【无糖芒果类】2【无糖西瓜类】3【无糖葡萄类】4.【无糖荔枝类】');

-- --------------------------------------------------------

--
-- 表的结构 `trolley`
--

CREATE TABLE IF NOT EXISTS `trolley` (
  `id` int(20) DEFAULT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `news` varchar(300) NOT NULL,
  `tupian` varchar(50) NOT NULL,
  `size` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL,
  `uid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `trolley`
--

INSERT INTO `trolley` (`id`, `name`, `price`, `news`, `tupian`, `size`, `date`, `uid`) VALUES
(12, '魔爪 Monster 维生素饮料 运动饮料 330ml*12罐 整箱装 可口可乐公司出品 新老包装随机发货', '59', '品牌： 可口可乐（Coca-Cola） 商品名称：可口可乐Monster 魔爪能量风味饮料 330ml＊12罐 整箱装商品编号：100012939926商品毛重：4.1kg商品产地：中国大陆包装形式：罐装类别：能量饮料净含量：>2L', '19.jpg', '1【无糖芒果类】2【无糖西瓜类】3【无糖葡萄类】4.【无糖荔枝类】', '2022-05-28 17:51:15', 10001);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_account` int(20) NOT NULL,
  `User_pwd` int(20) NOT NULL,
  `User_ni` varchar(20) NOT NULL,
  `User_name` varchar(20) NOT NULL,
  `User_phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户信息';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`User_account`, `User_pwd`, `User_ni`, `User_name`, `User_phone`) VALUES
(11111, 11111, '无敌风火轮', '张三', 12121),
(22222, 22222, '超级无敌暴力战士', '李四', 21212),
(1234567890, 123456789, '123456789', '123456789', 123456789);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
