-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2018 at 02:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixyourhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(15) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_image`) VALUES
(11, 'Ruang Dapur', 'Dapur_pic.jpg'),
(12, 'Ruang Tidur', 'Ruang_tidur_pic.jpg'),
(13, 'Kamar Mandi', 'Kamar_mandi_pic.jpg'),
(14, 'Elektronik', 'Elektronik_pic.jpg'),
(15, 'Furnitur', 'Furnitur_pic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(15) NOT NULL,
  `comment_post_id` int(15) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(23, 16, 'joe', 'joe@gmail.com', 'mangstab jiwa', 'Unapproved', '2018-01-05'),
(24, 31, 'Lamtiur', 'lamtiurpardede@gmail.com', 'Sangat membantu, gan!', 'Unapproved', '2018-01-10'),
(25, 31, 'Arren Rediman Yosafat Situngkir', 'arrenyosafat@gmail.com', 'about nathan brown nya dihilangkan aja, biar enak nanti diliat isi konten nya, halaman nya hanya betul betul berisi konten, tidak ada campur aduk dari konten yang lain.', 'Unapproved', '2018-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(15) NOT NULL,
  `post_category_id` int(15) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`) VALUES
(14, 14, 'Mengganti Lampu Rumah yang Putus', 'Admin', '2018-01-11', 'bohlam.jpg', '<p style=\"text-align:justify\">Berikut ini saya akan membagikan tips-tips bagaimana cara mengganti lampu rumah yang putus agar aman, dan lampu rumah bisa menyala kembali.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>1. Pastikan Spesifikasi Lampu Sesuai Dengan Tegangan di Rumah</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Di setiap badan lampu atau&nbsp;peralatan listrik,&nbsp;pasti terdapat spesifikasi dari alat tersebut. Misal tegangannya berapa, daya dan sebagainya. Untuk di Indonesia, tegangan standart rumah menggunakan 220 volt/50 Hz. Pastikan spesifikasi di lampu yang mau diganti tegangannya sesuai (220v/50Hz). Kemudian gunakan lampu yang besar dayanya sesuai dengan kebutuhan, kalau daya terlalu kecil penerangan di ruangan akan kurang/redup. Sedangkan kalau daya terlalu besar pandangan akan menjadi silau dan panas. Untuk penerangan rumah biasanya per meter persegi tidak boleh lebih dari 10 watt.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>2. Pastikan saklar lampu dalam keadaan mati sebelum membuka lampu yang rusak</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Sebelum membuka lampu yang rusak dan menggantinya dengan yang baru, pastikan saklar lampu tersebut dalam keadaan mati/<em>off</em>. Akan lebih aman lagi kalau kita memasang&nbsp;<em>tag out</em>&nbsp;atau tanda dilarang menyalakan. Untuk pengamanan apabila ada orang lain dalam rumah kalian yang tidak tahu sedang ada perbaikan lampu.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">3. Pegang tubuh lampu, bukan pada bagian kacanya</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Saat memutar lampu, gunakan tubuh lampu sebagai tumpuan, bukan bagian kacanya. Karena hal ini bisa menimbulkan lampu akan gampang putus. Selain itu, terkadang lampu yang sudah lama menyala biasanya akan menimbulkan panas tinggi. Hati-hati sebelum melepas lampu yang rusak, pastikan lampu tersebut dalam keadaan dingin. Atau gunakan sarung tangan untuk melindungi tangan kalian dari panasnya lampu.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">4. Memasang lampu jangan terlalu kencang</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Saat memasang lampu baru, seringkali kita memutar lampu terlalu kencang. Hal ini sebaiknya dihindari untuk mencegah kerusakan pada lampu ataupun ulir di fitting. Kencangkanlah semampunya saja. ketika lampu sudah tidak bisa diputar, itu artinya lampu sudah terpasang dengan benar. Tidak perlu dikencangi lagi, apalagi sampai ngotot.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">5. Nyalakan Saklar Lampu</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Setelah semua&nbsp;<em>step</em>&nbsp;di atas selesai dilakukan, saatnya menyalakan saklar lampu kembali. Kalau lampu menyala dengan normal, msalah kalian selesai. Tapi setelah lampu dipasang terjadi korsleting listrik, kemungkinan kerusakan ada di bagian fitting atau lampu yang baru kondisinya tidak bagus. Kalau kalian mampu bisa dicek sendiri, kalau tidak mampu sebaiknya panggil orang lain yang memang sudah ahli dibidang kelistrikan.</p>\r\n\r\n<p style=\"text-align:justify\">Berikut merupakan video tutorialnya :</p>\r\n\r\n<p style=\"text-align:center\"><iframe frameborder=\"0\" height=\"315\" src=\"https://www.youtube.com/embed/Rc8bYbBokfA\" width=\"560\"></iframe></p>\r\n', 'lampu, putus, rumah', '0'),
(16, 11, 'Memperbaiki Kompor Gas yang Tidak Keluar Bunga Api', 'Admin', '2018-01-11', 'ventury+lubang, spuyer 0.75, lubang angin 4 biasa 3.5.jpg', '<p>Untuk mengatasi masalah di mana kompor gas tidak mengeluarkan bunga api pada saat pematik api di putar&nbsp;adalah :</p>\r\n\r\n<h4 style=\"text-align:justify\">1. Lepasnya bagian kabel pematik api</h4>\r\n\r\n<p style=\"text-align:justify\">Untuk mengatasi hal tersebut tentunya dengan cara memasang kabel pematik api tersebut kembali.&nbsp;Silahkan perhatikan beberapa bagian sehingga anda bisa memasang ulang untuk kabel pematik api tersebut.</p>\r\n\r\n<h4 style=\"text-align:justify\">2. Membersihkan bagian di sekitar pematik api</h4>\r\n\r\n<p style=\"text-align:justify\">Hal tersebut&nbsp;dikarenakan debu yang menempel pada bagian pematik api.&nbsp;Untuk mengatasi hal tersebut tentunya kita bisa membersihkan bagian di sekitar pematik api.</p>\r\n\r\n<h4 style=\"text-align:justify\">3. Mengganti pematik api yang sudah aur</h4>\r\n\r\n<p style=\"text-align:justify\">Hal tersebut dikarenakan pematik api tiap hari harus bergesekan sehingga lama kelamaan pasti akan mengalami&nbsp;aus.&nbsp;Untuk mengatasi hal tersebut kita bisa mengganti dengan pematik api yang baru.&nbsp;Biasanya harga dari pematik api yang baru tidaklah terlalu mahal,&nbsp;ada di kisaran 15 hingga 20 ribu rupiah.</p>\r\n', 'kompor, gas, bunga api, rusak', '0'),
(18, 15, 'Memasang Gagang Pintu Lemari', 'Admin', '2018-01-11', 'Putra Gembira Jombang - Jual Lemari Kayu - Pegangan Pintu.JPG', '<p style=\"margin-left:0in; margin-right:0in\"><span style=\"font-size:11pt\">Pegangan pada pintu lemari Anda rusak? Sehingga mengganggu pergerakan Anda untuk membuka lemari? Disini, Anda dapat memperbaiki pegangan pada pintu lemari Anda dengan mempersiapkan beberapa peralatan seperti mur dan obeng, cara yang harus dilakukan juga cukup mudah kok, yaitu:</span></p>\r\n\r\n<p><span style=\"font-size:14px\">1. Hal yang paling penting harus Anda perhatikan adalah mengecek ukuran mur yang mungkin tidak berada disana atau yang hilang. </span></p>\r\n\r\n<p><span style=\"font-size:14px\">2. Jika Anda sudah menemukan ukuran mur yang tepat, maka Anda bisa melekatkan pegangan pada pintu lemari yang rusak dan mengatur posisinya.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">3. Jika posisinya sudah sesuai dengan kondisi yang diinginkan, maka Anda bisa menggunakan obeng untuk membantu Anda untuk memutar mur hingga benar-benar menempel ke posisi yang seharusnya.</span></p>\r\n\r\n<p><span style=\"font-size:14px\">4. Lakukan langkah 1-3 untuk pemasangan mur lebih lengkap.</span></p>\r\n\r\n<p><span style=\"font-size:11pt\">Selamat mencoba ðŸ˜Š</span></p>\r\n', 'gagang, pintu, lemari, memasang', '0'),
(31, 12, 'Mengatasi Kamar Tidur yang Lembab', 'Admin', '2018-01-08', 'Rumah-Lembab.jpg', '<p style=\"text-align:justify\">Berikut kami rangkumkan tips mengatasi kamar lembab :</p>\r\n\r\n<h3 style=\"text-align:justify\">1. Cari Sumber Kelembaban</h3>\r\n\r\n<p style=\"text-align:justify\">Untuk masalah kurangnya pencahayaan matahari, Anda bisa menyiasatinya dengan mengganti empat genteng di atas kamar lembab tersebut dengan genteng kaca. Jangan lupa lubangi asbes rumah berukuran persegi empat di atas genteng kaca tersebut. Hal ini bisa membantu sinar matahari memasuki kamar lembab tersebut setiap siang. Sehingga udara lembab bisa terkurangi.</p>\r\n\r\n<h3 style=\"text-align:justify\">2. Beri Ventilasi</h3>\r\n\r\n<p style=\"text-align:justify\">Tips mengatasi kamar lembab kedua adalah dengan membuat ventilasi. Bila tidak memungkinkan ventilasi keluar karena rumah berdempetan dengan rumah tetangga, buat ventilasi di atas pintu. Keberadaan ventilasi penting sekali untuk sirkulasi udara. Berikut aturan umum membuat ventilasi dalam kamar :&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Ukur luas ventilasi. Batasan luas minimal ventilasi adalah 15 persen dari ukuran lantai ruangan. Luas lubang ventilasi insidental minimal lima persen dari luas lantai.</li>\r\n	<li style=\"text-align:justify\">Aliran udara yang masuk sebaiknya saling berhadapan (cross ventilation), namun jika tidak memungkinkan, satu ventilasi di atas pintu lebih baik adanya. Hal ini bisa disiasati dengan menambahkan exhaust fan yang akan kami bahas selanjutnya.</li>\r\n</ul>\r\n\r\n<h3 style=\"text-align:justify\">3. Pasang Exhaust Fan</h3>\r\n\r\n<p style=\"text-align:justify\">Exhaust fan berbeda dengan kipas angin. Exhaust fan berbentuk seperti kipas angin namun memiliki mode dua putaran yang bisa menyedot udara dalam kamar dan membuangnya ke luar. Sehingga menggunakan exhaust fan bisa membuat udara lembab kamar menjadi berkurang dan membuat udara kamar menjadi lebih sejuk. Perkiraan harga exhaust fan adalah 350 ribu hingga 500 ribu rupiah, tergantung ukuran dan merk yang dipilih. Ada tiga jenis exhaust fan berdasarkan cara memasangnya, yaitu :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Ceiling mount. Exhaust jenis ini dipasang di plafon rumah</li>\r\n	<li style=\"text-align:justify\">Wall mount. Exhaus jenis ini ditanam di dinding</li>\r\n	<li style=\"text-align:justify\">Window mount. Exhaust jenis ini dipasang di kusen atau lubang ventilasi.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Ketiga jenis exhaust fan memiliki kegunaan yang sama. Untuk cara paling mudah dalam pemasangan, tentunya window mount pilihannya. Untuk ruangan yang bernar-benar tidak ada aliran udara keluar masuk, ceiling mount atau jenis exhaust fan yang dipasang di plafon rumah adalah pilihan terbaik.</p>\r\n\r\n<h3 style=\"text-align:justify\">4. Pakai Cat Dinding Anti Lembab</h3>\r\n\r\n<p style=\"text-align:justify\">Sebaiknya dinding perlu diperkuat dengan lapisan semen sehingga menjadi lebih tahan air karena pori-pori dinding tidak menyerap&nbsp;air. Selanjutnya, Anda perlu mengecat dinding tembok dengan cat anti air. &nbsp;Beberapa cat tembok tahan air yang bisa Anda gunakan adalah cat No Drop, Elatex waterproof, Welproff, Aquaproof, Top Seal, Ultraproof. Cat anti air tersebut memiliki kandungan elastis dan kedap air.</p>\r\n', 'kamar, tidur, lembab', '0'),
(32, 14, 'Cara Memperbaiki Kipas Angin yang Tidak Berputar dan Berdengung', 'Admin', '2018-01-11', 'Cara-Memperbaiki-Kipas-Angin.jpg', '<p style=\"text-align:justify\"><span style=\"font-size:14px\">1. Bongkar kerangka kipas angin beserta baling balingnya</span></p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" src=\"/FixYourHouse Piccolo/images/Postingan/kipas%201.png\" style=\"height:150px; width:220px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Serta buka baut yang mengikat kerangka gulungan/spul kipasangin secara perlahan dan hati2 jangan sampai kabel penghubung dengan gulungan terputus, karena akibatnya bisa fatal bila anda tidak bisa menemukan / menyambung kembali kabel yang putus.&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">2. Lepaskan bearing dari rumahnya</span></p>\r\n\r\n<p><img alt=\"\" src=\"/FixYourHouse Piccolo/images/Postingan/kipas%202.png\" style=\"height:150px; width:220px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Dan coba perhatikan jika terjadi ke-ausan pada liner bearing, berarti bearing harus diganti. bearing ini banyak dijumpai di pasaran dan harganya pun relatif murah.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">3. Bersihkan kipas sebelum dirakit kembali</span></p>\r\n\r\n<p style=\"text-align:justify\">Setelah bearing diganti, sebelum kita menutup kembali (merakit kipas) tidak ada salahnya jika kita bersihkan semua kotoran yang menempel, caranya dengan menggunakan tiner atau bensin tapi jangan lupa sebelum dirakit harus kering dari bensin atau tiner. Yang paling utama adalah Bersihkan kipas angin dengan kain yang bersih, kemudian berikan sedikit baby oil atau paslin (jangan terlalu banyak dan hanya asnya saja) yang terpenting permukaan as yang berhubungan langsung dengan laher/bearing terlumasi.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">4. Rangkai kipas kembali</span></p>\r\n\r\n<p style=\"text-align:justify\">Setelah semuanya bersih dan dirangkai, kipas siap di coba.</p>\r\n', 'kipas, angin, berputar, berdengung, elektronik', '0'),
(33, 14, 'Cara Mengatasi Masalah yang Sering Muncul Pada Setrika Listrik', 'Admin', '2018-01-08', 'baju-5.jpg', '<p style=\"text-align:justify\">Setrika adalah salah satu alat rumah tangga yang sangat penting. Hampir disetiap rumah dipastikan mempunyai setrika, terutama setrika listrik. Sebagai alat untuk melicinkan pakaian, setrika amat sering digunakan. Orang normalnya menyetrika dua kali seminggu, namun ada juga yang menyetrika setiap hari. Hal ini bisa membuat setrika cepat rusak. Ada berbagai jenis kerusakan setrika listrik, diantaranya adalah:</p>\r\n\r\n<h3 style=\"text-align:justify\">1. Setrika tidak Panas</h3>\r\n\r\n<p style=\"text-align:justify\">Jika setrika tidak &nbsp;panas namun lampu indikator nyala, ini kerusakan yang sering terjadi, biasanya karena kabel ACnya putus. Namun bila lampu indikator tidak nyala tapi setrika anda tidak kunjung panas, kemungkinan besar elemennya yang rusak. Kalau anda punya alat Avometer, bisa dicek sesuai dengan aturan pakainya.</p>\r\n\r\n<h3 style=\"text-align:justify\">2. Setrika Tidak Terlalu Panas</h3>\r\n\r\n<p style=\"text-align:justify\">Bisa jadi karena thermostat yang tidak dapat mengalirkan arus listrik pada elemen pemanas sehingga tidak terjadi pemanasan, atau panas yang kurang karena aliran arus pada thermostat ke elemen pemanas kurang.</p>\r\n\r\n<h3 style=\"text-align:justify\">3.&nbsp;Setrika terlalu panas</h3>\r\n\r\n<p style=\"text-align:justify\">Nah kalau setrika terlalu panas, kemungkinannya adalah pengatur suhu terlalu melekat ke bagian lempengan, sehingga ketika suhu yang dimaksud sudah tercapai namun si thermostat susah untuk melepaskan diri dari bagian lempengan, sehingga pemanasan akan terus terjadi.</p>\r\n\r\n<h3 style=\"text-align:justify\">4. Badan setrika menyetrum</h3>\r\n\r\n<p style=\"text-align:justify\">Kemungkinan besar ada bagian kabel atau komponen lain yang mengelupas dan menempel pada bagian badan setrika. Segera atasi hal ini dengan mencari letak kebocoran karena sangat berbahaya. Carilah letak kebocoran arus tersebut lalu diperbaiki dengan memberi isolasi pada bagian yang bermasalah. Hal ini bisa juga akibat elemen pemanas yang isolasinya sudah jelek, sehingga listrik menempel pada alas setrika.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">5. Kabel setrika menyetrum</h3>\r\n\r\n<p style=\"text-align:justify\">Gerakan menyetrika yang maju mundur, kekanan dan kekiri, bisa menyebabkan kabel terkelupas. Walau kabel sudah dilapisi dengan benang tebal untuk menghindari hal ini, namun lama kelamaan akan rusak juga. Hal ini bisa diatasi dengan memberikan solasi listrik pada kabel yang terbuka.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">6. Setrika mati total</h3>\r\n\r\n<p style=\"text-align:justify\">Ditandai dengan lampu indikator yang tidak menyala dan setrika yang tetap dingin. Untuk mengetahui masalahnya, silakan gunakan avometer. Pemeriksaan bisa dimulai dari kabel steker. Apabila tidak ada masalah, silakan dilanjutkan ke bagian selector.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">7.&nbsp;Hasil setrika tidak licin</h3>\r\n\r\n<p style=\"text-align:justify\">Ini disebabkan oleh kotoran yang menempel pada alas setrika. Untuk membersihkannya bisa menggunakan daun pisang atau garam. Kalau anda punya daun pisang, setrikalah beberapa daun pisang hingga kotoran hilang. Jika sudah selesai, dan setrikaan sudah dingin, laplah dengan menggunakan lap lembab. Jika tidak ada daun pisang, anda bisa menggunakan garam. Letakkan Koran diatas alas setrika, taburi dengan garam. Setrikalah garam tadi, setelah kotoran terangkat, matikan setrika, tunggu hingga dingin, lalu lap dengan kain lembab.</p>\r\n\r\n<h3 style=\"text-align:justify\">8.&nbsp;Setrika kadang hidup kadang mati</h3>\r\n\r\n<p style=\"text-align:justify\">Penyebabnya adalah arus yang masuk tersendat-sendat, ini bisa karena steker yang sudah hampir putus, baud terminal longgar atau besi penghantar yang kurang pas.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">9.&nbsp;Elemen rusak</h3>\r\n\r\n<p style=\"text-align:justify\">Elemen adalah sumber panas sebuah setrika. Komponen ini merubah energi listrik menjadi panas. Komponen ini biasanya banyak tersedia di toko-toko elektrik, atau service center produsen setrika tersebut.&nbsp;</p>\r\n\r\n<h3 style=\"text-align:justify\">10.&nbsp;Pengatur suhu rusak</h3>\r\n\r\n<p style=\"text-align:justify\">Ketika suhu setrika sudah mencapai suhu yang kita inginkan, maka lempengan bimetal akan melepaskan diri dari elemen pemanas. Sehingga suhu akan terkontrol sesuai dengan apa yang kita inginkan. Ada beberapa hal yang menyebabkan pengatur suhu tidak bekerja, yaitu kontak yang kotor atau &nbsp;drat ulir potensio thermostat sudah aus.</p>\r\n\r\n<h3 style=\"text-align:justify\">11.&nbsp;Stop kontak bermasalah</h3>\r\n\r\n<p style=\"text-align:justify\">Anda harus selalu mengontrol stop kontak yang digunakan, karena jika stop kontak yang anda gunakan rusak, kotor atau tidak terpasang sempurna, akan menyebabkan arus daya listrik berkurang.</p>\r\n', 'setrika, listrik, panas, kabel', '0'),
(34, 14, 'Mengatasi Masalah yang Sering Muncul Pada Penanak Nasi atau Magic Jar', 'Admin', '2018-01-11', 'magic jar.png', '<p style=\"text-align:justify\">Dengan mengetahui cara kerja penanak nasi serta beberapa keluhan atau masalah yang biasanya timbul, kita sebenarnya tidak perlu lagi harus bersusah payah membawa peralatan penanak/pemanas nasi ke tempat service karena kita sudah bisa memperbaikinya sendiri, berikut masalah serta cara mengatasinya :</p>\r\n\r\n<h4 style=\"text-align:justify\">1.&nbsp;Nasi cepat basi/kuning/bau dan sejenisnya</h4>\r\n\r\n<p style=\"text-align:justify\">Biasanya ini terjadi karena elemen tutup tidak bekerja normal, bisa jadi putus atau mati. Silahkan coba ganti elemen tutup yang posisinya ada didalam penutup magic com/jar.</p>\r\n\r\n<h4 style=\"text-align:justify\">2. Nasi cepat kering atau mungkin gosong</h4>\r\n\r\n<p style=\"text-align:justify\">Ini biasa terjadi bila thermostate tidak berfungsi normal. Sebaiknya langsung saja diganti.</p>\r\n\r\n<h4>3. Tidak bisa panas, baik untuk menanak atau menghangatkan</h4>\r\n\r\n<p style=\"text-align:justify\">Untuk masalah ini kemungkinan besar kerusakan pada elemen body. Atau bisa juga pada thermostate (mungkin putus) atau bila ada sekringnya, coba cek putus atau tidak. Pastikan arus listrk mengalir ke elemen body.</p>\r\n\r\n<h4 style=\"text-align:justify\">4. Nasi Tidak Matang di Rice Cooker</h4>\r\n\r\n<p style=\"text-align:justify\">Ada beberapa penyebab mengapa nasi tidak &nbsp;matang alias rice cooker tidak bisa untuk menanak nasi. Kemungkinan thermostat lepas atau bergeser dari tempatnya. Cara mengatasinya adalah :&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Buka bagian dalam thermostat kemungkinan bagian magnet di dalamnya kotor atau terdapat kerak.&nbsp;</li>\r\n	<li style=\"text-align:justify\">Bersihkan dengan menggunakan amplas halus.</li>\r\n</ul>\r\n\r\n<h4 style=\"text-align:justify\">5. Lampu Indikator Mati</h4>\r\n\r\n<p style=\"text-align:justify\">Lampu indikator menanak (Cooking) atau menghangatkan (warming) mati biasanya hanya karena resistor atau lampu LED terbakar akibat terlalu panas.<br />\r\nSolusinya adalah dengan mengganti resistor atau lampu LED baru.</p>\r\n', 'magicjar, penanak, nasi', '0'),
(35, 11, 'Menghilangkan Kerak Pada Panci yang Gosong', 'Admin', '2018-01-11', 'panci.png', '<h4 style=\"text-align:justify\">1.&nbsp;Rendam dengan air panas</h4>\r\n\r\n<p style=\"text-align:justify\">Diamkan selama kurang lebih 1-2 jam, atau semalaman jika kerak gosongnya membandel. Gunakan sikat cuci piring, sendok kayu atau spatula plastik untuk mengelupas kerak selagi masih terendam air.</p>\r\n\r\n<h4 style=\"text-align:justify\">2. Isi panci dengan air biasa atau air mendidih</h4>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Isi panci atau wajan dengan air biasa atau air mendidih secukupnya.</li>\r\n	<li style=\"text-align: justify;\">Masukkan ke dalam oven. Nyalakan oven pada suhu 120C-140C.</li>\r\n	<li style=\"text-align: justify;\">Periksa setiap 30 menit untuk mengetahui apakah kerak gosong di panci sudah bisa dikelupas dengan spatula kayu.</li>\r\n	<li style=\"text-align: justify;\">Ketika air di dalam panci atau wajan hampir habis menguap, tuangkan air lagi hingga kerak gosong bisa dilepas semua.</li>\r\n</ul>\r\n\r\n<h4 style=\"text-align:justify\">3. Oleskan&nbsp;bubuk soda kue</h4>\r\n\r\n<p style=\"text-align:justify\">Jika setelah proses di atas kerak masih menggunakan bubuk soda kue yang dicampur dengan sedikit air hingga membentuk adonan pekat seperti odol.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Oleskan langsung di atas kerak yang membandel.</li>\r\n	<li style=\"text-align: justify;\">Diamkan selama 1-2 jam. Gosok lembut. Ingat untuk selalu menghindari penggunaan sabut cuci berbahan stainless steel, termasuk ketika Anda membersihkan panci berbahan stainless steel. Gunakan spons lembut untuk menggosoknya.</li>\r\n</ul>\r\n\r\n<h4 style=\"text-align:justify\">4. Cuci panci seperti biasa</h4>\r\n\r\n<p style=\"text-align:justify\">&nbsp;&nbsp;<img alt=\"\" src=\"/FixYourHouse Piccolo/images/Postingan/panci2.png\" style=\"height:198px; width:300px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Akhiri dengan mencuci panci atau wajan seperti biasa dengan sabun cuci piring cair, seperti Sunlight.<br />\r\n&nbsp;</p>\r\n', 'kerak, panci, dapur', '0'),
(36, 11, 'Cara Menghilangkan Karat Pada Panci dengan Cairan Asam', 'Admin', '2018-01-11', 'panci-berkarat.jpg', '<p style=\"text-align:justify\">Garam, bubuk soda kue, dan perasan jeruk lemon adalah beberapa contoh bahan dapur yang dapat membantu Anda menghilangkan karat pada peralatan rumah tangga, termasuk panci, penggorengan, dan setrika. Langkah-langkah dasar berikut ini bisa dipakai pada barang- barang berbahan logam mudah berkarat.</p>\r\n\r\n<h4 style=\"text-align:justify\">1. Menggunakan bubuk soda kue dan perasan jeruk lemon&nbsp;</h4>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Campur setengah sendok teh garam dan atau bubuk soda kue dengan satu sendok &nbsp;makan perasan jeruk lemon.</li>\r\n	<li style=\"text-align: justify;\">Oleskan ramuan di atas pada bagian yang berkarat.</li>\r\n	<li style=\"text-align: justify;\">Setelah 15 hingga 20 menit, usap dengan kain kering.</li>\r\n	<li style=\"text-align: justify;\">Jika perlu, ulangi langkah 2 dan 3 hingga Anda puas dengan hasilnya.</li>\r\n	<li style=\"text-align: justify;\">Selain menghilangkan karat, cara ini juga meninggalkan wangi jeruk segar.</li>\r\n</ul>\r\n\r\n<h4 style=\"text-align:justify\">2.&nbsp;Rendam dalam air cuka</h4>\r\n\r\n<p style=\"text-align:justify\">Asam rumah tangga tidak beracun ini di antara sejumlah aplikasi rumah tangga yang mampu mengatasi karat. Cukup tenggelamkan bahan berkarat di dalam cuka semalaman, kemudian kikis karat di pagi hari. Lebih baik menggunakan cuka sari apel dibandingkan cuka putih. Meskipun cuka putih juga dapat digunakan, ia tidak seefektif cuka sari apel.&nbsp;<br />\r\nMeskipun cuka efektif, ia relatif ringan. Anda mungkin perlu merendam barang tersebut lebih dari semalam; rendam dalam sehari mungkin lebih baik. Setelah mengangkat barang berkarat dari cuka, celupkan penggosok aluminium foil ke dalam cuk dan gosok barang tersebut dan hilangkan karat dengan mudah.</p>\r\n\r\n<h4 style=\"text-align:justify\">3.&nbsp;Gunakan fosfat atau asam klorida</h4>\r\n\r\n<p style=\"text-align:justify\">Rendam bahan berkarat dalam asam fosfat dan biarkan semalaman. Kemudian biarkan kering. Kikis bersih fosfat setelah permukaan kering. Asam fosfat dapat diperoleh dari minuman kola, rumput laut, dan molase.&nbsp;</p>\r\n\r\n<h4 style=\"text-align:justify\">4. Gunakan kentang</h4>\r\n\r\n<p style=\"text-align:justify\">Asam oksalat yang terkandung pada kentang membantu menghilangkan penumpukan karat. Metode ini sangat berguna untuk benda kecil yang berkarat, seperti pisau. Ada dua acara menggunakan kentang untuk menghilangkan karat:<br />\r\nCara 1 :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Tusukkan pisau masuk ke dalam kentang dan biarkan selama sehari atau semalam.</li>\r\n	<li style=\"text-align: justify;\">Angkat pisau dari kentang dan gosok bersih karat.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Cara 2 :</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: justify;\">Iris kentang menjadi dua bagian, lapisi bagian dalam dengan soda kue secukupnya, dan gosoklah dengan kuat permukaan berkarat dengan kentang berlapis soda kue.</li>\r\n	<li style=\"text-align: justify;\">Kemudian gosok dengan bahan abrasive, seperti sabut baja.</li>\r\n</ul>\r\n\r\n<h4 style=\"text-align:justify\">5. Hapus karat dengan minuman soda cola</h4>\r\n\r\n<p style=\"text-align:justify\">Tempatkan barang berkarat di dalam gelas atau tempat lebih besar yang terisi minuman kola. Biarkan terendam atau cukup dicelupkan saja. Periksa setiap setengah jam untuk memeriksa hasilnya. Kola seharusnya mamppu bekerja dengan baik.&nbsp;<br />\r\n&nbsp;</p>\r\n', 'panci, karat, cairan, asam', '0'),
(37, 13, 'Membersihkan Tirai Kamar Mandi yang Berjamur', 'Admin', '2018-01-11', 'kaca kamar mandi.png', '<p style=\"text-align:justify\">Setiap hari, pintu kaca dan tirai shower kamar mandi Anda terkena air, buih sabun dan sampo. Kaca dan tirai plastik yang semula jernih pun lama-kelamaan berubah menjadi buram karena tertutup lapisan minyak, kerak kapur air, buih yang mengering, dan jamur. Oleh karena itu, Anda perlu membersihkan tirai atau kaca pemisah bagian basah dan kering di dalam kamar mandi. Berikut ini cara membersihkan kaca kamar mandi dan tirai shower :</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">1. Rendam tirai kain atau plastik ke dalam bak berisi air bercampur deterjen berbuih selama satu malam.</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>2. Gosok jamur di lipatan-lipatan tirai menggunakan sikat gigi bekas.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>3. Masukkan tirai ke dalam mesin cuci bersama dengan satu atau dua handuk lalu jalankan mesin cuci.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>4. Tambahkan sedikit cuka ke dalam mesin cuci pada bilasan terakhir sebagai disinfektan dan untuk menghilangkan bau tirai.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>5. Untuk tirai yang tidak dapat dicuci memakai mesin cuci, bersihkan dengan semprotan pembersih lalu seka hingga bersih.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'kaca, kamar, mandi, berjamur', '0'),
(38, 13, 'Membersihkan Kloset Duduk dan Menghilangkan Bau Toilet', 'Admin', '2018-01-11', 'kloset.png', '<p style=\"text-align:justify\">Kesibukan sehari-hari tidak semestinya menjadi alasan untuk mengabaikan kebersihan toilet, terutama dengan mengetahui fakta bahwa bakteri dan kuman merupakan penyebab WC bau dan bisa berdampak buruk pada kesehatan penghuni rumah. Perhatikan dan tangani kebersihan kloset Anda secara rutin agar kerak kapur dan noda tidak sampai menumpuk dan sulit dihilangkan.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">1. Tutup aliran air ke tangki penampung air WC duduk Anda.</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">2. Lalu gelontor sisa air untuk mengosongkan mangkuk toilet</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">3. Angkat dudukan kloset</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">4. Kucurkan cairan disinfektan toilet</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Kucurkan cairan disinfektan toilet di sepanjang pinggiran bawah bagian dalam toilet dan biarkan cairan tersebut menetes ke permukaan mangkuk toilet. Gunakan sikat toilet untuk meratakan cairan ke seluruh permukaan dalam mangkuk. Biarkan disinfektan bekerja selama beberapa saat.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\"><strong>5. Sambil menunggu, tutup toilet dan bersihkan bagian luar toilet</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Gunakan semprotan antibakteri dan tisu lap sekali pakai untuk menyeka tangki penampung air toilet, tombol penggelontor air, engsel tutup WC, kedua sisi tutup WC, permukaan luar mangkuk toilet, dan kedua sisi dudukan toilet.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">6. Gosok bagian dalam mangkuk toilet</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Anda dapat memakai sikat WC dengan prioritas pinggiran bagian bawah mulut toilet dan leher angsa</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">7. Siram toilet dan sikat toilet dengan air bersih.</span></strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"font-size:14px\">8. Gunakan batu apung basah untuk menggosok secara lembut kerak kapur yang membandel</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">Hal yang perlu Anda ketahui juga, bahwa batu apung digunakan bukan untuk permukaan keramik wc toilet.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:14px\">Jika Anda ragu-ragu atau takut menggores permukaan toilet, merujuklah pada petunjuk perawatan toilet Anda.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'kloset, bau, toilet', '0'),
(39, 13, 'Mengatasi Toilet Mampet Tanpa Penyedotan', 'Admin', '2018-01-11', 'mengatasi-toilet-tersumbat-tanpa-perlu-disedot.jpg', '<p style=\"text-align:justify\">Ada beberapa cara yang praktis untuk mengatasi WC tersumbat. Anda bisa menggunakan produk pembersih sehari-hari dan sejumlah benda untuk melancarkan toilet tersumbat. Berikut ini yang perlu Anda lakukan :</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>1. Untuk sumbatan akibat tisu atau kertas</strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">\r\n	<p>Tuang sabun cuci piring cair seperti Sunlight ke dalam toilet</p>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<p>Kemudian tuang air panas secukupnya.</p>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<p>Diamkan selama beberapa menit.</p>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<p>Lalu Anda dapat menyiramnya seperti biasa.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>2. Untuk sumbatan akibat benda keras</strong></span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:justify\">Gunakan alat pembantu untuk mengatasi sumbatan akibat benda keras semisal mainan anak-anak.</li>\r\n	<li>\r\n	<p style=\"text-align:justify\">Alat-alat yang bisa membantu antara lain selang panjang dan hanger yang terbuat dari kawat. Kedua benda ini bisa dimasukkan ke dalam pipa pembuangan untuk meraih benda yang menyumbat.</p>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<p>Sebisa mungkin tarik benda keras yang menyumbat.</p>\r\n	</li>\r\n	<li style=\"text-align:justify\">\r\n	<p>Berhati-hatilah ketika memakai hanger berbahan kawat agar tidak menggores permukaan toilet.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">Satu masalah teratasi, Anda pun bisa memanfaatkan momentum ini untuk sekaligus membersihkan toilet, terutama dari percikan air yang keluar dari lubang toilet selama Anda berusaha mengatasi sumbatannya.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n', 'toilet, mampet, penyedotan', '0');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(15) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `saran_id` int(15) NOT NULL,
  `saran_category_id` int(15) NOT NULL,
  `saran_email` varchar(25) NOT NULL,
  `saran_date` date NOT NULL,
  `saran_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`saran_id`, `saran_category_id`, `saran_email`, `saran_date`, `saran_content`) VALUES
(7, 14, 'joe@gmail.com', '2018-01-08', 'wow'),
(8, 12, 'if415027@students.del.ac.', '2018-01-10', 'Memperindah Kamar TIdur'),
(9, 15, 'arrenyosafat@gmail.com', '2018-01-10', 'How to fix a brokenhearted'),
(10, 15, 'esteremarbun@gmail.com', '2018-01-10', 'Cara bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_email`, `user_role`) VALUES
(1, 'admin', 'admin', 'fixyourhouse@gmail.com', '1'),
(2, 'ariansyahn', 'bebeb2121', 'ariansyahn@gmail.com', '2'),
(3, 'raju', 'raju', 'raju@gmail.com', '2'),
(4, 'desy', 'desy', 'desy@gmail.com', '2'),
(5, 'her', 'her', 'hermina@blabla', '2'),
(6, 'hrmna', 'hrmna', 'heer@blabla', '2'),
(7, 'lydia', 'lydia123', 'lydia@gmail.com', '2'),
(8, 'd415', 'd4152015', 'd415@students.del.ac.id', '2'),
(9, 'arrenyosfat', 'cuekbebek23', 'arrenyosafat@gmail.com', '2'),
(10, 'arrenyosafat', 'cuekbebek23', 'arrenyosafat@gmail.com', '2'),
(11, 'esteremarbun', 'ester123', 'esteremarbun@gmail.com', '2'),
(12, 'test', 'bebeb2121', 'test@gmail.com', '2'),
(13, 'test2', 'test', 'test@gmail.com', '2'),
(14, 'bbb', 'bb', 'bb@gmail.com', '2'),
(15, 's', 's', 's@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `user_post_id` int(15) NOT NULL,
  `user_post_title` varchar(255) NOT NULL,
  `user_post_category_id` int(15) NOT NULL,
  `user_post_author` varchar(255) NOT NULL,
  `user_post_date` date NOT NULL,
  `user_post_image` text NOT NULL,
  `user_post_content` text NOT NULL,
  `user_post_tags` varchar(255) NOT NULL,
  `user_post_status` enum('Draft') NOT NULL DEFAULT 'Draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`user_post_id`, `user_post_title`, `user_post_category_id`, `user_post_author`, `user_post_date`, `user_post_image`, `user_post_content`, `user_post_tags`, `user_post_status`) VALUES
(2, 'wew', 14, 'ariansyahn', '2018-01-08', '3.jpg', '<p>wew</p>\r\n', 'wew', 'Draft'),
(3, 'mau tau aja', 11, 'desy', '2018-01-10', 'kloset.png', '<p style=\"text-align:justify\">nmvbcmbxjvjkcvb hjhbgk hjksdbghjueijfcjxcvhjhyesugfjkjdh</p>\r\n', 'serius???', 'Draft'),
(4, 'How to repair a brokenhearted', 15, 'arrenyosafat', '2018-01-10', '', '<p>qwerti123</p>\r\n', 'Heart, Ex, Girlfriend', 'Draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`saran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `roles` (`user_role`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`user_post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `saran_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `user_post_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
