-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 04:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_admin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name_admin`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Huynh Ngoc Phu', 'phu@113gmail.com', '202cb962ac59075b964b07152d234b70', '2022-05-05 17:00:00', '2022-05-05 17:00:00'),
(3, 'Bui Chi Hai', 'hai@113gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-05-05 17:00:00', '2022-05-05 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_img`
--

CREATE TABLE `detail_img` (
  `id` int(10) UNSIGNED NOT NULL,
  `images_url` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(15,4) NOT NULL DEFAULT 0.0000,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image_link` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `content`, `image_link`) VALUES
(19, 'Gucci Bloom Profumo Di Fiori', '200.0000', 'Hương đầu: Tinh chất hoa nhài Sambac, Rangoon Creeper (Chinese Osmanthus) Hương giữa: Ylang-Ylang, Hoa huệ tự nhiên, Nụ hoa nhài Hương cuối: Gỗ đàn hương, gỗ ướt đẫm nắng, Orris, Benzoin, Musks  Dòng nước hoa nổi tiếng của GUCCI BLOOM, bắt đầu với dòng nước hoa Gucci Bloom đầu tiên vào năm 2017 lại một lần nữa khuấy động không khí mùa Hè trong năm 2020 với mùi hương GUCCI BLOOM PROFUMO DI FIORI. “Gương mặt mới” trong địa đàng Gucci Bloom mê hoặc khứu giác bởi hương thơm nhiệt đới ấm áp và cảm hứng đầy kích thích từ hoa ylang-ylang pha trộn với những bông hoa trắng say đắm và hợp âm vốn đã nổi tiếng được tìm thấy trong tất cả các loại nước hoa Gucci Bloom: rangoon creeper, còn được gọi là osmanthus Trung Quốc (Combretum indicum), cây nho đỏ cụm hoa và có nguồn gốc từ vùng nhiệt đới châu Á.', '03.webp'),
(18, 'Gucci Guilty Eau', '200.0000', 'Xuất xứ: Anh, Đức, Pháp  Phong Cách Nữ tính, Nhẹ nhàng, Sang trong ', '01.webp'),
(20, 'Gift Set Gucci Guilty Pour Homme 2pcs', '199.0000', 'Thương hiệu Gucci Xuất xứ Anh, Đức, Pháp Năm phát hành 2011 Nhóm hương Hoa oải hương, Chanh vàng amalfi, Hoa cam châu phi', '04.webp'),
(21, 'Gucci Bamboo Eau De Toiltte', '100.0000', 'Hương đầu: Sicilian Bergamot, hoa cam, trái lê, Italian Mandarin Hương giữa: Casablanca Lily, hoa nhài, hoa ngọc lan tây Hương cuối: xạ hương trắng, long diên hương, tahitian vanilla, đàn hương  Cái tên đã gợi nhắc tôi một hình ảnh giản dị nhưng đầy khí chất của luỹ tre Việt Nam. Những nốt hương đầu đặc biệt quen thuộc nhưng vẫn cực kỳ nổi trội của họ nhà cam đến từ Sicilian bergamot, Italian mandarin, cho tới thoang thoảng hương hoa cam nhẹ nhàng dịu mát. Len lỏi trong đó còn là sự ngọt ngào, mát lành của những trái lê chín giòn. Mùi hương thuần khiết, giản đơn của những loài hoa trắng thanh nhã như hoa nhài, hoa ngọc lan tây và casablanca lily đã tô điểm cho vẻ đẹp dung dị và thanh cao của những quý cô.', '07.webp'),
(22, 'Gucci Flora By Gucci Eau de Toilette For Women', '200.0000', ' Thương hiệu Gucci Xuất xứ Anh, Pháp, Đức Năm phát hành 2009 Nhóm hương Hoa mẫu đơn, Hương cam chanh, Hoa mộc Phong cách Dễ thương, Nữ tính, Nhẹ nhàng', '12.webp'),
(23, 'Gucci Flora Gracious Tuberose', '100.0000', 'Hương đầu: Lá hoa tím, Quà đào Hương giữa: Hoa huệ, Hoa cam, Hoa hồng Hương cuối: Gỗ tuyết tùng, Labdanum  Nếu mùi hương của Gỗ có thể làm ta cảm thấy tĩnh tại và an yên ngay tắp lự, thì hương Hoa lại là thứ thần dược khiến ta bay bổng, hứng khởi và tràn đầy say mê. Và điều này cũng không ngoại lệ với Gucci Flora Gracious Tuberose, hương hoa của sự sống, tôi có thể nói là vậy.  Mở đầu với nốt hương không thể mọng nước hơn với Đào, Gracious Tuberose nhanh chóng chuyển mình thêm phần kỳ bí, uyển chuyển với Hoa huệ - thứ hoa vốn dĩ đã quá mỹ miều - khi di chuyển đến lớp hương giữa', '05.webp'),
(24, 'Gucci Flora by Gucci Eau de Parfum', '188.0000', 'Hương đầu: Hoa mẫu đơn, Các notes cam chanh, Quả quýt. Hương giữa: Hoa mộc tê (Osmanthus), Hoa hồng. Hương cuối: Gỗ đàn hương, Tiêu hồng, Hoắc hương.  Flora by Gucci Eau de Parfum là một mùi hương thuộc nhóm hương hoa dành cho nữ đến từ Gucci, được ra mắt năm 2010.  Flora by Gucci Eau de Parfum là một flanker thuộc bộ sưu tập Flora by Gucci, với phiên bản gốc là Floral by Gucci Eau de Toilette (2009). Flora by Gucci Eau de Parfum được Gucci công bố là nó có mùi hương mãnh liệt, quyến rũ, phong phú và có chiều sâu hơn so với phiên bản gốc. Những notes hương của Flora by Gucci Eau de Parfum hứa hẹn sẽ có một sự thể hiện trẻ trung và lạc quan giống như phiên bản eau de toilette đã thể hiện trước đó. Sự khác biệt lớn nhất chính là nồng độ mạnh hơn của phiên bản EDP. Flora by Gucci được Frida Giannini lên ý tưởng và sáng tạo, lấy cảm hứng từ họa tiết hoa Gucci được sử dụng lần đầu tiên làm khan quàng cổ cho Công nương xứ Monaco. Thứ này đã khiến cho phái đẹp mê mẩn với những chi tiết sang trọng, quyến rũ và nữ tính trong nhiều thập kỷ. Flora by Gucci Eau de Parfum được đặc trưng bởi những notes hương tươi mát của các notes hương cam chanh (citrus) ở phần mở đầu, kết hợp với hoa mẫu đơn xinh đẹp. Trái tim của mùi hương được cân bằng bởi hoa hồng và hoa mộc tê (Osmanthus), tạo ra sự nữ tính, quý phái và quyến rũ cho những quý cô khoác Flora by Gucci Eau de Parfum lên mình. Mùi hương kết thúc bởi hương thơm ngậy ngọt của gỗ đàn hương, cùng sự tươi xanh tự nhiên của hoắc hương. Phiên bản EDP sang trọng hơn, mạnh mẽ hơn phiên bản gốc kể cả ở mùi hương lẫn ở chai đựng, mặc dù phần lớn là tương đương, nhưng chai của Flora by Gucci Eau de Parfum được trang trí bằng các chi tiết vàng trên dải nơ đen, nắp đen và bới nồng độ của chai nước hoa là EDP, nên chất lỏng sẫm màu hơn. Flora by Gucci Eau de Parfum là một mùi hương đáng yêu, sang trọng, và đa dụng, nhưng cá nhân tôi nghĩ mùi hương này sẽ có màn biểu diễn tốt nhất khi đi tiệc, đi ăn và đi hẹn hò bình thường.', '11.webp'),
(26, 'Gucci Flora Gorgeous Gardenia Eau de Parfum', '50.0000', 'Hương đầu: Hoa Lê Hương giữa: Hoa Nhài, Cây Dành Dành; Hương cuối: Đường Nâu, Hoắc Hương.   Gucci Flora Gorgeous Gardenia bắt đầu trở lại với một phiên bản Eau de Parfum mới thể hiện sự mạnh mẽ và sắc sảo hơn so với phiên bản Eau de Toilette ban đầu.   Một dấu hiệu đặc trưng của những loài hoa cùng sắc thái tươi vui, mùi hương được xây dựng xung quanh hoa hoa Dành Dành, một loài hoa được biết đến như vẻ đẹp của buổi bình minh cùng hương sắc được coi như vẹn toàn và thường được sử dụng như một loại thuốc ma thuật.   Lấy cảm hứng từ truyền thuyết này và ý tưởng về sức mạnh thần bí của nó, nốt hương hoa Dành Dành tuyệt đẹp được kết hợp với Hoa Nhài mang lại năng lượng sáng ngời như một cách để tôn vinh vẻ đẹp của các loài hoa.   Mùi hương được tinh tế điểm xuyến thêm chút ngọt ngào của đường nâu và một nguồn năng lượng dồi dào tươi mát của Hoa lê tựa như sự bùng nổ ở khứu giác tạo ra một cảm giác thăng hoa, đầy sức sống. Nếu bạn là fan của một mùi hương ngào ngạt hoa cỏ nữ tính thì đừng bỏ qua em Gucci Flora Gorgeous Gardenia Eau de Parfum nhé! ', '02.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(3, 'Huynh Ngoc Phu', 'phu@113gmail.com', '202cb962ac59075b964b07152d234b70', '0387748207', '2022-05-04 17:00:00', '2022-05-04 17:00:00'),
(4, 'Bui Chi Hai', 'hai@113gmail.com', '698d51a19d8a121ce581499d7b701668', '0234561322', '2022-05-04 17:00:00', '2022-05-04 17:00:00'),
(5, 'Thai Ngoc Thinh', 'thinh@gmail.com', '7f6ffaa6bb0b408017b62254211691b5', '0234561322', '2022-05-04 17:00:00', '2022-05-04 17:00:00'),
(6, 'Nguyen Tran Thao Vy', 'vy@gmail.com', '73278a4a86960eeb576a8fd4c9ec6997', '0939615545', '2022-05-04 17:00:00', '2022-05-04 17:00:00'),
(7, 'Duong Ngoc Tran', 'tran@gmail.com', '5fd0b37cd7dbbb00f97ba6ce92bf5add', '0939615545', '2022-05-04 17:00:00', '2022-05-04 17:00:00'),
(8, 'Phu HUYNH', 'pgu@11gmail.com', '202cb962ac59075b964b07152d234b70', '0201226823', '2022-05-19 17:00:00', '2022-05-19 17:00:00'),
(9, 'Huynh Ngoc Phu phu', 'phu@0123', '202cb962ac59075b964b07152d234b70', '', '2022-05-09 17:00:00', '2022-05-09 17:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_img`
--
ALTER TABLE `detail_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_img_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `product` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `detail_img`
--
ALTER TABLE `detail_img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
