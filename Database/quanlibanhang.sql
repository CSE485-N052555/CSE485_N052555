-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2018 lúc 07:36 AM
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
-- Cơ sở dữ liệu: `quanlibanhang`
--

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
(15, 9, ' Áo Sơ Mi ', 1, '', '', 250000, 250000, '2018-12-16 05:36:32', '2018-12-16 05:36:32'),
(15, 13, 'Đồng Hồ Đen', 3, '', '', 230000, 690000, '2018-12-16 05:36:32', '2018-12-16 05:36:32'),
(16, 9, ' Áo Sơ Mi ', 1, '', '', 250000, 250000, '2018-12-16 05:39:50', '2018-12-16 05:39:50'),
(16, 13, 'Đồng Hồ Đen', 3, '', '', 230000, 690000, '2018-12-16 05:39:49', '2018-12-16 05:39:49'),
(17, 19, 'Áo Sơ Mi', 3, '', '', 500000, 1500000, '2018-12-16 05:44:27', '2018-12-16 05:44:27'),
(18, 9, ' Áo Sơ Mi ', 1, '', '', 250000, 250000, '2018-12-16 05:47:52', '2018-12-16 05:47:52'),
(18, 11, ' Đồng Hồ ', 1, '', '', 250000, 250000, '2018-12-16 05:46:24', '2018-12-16 05:46:24'),
(18, 13, 'Đồng Hồ Đen', 1, '', '', 230000, 230000, '2018-12-16 05:47:52', '2018-12-16 05:47:52'),
(18, 17, 'Quần Jeanr', 1, '', '', 350000, 350000, '2018-12-16 05:47:52', '2018-12-16 05:47:52'),
(25, 19, 'Áo Sơ Mi', 1, 'S', 'Trắng', 500000, 500000, '2018-12-21 03:19:10', '2018-12-21 03:19:10');

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
  `ngaylap` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `id_khach`, `ngaylap`, `create_at`, `update_at`) VALUES
(1, 9, '2018-12-12', '2018-12-16 04:07:13', '0000-00-00 00:00:00'),
(2, 1, '2018-12-25', '2018-12-16 04:07:13', '0000-00-00 00:00:00'),
(3, 9, '2018-12-12', '2018-12-16 04:07:29', '0000-00-00 00:00:00'),
(4, 1, '2018-12-25', '2018-12-16 04:07:29', '0000-00-00 00:00:00'),
(15, 29, '2018-12-16', '2018-12-16 05:36:32', '2018-12-16 05:36:32'),
(16, 30, '2018-12-16', '2018-12-16 05:39:49', '2018-12-16 05:39:49'),
(17, 31, '2018-12-16', '2018-12-16 05:44:27', '2018-12-16 05:44:27'),
(18, 32, '2018-12-16', '2018-12-16 05:46:24', '2018-12-16 05:46:24'),
(25, 38, '2018-12-21', '2018-12-21 03:19:10', '2018-12-21 03:19:10');

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
(38, 'hàgd', 'fasf', 3254326, 'sdgsdfa');

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
  `img` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
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

