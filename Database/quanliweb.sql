-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 03:46 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanliweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_cmt` int(10) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `cmt` text COLLATE utf8_vietnamese_ci NOT NULL,
  `check_cmt` char(1) COLLATE utf8_vietnamese_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `mahd` int(11) NOT NULL,
  `mah` int(11) NOT NULL,
  `tenhang` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` char(3) COLLATE utf8_vietnamese_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create-at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`mahd`, `mah`, `tenhang`, `soluong`, `size`, `color`, `dongia`, `thanhtien`, `update_at`, `create-at`) VALUES
(18, 9, ' Áo Sơ Mi ', 1, '', '', 250000, 250000, '2018-12-16 05:47:52', '2018-12-16 05:47:52'),
(18, 11, ' Đồng Hồ ', 1, '', '', 250000, 250000, '2018-12-16 05:46:24', '2018-12-16 05:46:24'),
(18, 13, 'Đồng Hồ Đen', 1, '', '', 230000, 230000, '2018-12-16 05:47:52', '2018-12-16 05:47:52'),
(18, 17, 'Quần Jeanr', 1, '', '', 350000, 350000, '2018-12-16 05:47:52', '2018-12-16 05:47:52'),
(19, 16, 'Quần Jeanr', 1, 'S', 'Trắng', 400000, 400000, '2018-12-27 14:02:10', '2018-12-27 14:02:10'),
(19, 18, 'Quần Jeanr', 1, 'S', 'Trắng', 400000, 400000, '2018-12-27 14:02:10', '2018-12-27 14:02:10'),
(19, 37, 'Áo Da Lông', 1, 'S', 'Trắng', 325346, 325346, '2018-12-27 14:02:10', '2018-12-27 14:02:10'),
(19, 40, 'Quần Short Kaki', 1, 'S', 'Trắng', 324678, 324678, '2018-12-27 14:02:10', '2018-12-27 14:02:10'),
(20, 13, 'Đồng Hồ Đen', 1, 'S', 'Trắng', 230000, 230000, '2018-12-27 14:07:38', '2018-12-27 14:07:38'),
(20, 16, 'Quần Jeanr', 1, 'S', 'Trắng', 400000, 400000, '2018-12-27 14:07:38', '2018-12-27 14:07:38'),
(20, 37, 'Áo Da Lông', 1, 'S', 'Trắng', 325346, 325346, '2018-12-27 14:07:38', '2018-12-27 14:07:38'),
(21, 9, ' Áo Sơ Mi ', 1, 'S', 'Đỏ', 213523, 213523, '2019-01-03 10:52:22', '2019-01-03 10:52:22'),
(22, 9, ' Áo Sơ Mi ', 1, 'S', 'Đỏ', 213523, 213523, '2019-01-03 10:57:04', '2019-01-03 10:57:04');

--
-- Bẫy `chitiethoadon`
--
DELIMITER $$
CREATE TRIGGER `insertcthoadon` BEFORE INSERT ON `chitiethoadon` FOR EACH ROW BEGIN

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `danhmuc` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `danhmuc`) VALUES
(1, 'Áo Nam'),
(2, 'Quần Nam'),
(3, 'Giày Dép'),
(4, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `id_khach` int(11) NOT NULL,
  `xuli` tinyint(1) NOT NULL DEFAULT '0',
  `ngaylap` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `id_khach`, `xuli`, `ngaylap`, `create_at`, `update_at`) VALUES
