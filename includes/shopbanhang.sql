-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 16, 2022 lúc 12:23 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '123', '2020-05-11 11:18:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Amount` int(11) NOT NULL,
  `Bookingdate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Comment` varchar(500) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `Amount`, `Bookingdate`, `status`, `CancelledBy`, `UpdationDate`, `Comment`) VALUES
(10, 1, 'user3@gmail.com', 4, '2022-01-03 10:56:48', 2, 'u', '2022-04-03 11:45:06', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `EmailId` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MobileNumber` char(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Description` varchar(300) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(1, 'Jone Paaire', 'jone@gmail.com', '4646464646', 'yêu câu thêm đề nghị', 'aaa', '2021-11-06 06:30:32', 1),
(2, 'Thanh', 'user1@gmail.com', '6797947987', 'Cuộc điều tra ', 'Bất kỳ ưu đãi nào cho chuyến Dubai', '2021-11-06 06:30:32', 1),
(3, 'Loi', 'user2@gmail.com', '1646689721', 'Mọi ưu đãi cho miền Bắc ', 'Bất kỳ ưu đãi nào cho miền bắc ', '2021-11-06 06:32:41', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblissues`
--

CREATE TABLE `tblissues` (
  `id` int(11) NOT NULL,
  `UserEmail` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Issue` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Description` varchar(300) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `AdminRemark` varchar(300) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `AdminremarkDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblissues`
--

INSERT INTO `tblissues` (`id`, `UserEmail`, `Issue`, `Description`, `PostingDate`, `AdminRemark`, `AdminremarkDate`) VALUES
(10, 'user3@gmail.com', 'Đền bù', 'test hệ thống', '2022-04-03 15:03:23', 'test ', '2022-04-17 06:23:28'),
(11, 'user3@gmail.com', 'Huỷ bỏ', 'test hệ thống', '2022-04-15 09:25:43', 'test', '2022-04-17 06:24:32'),
(12, 'user3@gmail.com', 'Vấn đề về đặt tour', 'test hệ thống', '2022-04-17 07:04:24', 'test', '2022-04-17 07:05:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblpages`
--

CREATE TABLE `tblpages` (
  `id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT '',
  `detail` longtext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblpages`
--

INSERT INTO `tblpages` (`id`, `type`, `detail`) VALUES
(1, 'terms', '<p class=\"MsoNormal\"><span style=\"font-size:14.0pt;line-height:107%\">(1) CHẤP NHẬN\r\nĐIỀU KHOẢN <o:p></o:p></span></p><p style=\"margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;font-family:Roboto;color:#2B2B2B\">Vui\r\nlòng đọc kỹ các điều khoản và điều kiện này một cách cẩn thận trước khi đặt bất\r\nkỳ sản phẩm nào từ trang của chúng tôi. Bạn nên hiểu rằng bằng cách yêu cầu bất\r\nkỳ Sản phẩm của chúng tôi, bạn đồng ý chịu ràng buộc bởi các điều khoản và điều\r\nkiện này.<o:p></o:p></span></p><p style=\"margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;font-family:Roboto;color:#2B2B2B\">Vui\r\nlòng hiểu rằng nếu bạn từ chối chấp nhận các điều khoản và điều kiện này, bạn\r\nsẽ không thể đặt bất kỳ Sản phẩm nào từ trang web của chúng tôi.<o:p></o:p></span></p><p align=\"justify\">\r\n\r\n</p><p style=\"margin: 0cm 0cm 7.5pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;font-family:Roboto;color:#2B2B2B\"><br>\r\n1&nbsp; Thông tin về chúng tôi<br>\r\n2&nbsp; Tình trạng của bạn<br>\r\n3&nbsp; Cách thức hợp đồng được hình thành giữa bạn và chúng tôi<br>\r\n4&nbsp; Tình trạng của chúng ta<br>\r\n5&nbsp; Có sẵn và giao hàng<br>\r\n6&nbsp; Rủi ro và quyền lợi<br>\r\n7&nbsp; Giá và thanh toán<br>\r\n8&nbsp; Chính sách hoàn trả của chúng tôi<br>\r\n9&nbsp; Bảo hành<br>\r\n10&nbsp; Trách nhiệm của chúng tôi<br>\r\n11&nbsp; Giao tiếp bằng văn bản<br>\r\n12&nbsp; Chuyển giao quyền và nghĩa vụ<br>\r\n13&nbsp; Các sự kiện phát sinh ngoài tầm kiểm soát<br>\r\n14 Khiếu nại<br>\r\n15&nbsp; Trách nhiệm<br>\r\n16&nbsp; Thỏa thuận toàn bộ<br>\r\n17&nbsp; Quyền của chúng tôi đối với các điều khoản và điều kiện này<br>\r\n18&nbsp; Pháp luật và thẩm quyền xét xử<o:p></o:p></span></p>\r\n										\r\n										\r\n										'),
(2, 'Privacy', '\r\n\r\n\r\n<p class=\"MsoNormal\"><span style=\"color: black; font-family: &quot;Times New Roman&quot;, serif; font-size: 14pt;\">Chúng tôi tôn trọng quyền riêng\r\ntư của tất cả những người ghé thăm trang web này. Do đó, chúng tôi muốn thông\r\nbáo cho bạn về cách chúng tôi sẽ sử dụng dữ liệu cá nhân của bạn. Chúng tôi\r\nkhuyên bạn nên đọc chính sách về quyền riêng tư này để hiểu cách tiếp cận của\r\nchúng tôi đối với việc sử dụng dữ liệu cá nhân của bạn.</span><br></p><p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ascii-theme-font:major-latin;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-hansi-theme-font:major-latin;mso-bidi-theme-font:major-latin;color:black;\r\nmso-themecolor:text1;mso-fareast-language:VI\">\r\nBằng việc gửi dữ liệu cá nhân của bạn cho chúng tôi, bạn sẽ được coi như là đã\r\ncho phép – khi cần thiết và thích hợp – việc tiết lộ như được đề cập trong\r\nchính sách này.<o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"color: black; margin-bottom: 6pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\n     font-family:&quot;Times New Roman&quot;,serif;mso-ascii-theme-font:major-latin;\r\n     mso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;\r\n     mso-bidi-theme-font:major-latin;mso-fareast-language:VI\">&nbsp;Phạm vi<o:p></o:p></span></li>\r\n</ul><p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0cm 36pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:\r\n14.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-ascii-theme-font:major-latin;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;\r\nmso-bidi-theme-font:major-latin;color:black;mso-themecolor:text1;mso-fareast-language:\r\nVI\">Chính sách về Quyền riêng tư này mô tả chi tiết chính sách và các nguyên\r\ntắc của chúng tôi liên quan đến việc thu thập, sử dụng và tiết lộ thông tin về\r\nbạn.<br>\r\nChúng tôi hiểu rằng việc cung cấp thông tin trực tuyến cần rất nhiều sự tin\r\ntưởng từ phía bạn. Chúng tôi rất coi trọng niềm tin này và dành ưu tiên cao cho\r\nviệc đảm bảo an toàn và tính bảo mật cho thông tin cá nhân mà bạn cung cấp cho\r\nchúng tôi khi bạn truy cập website hoặc sử dụng các dịch vụ của chúng tôi.<o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"color: black; margin-bottom: 6pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;\r\n     font-family:&quot;Times New Roman&quot;,serif;mso-ascii-theme-font:major-latin;\r\n     mso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;\r\n     mso-bidi-theme-font:major-latin;mso-fareast-language:VI\">&nbsp;Chúng tôi\r\n     thu thập thông tin gì từ bạn<o:p></o:p></span></li>\r\n</ul><p class=\"MsoNormal\" style=\"margin: 0cm 0cm 7.5pt 36pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:\r\n14.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-ascii-theme-font:major-latin;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;\r\nmso-bidi-theme-font:major-latin;color:black;mso-themecolor:text1;mso-fareast-language:\r\nVI\">Chúng tôi nhận và lưu trữ mọi thông tin mà bạn nhập vào website của chúng\r\ntôi hoặc cung cấp cho chúng tôi theo hình thức khác. Thông tin này bao gồm\r\nnhững thông tin có thể dùng để nhận dạng bạn với tư cách là một cá nhân hoặc để\r\nliên hệ trực tiếp với bạn (“thông tin cá nhân”).<br>\r\nThông tin cá nhân bao gồm thông tin mà bạn cung cấp cho chúng tôi như họ và\r\ntên, ngày sinh, giới tính, số điện thoại, địa chỉ gửi thư và địa chỉ thư điện\r\ntử,…<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom: 7.5pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin: 0cm 0cm 0cm 36pt; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:\r\n14.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-ascii-theme-font:major-latin;\r\nmso-fareast-font-family:&quot;Times New Roman&quot;;mso-hansi-theme-font:major-latin;\r\nmso-bidi-theme-font:major-latin;color:black;mso-themecolor:text1;mso-fareast-language:\r\nVI\">Chúng tôi cũng có thể thu thập những thông tin khác như địa chỉ IP của bạn,\r\nthông tin xác định thiết bị của bạn.<br>\r\nGhi âm và theo dõi cuộc gọi: Xin hiểu rõ rằng các cuộc gọi đến và từ chúng tôi\r\ncó thể được ghi lại. Chúng tôi sẽ sử dụng các ghi âm cuộc gọi để theo dõi dịch\r\nvụ khách hàng của mình nhằm mục đích nâng cao chất lượng hoặc tuân thủ, kiểm tra\r\nđộ chính xác của thông tin mà bạn cung cấp cho chúng tôi nhằm mục đích ngăn\r\nchặn gian lận hoặc thực hiện đào tạo cho nhân viên của chúng tôi. Chúng tôi sẽ\r\ngiữ lại các bản ghi âm cuộc gọi trong thời gian cần thiết hợp lý để thực hiện\r\ncác hoạt động nêu trên và sau đó sẽ xóa bỏ. Mọi thông tin cá nhân thu thập của\r\nbạn trong cuộc gọi sẽ được xử lý theo các điều khoản trong Chính sách về Quyền\r\nriêng tư này.<o:p></o:p></span></p>\r\n										\r\n										\r\n										'),
(3, 'Aboutus', '<p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span class=\"jlqj4b\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font:\r\nmajor-latin;color:black\">Chào mừng bạn đến với Hệ thống Mỹ Phẩm !!!</span></span><span jsaction=\"agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb;bmeZHc:iURhpf;Oxj3Xe:qAKMYb,yaf12d\" jsname=\"txFAF\" data-language-for-alternatives=\"vi\" data-language-to-translate-into=\"sv\" data-phrase-index=\"1\" data-number-of-phrases=\"7\" jscontroller=\"Zl5N8\" jsdata=\"uqLsIf;_;$115\" jsmodel=\"SsMkhd\" style=\"white-space: pre-wrap;\"> </span></p><p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span class=\"jlqj4b\"><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font:\r\nmajor-latin;color:black\">Kể từ đó, đội ngũ nhân viên lịch sự và tận tâm của\r\nchúng tôi luôn đảm bảo mang đến cho khách hàng một chuyến du lịch vui vẻ và thú\r\nvị.</span></span><span style=\"font-size: 14pt; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"white-space: pre-wrap;\"> </span><span class=\"jlqj4b\"></span><span style=\"font-size: 14pt; line-height: 107%;\"><span jsaction=\"click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje\" jsname=\"W297wb\"><span jsaction=\"agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb;bmeZHc:iURhpf;Oxj3Xe:qAKMYb,yaf12d\" jsname=\"txFAF\" data-language-for-alternatives=\"vi\" data-language-to-translate-into=\"sv\" data-phrase-index=\"3\" data-number-of-phrases=\"7\" jscontroller=\"Zl5N8\" jsdata=\"uqLsIf;_;$117\" jsmodel=\"SsMkhd\" style=\"white-space: pre-wrap; cursor: pointer;\">Nỗ lực gian khổ này đã giúp Travel Manage System được công nhận là nhà cung cấp Giải pháp Du lịch đáng tin cậy với ba văn phòng ở Phùng Khoang .</span></span><span style=\"white-space: pre-wrap;\">Chúng tôi có các gói phù hợp với túi tiền và sở thích của khách du lịch sành điệu.</span></span></span><span style=\"font-size: 14pt; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"white-space: pre-wrap;\"> </span><span class=\"jlqj4b\"></span><span style=\"font-size: 14pt; line-height: 107%;\"><span jsaction=\"click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje\" jsname=\"W297wb\"><span jsaction=\"agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb;bmeZHc:iURhpf;Oxj3Xe:qAKMYb,yaf12d\" jsname=\"txFAF\" data-language-for-alternatives=\"vi\" data-language-to-translate-into=\"sv\" data-phrase-index=\"5\" data-number-of-phrases=\"7\" jscontroller=\"Zl5N8\" jsdata=\"uqLsIf;_;$119\" jsmodel=\"SsMkhd\" style=\"white-space: pre-wrap; cursor: pointer;\">Đặt kỳ nghỉ mơ ước của bạn trực tuyến.</span></span></span></span><span style=\"font-size: 14pt; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"white-space: pre-wrap;\"> </span><span class=\"jlqj4b\"></span><span style=\"font-size: 14pt; line-height: 107%;\"><span jsaction=\"click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje\" jsname=\"W297wb\"><span jsaction=\"agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb;bmeZHc:iURhpf;Oxj3Xe:qAKMYb,yaf12d\" jsname=\"txFAF\" data-language-for-alternatives=\"vi\" data-language-to-translate-into=\"sv\" data-phrase-index=\"6\" data-number-of-phrases=\"7\" jscontroller=\"Zl5N8\" jsdata=\"uqLsIf;_;$120\" jsmodel=\"SsMkhd\" style=\"white-space: pre-wrap; cursor: pointer;\">Chất lượng được hỗ trợ và đề xuất của các chuyên gia tư vấn du lịch của chúng tôi, chúng tôi có xu hướng hoan nghênh bạn quyết định từ các gói kỳ nghỉ và tùy chỉnh chúng theo kế hoạch của bạn.</span></span></span></span><span style=\"font-size:14.0pt;line-height:107%;font-family:&quot;Times New Roman&quot;,serif;\r\nmso-ascii-theme-font:major-latin;mso-hansi-theme-font:major-latin;mso-bidi-theme-font:\r\nmajor-latin\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 14pt; line-height: 107%; font-family: &quot;Times New Roman&quot;, serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size: 14pt; line-height: 107%;\"><span jsaction=\"click:qtZ4nf,GFf3ac,tMZCfe; contextmenu:Nqw7Te,QP7LD; mouseout:Nqw7Te; mouseover:qtZ4nf,c2aHje\" jsname=\"W297wb\"><span jsaction=\"agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb;bmeZHc:iURhpf;Oxj3Xe:qAKMYb,yaf12d\" jsname=\"txFAF\" data-language-for-alternatives=\"vi\" data-language-to-translate-into=\"sv\" data-phrase-index=\"6\" data-number-of-phrases=\"7\" jscontroller=\"Zl5N8\" jsdata=\"uqLsIf;_;$120\" jsmodel=\"SsMkhd\" style=\"white-space: pre-wrap; cursor: pointer;\"><br></span></span></span></span></p><p class=\"MsoNormal\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span jsaction=\"agoMJf:PFBcW;usxOmf:aWLT7;jhKsnd:P7O7bd,F8DmGf;Q4AGo:Gm7gYd,qAKMYb;uFUCPb:pvnm0e,pfE8Hb,PFBcW;f56efd:dJXsye;EnoYf:KNzws,ZJsZZ,JgVSJc;zdMJQc:cCQNKb,ZJsZZ,zchEXc;Ytrrj:JJDvdc;tNR8yc:GeFvjb;oFN6Ye:hij5Wb;bmeZHc:iURhpf;Oxj3Xe:qAKMYb,yaf12d\" jsname=\"txFAF\" data-language-for-alternatives=\"vi\" data-language-to-translate-into=\"sv\" data-phrase-index=\"2\" data-number-of-phrases=\"7\" jscontroller=\"Zl5N8\" jsdata=\"uqLsIf;_;$116\" jsmodel=\"SsMkhd\" style=\"white-space: pre-wrap; cursor: pointer;\">\r\n\r\n</span></p><div></div>\r\n										'),
(11, 'Contact', '\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif; color: black; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Địa chỉ\r\n54&nbsp; Triều Khúc Thanh Xuân Hà Nôi.</span><span style=\"font-size:14.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\nmso-fareast-language:VI\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:black;mso-fareast-language:VI\">SDT: 0123456789</span><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p>\r\n\r\n<p class=\"MsoNormal\" style=\"margin-bottom: 0cm; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><span style=\"font-size:14.0pt;font-family:&quot;Times New Roman&quot;,serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:black;mso-fareast-language:VI\">Intagram:&nbsp;\r\ntolathanh</span><span style=\"font-size: 14pt; font-family: &quot;Times New Roman&quot;, serif;\"><o:p></o:p></span></p>\r\n										\r\n<div id=\"map\" style=\"width:100%\">\r\n    <iframe stype=\"with=100%\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.1371482237046!2d105.78958841484106!3d20.98713879457392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acc87d801585%3A0xf95f9afbe464ca2d!2zNjcgUGjDuW5nIEtob2FuZywgVHJ1bmcgVsSDbiwgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1637728502057!5m2!1svi!2s\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>\r\n</div>								\r\n										');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PackageType` varchar(150) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PackageLocation` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PackageDetails` varchar(300) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PackageImage` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbltourpackages`
--

INSERT INTO `tbltourpackages` (`PackageId`, `PackageName`, `PackageType`, `PackageLocation`, `PackagePrice`, `PackageFetures`, `PackageDetails`, `PackageImage`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Son Gucci TVQ', 'Dòng son lì', 'Gucci', 50000000, 'Sản phẩm có công dụng dưỡng môi ,lên giữ màu lâu sang trọng quý phái', 'Lấy cảm hứng từ màu đỏ trong pha bán cổ phiếu của ông Trịnh Văn Quyết khiến cho người người đổ máu nhà nhà đổ máu. Chúng tôi đã tạo nên được sản phẩm TVQ đòng son lỳ chất lượng quý phái sang trọng ....', '4.jpg', '2020-07-08 05:21:58', '2022-04-01 14:25:51'),
(2, 'Sữa rửa mặt GUCCI relax', 'Dòng Sản phẩm chăm sóc da', 'Gucci', 40000000, 'Sản phẩm với những hạt nano siêu nhỏ giúp thẩm thấu sau nhất dưới làn da', 'Lấy cảm hứng từ công nghệ nano Gucci đã kết hợp công nghệ nano vào sản phẩm chúng tôi đã tạo ra được 1 siêu phẩm sau những buổi dạo phố sử dụng sản phẩm tẩy tan bụi bẩn sảng khoái relax....', 'c3.jpg', '2020-07-08 05:37:40', '2022-04-01 14:35:27'),
(3, 'Phấn nền GUCCI', 'Phấn đánh nền', 'Gucci', 4000000, 'Phấn đánh nền khi makeup còn có công dụng dưỡng da', 'Lấy cảm hứng từ Anh Thông Soái ca làn da trăng nón kết hợp với hàm răng vâu đã tạo cho chúng tôi cảm hứng to lớn ..', '5.jpg', '2020-07-08 05:41:07', '2022-04-01 14:53:50'),
(4, 'Nước Hoa Chanel Coco Mademoiselle', 'Mùi hương', 'Chanel', 2500000, 'Hương thơm nhẹ nhàng của hoa và cỏ tươi mát', 'Với hương đầu của cam bergamot, quả bưởi và cam, hương giữa của hoa nhài, hoa hồng, quả vải và hương cuối dịu dàng nữ tính dễ nhận biết của Coco Mademoiselle là hương cỏ hương bài, xạ hương, cây hoắc hương cùng hương lan nhiệt đới.', '7.jpg', '2020-07-08 05:45:58', '2022-04-01 15:05:28'),
(5, 'Nước hoa Chanel Chence Eau Tendre EDP', 'Mùi Hương', 'Chanel', 50000000, 'Mùi hương giữ lâu lãng mạng ngọt ngào', 'Màu hồng lãng mạng cũng nói lên sự lãng mạng ngọt ngào của hương thơm. Sự ngọt ngào lãng mạng như tạo nên một cơn lốc cuồng nhiệt sự dịu dàng không chỉ đốt tim bao bạn nữ mà còn thu hút vô số các chàng trai.', 'c1.jpg', '2020-07-08 05:49:13', '2022-04-01 15:13:12'),
(6, 'Nước hoa BLEU CHANEL', 'Mùi hương', 'Chanel', 5000000, 'Lưu hương cực lâu mùi hương nam tính mạnh mẽ', 'Gai góc và mạnh mẽ BLEU CHANEL sự kết hợp của bụi bặm và gai góc mùi hương đầy nam tính khiến cho bao cô gái say đắm..', '66.jpg', '2020-07-08 05:51:26', '2022-04-01 15:19:26'),
(7, 'Nước hoa BLEU CHANEL', 'Mùi hương', 'Thác Mây', 450000, 'Mùi hương giữ lâu lãng mạng ngọt ngào', 'Gai góc và mạnh mẽ BLEU CHANEL sự kết hợp của bụi bặm và gai góc mùi hương đầy nam tính khiến cho bao cô gái say đắm..', '66.jpg', '2020-07-08 05:54:42', '2022-04-01 15:25:13'),
(8, 'Nước hoa BLEU CHANEL', 'Mùi hương', 'Chanel', 4500000, 'Lưu hương cực lâu mùi hương nam tính mạnh mẽ', 'Changu Lake và New Baba Mandir du ngoạn | | tour du lịch Thung lũng Yumthang | tham quan hồ Gurudongmar Nghỉ đêm ở Lachen', '66.jpg', '2020-07-08 06:05:24', '2022-04-01 15:23:29'),
(9, 'Nước hoa BLEU CHANEL', 'Mùi Hương', 'Chanel', 4500000, 'Mùi hương giữ lâu lãng mạng ngọt ngào', 'Gai góc và mạnh mẽ BLEU CHANEL sự kết hợp của bụi bặm và gai góc mùi hương đầy nam tính khiến cho bao cô gái say đắm..', '66.jpg', '2020-07-08 06:07:48', '2022-04-01 15:25:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MobileNumber` char(10) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `EmailId` varchar(70) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Password` varchar(100) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(1, 'Vũ Thành', '0395252902', 'user1@gmail.com', '123', '2021-07-08 06:33:20', '2021-11-10 15:41:44'),
(2, 'The Quang', '9871987979', 'user2@gmail.com', '123', '2021-07-08 06:33:56', NULL),
(3, 'Mai Thành Lợi', '1398756416', 'user3@gmail.com', '123', '2021-07-08 06:34:20', '2022-04-03 15:14:12'),
(4, 'viet Quang', '4789756456', 'user4@gmail.com', '123', '2021-07-08 06:34:38', NULL),
(5, 'Test', '1987894654', 'test@gmail.com', '123', '2021-07-08 06:35:06', '2021-11-06 10:05:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Chỉ mục cho bảng `tblenquiry`
--
ALTER TABLE `tblenquiry`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblissues`
--
ALTER TABLE `tblissues`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tblpages`
--
ALTER TABLE `tblpages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Chỉ mục cho bảng `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tblenquiry`
--
ALTER TABLE `tblenquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tblissues`
--
ALTER TABLE `tblissues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tblpages`
--
ALTER TABLE `tblpages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
