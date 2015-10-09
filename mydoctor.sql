-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 09 Sep 2015 pada 17.35
-- Versi Server: 5.5.40
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gemastik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosis`
--

CREATE TABLE IF NOT EXISTS `diagnosis` (
`id_diagnosis` int(254) NOT NULL,
  `diagnosis` varchar(254) NOT NULL,
  `deskripsi` varchar(254) NOT NULL,
  `bobot` int(254) NOT NULL,
  `tindak_awal` varchar(254) NOT NULL,
  `tindak_lanjut` varchar(254) NOT NULL,
  `ket_tambahan` varchar(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `diagnosis`
--

INSERT INTO `diagnosis` (`id_diagnosis`, `diagnosis`, `deskripsi`, `bobot`, `tindak_awal`, `tindak_lanjut`, `ket_tambahan`) VALUES
(1, 'asma\r\n', 'inflamasi dan respons berlebihan dari saluran pernapasan, keturunan\r\n', 0, 'duduk tegak, siku bertopang, tenang, jaga pernapasan, jika terdiagnosa asma gunakan obat pelega asma sesuai resep\r\n', 'PERGI KE RUMAH SAKIT SEGERA\r\n', ''),
(2, 'PPOK(Penyakit Paru Obstrutif Kronik)\r\n', 'inflamasi saluran napas, asap rokok, batuk lama berdahak\r\n', 0, 'tetap tenang, duduk, bernapas teratur, hirup obat pelega(jika ada) sesuai resep\r\n', 'PERGI KE DOKTER DALAM 24 JAM\r\n', 'batuk berat, susah bernapas, batuk lama dan berdahak\r\n'),
(3, 'pneumonia(Infeksi di jaringan paru)\r\n', 'Kuman\r\n', 0, 'segera perikasakan ke dokter\r\n', 'PERGI KE DOKTER\r\n', 'sesak napas bertambah berat, demam >38 derajat celcius, batuk berdahak\r\n'),
(4, 'edema paru(terjadi penumpukan cairan di paru)\r\n', 'gagal jantung akut(jantung gagal memompa darah secara efektif)\r\n', 0, 'longgarkan pakaian, duduk tegak di kursi, bantuan oksigen dan obat deuretik\r\n', 'BAHAYA! BAWA KE RUMAH SAKIT SEKARANG\r\n', 'sesak napas berat muncul tiba-tiba, bibir dan ujung jari berwarna kebiruan\r\n'),
(5, 'polip hidung atau infeksi sinusitis\r\n', 'tumbuhnya jaringan hidung yang berlebihan, atau terdapat benjolan di hidung\r\n', 0, 'segera perikasakan ke dokter spesialis THT\r\n', 'PERIKSA KE DOKTER\r\n', 'hidung berlendir lama lebih dari 1 bulan, semakin lama tercium bau busuk\r\n'),
(6, 'Flu atau pilek biasa\r\n', 'sistem pertahanan tubuh sedang mnurun\r\n', 0, 'istirahat yang cukup, minum banyak air putih, minum vitamin dan madu, menghirup uap panas untuk mengurangi lendir di hidung\r\n', 'jika dalam dua minggu kondisi tidak membaik segera KONSULTASI KE DOKTER\r\n', ''),
(7, 'rinitis alergi\r\n', 'disebabkan oleh penyebab alergi dari masing-masing individu\r\n', 0, 'hindari penyebab alergi, jika memiliki obat alergi gunakan sesuai anjuran dokter\r\n', 'jika dalam dua minggu kondisi tidak membaik segera KONSULTASI KE DOKTER\r\n', 'hidung berlendir encer\r\n'),
(8, 'sinusitis\r\n', 'terdapat cairan yang menumpuk pada rongga akibat disfungsi bulu getar di mukosa sehingga retan terinfeksi oleh kuman\r\n', 0, 'obat pereda nyeri dapat mengurangi gejala, hirup uap panas untuk mengurangi gejala\r\n', 'PERIKSA KE DOKTER\r\n', 'hidung berlendir berwarna kuning\r\n'),
(9, 'faringitis\r\n\r\n', 'faringitis biasa disebabkan oleh kuman\r\n', 0, 'untuk menurangi nyeri dapat dilakukan : minum air yang banyak, berkumur dengan air garam, minum air hangat dengan perasan jeruk nipis\r\n', 'PERIKSA KE DOKTER\r\n', 'sulit menelan, disertai demam >38 derajat celcius\r\n'),
(10, 'limfadenitis/pembengakakan kelenjar getah bening/gondongan\r\n', 'dapat disebabkan oleh virus maupun kuman, jika disebabkan oleh virus maka bengkak dapat mengecil dengan sendirinya, jika disebabkan oleh kuman maka perlu pananganan lanjut dari dokter spesialis paru\r\n', 0, 'segera konsultasi ke dokter\r\n', 'PERIKSA KE DOKTER\r\n', 'demam >38 derajat celcius, bengkak kelenjar getah bening di area leher atau ketiak\r\n'),
(11, 'laringitis\r\n', 'penggunaan berlebihan pada suara, dapat disebabkan juga oleh virus\r\n', 0, 'jika disebabkan oleh virus dapat sembuh dengan sendirinya, jika disebabkan penggunaan suara berlebih dapat mengakibatkan bengkak di pita suara dan segera hubungi dokter, cara mengurangi suara parau: istirahatkan suara(diam), hindari asap rokok dan tidak ', 'PERIKSA KE DOKTER(jika lebih dari 2 minggu)\r\n', 'dapat disebabkan oleh tumor laring dengan riwayat merokok, rentang usia sekitar 40 tahun\r\n'),
(12, 'iritasi saluran napas karena benda asing\r\n', 'terdapat benda asing di saluran napas anda yang menyebabkan tubuh melakukan mekanisme batuk untuk mengeluarkan benda asing tersebut\r\n', 0, 'jika dalam satu jam benda asing tidak dapat dikeluarkan segera hubungi dokter\r\n', 'PERIKSA KE DOKTER DALAM 1 JAM\r\n', 'batuk kering, tidak berdahak, baru saja tersedak\r\n'),
(13, 'iritasi saluran pernapasan\r\n', '', 0, 'segera menuju tempat dengan siklus udara yang lebih baik, batuk akan mereda sendiri, jika batuk mereda namun bertambah sesak napas berarti anda menghirup zat beracun, SEGERA KUNJUNGI RUMAH SAKIT\r\n', 'jika bertambah sesak, SEGERA KUNJUNGI RUMAH SAKIT\r\n', 'batuk kering, tidak berdahak, baru saja terpapar asap pekat atau zat kimia\r\n'),
(14, 'efek obat tertentu\r\n', 'beberapa obat spesifik dapat mengakibatkan efek batuk\r\n', 0, 'konsultasikan efek batuk yang timbul pada dokter anda\r\n', 'KONSULTASIKAN DENGAN DOKTER\r\n', 'batuk kering, sedang minum obat tertentu dari dokter\r\n'),
(15, 'bronkitis atau infeksi virus biasa\r\n', 'dapat disebabkan oleh infeksi kuman atau virus tertentu\r\n', 0, 'untuk meredakan batuk bisa dengan membeli obat batuk generik yang dijual di apotek, jika timbul sesak napas SEGERA HUBUNGI DOKTER\r\n', 'jika timbul sesak napas SEGERA HUBUNGI DOKTER\r\n', 'batuk berdahak, jangka waktu lebih dari satu minggu tidak mereda\r\n'),
(16, 'tuberkulosis paru\r\n', 'tuberkulosis disebabkan oleh kuman Mycobacterium Tuberculosis. Penyakit ini endemik di Indonesia dan menular melalui media udara\r\n', 0, 'amati gejala dengan seksama, apabila dicurigai terdiagnosa tuberkulosis SEGERA PERIKSA KE DOKTER\r\n', 'PERIKSA KE DOKTER\r\n', 'batuk lama lebih dari dua minggu, batuk kering atau berdahak atau bahkan batuk darah\r\n'),
(17, 'tumor paru\r\n', 'tumor disebabkan pertumbuhan sel yang berlebihan. Riwayat perokok paling rentan terkena tumor paru\r\n', 0, 'konsultasikan dengan dokter spesialis paru\r\n', 'PERIKSA KE DOKTER DALAM 24 JAM\r\n', 'batuk lama lebih dari dua minggu, batuk kering atau berdahak atau bahkan batuk darah, mengalami sesak napas lama lebih dari satu bulan semakin lama semakin berat, muncul nyeri di dada saat batuk, ada riwayat merokok dan usia dewasa\r\n'),
(18, 'serangan jantung\r\n', 'tersumbatnya pembuluh darah yang memasok darah ke Jantung\r\n', 0, 'segera bawa ke rumah sakit\r\n', 'BAHAYA! BAWA KE RUMAH SAKIT SEKARANG\r\n', 'nyeri hebat dalam rentang waktu yang tidak sebentar\r\n'),
(19, 'pneuomotoraks\r\n', 'masuknya udara dalam dua selaput pelapis paru sehingga paru menjadi kolaps. Dapat disebabkan oleh tuberkulosis, PPOK atau yang lain\r\n', 0, 'segera bawa ke rumah sakit\r\n', 'BAHAYA! BAWA KE RUMAH SAKIT SEKARANG\r\n', 'nyeri dada timbul tiba-tiba, sesak napas semakin berat, dada tampak tidak simetris\r\n'),
(20, 'refluks gastroesofagus\r\n', 'naiknya asam lambung ke esophagus\r\n', 0, 'makan dengan cara perlahan, jangan terlambat makan terutama makan malam, hindari makan asam, pedas, dan berlemak, kurangi minum kopi da alkohol, longgarkan pakaian, hindari membungkuk atau berolah raga setelah makan\r\n', 'PERIKSA KE DOKTER\r\n', 'dada terasa panas dan tenggorokan terasa tersekat\r\n'),
(21, 'pleuritis\r\n', 'peradangan yang memisahkan selaput yang disebabkan oleh virus atau kuman\r\n', 0, 'konsultasikan dengan dokter spesialis paru\r\n', 'PERIKSA KE DOKTER\r\n', 'nyeri dada sebelah saja dan bertambah jika menarik napas\r\n'),
(22, 'kelinan ritme jantung serius\r\n', 'ritme jantung yang tidak normal\r\n', 0, 'bawa segera ke rumah sakit\r\n', 'BAHAYA! BAWA KE RUMAH SAKIT SEKARANG\r\n', 'sesak napas berat hingga pingsan\r\n'),
(23, 'efek dari kafein\r\n', 'kafein yang biasa terkandung dalam kopi atau teh merangsang sistem saraf sehingga membuat anda berenergi, berdebar dan bahkan dapat menyebabkan sulit tidur\r\n', 0, 'kurangi konsumsi bahan makanan yang mengandung kafein berlebihan\r\n', 'berhenti sementara mengkonsumsi makanan atau minuman yang mengandung kafein\r\n', 'berdebar-debar setelah minum kopi/teh \r\n'),
(24, 'efek obat tertentu\r\n', 'beberapa obat spesifik dapat mengakibatkan efek berdebar-debar\r\n', 0, 'gunakan obat sesuai dengan petunjuk dokter, hindari penggunaan obat yang dijual bebas secara sembarangan\r\n', 'KONSULTASIKAN DENGAN DOKTER\r\n', 'berdebar-debar setelah minum obat\r\n'),
(25, 'hipertiroid\r\n', 'kelebihan hormon tiroid\r\n', 0, 'segera konsultasi ke dokter spesialis penyakit dalam\r\n', 'KONSULTASIKAN DENGAN DOKTER\r\n', 'berdebar-debar kuat, nafsu makan menurun, mata terlihat menonjol\r\n'),
(26, 'demam berdarah\r\n', 'virus dengue yang dibawa oleh nyamuk Aedes aegypti. Hindari perseberan nyamuk ini dengan tindakan 3M PLUS yaitu Menguras tempat air, Menutup tempat penyimpanan air, Membuang sampah yang dapat mengakibatkan genagan air dan Plus hindari gigitan nyamuk di p', 0, 'atasi demam dengan minum banyak air putih, istirahat dan kompres, apabila dala 2-3 hari demam belum turun, kunjungi dokter segera. Dokter akan memeriksa darah anda, jika HB, HT dan trombosit dalam mondisi yang baik maka anda dapat dirawat di rumah\r\n', 'PERGI KE DOKTER\r\n', 'demam 2-7 hari, mulai turun di hari ke 3 atau ke 7, sedikit sakit kepala dan mual, muncul bintik merah, mimisan dan muntah darah\r\n'),
(27, 'demam tifoid\r\n', 'demam tifoid disebabkan oleh kuman Salmonella typhi. Demam tifoid dapat ditularkan melalui makanan atau minuman karena kebiasaan yang tidak higenis\r\n', 0, 'atasi demam dengan minum banyak air putih, istirahat dan kompres, apabila demam tidak sembuh dalam 3 hari segera hubungi dokter\r\n', 'PERGI KE DOKTER\r\n', 'demam lama, meningkat di sore atau malam hari, nafsu makan turun dan gangguan pencernaan\r\n'),
(28, 'malaria\r\n', 'malaria ditularkan oleh nyamuk Anopheles. Nyamuk Anopheles hanya menggigit saat malam hari. \r\n', 0, 'atasi demam dengan minum banyak air putih, istirahat dan kompres, apabila dala 2-3 hari demam belum turun,kunjungi dokter segera. Anda akan diberikan obat penurun panas dan antibiotik dan penanganan khusus\r\n', 'PERGI KE DOKTER\r\n', 'demam naik turun, seketika panas dan seketika dingin, biasa terjadi di daerah endemik malaria seperti Maluku, Nusa Tenggara dan lainnya\r\n'),
(29, 'terinfeksi virus biasa/mungkin flu biasa\r\n', 'kondisi ini sering dinamakan sebagai tidak enak badan di kalangan masyarakat Indonesia. Keadaan ini dapat disebabkan oleh infeksi virus biasa.\r\n', 0, 'kondisi tubuh seperti ini tidak memerlukan obat khusus, cukup dengan beristirahat total untuk memulihkan kondisi dan daya tahan tubuh.\r\n', 'KONSULTASIKAN DENGAN DOKTER\r\n', 'pegal-pegal dengan badan agak meriang\r\n'),
(30, 'anemia(kurang darah merah)\r\n', 'anemia merupakan keadaan dimana kadar HB di darah kurang dari normal. Hal ini dapat desababkan oleh kurangnya zzat besi dan vitamin B12\r\n', 0, 'jika tiba-tiba anda merasa lemas, pusing seperti melayang, segera menyandar ke tembok dan berpegangan. Lalu duduklah atau berbaring. Jika keadaan sedikit membaik, segera konsultasikan dengan dokter, dokter akan memeriksa keadaan HB(Hemoglobin) pada darah', 'PERGI KE DOKTER\r\n', 'anda merasa sangat cepat lelah, terkadang kepala agak pusing seperti melayang\r\n'),
(31, 'maag\r\n', 'dapat disebabkan oleh penyebab organik maupun mental. Stres dapat mempengaruhi kambuhnya maag. Selain itu kebiasaan makan yang tidak menentu dapat juga menjadi penyebab maag\r\n', 0, 'obat sakit maag yang dijual di apotek dapat menurunkan gejala maag. Apabila masih terasa mual dan muntah segera konsultasikan keadaan anda dengan dokter. Dokter akan memberikan obat maag sesuai dosis yang anda butuhkan. Dokter akan menyarankan anda untuk', 'KONSULTASIKAN DENGAN DOKTER\r\n', '\r\n'),
(32, 'diabetes mellitus atau lebih dikenal dengan kencing manis\r\n', 'kandungan gula darah yang sangat tinggi disebabkan oleh gaya hidup yang kurang sehat\r\n', 0, 'kurangi konsumsi bahan makanan yang mengandung gula berlebihan. Lakukan diet untuk mengontrol gula di tubuh anda. Kunjungi dokter untuk memeriksa secara detil keadaan tubuh anda. Jika keadaan gula darah anda masih belum bisa dikendalikan maka dokter akan', 'KONSULTASIKAN DENGAN DOKTER\r\n', 'mudah haus dan BAK lebih sering dari biasanya\r\n'),
(33, 'stres\r\n', 'anda memiliki kecemasan berlebihan terhadap aktivitas keseharian anda atau dengan permasalahan yang sedang anda hadapi. Hal ini menyebabkan anda kesulitan untuk tidur atau sekedar bersantai\r\n', 0, 'yang anda butuhkan adalah ketenangan. Berikut beberapa tips untuk dapat tidur dengan nyenyak: baca doa sebelum tidur sesuai dengan agama dan kepercayaan masing-masing, olah raga teratur mengakibatkan fisik tetap bugar dan memudahkan beristirahat di malam', 'KONSULTASIKAN DENGAN DOKTER\r\n', 'sering terbangun di malam hari diikuti perasaan cemas dengan permasalahan sehari-hari\r\n'),
(34, 'depresi\r\n', 'anda memiliki permasalahan yang menekan anda secara berlebihan sehingga berpengaruh ke mental dan fisik anda\r\n', 0, 'lakukan perbincangan pribadi dengan teman, keluarga atau orang terdekat anda untuk mengurangi beban pikiran anda. Apabila depresi anda lebih dari 2 minggu, segera konsultasikan dengan psikiater\r\n', 'KONSULTASIKAN DENGAN PSIKIATER\r\n', 'sering terbangun di malam hari, sulit berkonsentrasi, kurang bersemangat, sering sakit kepala\r\n'),
(35, 'sakit kepala ringan/gangguan di daerah otak\r\n', 'akibat dari benturan yang anda alami sebelumnya\r\n', 0, 'beristirahat untuk mengembalikan kondisi tubuh, relaksasikan leher dan kepala dengan sedikit pijatan, amati apakah anda mengalami gejala seperti berikut: mual dan muntah, mengantuk atau mulai linglung, anggota tubuh melemah, mata kabur, ruam merah yang a', 'PERGI KE RUMAH SAKIT DALAM 24 JAM\r\n', 'benturan sebelum gejala pusing\r\n'),
(36, 'glaukoma akut\r\n', 'glaukoma kaut adalah penyakit mata yang disebabkan oleh tekanan bola mata yang meningkat mendadak sangat tinggi\r\n', 0, 'segeralah pergi ke dokter, jika benar anda trdiagnosis akut anda akan diberikan obat penurun tekanan bola mata. Jika tekanan telah berhasil diturunkan ada kemungkinan untuk dilakukan operasi untuk memperbaiki saluran caoran mata tergantung dari keadaan h', 'PERGI KE RUMAH SAKIT DALAM 24 JAM\r\n', 'pada mata seperti melihat lingkaran pelangi\r\n'),
(37, 'migrain\r\n', 'kelelahan berlebihan hingga gangguan di kepala. Dapat juga terpengaruh karena hormon dan makanan tertentu\r\n', 0, 'coba untuk meredakan migrain sendiri dengan berbaring atau beristirahat di tempat gelap, makan teratur, tidur teratur dan hindari makanan yang dapat menjadi penyebab migrain biasaya mengandung kafein tinggi. Biasanya akan mereda dalam 24 jam. Jika pusing', 'PERGI KE DOKTER\r\n', 'terjadi tingkat penglihatan yang berbeda setelah mengalami nyeri sedikit. Penglihatan tampak seperti kilatan cahaya 10-20 menit. Lalu disusul dengan sakit kepala sebelah yang semakin berat selama 1-6 jam.\r\n'),
(38, 'stroke\r\n', 'stroke terdapat kerusakan pada suatu bagian di otak akibat berhentinya pasokan darah ke daerah tersebut\r\n', 0, 'segera pergi ke rumah sakit terdekat\r\n', 'BAHAYA! PERGI KE RUMAH SAKIT SEGERA\r\n', 'tiba-tiba sulit bicara, sulit mencari kata-kata, bicara tidak jelas, gangguan penglihatan, terdapat bagian tubuh yang lemas dan kesemutan, pusing, linglung, kehilangan keseimbangan mendadak\r\n'),
(39, 'Bell''s palsy\r\n', 'gangguan syaraf di wajah\r\n', 0, 'segera pergi ke dokter spesialis saraf\r\n', 'PERGI KE DOKTER SEGERA\r\n', 'kesulitan bicara karena mengalami kesulitan untuk menggerakkan otot di salah satu bagian wajah\r\n'),
(40, 'iritasi ringan\r\n', 'kemasukan benda asing (debu/kotoran)\r\n', 0, 'jika benda asing berada di sudut putih mata maka bisa dikeluarkan dengan mencoba mengeluarkan kotoran tersebut dengan selembar tisu atau sapu tangan bersih dan lembab\r\n', 'KONSULTASIKAN DENGAN DOKTER\r\n', ''),
(41, 'konjungtivitis\r\n', 'konjungtivitis merupakan radang selaput mata yang dapat disebabkan oleh infeksi virus, bakteri, kuman maupun alergi bahkan zat kimia\r\n', 0, 'bersihkan semua kotoran di mata secara teratur dengan cara mengusap mata dari sisi dalam ke luar dengan kapas atau tisu bersih dan lembap. Bila mata terasa gatal dapat gunakan obat tetes mata anti alergi. Apabila dalam 48 jam keadaan tidak membaik, sebai', 'PERGI KE DOKTER\r\n', 'diikuti dengan rasa nyeri dan penglihatan mulai kabur, keluar cairan lengket dari mata, jika anda membasuh mata maka cairan tersebut hilang dan mata kembali normal\r\n'),
(42, 'infeksi saluran telinga\r\n', 'saluran telinga dapat terinfeksi di beberapa tempat seperti telinga luar yaitu bisul, atau telinga bagian tengah hingga kemungkinan gendang telinga berlubang\r\n', 0, 'periksakan telinga anda ke dokter spesialis THT, dokter akan memeriksa telinga anda dan meresepkan obat tetes telinga hingga antibiotik\r\n', 'PERGI KE DOKTER\r\n', 'telinga terasa nyeri dan semakin sakit apabila ditarik. Keluar cairan berwarna dari saluran telinga\r\n'),
(43, 'barotrauma\r\n', 'terganggunya gendang telinga akibat perbedaan tekanan antara telinga tengah dan luar. Hal ini juga apabila sebelumnya hidung anda tersumbat. \r\n', 0, 'Sebaiknya sebelum anda bepergian dengan pesawat atau ke dataran tinggi untuk melakukan tindakan pencegahan sebagai berikut: cobalah untuk menelan liur atau mengunyah permen karet sesaat sebelum lepas landas dan setelah mendarat untuk menjaga tuba eustach', 'PERGI KE DOKTER\r\n', 'nyeri setelah turun dari pesawat atau terjadi beda ketinggian\r\n'),
(44, 'apendistis akut\r\n', 'nyeri yang terjadi disebabkan oleh radang usus buntu(apendistis)\r\n', 0, 'jangan makan apapun sebelum anda diperiksa oleh dokter. Anda kemungkinan besar akan dirujuk ke rumah sakit untuk ditangani oleh dokter khusus spesialis bedah. Anda akan diperiksa lebih lanjut dengan pemeriksaan USG dan rontgen\r\n', 'PERGI KE DOKTER SEGERA\r\n', 'nyeri di daerah pusar lalu beralih terutama di sebelah kanan bawah, walaupun telah muntah tidak kunjung membaik, semakin nyeri apabila sedang berjalan atau batuk. Diikuti demam tak menentu, sulit BAB dan mual\r\n'),
(45, 'Tukak lambung\r\n', 'infeksi kuman\r\n', 0, 'jika muntah anda terdapat darah, perhatikan warna darah. Jika darah membentuk gumpalan gelap, bercak mirip bubuk kopi, atau semburan merah terang, maka anda harus segera dibawa ke UGD Rumah sakit terdekat untuk mendapat perawatan\r\n', 'BAHAYA! PERGI KE RUMAH SAKIT SEGERA\r\n', 'secara periodik anda mengalami mual hingga muntah isi makanan atau cairan hijau dengan disertai nyeri perut.\r\n'),
(46, 'radang empedu atau penyumbatan empedu di saluran empedu ke usus\r\n', 'batu empedu akan menyumbat saluran empedu ke usus sehingga akan menimbulkan gejala seperti itu\r\n', 0, 'segera periksakan keadaan anda ke dokter. Apabila diperlukan dokter akan melakukan pembedahan untuk mengangkat batu empedu\r\n', 'PERGI KE DOKTER DALAM 24 JAM\r\n', 'terasa nyeri perut yang menyebar di daerah kanan perut hingga bawah rusuk\r\n'),
(47, 'diare\r\n', 'infeksi\r\n', 0, 'untuk mencegah dehidrasi (kekurangan cairan) minumlah air putih selama 1-2 jam sekali. Untuk meredakan diare minumlah larutan oralit yang dapat dibeli di apotek terdekat\r\n', 'PERGI KE DOKTER\r\n', 'BAB cair dengan diikuti gejala mual dan muntah. Intensitas BAB lebih dari 3 kali sehari dan merasa sangat lemas\r\n'),
(48, 'infeksi saluran kemih atau peradangan ginjal\r\n', 'infeksi atau peradangan\r\n', 0, 'segera periksa keadaan anda ke dokter. Dokter akan melakukan pemeriksaan darah dan urine. Jika dokter menemukan terjadi infeksi maka dokter akan memberikan antibiotik\r\n', 'PERGI KE DOKTER SEGERA\r\n', 'terasa nyeri saat BAK, demam dengan >38 derajat celcius, warna urin keruh\r\n'),
(49, 'Asam urat\r\n', 'penyakit asam urat merupakan terbentuknya kristal asam urat pada sendi sebagai reaksi dari peradangan pada jaringan\r\n', 0, 'periksakan keadaan anda ke dokter, dokter akan memeriksa persendian anda dan tes laboratorium. Apabila kadar asam urat dalam daran terdeteksi sangat tinggi maka dokter akan memberikan obat antiradang dan pereda nyeri\r\n', 'PERGI KE DOKTER\r\n', 'nyeri sendi diikuti rasa panas di persendian, sangat perih jika disentuh. Dapat berlangsung beberapa hari sampai satu minggu\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE IF NOT EXISTS `gejala` (
`id_gejala` int(254) NOT NULL,
  `gejala` varchar(254) NOT NULL,
  `bobot` int(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`, `bobot`) VALUES
