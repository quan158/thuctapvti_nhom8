-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2025 lúc 03:08 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlthucung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `address`
--

CREATE TABLE `address` (
  `id_address` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `address`
--

INSERT INTO `address` (`id_address`, `username`, `name`, `phone`, `address`) VALUES
(1, 'quan', 'Phí Quân', 231456987, '212, Minh Khai, Hai Bà Trưng, Hà Nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `phone`, `email`) VALUES
('quan', '123', 123, 'qqwe');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `name_pet` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `quantity_order` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `name_cat` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`name_cat`, `description`) VALUES
('cho', 'cho day'),
('mèo', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `messenger` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone`, `messenger`) VALUES
(1, 'Quân Quân', 'q@gmail.com', 321456977, '123'),
(2, 'Phí Văn Quân', 'quanleone158@gmail.com', 321456974, '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_library`
--

CREATE TABLE `image_library` (
  `id_image` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `path` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `image_library`
--

INSERT INTO `image_library` (`id_image`, `id_pet`, `path`) VALUES
(1, 1, '3.jpg'),
(2, 1, 'z6125895852181_eb5f81b1191747bbaaa65bc5b35714c9.jpg'),
(3, 1, '9c8a1188-7deb-4f7d-af82-56149be6c4f8.jpg'),
(4, 4, '3.jpg'),
(5, 4, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(6, 4, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpgz4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(7, 4, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(8, 6, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(9, 6, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(10, 6, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(11, 7, '441067259_958524935755226_6572460213346939356_n.jpg'),
(13, 7, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(14, 8, '441067259_958524935755226_6572460213346939356_n.jpg'),
(15, 8, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg'),
(16, 9, '441067259_958524935755226_6572460213346939356_n.jpg'),
(17, 9, 'z4233769230630_19c8778609a1d4be85e7846500d0c00f.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_pet` int(11) NOT NULL,
  `name_pro` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_pet`, `name_pro`, `quantity`, `total`) VALUES
(1, 1, '', 1, 74000000),
(2, 4, '', 1, 2001),
(6, 9, '', 1, 20),
(11, 9, '', 1, 20),
(12, 9, '', 1, 20),
(12, 4, '', 1, 2001),
(13, 1, '', 1, 74000000),
(14, 9, '', 1, 20),
(15, 9, 'mango', 1, 20),
(16, 4, 'Quân Quân1', 1, 2001),
(16, 6, 'mango', 2, 40);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_pro`
--

CREATE TABLE `order_pro` (
  `id_order` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `total_order` int(11) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_pro`
--

INSERT INTO `order_pro` (`id_order`, `username`, `name`, `phone`, `address`, `date`, `total_order`, `payment`, `status`) VALUES
(1, 'quan', 'Phí Quân', '231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '0000-00-00', 74030000, 'Thanh toán khi nhận ', 'Chờ'),
(2, 'quan', 'Phí Quân', '231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-29', 32001, 'Thanh toán khi nhận ', 'Chờ'),
(6, 'quan', 'Phí Quân', '231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 30020, 'Thanh toán khi nhận ', 'Hoàn thành'),
(11, '', 'Quân', '0231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 30020, 'Thanh toán khi nhận ', 'Chờ'),
(12, '', 'Quân', '0231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 32021, 'Thanh toán khi nhận ', 'Chờ'),
(13, '', 'Quân', '0231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 74030000, 'Thanh toán khi nhận ', 'Chờ'),
(14, '', 'Quân', '0231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 30020, 'Thanh toán khi nhận ', 'Chờ'),
(15, '', 'Quân', '0231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 30020, 'Thanh toán khi nhận ', 'Chờ'),
(16, '', 'Quân', '0231456987', '212, Minh Khai, Hai Bà Trưng, Hà Nội', '2024-12-30', 32041, 'Thanh toán khi nhận ', 'Chờ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pet`
--

CREATE TABLE `pet` (
  `id_pet` int(11) NOT NULL,
  `name_pet` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `quantity` int(200) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `price` int(200) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pet`
--

INSERT INTO `pet` (`id_pet`, `name_pet`, `category`, `quantity`, `gender`, `price`, `picture`, `description`) VALUES
(1, 'cho 1', 'cho', 20, 'Male', 74000000, 'a9bfe452-8e62-4dc8-bebb-b6fa088b4be9.jpg', '                                                                                                                                    1.2 Lịch sử phát triển của giống Husky\r\n\r\nNhững năm 1908, Chó Husky bắt đầu xuất hiện tại một tiểu bang Mỹ tên Alaska. Và sau đó, chúng trở thành lực lượng chuyên chở chính cùng với giống chó Alaska Malamute bản địa.\r\n\r\n\r\n\r\nĐến năm 1930, Chó Husky được Hiệp hội chó giống Hoa Kỳ (AKC) đặt tên là “Husky Bắc Cực”. Năm 1991, chúng được đổi tên chính thức thành “Husky Sibir”, mang ý nghĩa nguồn gốc từ vùng Siberia.\r\n\r\n\r\n\r\nNgày nay, khi việc kéo hàng không còn là nhiệm vụ chính, Chó Husky trở thành một trong những thú cưng được ưa chuộng trên thế giới, trong đó có Việt Nam.                                                                                                                        '),
(4, 'Quân Quân1', 'cho', 2001, 'Male', 2001, 'a9bfe452-8e62-4dc8-bebb-b6fa088b4be9.jpg', '                                            123                                        '),
(6, 'mango', 'cho', 20, 'Đực', 20, 'a9bfe452-8e62-4dc8-bebb-b6fa088b4be9.jpg', '123'),
(7, 'mango', 'cho', 20, 'Đực', 20, 'a9bfe452-8e62-4dc8-bebb-b6fa088b4be9.jpg', '123'),
(8, 'mango', 'mèo', 20, 'Đực', 20, 'a9bfe452-8e62-4dc8-bebb-b6fa088b4be9.jpg', '12'),
(9, 'mango', 'cho', 20, 'Đực', 20, 'a9bfe452-8e62-4dc8-bebb-b6fa088b4be9.jpg', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`username`, `password`, `phone`, `email`, `created_at`) VALUES
('ha', '$2y$10$SmT654JkbX.dgqLlJL9le.ITST9fy8CNb2WHn1j.zrt', '', 'q@gmail.com', '2025-01-06 13:59:01'),
('quan', '$2y$12$boXpRjIz2bGp/AEA8Zn33uUIwCqUDTEchP5g4fToTHQ', '', 'q@gmail.com', '2025-01-06 13:18:04'),
('quan1', '$2y$12$boXpRjIz2bGp/AEA8Zn33uUIwCqUDTEchP5g4fToTHQ', '', 'quanleone158@gmail.com', '2025-01-06 13:44:08');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id_address`);

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `user` (`username`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`name_cat`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Chỉ mục cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `FK_order` (`id_order`),
  ADD KEY `id_pet` (`id_pet`);

--
-- Chỉ mục cho bảng `order_pro`
--
ALTER TABLE `order_pro`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `username` (`username`);

--
-- Chỉ mục cho bảng `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`id_pet`),
  ADD KEY `name_cat` (`category`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `address`
--
ALTER TABLE `address`
  MODIFY `id_address` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `image_library`
--
ALTER TABLE `image_library`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `order_pro`
--
ALTER TABLE `order_pro`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `pet`
--
ALTER TABLE `pet`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id_pet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `image_library`
--
ALTER TABLE `image_library`
  ADD CONSTRAINT `image_library_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id_pet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_order` FOREIGN KEY (`id_order`) REFERENCES `order_pro` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_pet`) REFERENCES `pet` (`id_pet`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `name_cat` FOREIGN KEY (`category`) REFERENCES `category` (`name_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