INSERT INTO `product` (`id`, `name`, `gia`, `img`, `chitiet`, `hot`, `new`, `idloaisp`, `create_at`, `update_at`) VALUES
(9, ' Áo Sơ Mi ', 250000, 'somiden.jpg', 'Công ty Cổ Phần Tập Đoàn Thái Tuấn là một trong những doanh nghiệp dệt may cung cấp sản phẩm và dịch vụ thời trang hàng đầu Việt Nam, chuyên sản xuất vải dệt Jacquard, vải in bông trên công nghệ in digital, vải đơn sắc, vải đa sắc … từ sợi polyester, spandex, visco, …. với công nghệ tiên tiến được chuyển giao từ Nhật Bản và Châu Âu. Được thành lập từ năm 1993, đến nay thương hiệu Thái Tuấn đã và đang được người tiêu dùng trong và ngoài nước tín nhiệm là một trong những thương hiệu dệt may hàng đầu cung cấp sản phẩm vải, dịch vụ thời trang mang đậm bản sắc và văn hoá Việt Nam.\r\n', 0, 1, 2, '2018-12-05 09:01:59', '2018-12-21 01:33:57'),
(10, ' Áo Khoác', 250000, 'somicotay.jpg', 'Thiết kế với những nét chấm phá nhẹ nhàng cùng những đường cắt cúp tinh tế, cách phối màu sắc độc đáo.\r\nChất liệu cao cấp: silk, lụa, voan, cotton, thun lạnh….\r\nÁp dụng kỹ thuật cắt may cầu kỳ, xử lý phom dáng công phu và tính thủ công tỉ mỉ trong từng chi tiết.\r\nKhông gian rộng rãi trưng bày nhiều mẫu mã đa dạng.\r\nGía tốt so với chất lượng.', 1, 0, 2, '2018-12-05 09:02:37', '2018-12-21 01:33:58'),
(11, ' Đồng Hồ ', 250000, 'dongho1.jpg', 'Thiết kế với những nét chấm phá nhẹ nhàng cùng những đường cắt cúp tinh tế, cách phối màu sắc độc đáo.\r\nChất liệu cao cấp: silk, lụa, voan, cotton, thun lạnh….\r\nÁp dụng kỹ thuật cắt may cầu kỳ, xử lý phom dáng công phu và tính thủ công tỉ mỉ trong từng chi tiết.\r\nKhông gian rộng rãi trưng bày nhiều mẫu mã đa dạng.\r\nGía tốt so với chất lượng.', 1, 1, 16, '2018-12-05 09:03:01', '2018-12-21 01:33:58'),
(13, 'Đồng Hồ Đen', 230000, 'dongho4.jpg', ' Mỗi một quốc gia trên thế giới đều có những biểu tượng đặc trưng cơ bản cho đất nước mình, để nhìn vào những hình ảnh đó thì bạn bè quốc tế có thể liên tưởng, hình dung ngay đến một đất nước, một dân tộc nhất định. Những vật biểu trưng đó có thể là trong ẩm thực, âm nhạc, di tích thắng cảnh, hoa và một trong những điển hình khác là trang phục. Nếu Nhật Bản có quốc phục là bộ Kimono, Trung Quốc là sườn xám, Hàn Quốc là  han búc thì quốc phục đặc trưng của Việt Nam đó chính là chiếc áo dài.', 1, 1, 16, '2018-12-05 14:54:32', '2018-12-21 01:33:58'),
(15, 'Quần Jeanr', 350000, 'quanjeanr1.jpg', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 1, 0, 6, '2018-12-12 07:27:41', '2018-12-21 01:33:58'),
(16, 'Quần Jeanr', 400000, 'quanjeanr2.jpg', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 0, 1, 6, '2018-12-12 07:27:41', '2018-12-21 01:33:58'),
(17, 'Quần Jeanr', 350000, 'quanjeanr3.jpg', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 1, 0, 6, '2018-12-12 07:27:46', '2018-12-21 01:33:58'),
(18, 'Quần Jeanr', 400000, 'quanjeanr4.jpg', 'Với chất liệu dày, khó xước, rách hoặc hư hỏng, chất liệu jean cùng những chiếc quần jeans trở thành người bạn đồng hành của những giai cấp thấp trong xã hội, trong khi giới quý tộc, thượng lưu vẫn xúng xính những trang phục dệt tự vải cotton mềm mại, óng ả. Dĩ nhiên, những chiếc quần jeans, hay đúng hơn là những chiếc quần dệt từ loại vải thô, dày, sợi nổi… chưa có dáng vẻ của chiếc quần jeans sành điệu như ngày nay. Loại trang phục này được nhuộm với màu chiết xuất từ cây chàm, và tạo cho quần jeans có màu xanh thẫm đặc trưng.', 1, 0, 6, '2018-12-12 07:27:46', '2018-12-21 01:33:58'),
(19, 'Áo Sơ Mi', 500000, 'somihoatiet.jpg', 'Nhà thiết kế Thuận Việt giới thiệu áo dài tại Lào\r\nNgôi Sao (lời châm biếm, lời chế nhạo) (lời tuyên bố phát cho các báo) (Blog)-Jul 29, 2017\r\nNằm trong khuôn khổ lễ hội \'Giao lưu văn hóa hữu nghị Việt Lào\' diễn ra từ ngày 26/7 đến 1/8, nhà thiết kế Thuận Việt đã giới thiệu bộ sưu tập .', 1, 0, 2, '2018-12-12 09:33:24', '2018-12-21 01:33:58'),
(20, 'Đồng hồ thông minh', 234000, 'dongho2.jpg', 'đồng hoog okr', 0, 0, 16, '2018-12-16 06:32:12', '2018-12-21 01:33:58'),
(21, 'Đồng Hồ', 200000, 'dongho3.jpg', 'fghsahlfrjosjefnzjncjklasnnnnnnnnnnnnnnnnnnnnnnfkasljkzncvsjfasfasgsdg', 0, 0, 16, '2018-12-16 06:32:12', '2018-12-21 01:33:58'),
(22, 'Áo Khoác', 435778, 'aokhoacreu.jpg', '\r\nÁo khoác thun\r\nÁo khoác là loại áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể. Áo khoác thường có thiết kế với tay áo dài và phần thân áo dài dài hơn các loại áo thông thường. Tùy từng loại áo khoác mà các nhà thiết kế sẽ sử dụng khuy áo, dây kéo phéc-mơ-tuya, dây đai lưng, đóng bằng nút bấm, dây kéo...hoặc một sự kết hợp của một số trong số này.', 1, 0, 3, '2018-12-16 06:42:36', '2018-12-21 01:33:58'),
(23, 'Áo Khoác 2 Lớp', 467890, 'aokhoac2lop.jpg', 'Áo khoác là loại áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể. Áo khoác thường có thiết kế với tay áo dài và phần thân áo dài dài hơn các loại áo thông thường. Tùy từng loại áo khoác mà các nhà thiết kế sẽ sử dụng khuy áo, dây kéo phéc-mơ-tuya, dây đai lưng, đóng bằng nút bấm, dây kéo...hoặc một sự kết hợp của một số trong số này.', 0, 1, 3, '2018-12-16 06:47:21', '2018-12-21 01:33:58'),
(24, 'Áo Khoác Gió', 456904, 'aokhoacgio.jpg', 'Áo khoác là loại áo mặc bên ngoài, được sử dụng bởi cả nam và nữ. Tác dụng chính của loại trang phục này là để giữ ấm cơ thể. Áo khoác thường có thiết kế với tay áo dài và phần thân áo dài dài hơn các loại áo thông thường. Tùy từng loại áo khoác mà các nhà thiết kế sẽ sử dụng khuy áo, dây kéo phéc-mơ-tuya, dây đai lưng, đóng bằng nút bấm, dây kéo...hoặc một sự kết hợp của một số trong số này.', 0, 0, 3, '2018-12-16 06:47:21', '2018-12-21 01:33:58'),
(27, 'Áo Da', 789106, 'aodanam1.jpg', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 0, 0, 4, '2018-12-16 06:52:14', '2018-12-21 01:33:59'),
(28, 'Áo Da Nâu', 789106, 'aodanau.jpg', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 0, 0, 4, '2018-12-16 06:52:16', '2018-12-21 01:33:59'),
(37, 'Áo Da Lông', 325346, 'aodalong.jpg', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 0, 1, 4, '2018-12-16 06:56:42', '2018-12-21 01:33:59'),
(38, 'Áo Da Có Mũ', 325346, 'aodacomu.jpg', 'Mẫu thiết kế nguyên thuỷ của áo da bomber chính là dành cho các phi công. Đến nay, thiết kế này không có nhiều thay đổi, với chiều dài vừa vặn ngang hông kèm thêm lớp chun mềm ở lai và tay áo. Cổ áo lót lông ấm có thể kéo lên đến tận cằm. Áo khoác da bomber thường có dây kéo thẳng, túi rộng, tạo nên vẻ xù xì thô ráp.', 1, 0, 4, '2018-12-16 06:56:44', '2018-12-21 01:33:59'),
(39, 'Quần Short Thun', 300000, 'quanshortthun.jpg', 'Họ đã cắt ngắn ống quần để thích nghi với khí hậu và tiện lợi cho việc đi lại. Sau đó, short Bermuda chính thức được sử dụng thành đồng phục trong quân đội, và nhanh chóng trở thành kiểu mẫu thời trang nơi đây. Những khách du lịch đến Bermuda đã mang xu hướng này đi khắp thế giới.', 1, 0, 7, '2018-12-16 07:06:04', '2018-12-21 01:33:59'),
(40, 'Quần Short Kaki', 324678, 'quanshortkaki.jpg', 'Họ đã cắt ngắn ống quần để thích nghi với khí hậu và tiện lợi cho việc đi lại. Sau đó, short Bermuda chính thức được sử dụng thành đồng phục trong quân đội, và nhanh chóng trở thành kiểu mẫu thời trang nơi đây. Những khách du lịch đến Bermuda đã mang xu hướng này đi khắp thế giới.', 1, 1, 7, '2018-12-16 07:06:04', '2018-12-21 01:33:59'),
(41, 'Quần Short Thể Thao', 300678, 'quanshortthethao.jpg', 'Họ đã cắt ngắn ống quần để thích nghi với khí hậu và tiện lợi cho việc đi lại. Sau đó, short Bermuda chính thức được sử dụng thành đồng phục trong quân đội, và nhanh chóng trở thành kiểu mẫu thời trang nơi đây. Những khách du lịch đến Bermuda đã mang xu hướng này đi khắp thế giới.', 1, 0, 7, '2018-12-16 07:06:07', '2018-12-21 01:33:59'),
(42, 'Quần Short ', 324678, 'quanshortnau.jpg', '', 1, 1, 7, '2018-12-16 07:06:07', '2018-12-21 01:33:59'),
(43, 'Quần Âu hàn Quốc', 123412, 'quanauhanquoc.jpg', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 5, '2018-12-16 07:14:20', '2018-12-21 01:34:46'),
(44, 'Quần Âu Xám', 325567, 'quanauxam.jpg', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 5, '2018-12-16 07:14:20', '2018-12-21 01:34:46'),
(45, 'Quần Âu Đen', 456789, 'quanauden.jpg', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 1, 1, 5, '2018-12-16 07:16:01', '2018-12-21 01:34:46'),
(46, 'Quần Âu', 324666, 'quanau.jpg', 'Có rất nhiều dịp quan trọng yêu cầu trang phục lịch sự khiến không ít đàn ông bị lúng túng. Nếu chủ tiệc không đòi hỏi bạn phải mặc Âu phục (bộ suit) nhưng vẫn đề cao tính trang trọng, bạn có thể chọn 3 loại quần sau. Cả 3 đều dễ kết hợp với áo jacket hoặc áo choàng thể thao. Nếu việc phối hợp với blazer quá đơn điệu, bạn có thể đeo thêm cà-vạt, mặc thêm áo cardigan chất liệu cashmere hoặc thay đổi kiểu giày.', 0, 0, 5, '2018-12-16 07:16:01', '2018-12-21 01:34:46');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `khach`
--
ALTER TABLE `khach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id_loaisp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Các ràng buộc cho các bảng đã đổ
--

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