(1, 'Demam', 0),
(2, 'Lelah/Lemas', 0),
(3, 'Sakit kepala', 0),
(4, 'Ruam kemerahan', 0),
(5, 'Berat badan turun', 0),
(6, 'Hidung berlendir/mampet', 0),
(7, 'Bersin', 0),
(8, 'Nyeri Tenggorokan', 0),
(9, 'Berkeringat', 0),
(10, 'Suara serak', 0),
(11, 'Batuk', 0),
(12, 'Sesak napas', 0),
(13, 'Napas berbunyi', 0),
(14, 'Berdebar-debar', 0),
(15, 'Suara hilang/parau', 0),
(16, 'Nyeri dada', 0),
(17, 'Nyeri ulu hati', 0),
(18, 'Begah', 0),
(19, 'Badan pegal', 0),
(20, 'Mata gatal', 0),
(21, 'Nyeri wajah', 0),
(22, 'Bengkak kelenjar limfa', 0),
(23, 'Keringat malam', 0),
(24, 'Nyeri perut', 0),
(25, 'Nyeri otot/sendi', 0),
(26, 'Mual/muntah', 0),
(27, 'Lidah berselaput', 0),
(28, 'Menggigil', 0),
(29, 'Mata kabur/gangguan penglihatan', 0),
(30, 'Sulit bicara', 0),
(31, 'Kesemutan', 0),
(32, 'Mata Merah', 0),
(33, 'Nyeri telinga', 0),
(34, 'Nyeri saat BAK', 0),
(35, 'BAB cair', 0),
(36, 'Pucat', 0),
(37, 'Sulit tidur', 0),
(38, 'lol', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_diagnosa`
--

CREATE TABLE IF NOT EXISTS `log_diagnosa` (
`id_log` int(255) NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_diagnosis` int(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tindak_awal` varchar(255) NOT NULL,
  `tindak_lanjut` varchar(255) NOT NULL,
  `ket_tambahan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `log_diagnosa`
--

INSERT INTO `log_diagnosa` (`id_log`, `facebook_id`, `nama`, `id_diagnosis`, `diagnosis`, `deskripsi`, `tindak_awal`, `tindak_lanjut`, `ket_tambahan`) VALUES
(1, '2147483647', 'Rynaldo Ryan', 9, 'faringitis', 'faringitis biasa disebabkan oleh kuman', 'untuk menurangi nyeri dapat dilakukan : minum air yang banyak, berkumur dengan air garam, minum air hangat dengan perasan jeruk nipis', 'PERIKSA KE DOKTER', 'sulit menelan, disertai demam >38 derajat celcius'),
(2, '2147483647', 'Rynaldo Ryan', 33, 'stres', 'anda memiliki kecemasan berlebihan terhadap aktivitas keseharian anda atau dengan permasalahan yang sedang anda hadapi. Hal ini menyebabkan anda kesulitan untuk tidur atau sekedar bersantai', 'yang anda butuhkan adalah ketenangan. Berikut beberapa tips untuk dapat tidur dengan nyenyak: baca doa sebelum tidur sesuai dengan agama dan kepercayaan masing-masing, olah raga teratur mengakibatkan fisik tetap bugar dan memudahkan beristirahat di malam', 'KONSULTASIKAN DENGAN DOKTER', 'sering terbangun di malam hari diikuti perasaan cemas dengan permasalahan sehari-hari'),
(3, '2147483647', 'Rynaldo Ryan', 9, 'faringitis', 'faringitis biasa disebabkan oleh kuman', 'untuk menurangi nyeri dapat dilakukan : minum air yang banyak, berkumur dengan air garam, minum air hangat dengan perasan jeruk nipis', 'PERIKSA KE DOKTER', 'sulit menelan, disertai demam >38 derajat celcius'),
(4, '2147483647', 'Rynaldo Ryan', 9, 'faringitis', 'faringitis biasa disebabkan oleh kuman', 'untuk menurangi nyeri dapat dilakukan : minum air yang banyak, berkumur dengan air garam, minum air hangat dengan perasan jeruk nipis', 'PERIKSA KE DOKTER', 'sulit menelan, disertai demam >38 derajat celcius'),
(5, '10205061547404857', 'Rynaldo Ryan', 22, 'kelinan ritme jantung serius', 'ritme jantung yang tidak normal', 'bawa segera ke rumah sakit', 'BAHAYA! BAWA KE RUMAH SAKIT SEKARANG', 'sesak napas berat hingga pingsan'),
(6, '10205061547404857', 'Rynaldo Ryan', 42, 'infeksi saluran telinga', 'saluran telinga dapat terinfeksi di beberapa tempat seperti telinga luar yaitu bisul, atau telinga bagian tengah hingga kemungkinan gendang telinga berlubang', 'periksakan telinga anda ke dokter spesialis THT, dokter akan memeriksa telinga anda dan meresepkan obat tetes telinga hingga antibiotik', 'PERGI KE DOKTER', 'telinga terasa nyeri dan semakin sakit apabila ditarik. Keluar cairan berwarna dari saluran telinga'),
(7, '10205061547404857', 'Rynaldo Ryan', 25, 'hipertiroid', 'kelebihan hormon tiroid', 'segera konsultasi ke dokter spesialis penyakit dalam', 'KONSULTASIKAN DENGAN DOKTER', 'berdebar-debar kuat, nafsu makan menurun, mata terlihat menonjol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rdata`
--

CREATE TABLE IF NOT EXISTS `rdata` (
`id_result` int(255) NOT NULL,
  `id_diagnosis` int(255) NOT NULL,
  `q1` int(255) NOT NULL,
  `q2` int(255) DEFAULT NULL,
  `q3` int(255) DEFAULT NULL,
  `q4` int(255) DEFAULT NULL,
  `q5` int(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `rdata`
--

INSERT INTO `rdata` (`id_result`, `id_diagnosis`, `q1`, `q2`, `q3`, `q4`, `q5`) VALUES
(1, 1, 12, 13, 11, 0, 0),
(2, 2, 12, 11, 0, 0, 0),
(3, 3, 12, 1, 11, 0, 0),
(4, 4, 13, 12, 0, 0, 0),
(5, 5, 6, 0, 0, 0, 0),
(6, 6, 6, 10, 19, 0, 0),
(7, 7, 6, 20, 0, 0, 0),
(8, 8, 6, 21, 0, 0, 0),
(9, 9, 8, 1, 0, 0, 0),
(10, 10, 1, 22, 0, 0, 0),
(11, 11, 15, 0, 0, 0, 0),
(12, 12, 11, 0, 0, 0, 0),
(13, 13, 11, 0, 0, 0, 0),
(14, 14, 11, 0, 0, 0, 0),
(15, 15, 11, 0, 0, 0, 0),
(16, 16, 11, 5, 23, 0, 0),
(17, 17, 11, 12, 5, 0, 0),
(18, 18, 16, 0, 0, 0, 0),
(19, 19, 16, 12, 0, 0, 0),
(20, 20, 16, 18, 0, 0, 0),
(21, 21, 16, 0, 0, 0, 0),
(22, 22, 14, 16, 12, 0, 0),
(23, 23, 14, 0, 0, 0, 0),
(24, 24, 14, 0, 0, 0, 0),
(25, 25, 14, 5, 9, 0, 0),
(26, 26, 1, 4, 25, 0, 0),
(27, 27, 1, 3, 25, 26, 27),
(28, 28, 1, 25, 26, 28, 0),
(29, 29, 1, 3, 6, 25, 0),
(30, 30, 2, 36, 0, 0, 0),
(31, 31, 17, 26, 0, 0, 0),
(32, 32, 29, 2, 5, 0, 0),
(33, 33, 37, 0, 0, 0, 0),
(34, 34, 3, 0, 0, 0, 0),
(35, 35, 3, 0, 0, 0, 0),
(36, 36, 3, 26, 29, 0, 0),
(37, 37, 3, 29, 0, 0, 0),
(38, 38, 30, 31, 29, 0, 0),
(39, 39, 30, 0, 0, 0, 0),
(40, 40, 32, 0, 0, 0, 0),
(41, 41, 32, 0, 0, 0, 0),
(42, 42, 33, 0, 0, 0, 0),
(43, 43, 33, 0, 0, 0, 0),
(44, 44, 24, 0, 0, 0, 0),
(45, 45, 26, 24, 0, 0, 0),
(46, 46, 24, 26, 0, 0, 0),
(47, 47, 35, 1, 24, 0, 0),
(48, 48, 34, 1, 0, 0, 0),
(49, 49, 25, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `training_data`
--

CREATE TABLE IF NOT EXISTS `training_data` (
`id_training` int(254) NOT NULL,
  `id_diagnosis` int(254) NOT NULL,
  `id_gejala_1` int(254) NOT NULL,
  `id_gejala_2` int(254) NOT NULL,
  `id_gejala_3` int(254) NOT NULL,
  `id_gejala_4` int(254) NOT NULL,
  `id_gejala_5` int(254) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `training_data`
--

INSERT INTO `training_data` (`id_training`, `id_diagnosis`, `id_gejala_1`, `id_gejala_2`, `id_gejala_3`, `id_gejala_4`, `id_gejala_5`) VALUES
(1, 1, 1, 22, 0, 0, 0),
(2, 2, 1, 4, 25, 0, 0),
(3, 3, 1, 3, 25, 26, 27),
(4, 4, 1, 25, 26, 28, 0),
(5, 5, 1, 3, 6, 25, 0),
(6, 6, 1, 8, 0, 0, 0),
(7, 7, 1, 11, 12, 0, 0),
(8, 8, 1, 34, 0, 0, 0),
(9, 9, 1, 24, 35, 0, 0),
(10, 10, 2, 36, 0, 0, 0),
(11, 11, 2, 5, 29, 0, 0),
(12, 12, 3, 0, 0, 0, 0),
(13, 13, 3, 0, 0, 0, 0),
(14, 14, 3, 26, 29, 0, 0),
(15, 15, 3, 29, 0, 0, 0),
(16, 16, 5, 11, 23, 0, 0),
(17, 17, 5, 11, 12, 0, 0),
(18, 18, 5, 9, 14, 0, 0),
(19, 19, 6, 0, 0, 0, 0),
(20, 20, 6, 10, 19, 0, 0),
(21, 21, 6, 20, 0, 0, 0),
(22, 22, 6, 21, 0, 0, 0),
(23, 23, 11, 0, 0, 0, 0),
(24, 24, 11, 0, 0, 0, 0),
(25, 25, 11, 0, 0, 0, 0),
(26, 26, 11, 0, 0, 0, 0),
(27, 27, 11, 12, 13, 0, 0),
(28, 28, 12, 11, 0, 0, 0),
(29, 29, 12, 13, 0, 0, 0),
(30, 30, 12, 14, 16, 0, 0),
(31, 31, 12, 16, 0, 0, 0),
(32, 32, 14, 0, 0, 0, 0),
(33, 33, 14, 0, 0, 0, 0),
(34, 34, 15, 0, 0, 0, 0),
(35, 35, 16, 0, 0, 0, 0),
(36, 36, 16, 0, 0, 0, 0),
(37, 37, 16, 18, 0, 0, 0),
(38, 38, 17, 26, 0, 0, 0),
(39, 39, 24, 0, 0, 0, 0),
(40, 40, 24, 26, 0, 0, 0),
(41, 41, 24, 26, 0, 0, 0),
(42, 42, 25, 0, 0, 0, 0),
(43, 43, 29, 30, 31, 0, 0),
(44, 44, 30, 0, 0, 0, 0),
(45, 45, 32, 0, 0, 0, 0),
(46, 46, 32, 0, 0, 0, 0),
(47, 47, 33, 0, 0, 0, 0),
(48, 48, 33, 0, 0, 0, 0),
(49, 49, 37, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'mydokter', 'mydokter', 'Mr. Robot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `diagnosis`
--
ALTER TABLE `diagnosis`
 ADD PRIMARY KEY (`id_diagnosis`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
 ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `log_diagnosa`
--
ALTER TABLE `log_diagnosa`
 ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `rdata`
--
ALTER TABLE `rdata`
 ADD PRIMARY KEY (`id_result`);

--
-- Indexes for table `training_data`
--
ALTER TABLE `training_data`
 ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosis`
--
ALTER TABLE `diagnosis`
MODIFY `id_diagnosis` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
MODIFY `id_gejala` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `log_diagnosa`
--
ALTER TABLE `log_diagnosa`
MODIFY `id_log` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rdata`
--
ALTER TABLE `rdata`
MODIFY `id_result` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `training_data`
--
ALTER TABLE `training_data`
MODIFY `id_training` int(254) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