(18, 32, 1, '2018-12-16', '2018-12-16 05:46:24', '2019-01-01 14:02:21'),
(19, 39, 1, '2018-12-27', '2018-12-27 14:02:10', '2018-12-29 09:33:25'),
(20, 40, 1, '2018-12-27', '2018-12-27 14:07:38', '2018-12-29 09:38:01'),
(21, 41, 0, '2019-01-03', '2019-01-03 10:52:22', '2019-01-03 10:52:22'),
(22, 42, 0, '2019-01-03', '2019-01-03 10:57:04', '2019-01-03 10:57:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach`
--

CREATE TABLE `khach` (
  `id` int(11) NOT NULL,
  `tenk` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` text COLLATE utf8_vietnamese_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khach`
--

INSERT INTO `khach` (`id`, `tenk`, `email`, `sdt`, `diachi`) VALUES
(1, 'Nguyễn Xuân Hùng', 'xuanhung081@gmail.com', 1649202944, 'Phụng Châu, Chương Mỹ , Hà Nội'),
(3, 'Nguyễn Văn Lâm', '', 349202944, 'phụng Châu'),
(4, 'Nguyễn Văn Linh', 'linh@gmail.com', 12345678, 'Hà Nội'),
(5, 'Nguyễn Xuân Nam', '', 1649202945, 'Hà Nội'),
(6, 'Nguyễn Xuân Nam', 'xuanhung2605@gmail.com', 1649202945, 'Hà Nội'),
(7, 'Nguyễn Xuân Nam', 'xuanhung2605@gmail.com', 1649202945, 'Hà Nội'),
(8, 'Nguyễn Xuân Nam', 'xuanhung2605@gmail.com', 1649202945, 'Hà Nội'),
(9, 'Nguyễn Văn Thái ', 'vănthai012@gmail.com', 1649202955, 'phụng châu- hà Nội'),
(29, 'xuanhung', 'hung@hgasd', 93204205, 'hà nội'),
(30, 'Nguyễn Văn Lung', 'vanlung@gmail.com', 1243534, 'áhdgajf'),
(31, 'ahihi', '3124asdfds', 324, '234sfdf'),
(32, 'Xuân Linh', 'linh@gmail.com', 21347, 'ághdfgi893'),
(33, 'Xuân Hihi', 'hung@gmail.com', 2147483647, 'ạhgdjahkjkha'),
(34, 'LInh cute', 'linhlinh@gmail.com', 723845257, 'Hà Nội'),
(38, 'hàgd', 'fasf', 3254326, 'sdgsdfa'),
(39, 'Nguyễn Vân Trường', 'vantruowng@gmail.com', 164920294, 'Hà Nội '),
(40, 'Thái Linh Hương', 'tlh@gmail.com', 125383456, 'HÀ nỘi'),
(41, 'Nguyễn Xuân Vinh', 'xuanhung@gmail.com', 162929223, 'Hà Tây'),
(42, 'Nguyễn Xuân Quảng', 'xq@gmail.com', 168668439, 'Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id_danhmuc` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `loaisp` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_danhmuc`, `id_loaisp`, `loaisp`) VALUES
(1, 1, 'Áo Ngắn Tay'),
(1, 2, 'Áo Sơ Mi'),
(1, 3, 'Áo Khoác'),
(1, 4, 'Áo Da'),
(2, 5, 'Quần Âu'),
(2, 6, 'Quần jeanr'),
(2, 7, 'Quần Short'),
(2, 8, 'Quần Kaki'),
(3, 9, 'Dép Bitis'),
(3, 10, 'Dép Dây'),
(3, 11, 'Giày Da'),
(3, 12, 'Giày Lừa'),
(4, 13, 'Vòng Đeo Tay'),
(4, 14, 'Mũ'),
(4, 15, 'Dây Lưng'),
(4, 16, 'Đồng Hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` double NOT NULL,
  `tinhtrang` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'Còn Hàng',
  `img` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `size` char(100) COLLATE utf8_vietnamese_ci DEFAULT 'Free',
  `color` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT 'Free',
  `chitiet` text COLLATE utf8_vietnamese_ci NOT NULL,
  `hot` smallint(1) NOT NULL,
  `new` smallint(1) NOT NULL,
  `idloaisp` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `gia`, `tinhtrang`, `img`, `size`, `color`, `chitiet`, `hot`, `new`, `idloaisp`, `create_at`, `update_at`) VALUES
(9, 'Áo Thun Cao Cấp', 350000, 'Còn Hàng', 'TB2z28Ot1SSBuNjy0FlXXbBpVXa_!!285492195.jpg', 'S,M,L,XL', 'Đen, Trắng,Xanh,Vàng', 'Dù cho bạn là ai và bao nhiêu tuổi thì luôn có ít nhất một chiếc áo thun cổ tròn trong tủ đồ. Tiện dụng và thoáng mát, áo thun là thứ phổ dụng, nhưng phổ dụng thường lại bị gán cho nghĩa xuề xòa. Nhiều người chọn áo thun với tiêu chí “có mặc là được”, do đó vô tình làm xấu đi cả toàn bộ trang phục trên người.', 1, 1, 1, '2018-12-05 09:01:59', '2019-01-03 14:44:58'),
(11, ' Đồng Hồ ', 250000, 'Còn Hàng', '59ba907e0b23c32318aba327e5ea57a3.jpg', 'Free', 'Đen, Vàng', 'Thiết kế với những nét chấm phá nhẹ nhàng cùng những đường cắt cúp tinh tế, cách phối màu sắc độc đáo.\r\nChất liệu cao cấp: silk, lụa, voan, cotton, thun lạnh….\r\nÁp dụng kỹ thuật cắt may cầu kỳ, xử lý phom dáng công phu và tính thủ công tỉ mỉ trong từng chi tiết.\r\nKhông gian rộng rãi trưng bày nhiều mẫu mã đa dạng.\r\nGía tốt so với chất lượng.', 1, 1, 16, '2018-12-05 09:03:01', '2019-01-03 12:51:22'),
(13, 'Đồng Hồ Đen', 230000, 'Còn Hàng', 'dongho4.jpg', 'Free', 'Đen', ' Mỗi một quốc gia trên thế giới đều có những biểu tượng đặc trưng cơ bản cho đất nước mình, để nhìn vào những hình ảnh đó thì bạn bè quốc tế có thể liên tưởng, hình dung ngay đến một đất nước, một dân tộc nhất định. Những vật biểu trưng đó có thể là trong ẩm thực, âm nhạc, di tích thắng cảnh, hoa và một trong những điển hình khác là trang phục. Nếu Nhật Bản có quốc phục là bộ Kimono, Trung Quốc là sườn xám, Hàn Quốc là  han búc thì quốc phục đặc trưng của Việt Nam đó chính là chiếc áo dài.', 1, 1, 16, '2018-12-05 14:54:32', '2019-01-03 12:58:48'),
(15, 'Quần Jeanr', 350000, 'Còn Hàng', 'quanjeanr1.jpg', '38,39,40', 'Đen, Trắng', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 1, 0, 6, '2018-12-12 07:27:41', '2019-01-03 13:58:53'),
(16, 'Quần Jeanr', 400000, 'Còn Hàng', 'quanjeanr2.jpg', '39,40,41', 'Xanh,Đen', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 0, 1, 6, '2018-12-12 07:27:41', '2019-01-03 14:06:42'),
(17, 'Quần Jeanr', 350000, 'Còn Hàng', 'quanjeanr3.jpg', '39,40,41', 'Xanh,Trắng,Đen', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 1, 0, 6, '2018-12-12 07:27:46', '2019-01-03 14:06:42'),
(18, 'Quần Jeanr', 400000, 'Còn Hàng', 'quanjeanr4.jpg', '38,39,40,41', 'Xanh,Đen', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 1, 0, 6, '2018-12-12 07:27:46', '2019-01-03 14:06:42'),
(19, 'Sơ Mi Họa Tiết', 500000, 'Còn Hàng', 'somihoatiet.jpg', 'S,M,L,XL', 'Trắng,Đen', 'Nhà thiết kế Thuận Việt giới thiệu áo dài tại Lào\r\nNgôi Sao (lời châm biếm, lời chế nhạo) (lời tuyên bố phát cho các báo) (Blog)-Jul 29, 2017\r\nNằm trong khuôn khổ lễ hội \'Giao lưu văn hóa hữu nghị Việt Lào\' diễn ra từ ngày 26/7 đến 1/8, nhà thiết kế Thuận Việt đã giới thiệu bộ sưu tập .', 1, 0, 2, '2018-12-12 09:33:24', '2019-01-03 14:47:02'),
(20, 'Đồng hồ thông minh', 234000, 'Còn Hàng', 'dongho2.jpg', 'Free', 'Đen', 'đồng hoog okr', 0, 0, 16, '2018-12-16 06:32:12', '2019-01-03 14:06:42'),
(21, 'Đồng Hồ', 200000, 'Còn Hàng', 'dongho3.jpg', 'Free', 'Đen,Vàng', 'fghsahlfrjosjefnzjncjklasnnnnnnnnnnnnnnnnnnnnnnfkasljkzncvsjfasfasgsdg', 0, 0, 16, '2018-12-16 06:32:12', '2019-01-03 14:06:42'),
(22, 'Áo Khoác', 435778, 'Còn Hàng', 'aokhoacreu.jpg', 'S,M,L,XL', 'Xanh,Đen,Vàng', '\r\nÁo khoác thun\r\nÁo khoác là loại áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể. Áo khoác thường có thiết kế với tay áo dài và phần thân áo dài dài hơn các loại áo thông thường. Tùy từng loại áo khoác mà các nhà thiết kế sẽ sử dụng khuy áo, dây kéo phéc-mơ-tuya, dây đai lưng, đóng bằng nút bấm, dây kéo...hoặc một sự kết hợp của một số trong số này.', 1, 0, 3, '2018-12-16 06:42:36', '2019-01-03 14:06:42'),
(23, 'Áo Khoác 2 Lớp', 467890, 'Còn Hàng', 'aokhoac2lop.jpg', 'S,M,L,XL', 'Đen,Trắng,Vàng', 'Áo khoác là loại áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể. Áo khoác thường có thiết kế với tay áo dài và phần thân áo dài dài hơn các loại áo thông thường. Tùy từng loại áo khoác mà các nhà thiết kế sẽ sử dụng khuy áo, dây kéo phéc-mơ-tuya, dây đai lưng, đóng bằng nút bấm, dây kéo...hoặc một sự kết hợp của một số trong số này.', 0, 1, 3, '2018-12-16 06:47:21', '2019-01-03 14:06:42'),
(24, 'Áo Khoác Gió', 456904, '0', 'aokhoacgio.jpg', 'S,M,L,XL', 'Đen,Trắng', 'Áo khoác là loại áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể. Áo khoác thường có thiết kế với tay áo dài và phần thân áo dài dài hơn các loại áo thông thường. Tùy từng loại áo khoác mà các nhà thiết kế sẽ sử dụng khuy áo, dây kéo phéc-mơ-tuya, dây đai lưng, đóng bằng nút bấm, dây kéo...hoặc một sự kết hợp của một số trong số này.', 0, 0, 3, '2018-12-16 06:47:21', '2019-01-03 14:06:42'),
(27, 'Áo Da', 789106, 'Còn Hàng', 'aodanam1.jpg', 'S,M,L,XL', 'Đen, Vàng', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 0, 0, 4, '2018-12-16 06:52:14', '2019-01-03 14:07:34'),
(28, 'Áo Da Nâu', 789106, 'Còn Hàng', 'aodanau.jpg', 'S,M,L,XL', 'Đen,Vàng', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 0, 0, 4, '2018-12-16 06:52:16', '2019-01-03 14:10:43'),
(37, 'Áo Da Lông', 325346, 'Còn Hàng', 'aodalong.jpg', 'S,M,L,XL', 'Đen,Vàng', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 0, 1, 4, '2018-12-16 06:56:42', '2019-01-03 14:10:43'),
(38, 'Áo Da Có Mũ', 325346, 'Còn Hàng', 'aodacomu.jpg', 'S,M,L,XL', 'Đen,Vàng', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 1, 0, 4, '2018-12-16 06:56:44', '2019-01-03 14:10:43'),
(39, 'Quần Short Thun', 300000, 'Còn Hàng', 'quanshortthun.jpg', 'S,M,L,XL', 'Đen,Vàng', 'Họ đã cắt ngắn ống quần để thích nghi với khí hậu và tiện lợi cho việc đi lại. Sau đó, short Bermuda chính thức được sử dụng thành đồng phục trong quân đội, và nhanh chóng trở thành kiểu mẫu thời trang nơi đây. Những khách du lịch đến Bermuda đã mang xu hướng này đi khắp thế giới.', 1, 0, 7, '2018-12-16 07:06:04', '2019-01-03 14:10:43'),
(40, 'Quần Short Kaki', 324678, 'Còn Hàng', 'quanshortkaki.jpg', '38,39,40,41,42', 'Vàng, Đen', 'Họ đã cắt ngắn ống quần để thích nghi với khí hậu và tiện lợi cho việc đi lại. Sau đó, short Bermuda chính thức được sử dụng thành đồng phục trong quân đội, và nhanh chóng trở thành kiểu mẫu thời trang nơi đây. Những khách du lịch đến Bermuda đã mang xu hướng này đi khắp thế giới.', 0, 1, 7, '2018-12-16 07:06:04', '2019-01-03 14:12:35'),
(41, 'Quần Short Thể Thao', 300678, 'Còn Hàng', 'quanshortthethao.jpg', '38,39,40,41,42', 'Vàng,Đen', 'Họ đã cắt ngắn ống quần để thích nghi với khí hậu và tiện lợi cho việc đi lại. Sau đó, short Bermuda chính thức được sử dụng thành đồng phục trong quân đội, và nhanh chóng trở thành kiểu mẫu thời trang nơi đây. Những khách du lịch đến Bermuda đã mang xu hướng này đi khắp thế giới.', 1, 0, 7, '2018-12-16 07:06:07', '2019-01-03 14:12:35'),
(42, 'Quần Short ', 324678, 'Còn Hàng', 'quanshortnau.jpg', '38,39,40,41,42', 'Vàng, Đen', 'mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 7, '2018-12-16 07:06:07', '2019-01-03 14:12:35'),
(43, 'Quần Âu hàn Quốc', 123412, 'Còn Hàng', 'quanauhanquoc.jpg', '38,39,40,41,42', 'Vàng, Đen', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 5, '2018-12-16 07:14:20', '2019-01-03 14:12:35'),
(44, 'Quần Âu Xám', 325567, 'Còn Hàng', 'quanauxam.jpg', '38,39,40,41,42', '', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 5, '2018-12-16 07:14:20', '2019-01-03 14:12:35'),
(45, 'Quần Âu Đen', 245000, 'Còn Hàng', 'quanauden.jpg', '38,39,40,41,42', 'Vàng, Đen', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 5, '2018-12-16 07:16:01', '2019-01-03 14:12:35'),
(46, 'Áo Ngắn Tay Sọc Kẻ', 120000, 'Còn Hàng', 'thoi-trang-ao-so-mi-nam-cao-cap-1497329002-1-3779444-1504794384.jpg', 'S,M,L,XL', 'Trắng,Đen', 'Dù cho bạn là ai và bao nhiêu tuổi thì luôn có ít nhất một chiếc áo thun cổ tròn trong tủ đồ. Tiện dụng và thoáng mát, áo thun là thứ phổ dụng, nhưng phổ dụng thường lại bị gán cho nghĩa xuề xòa. Nhiều người chọn áo thun với tiêu chí “có mặc là được”, do đó vô tình làm xấu đi cả toàn bộ trang phục trên người.', 1, 1, 1, '2019-01-03 14:20:01', '2019-01-03 14:31:56'),
(47, 'Áo Thun Bò', 250000, 'Còn Hàng', 'aokhoacjean_04.jpg', 'S,M,L,XL', 'Xanh', 'Dù cho bạn là ai và bao nhiêu tuổi thì luôn có ít nhất một chiếc áo thun cổ tròn trong tủ đồ. Tiện dụng và thoáng mát, áo thun là thứ phổ dụng, nhưng phổ dụng thường lại bị gán cho nghĩa xuề xòa. Nhiều người chọn áo thun với tiêu chí “có mặc là được”, do đó vô tình làm xấu đi cả toàn bộ trang phục trên người.', 1, 0, 1, '2019-01-03 14:22:11', '2019-01-03 14:22:11'),
(48, 'Áo Thun Trẻ Trung', 200000, 'Còn Hàng', 'Ao-thun-nam-ngan-tay-in-NT-24-D2-23-2018-10-23-37-PM.jpg', 'S,M,L,XL', 'Cam, Xanh, Đen', 'Rõ ràng có nhiều kiểu dáng khác nhau trong thế giới áo thun nam như cổ tim, cổ polo, cổ gài nút… nhưng áo thun cổ tròn vẫn là phong cách khỏe khoắn và năng động nhất cho các chàng trai, đặc biệt là trong tiết trời oi bức. Thử đi ra ngoài đường mà xem, 8/10 người mặc áo thun sẽ chọn loại cổ tròn. Cổ tim thì hơi điệu đà, không phù hợp với vẻ nam tính nên chỉ một, hai cái trong tủ là được. Áo thun polo đẹp, chững chạc và phù hợp nếu bạn muốn tìm kiếm vẻ lịch sự đi kèm sự thoải mái, nhưng có chút đứng tuổi.\r\n\r\nLưu ý khi chọn áo: phom cổ áo ôm sát vào cổ hoặc chỉ để lộ một chút xương quai xanh, sau nhiều lần giặt vẫn không bị dãn phần cổ là một chiếc áo tốt.', 0, 0, 1, '2019-01-03 14:23:11', '2019-01-03 14:33:25'),
(49, 'Áo Thun Dễ Thương', 180000, 'Còn Hàng', 'Ao-thun-nam-ngan-tay-in-NT-31-A3-6-2018-2-56-32-PM.jpg', 'S,M,L,XL', 'Đen, Trắng', 'Rõ ràng có nhiều kiểu dáng khác nhau trong thế giới áo thun nam như cổ tim, cổ polo, cổ gài nút… nhưng áo thun cổ tròn vẫn là phong cách khỏe khoắn và năng động nhất cho các chàng trai, đặc biệt là trong tiết trời oi bức. Thử đi ra ngoài đường mà xem, 8/10 người mặc áo thun sẽ chọn loại cổ tròn. Cổ tim thì hơi điệu đà, không phù hợp với vẻ nam tính nên chỉ một, hai cái trong tủ là được. Áo thun polo đẹp, chững chạc và phù hợp nếu bạn muốn tìm kiếm vẻ lịch sự đi kèm sự thoải mái, nhưng có chút đứng tuổi.\r\n\r\nLưu ý khi chọn áo: phom cổ áo ôm sát vào cổ hoặc chỉ để lộ một chút xương quai xanh, sau nhiều lần giặt vẫn không bị dãn phần cổ là một chiếc áo tốt.', 0, 1, 1, '2019-01-03 14:27:03', '2019-01-03 14:33:13'),
(50, 'Áo Thun Kappa', 315000, 'Còn Hàng', 'TB2_LFitACWBuNjy0FaXXXUlXXa_!!285492195.jpg', 'S,M,L,XL', 'Đen, Trắng', 'Rõ ràng có nhiều kiểu dáng khác nhau trong thế giới áo thun nam như cổ tim, cổ polo, cổ gài nút… nhưng áo thun cổ tròn vẫn là phong cách khỏe khoắn và năng động nhất cho các chàng trai, đặc biệt là trong tiết trời oi bức. Thử đi ra ngoài đường mà xem, 8/10 người mặc áo thun sẽ chọn loại cổ tròn. Cổ tim thì hơi điệu đà, không phù hợp với vẻ nam tính nên chỉ một, hai cái trong tủ là được. Áo thun polo đẹp, chững chạc và phù hợp nếu bạn muốn tìm kiếm vẻ lịch sự đi kèm sự thoải mái, nhưng có chút đứng tuổi.\r\n\r\nLưu ý khi chọn áo: phom cổ áo ôm sát vào cổ hoặc chỉ để lộ một chút xương quai xanh, sau nhiều lần giặt vẫn không bị dãn phần cổ là một chiếc áo tốt.', 1, 0, 1, '2019-01-03 14:35:08', '2019-01-03 14:35:08'),
(51, 'Áo Thun Cổ Cao', 245000, 'Còn Hàng', 'TB2IhxRof5TBuNjSspmXXaDRVXa_!!676606897.jpg', 'S,M,L,XL', 'Đen, Trắng,Xanh', 'Rõ ràng có nhiều kiểu dáng khác nhau trong thế giới áo thun nam như cổ tim, cổ polo, cổ gài nút… nhưng áo thun cổ tròn vẫn là phong cách khỏe khoắn và năng động nhất cho các chàng trai, đặc biệt là trong tiết trời oi bức. Thử đi ra ngoài đường mà xem, 8/10 người mặc áo thun sẽ chọn loại cổ tròn. Cổ tim thì hơi điệu đà, không phù hợp với vẻ nam tính nên chỉ một, hai cái trong tủ là được. Áo thun polo đẹp, chững chạc và phù hợp nếu bạn muốn tìm kiếm vẻ lịch sự đi kèm sự thoải mái, nhưng có chút đứng tuổi.\r\n\r\nLưu ý khi chọn áo: phom cổ áo ôm sát vào cổ hoặc chỉ để lộ một chút xương quai xanh, sau nhiều lần giặt vẫn không bị dãn phần cổ là một chiếc áo tốt.', 1, 0, 1, '2019-01-03 14:37:24', '2019-01-03 14:37:24'),
(53, 'Áo Thun Cổ Lọ', 213000, 'Còn Hàng', '8911043f9024262181469c2badea9813.jpg', 'S,M,L,XL', 'Đen, Trắng', 'Dù cho bạn là ai và bao nhiêu tuổi thì luôn có ít nhất một chiếc áo thun cổ tròn trong tủ đồ. Tiện dụng và thoáng mát, áo thun là thứ phổ dụng, nhưng phổ dụng thường lại bị gán cho nghĩa xuề xòa. Nhiều người chọn áo thun với tiêu chí “có mặc là được”, do đó vô tình làm xấu đi cả toàn bộ trang phục trên người.', 1, 0, 1, '2019-01-03 14:43:16', '2019-01-03 14:43:16'),
(54, 'Sơ Mi Cổ Tây', 180000, 'Còn Hàng', 'ee28a92142d57915370c3fc55f7579f7.jpg', 'S,M,L,XL', 'Xám,Đen,Trắng', 'Sơ mi vẫn đóng vai trò là một món đồ lót của nam cho đến tận thế kỷ 20.[2] Mặc dù \"sơ mi\" dành cho nữ có quan hệ gần gũi với áo cho nam nhưng áo của nam mới là loại áo biến đổi trở thành chiếc sơ mi hiện đại. Vào thời Trung Cổ, sơ mi là loại áo trơn, không nhuộm, mặc sát da thịt và dưới các lớp áo khác. Trong các tác phẩm hội họa thời kỳ này, người ta chỉ vẽ sơ mi lộ ra khi người mặc nó trong tác phẩm là những nhân vật hèn mọn như người chăn cừu, tù nhân và người biết sám hối.[3] Trong thế kỷ 17, sơ mi nam được phép thể hiện trong hội họa, cũng giống như các tác phẩm gợi dục vẽ đồ lót ngày nay', 1, 0, 2, '2019-01-03 14:50:05', '2019-01-03 14:53:50'),
(56, 'Áo Ngắn Tay Sọc Kẻ', 123456, 'Còn Hàng', 'ao-so-mi-nam-hoa-tiet-det-IMG_9816-2.jpg', 'S,M,L,XL', 'Đỏ,Vàng', 'thử', 1, 0, 2, '2019-01-04 00:38:56', '2019-01-04 00:38:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`mahd`,`mah`),
  ADD KEY `mah` (`mah`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `id_khach` (`id_khach`);

--
-- Chỉ mục cho bảng `khach`
--
ALTER TABLE `khach`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sdt` (`sdt`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id_loaisp`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idloaisp` (`idloaisp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_cmt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `khach`
--
ALTER TABLE `khach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`mah`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `chitiethoadon_ibfk_3` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khach`) REFERENCES `khach` (`id`);

--
-- Các ràng buộc cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD CONSTRAINT `loaisp_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idloaisp`) REFERENCES `loaisp` (`id_loaisp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
