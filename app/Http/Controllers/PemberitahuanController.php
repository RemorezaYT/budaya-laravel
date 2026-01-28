<?php

namespace App\Http\Controllers;

class PemberitahuanController extends Controller
{
    public function index()
    {
        $stories = [
            // SUMATRA
            [
                'region' => 'Aceh',
                'title'  => 'Legenda Pesisir dan Marwah Keluarga',
                'story'  => 'Dalam cerita rakyat Aceh, leluhur kerap digambarkan sebagai pelaut dan penjaga kampung pesisir. Pesan yang diwariskan: hormati tamu, jaga marwah keluarga, dan kuatkan persaudaraan. Aceh merupakan provinsi yang terletak di ujung paling barat Indonesia dan memiliki identitas yang sangat kuat sebagai daerah Islam. Julukan Serambi Mekkah tidak hanya menjadi simbol, tetapi benar-benar tercermin dalam kehidupan masyarakat Aceh sehari-hari. Nilai agama Islam memengaruhi sistem adat, hukum, pendidikan, hingga pola sosial masyarakat. Aceh menjadi satu-satunya provinsi di Indonesia yang menerapkan syariat Islam secara formal, sehingga norma agama memiliki peran besar dalam kehidupan publik. Selain kuat dalam nilai keagamaan, Aceh juga dikenal sebagai daerah yang memiliki semangat perjuangan tinggi. Sejarah panjang perlawanan terhadap penjajahan melahirkan banyak pahlawan nasional seperti Teuku Umar, Cut Nyak Dien, dan Cut Nyak Meutia. Budaya Aceh sangat kaya, mulai dari Tari Saman yang mengedepankan kekompakan, hingga seni tutur dan musik tradisional. Semua unsur tersebut menjadikan Aceh sebagai daerah yang memiliki jati diri kuat dan berkarakter.'
            ],
            [
                'region' => 'Sumatera Utara',
                'title'  => 'Asal-usul Marga dan Ikatan Dalihan Na Tolu',
                'story'  => 'Cerita turun-temurun di Sumatera Utara sering menekankan asal-usul marga dan pentingnya keseimbangan peran keluarga. Nenek moyang mengajarkan: hormat pada kerabat, teguh pada janji, dan rukun dalam adat. Sumatera Utara adalah salah satu provinsi dengan tingkat keberagaman etnis paling tinggi di Pulau Sumatra. Di wilayah ini hidup berbagai suku seperti Batak Toba, Batak Karo, Batak Simalungun, Batak Mandailing, Batak Angkola, suku Melayu, dan suku Nias. Masing-masing suku memiliki adat istiadat, bahasa daerah, rumah adat, dan sistem kekerabatan yang berbeda, namun tetap hidup berdampingan secara harmonis. Danau Toba menjadi ikon utama Sumatera Utara dan merupakan danau vulkanik terbesar di Asia Tenggara. Danau ini tidak hanya menawarkan keindahan alam, tetapi juga menjadi pusat kebudayaan Batak Toba, khususnya di Pulau Samosir. Upacara adat, musik gondang, serta rumah adat Batak menjadi daya tarik budaya yang memperkaya identitas Sumatera Utara sebagai daerah yang kaya akan tradisi dan nilai leluhur.'
            ],
            [
                'region' => 'Sumatera Barat',
                'title'  => 'Petuah Perantau dan Musyawarah Kaum',
                'story'  => 'Legenda Minangkabau sering berkisah tentang musyawarah dan kecerdikan pemimpin kaum. Pesannya: ilmu jadi bekal, adat jadi arah, dan merantau untuk membawa manfaat saat pulang. Sumatera Barat merupakan pusat kebudayaan Minangkabau yang terkenal dengan sistem kekerabatan matrilineal, yaitu garis keturunan ditarik dari pihak ibu. Sistem ini menjadikan perempuan memiliki posisi penting dalam keluarga dan kepemilikan harta pusaka. Namun, dalam kehidupan sosial dan kepemimpinan adat, peran laki-laki tetap kuat sebagai mamak dan pemimpin kaum. Falsafah hidup adat basandi syarak, syarak basandi Kitabullah menjadi pedoman utama masyarakat Minangkabau dalam menjalani kehidupan. Tradisi merantau yang sudah mengakar membentuk masyarakat Minang menjadi pribadi yang mandiri, berani, dan adaptif. Hal ini membuat orang Minang dapat ditemukan di hampir seluruh wilayah Indonesia, berperan aktif dalam bidang pendidikan, perdagangan, dan pemerintahan.'
            ],
            [
                'region' => 'Riau',
                'title'  => 'Kisah Sungai Besar dan Marwah Melayu',
                'story'  => 'Dalam cerita Melayu Riau, sungai digambarkan sebagai urat nadi kampung dan jalur ilmu. Leluhur mewariskan petuah: santun dalam kata, teguh dalam marwah, dan bijak dalam memimpin. Riau dikenal sebagai salah satu pusat kebudayaan Melayu di Indonesia. Nilai-nilai adat Melayu sangat dijunjung tinggi dalam kehidupan masyarakat, seperti sopan santun, musyawarah, dan penghormatan terhadap adat istiadat. Bahasa Melayu Riau menjadi salah satu dasar perkembangan Bahasa Indonesia modern. Secara geografis, Riau memiliki banyak sungai besar seperti Sungai Siak yang berperan penting dalam sejarah perdagangan dan penyebaran budaya. Selain kekayaan budaya, Riau juga dikenal sebagai daerah penghasil minyak dan gas bumi yang memberikan kontribusi besar terhadap perekonomian nasional. Namun, tantangan pembangunan dan pelestarian lingkungan menjadi isu penting yang dihadapi daerah ini.'
            ],
            [
                'region' => 'Kepulauan Riau',
                'title'  => 'Cerita Pulau-Pulau dan Pelaut Nusantara',
                'story'  => 'Folklore Kepulauan Riau sering menggambarkan leluhur sebagai pelayar ulung yang menjaga persahabatan antarpulau. Nilainya: berani merantau, pandai berdagang, dan tetap rendah hati. Kepulauan Riau merupakan provinsi kepulauan yang terdiri dari ribuan pulau kecil dan besar. Letaknya yang strategis di jalur perdagangan internasional menjadikan Kepri sebagai daerah yang terbuka terhadap pengaruh luar sejak lama. Masyarakatnya terbiasa hidup berdampingan dengan berbagai budaya, sehingga memiliki karakter yang dinamis dan adaptif. Kehidupan masyarakat Kepri sangat erat kaitannya dengan laut. Mata pencaharian seperti nelayan, perdagangan laut, dan pariwisata menjadi bagian penting dari ekonomi daerah. Budaya Melayu pesisir tetap terjaga melalui adat, kesenian, dan tradisi lisan yang diwariskan dari generasi ke generasi.'
            ],
            [
                'region' => 'Jambi',
                'title'  => 'Jejak Tua di Tepian Batanghari',
                'story'  => 'Cerita dari Jambi sering menempatkan Sungai Batanghari sebagai saksi kampung-kampung lama. Nenek moyang mengajarkan: hidup selaras, jaga adat, dan hormati sesepuh. Jambi memiliki sejarah panjang sebagai wilayah penting dalam perkembangan kerajaan-kerajaan Melayu kuno. Sungai Batanghari menjadi tulang punggung kehidupan masyarakat dan jalur utama interaksi sosial serta ekonomi. Keberadaan Candi Muaro Jambi menjadi bukti bahwa daerah ini pernah menjadi pusat pendidikan dan keagamaan pada masa lalu. Masyarakat Jambi dikenal menjunjung tinggi nilai adat dan kebersamaan. Tradisi musyawarah, gotong royong, dan penghormatan terhadap alam masih dijaga hingga saat ini. Perpaduan antara nilai adat Melayu dan pengaruh sejarah menjadikan Jambi memiliki karakter budaya yang khas.'
            ],
            [
                'region' => 'Sumatera Selatan',
                'title'  => 'Legenda Sungai dan Kampung Beradat',
                'story'  => 'Di Sumatera Selatan, cerita rakyat sering menonjolkan kehidupan sungai dan kampung yang kuat adatnya. Pesannya: gotong royong, saling bantu, dan menjaga kehormatan keluarga. Sumatera Selatan memiliki latar belakang sejarah yang sangat penting dalam perkembangan peradaban Nusantara. Wilayah ini pernah menjadi pusat Kerajaan Sriwijaya, kerajaan maritim besar yang menguasai jalur perdagangan internasional di Asia Tenggara. Sungai Musi menjadi jalur utama transportasi dan perdagangan, sekaligus pusat kehidupan masyarakat sejak zaman kerajaan hingga sekarang. Budaya Sumatera Selatan sangat dipengaruhi oleh kehidupan sungai, yang tercermin dalam adat, pola permukiman, dan mata pencaharian masyarakat. Selain sejarah dan budaya, Sumatera Selatan juga dikenal dengan kekayaan kuliner khas seperti pempek, tekwan, dan pindang. Makanan tersebut bukan sekadar kuliner, tetapi juga bagian dari identitas budaya masyarakat setempat.'
            ],
            [
                'region' => 'Kepulauan Bangka Belitung',
                'title'  => 'Dongeng Pesisir: Kerja Keras dan Kebersamaan',
                'story'  => 'Cerita Bangka Belitung banyak berkisah tentang kampung pesisir yang hidup dari alam dan laut. Leluhur mewariskan nilai: kerja keras, saling jaga, dan berbagi rezeki. Bangka Belitung adalah provinsi kepulauan yang terkenal dengan kekayaan tambang timah dan keindahan alam lautnya. Aktivitas pertambangan telah membentuk sejarah sosial dan ekonomi masyarakat sejak masa kolonial. Selain pertambangan, sektor pariwisata berkembang pesat dengan daya tarik pantai berpasir putih dan batu granit besar. Masyarakat Bangka Belitung memiliki latar belakang budaya yang beragam, termasuk pengaruh Melayu dan Tionghoa. Kehidupan sosial masyarakatnya dikenal harmonis, menjunjung toleransi, serta memiliki ikatan sosial yang kuat antarwarga.'
            ],
            [
                'region' => 'Bengkulu',
                'title'  => 'Kisah Penjaga Pantai Barat',
                'story'  => 'Folklore Bengkulu sering menggambarkan leluhur sebagai penjaga kampung di pesisir barat Sumatra. Pesannya: berani, jujur, dan tetap menghormati adat setempat. Bengkulu memiliki peran penting dalam sejarah perjuangan Indonesia. Daerah ini menjadi tempat pengasingan Ir. Soekarno sebelum kemerdekaan, di mana beliau banyak menyerap nilai budaya lokal dan berinteraksi dengan masyarakat. Peninggalan sejarah tersebut masih dapat ditemukan hingga kini. Selain sejarah, Bengkulu juga dikenal sebagai habitat bunga Rafflesia arnoldii, bunga terbesar di dunia. Keberadaan bunga ini menjadi simbol kekayaan alam Bengkulu. Budaya daerah ini merupakan perpaduan adat Melayu dan suku-suku lokal yang tetap menjaga tradisi dan kearifan leluhur.'
            ],
            [
                'region' => 'Lampung',
                'title'  => 'Petuah Sai Bumi Ruwa Jurai',
                'story'  => 'Cerita Lampung menekankan kebersamaan dalam keluarga besar dan kehormatan kampung. Nenek moyang mengajarkan: ramah pada tamu, kokoh menjaga persatuan, dan hidup beradat. Lampung merupakan provinsi yang menjadi gerbang Pulau Sumatra karena letaknya di bagian selatan. Daerah ini memiliki keberagaman budaya yang tinggi, dengan dua kelompok adat utama yaitu Sai Batin dan Pepadun. Sistem adat tersebut mengatur kehidupan sosial, upacara adat, dan struktur masyarakat. Lampung juga dikenal sebagai daerah transmigrasi yang membuat masyarakatnya sangat majemuk. Keberagaman ini menjadi kekuatan sosial sekaligus tantangan dalam menjaga persatuan. Selain budaya, Lampung memiliki potensi besar di sektor pertanian dan perkebunan, menjadikannya daerah yang penting dalam pembangunan regional.'
            ],

            // JAVA
            [
                'region' => 'Banten',
                'title'  => 'Legenda Tanah Pesisir dan Keteguhan Hati',
                'story'  => 'Kisah Banten sering menggambarkan leluhur sebagai penjaga pelabuhan dan kampung pesisir. Nilai yang diwariskan: tegas, berani, namun tetap santun dalam pergaulan. Banten merupakan provinsi yang terletak di bagian barat Pulau Jawa dan memiliki sejarah penting sebagai pusat Kesultanan Banten. Daerah ini dikenal dengan kekuatan nilai agama Islam, tradisi pesantren, serta budaya lokal seperti debus yang mencerminkan ketangguhan dan spiritualitas masyarakatnya. Selain sejarah dan budaya, Banten memiliki wilayah industri dan pelabuhan yang berkembang pesat, terutama di kawasan Cilegon dan Tangerang. Keberagaman masyarakat Banten terbentuk dari perpaduan budaya Sunda, Betawi, dan pengaruh luar, sehingga menjadikan daerah ini dinamis secara sosial dan ekonomi.'
            ],
            [
                'region' => 'DKI Jakarta',
                'title'  => 'Cerita Betawi: Kampung, Pantun, dan Kebersamaan',
                'story'  => 'Cerita Betawi sering bercerita tentang kampung yang ramai, tradisi pantun, dan sikap terbuka pada pendatang. Pesan leluhur: hidup rukun, humor sebagai perekat, dan saling tolong di kampung. DKI Jakarta merupakan ibu kota negara dan pusat pemerintahan, ekonomi, serta budaya Indonesia. Sebagai kota metropolitan, Jakarta menjadi tempat bertemunya berbagai suku, budaya, dan latar belakang masyarakat dari seluruh Indonesia. Hal ini menjadikan Jakarta sebagai simbol keberagaman nasional. Selain berperan sebagai pusat administrasi negara, Jakarta juga menjadi pusat kegiatan bisnis, pendidikan, dan hiburan. Budaya Betawi sebagai budaya asli Jakarta tetap dilestarikan melalui kesenian, bahasa, dan tradisi, meskipun berada di tengah arus modernisasi yang sangat kuat.'
            ],
            [
                'region' => 'Jawa Barat',
                'title'  => 'Dongeng Sunda: Selaras dengan Alam',
                'story'  => 'Dongeng Sunda sering menempatkan gunung, hutan, dan sungai sebagai “guru” kehidupan. Pesannya: tata krama, gotong royong, dan menjaga alam agar hidup tenteram. Jawa Barat dikenal sebagai daerah dengan budaya Sunda yang menjunjung tinggi nilai kesopanan, kebersamaan, dan kearifan lokal. Bahasa Sunda, kesenian tradisional, serta adat istiadat masih digunakan dalam kehidupan masyarakat sehari-hari, terutama di wilayah pedesaan. Selain kekayaan budaya, Jawa Barat memiliki potensi alam yang besar, mulai dari pegunungan, perkebunan, hingga kawasan industri. Provinsi ini juga menjadi salah satu pusat pendidikan dan ekonomi yang penting di Pulau Jawa karena letaknya yang strategis dan jumlah penduduk yang besar.'
            ],
            [
                'region' => 'Jawa Tengah',
                'title'  => 'Laku Hidup: Rasa, Tata, dan Tanggung Jawab',
                'story'  => 'Kisah-kisah Jawa Tengah banyak menekankan keseimbangan: rasa (empati), tata (aturan), dan tanggung jawab. Leluhur mengajarkan harmoni, bukan menang sendiri. Jawa Tengah merupakan daerah yang dikenal dengan budaya Jawa yang kental dan penuh nilai filosofi. Kehidupan masyarakatnya dipengaruhi oleh adat, tradisi, dan ajaran moral yang diwariskan secara turun-temurun, seperti unggah-ungguh dan tata krama. Wilayah ini juga memiliki banyak peninggalan sejarah dan budaya, seperti candi-candi dan keraton. Selain itu, Jawa Tengah dikenal sebagai daerah agraris dengan sektor pertanian yang kuat serta masyarakat yang menjunjung tinggi nilai gotong royong.'
            ],
            [
                'region' => 'Daerah Istimewa Yogyakarta',
                'title'  => 'Petuah Mataram: Ilmu, Etika, dan Pengabdian',
                'story'  => 'Cerita Yogyakarta sering memuliakan ilmu dan etika sebagai bekal hidup. Pesan leluhur: hormati guru, jaga sopan santun, dan mengabdi untuk kebaikan bersama. Daerah Istimewa Yogyakarta memiliki keunikan karena sistem pemerintahannya yang masih dipimpin oleh Sultan. Yogyakarta dikenal sebagai pusat kebudayaan Jawa yang kuat, dengan keraton sebagai simbol adat, sejarah, dan identitas masyarakatnya. Selain budaya, Yogyakarta dikenal sebagai kota pelajar dan tujuan wisata utama di Indonesia. Kehidupan masyarakatnya relatif sederhana, toleran, dan terbuka, sehingga menjadikan Yogyakarta sebagai daerah yang nyaman untuk pendidikan dan pengembangan kebudayaan.'
            ],
            [
                'region' => 'Jawa Timur',
                'title'  => 'Legenda Tanah Blambangan dan Semangat Wani',
                'story'  => 'Cerita Jawa Timur banyak memuat semangat keberanian, ketegasan, dan kerja keras. Nenek moyang mewariskan pesan: kuat dalam usaha, jujur dalam pergaulan, dan setia pada keluarga. Jawa Timur merupakan provinsi dengan wilayah luas dan keberagaman budaya yang tinggi. Budaya Jawa Timur dikenal tegas, terbuka, dan dinamis, dengan pengaruh kuat dari budaya Jawa, Madura, dan pesisir. Selain budaya, Jawa Timur memiliki peran penting dalam perekonomian nasional melalui sektor industri, pertanian, dan perdagangan. Kota-kota besar seperti Surabaya menjadi pusat aktivitas ekonomi, sementara daerah pedesaan tetap mempertahankan tradisi dan kearifan lokal.'
            ],

            // BALI & NUSA TENGGARA
            [
                'region' => 'Bali',
                'title'  => 'Harmoni Tiga Arah Kehidupan',
                'story'  => 'Dalam cerita tradisi Bali, leluhur menjaga harmoni antara manusia, alam, dan yang suci. Pesannya: hidup akan indah jika seimbang, saling menghormati, dan menjaga kebersamaan banjar. Bali merupakan salah satu provinsi di Indonesia yang terkenal hingga ke mancanegara karena kekayaan budaya dan keindahan alamnya. Pulau Bali dikenal sebagai Pulau Dewata, karena kehidupan masyarakatnya sangat erat dengan nilai-nilai keagamaan, khususnya agama Hindu. Aktivitas keagamaan menjadi bagian dari kehidupan sehari-hari, terlihat dari banyaknya pura, upacara adat, dan sesajen yang hampir selalu hadir di berbagai sudut wilayah Bali. Budaya Bali sangat kuat dan terus dilestarikan oleh masyarakatnya melalui seni tari, musik gamelan, seni ukir, serta upacara adat yang sarat makna filosofis. Sistem irigasi tradisional yang disebut subak menunjukkan kearifan lokal masyarakat Bali dalam mengelola alam secara bersama-sama. Selain budaya, Bali juga memiliki keindahan alam berupa pantai, sawah terasering, dan pegunungan yang menjadikan pariwisata sebagai sektor utama perekonomian. Perpaduan antara budaya, alam, dan kehidupan masyarakat menjadikan Bali sebagai daerah yang memiliki identitas kuat dan daya tarik tinggi.'
            ],
            [
                'region' => 'Nusa Tenggara Barat',
                'title'  => 'Kisah Pulau dan Keteguhan Komunitas',
                'story'  => 'Cerita NTB sering menggambarkan leluhur yang tangguh menghadapi alam pulau dan laut. Nilainya: berani, kompak, dan menjaga adat sebagai pegangan hidup. Nusa Tenggara Barat merupakan provinsi yang terletak di bagian barat wilayah Kepulauan Nusa Tenggara dan terdiri dari dua pulau utama, yaitu Pulau Lombok dan Pulau Sumbawa. Daerah ini dikenal dengan keindahan alamnya yang beragam, mulai dari pantai, perbukitan, hingga Gunung Rinjani yang merupakan salah satu gunung tertinggi dan terindah di Indonesia. Kehidupan masyarakat NTB banyak dipengaruhi oleh kondisi alam, terutama dalam bidang pertanian, peternakan, dan pariwisata. Dari segi budaya, NTB memiliki keragaman etnis seperti suku Sasak di Lombok, suku Samawa di Sumbawa, dan suku Mbojo di Bima. Masyarakat NTB dikenal religius, dengan nilai-nilai agama yang kuat dalam kehidupan sehari-hari. Tradisi, adat istiadat, serta kesenian daerah masih dijaga dan diwariskan secara turun-temurun, sehingga membentuk identitas budaya NTB yang khas dan beragam.'
            ],
            [
                'region' => 'Nusa Tenggara Timur',
                'title'  => 'Dongeng Tanah Kering: Kerja Keras dan Kesetiaan',
                'story'  => 'Folklore NTT banyak menekankan kerja keras, persaudaraan, dan rasa hormat pada tanah leluhur. Pesannya: sabar membangun hidup, setia pada keluarga, dan menjaga tradisi. Nusa Tenggara Timur terletak di bagian timur Kepulauan Nusa Tenggara dan terdiri dari banyak pulau, seperti Flores, Sumba, Timor, Alor, dan Lembata. Kondisi geografis yang kering dan berbukit membuat masyarakat NTT harus beradaptasi dengan lingkungan alamnya, terutama dalam bidang pertanian lahan kering dan peternakan. Meskipun memiliki tantangan alam, NTT kaya akan keindahan alam seperti pantai, perbukitan, dan destinasi wisata terkenal seperti Taman Nasional Komodo. Budaya NTT sangat beragam karena banyaknya suku dan bahasa daerah. Setiap daerah memiliki tradisi adat yang unik, seperti upacara adat, tarian tradisional, dan kain tenun ikat yang menjadi ciri khas NTT. Masyarakat NTT dikenal memiliki semangat kebersamaan yang tinggi, sederhana, dan menjunjung nilai adat serta kekeluargaan dalam kehidupan sehari-hari.'
            ],

            // KALIMANTAN
            [
                'region' => 'Kalimantan Barat',
                'title'  => 'Cerita Sungai dan Kampung-Kampung Tua',
                'story'  => 'Cerita Kalbar sering berkisah tentang perjalanan menyusuri sungai besar dan membangun kampung. Nenek moyang mengajarkan: ramah pada tamu, jaga persaudaraan, dan hormati alam. Kalimantan Barat merupakan provinsi yang memiliki wilayah luas dengan banyak sungai besar, terutama Sungai Kapuas yang merupakan sungai terpanjang di Indonesia. Sungai ini menjadi jalur utama transportasi dan pusat kehidupan masyarakat sejak dahulu. Kalbar juga dikenal sebagai daerah yang multietnis, dihuni oleh suku Dayak, Melayu, dan Tionghoa yang hidup berdampingan dalam keberagaman budaya. Budaya Kalimantan Barat sangat kaya, tercermin dalam rumah panjang Dayak, upacara adat, dan kesenian tradisional. Masyarakatnya menjunjung tinggi nilai toleransi dan gotong royong. Selain itu, Kalbar memiliki potensi alam besar di bidang pertanian, perkebunan, dan kehutanan.'
            ],
            [
                'region' => 'Kalimantan Tengah',
                'title'  => 'Legenda Hutan: Ambil Secukupnya',
                'story'  => 'Cerita di Kalteng sering menekankan hutan sebagai rumah dan sumber hidup. Pesan leluhur: ambil secukupnya, jangan serakah, dan rawat keseimbangan alam. Kalimantan Tengah merupakan wilayah yang sebagian besar masih didominasi hutan tropis dan sungai-sungai besar. Provinsi ini dikenal sebagai salah satu pusat budaya Dayak, dengan adat istiadat yang masih kuat dan kehidupan masyarakat yang dekat dengan alam. Sungai menjadi sarana penting dalam kehidupan sosial dan ekonomi masyarakat Kalteng. Masyarakat Kalimantan Tengah menjunjung tinggi nilai adat, kebersamaan, dan kearifan lokal. Upacara adat, rumah betang, serta seni tari tradisional masih dilestarikan hingga kini. Selain itu, Kalteng memiliki potensi besar dalam sektor kehutanan, pertanian, dan sumber daya alam lainnya.'
            ],
            [
                'region' => 'Kalimantan Selatan',
                'title'  => 'Kisah Pasar Terapung dan Kearifan Sungai',
                'story'  => 'Folklore Kalsel banyak bertema sungai dan kehidupan yang bergerak mengikuti arus. Pesannya: ulet mencari rezeki, jujur berdagang, dan menjaga kerukunan kampung. Kalimantan Selatan dikenal dengan julukan Bumi Lambung Mangkurat dan memiliki budaya Banjar yang sangat kuat. Kehidupan masyarakat Kalsel erat kaitannya dengan sungai, terlihat dari pasar terapung yang menjadi ciri khas daerah ini. Sungai tidak hanya menjadi sarana transportasi, tetapi juga pusat kegiatan ekonomi masyarakat. Budaya Banjar dikenal religius dan menjunjung tinggi nilai keislaman. Selain budaya, Kalimantan Selatan memiliki sektor perdagangan dan pertanian yang berkembang. Kota Banjarmasin menjadi pusat aktivitas ekonomi dan budaya di provinsi ini.'
            ],
            [
                'region' => 'Kalimantan Timur',
                'title'  => 'Jejak Penjaga Rimba dan Simbol Ukiran',
                'story'  => 'Cerita Kaltim sering menggambarkan leluhur sebagai penjaga rimba yang bijak. Nilainya: hormati alam, jaga kehormatan keluarga, dan pelihara kebersamaan dalam kampung. Kalimantan Timur merupakan salah satu provinsi dengan kekayaan sumber daya alam yang besar, terutama di bidang pertambangan minyak, gas, dan batu bara. Wilayah ini memiliki hutan luas, sungai besar, serta kawasan pesisir yang mendukung aktivitas ekonomi dan perdagangan. Masyarakat Kalimantan Timur sangat beragam, terdiri dari suku Dayak, Kutai, Banjar, dan pendatang dari berbagai daerah. Budaya lokal seperti adat Kutai dan Dayak masih dijaga dan menjadi identitas daerah. Selain itu, Kalimantan Timur kini menjadi pusat perhatian nasional karena menjadi lokasi pembangunan Ibu Kota Nusantara (IKN).'
            ],
            [
                'region' => 'Kalimantan Utara',
                'title'  => 'Legenda Perbatasan: Teguh dan Bersahaja',
                'story'  => 'Cerita Kalimantan Utara sering menonjolkan keteguhan hidup di wilayah sungai, hutan, dan perbatasan. Pesan leluhur: sederhana, berani, dan saling bantu antarwarga. Kalimantan Utara merupakan provinsi termuda di Indonesia yang terletak di bagian paling utara Pulau Kalimantan. Wilayahnya didominasi oleh hutan, pegunungan, dan sungai, dengan potensi sumber daya alam yang besar. Letaknya yang berbatasan langsung dengan negara lain menjadikan Kaltara memiliki posisi strategis. Masyarakat Kalimantan Utara terdiri dari berbagai suku, termasuk Dayak dan Tidung, yang masih menjaga adat dan tradisi leluhur. Kehidupan masyarakatnya sederhana dan sangat bergantung pada alam. Dengan kekayaan alam dan budaya yang dimiliki, Kalimantan Utara memiliki potensi besar untuk berkembang di masa depan.'
            ],

            // SULAWESI
            [
                'region' => 'Sulawesi Utara',
                'title'  => 'Cerita Pesisir: Persaudaraan dan Keberanian',
                'story'  => 'Folklore Sulut kerap mengisahkan kampung-kampung pesisir yang kompak dan berani. Nilainya: menjaga persaudaraan, terbuka pada tamu, dan kuat dalam kerja. Sulawesi Utara terletak di bagian utara Pulau Sulawesi dan dikenal dengan kekayaan alam laut serta keindahan bawah lautnya. Daerah ini memiliki garis pantai yang panjang dan menjadi salah satu pusat pariwisata bahari di Indonesia. Masyarakat Sulawesi Utara dikenal terbuka dan menjunjung tinggi toleransi antarumat beragama. Budaya Sulawesi Utara sangat beragam, dengan suku Minahasa sebagai suku terbesar. Tradisi adat, tarian, dan upacara budaya masih dilestarikan hingga kini. Selain itu, Sulawesi Utara memiliki peran penting dalam sektor perikanan, pariwisata, dan perdagangan.'
            ],
            [
                'region' => 'Sulawesi Tengah',
                'title'  => 'Legenda Danau dan Pegunungan',
                'story'  => 'Cerita Sulteng sering menggambarkan leluhur yang hidup berdampingan dengan danau serta pegunungan. Pesannya: jaga harmoni, musyawarah dalam masalah, dan hormati adat. Sulawesi Tengah memiliki wilayah yang luas dengan bentang alam yang beragam, mulai dari pegunungan, danau, hingga pesisir laut. Danau Poso merupakan salah satu ikon alam daerah ini. Kondisi geografis tersebut memengaruhi kehidupan masyarakat yang bergantung pada pertanian, perikanan, dan hasil hutan. Budaya Sulawesi Tengah sangat beragam karena dihuni oleh banyak suku dengan adat dan bahasa yang berbeda. Nilai kebersamaan, gotong royong, dan adat istiadat masih dijunjung tinggi dalam kehidupan masyarakat.'
            ],
            [
                'region' => 'Sulawesi Selatan',
                'title'  => 'Siri’ dan Pesse: Harga Diri dan Empati',
                'story'  => 'Kisah Bugis-Makassar sering menyinggung siri’ (harga diri) dan pesse (empati). Pesan leluhur: jujur, berani bertanggung jawab, dan setia pada keluarga. Sulawesi Selatan merupakan salah satu provinsi dengan sejarah dan budaya yang sangat kuat di Pulau Sulawesi. Daerah ini dikenal dengan suku Bugis, Makassar, dan Toraja yang memiliki adat istiadat khas. Nilai keberanian, kejujuran, dan harga diri atau siri’ menjadi bagian penting dalam kehidupan masyarakat. Selain budaya, Sulawesi Selatan memiliki peran penting dalam bidang perdagangan, pertanian, dan pelayaran. Kota Makassar menjadi pusat ekonomi dan pintu gerbang kawasan Indonesia Timur.'
            ],
            [
                'region' => 'Sulawesi Tenggara',
                'title'  => 'Legenda Pesisir dan Pulau-Pulau',
                'story'  => 'Folklore Sultra banyak bercerita tentang kampung laut dan pulau-pulau yang saling terhubung. Nilainya: berani melaut, menjaga persahabatan, dan menghormati alam. Sulawesi Tenggara dikenal dengan kekayaan laut dan pulau-pulau kecil yang indah. Wilayah ini memiliki banyak potensi perikanan dan pariwisata bahari. Masyarakatnya hidup berdampingan dengan laut dan menggantungkan hidup pada sumber daya pesisir. Budaya Sulawesi Tenggara sangat beragam, dihuni oleh suku Buton, Muna, dan Tolaki. Tradisi adat dan bahasa daerah masih digunakan dalam kehidupan sehari-hari, mencerminkan kekayaan budaya daerah tersebut.'
            ],
            [
                'region' => 'Gorontalo',
                'title'  => 'Petuah Kampung: Adat dan Kehormatan',
                'story'  => 'Cerita Gorontalo sering memuliakan adat sebagai penuntun hidup. Pesannya: hormati orang tua, jaga nama baik, dan kuatkan persaudaraan dalam kampung. Gorontalo merupakan provinsi yang terletak di bagian utara Pulau Sulawesi dan memiliki budaya yang kental dengan nilai adat dan agama. Falsafah hidup adat bersendikan syara’, syara’ bersendikan Kitabullah menjadi pedoman utama masyarakat Gorontalo dalam kehidupan sehari-hari. Sebagian besar masyarakat Gorontalo bermata pencaharian di bidang pertanian dan perikanan. Tradisi adat, bahasa daerah, serta kesenian lokal masih dijaga dengan baik. Gorontalo juga dikenal dengan kekayaan alam berupa laut, pegunungan, dan potensi wisata yang terus berkembang.'
            ],
            [
                'region' => 'Sulawesi Barat',
                'title'  => 'Kisah Pesisir dan Pegunungan: Rukun dan Gigih',
                'story'  => 'Folklore Sulbar banyak menekankan kekompakan keluarga dan kegigihan bekerja. Pesan leluhur: rukun itu kekuatan, dan kerja keras itu jalan rezeki. Sulawesi Barat dikenal sebagai daerah yang kaya akan budaya Mandar. Masyarakat Mandar memiliki tradisi maritim yang kuat, tercermin dari kehidupan nelayan dan pelaut yang telah berkembang sejak lama. Nilai adat dan agama sangat dijunjung tinggi dalam kehidupan masyarakat Sulbar. Selain budaya, Sulawesi Barat memiliki potensi alam berupa pegunungan, sungai, dan pantai yang masih alami. Sektor pertanian dan perikanan menjadi sumber utama penghidupan masyarakat setempat.'
            ],

            // MALUKU
            [
                'region' => 'Maluku',
                'title'  => 'Pela Gandong: Saudara Meski Beda Kampung',
                'story'  => 'Cerita Maluku sering mengangkat ikatan pela-gandong sebagai simbol persaudaraan lintas kampung. Pesannya: berbeda tetap saudara, saling jaga, dan utamakan damai. Maluku merupakan provinsi kepulauan yang sejak dahulu dikenal sebagai pusat perdagangan rempah-rempah dunia, terutama cengkeh dan pala. Letaknya yang strategis di jalur pelayaran membuat Maluku menjadi tujuan bangsa-bangsa asing pada masa kolonial. Sejarah panjang tersebut membentuk karakter masyarakat Maluku yang terbuka dan terbiasa berinteraksi dengan berbagai budaya. Kehidupan masyarakat Maluku sangat erat dengan laut karena sebagian besar wilayahnya berupa pulau-pulau kecil. Mata pencaharian utama penduduk adalah nelayan dan pelaut. Budaya Maluku kaya akan nilai persaudaraan yang tercermin dalam tradisi pela gandong, yaitu ikatan persaudaraan antar desa yang dijaga hingga kini. Seni musik, tarian, dan tradisi adat menjadi bagian penting dari identitas masyarakat Maluku.'
            ],
            [
                'region' => 'Maluku Utara',
                'title'  => 'Legenda Rempah dan Kampung-Kampung Tua',
                'story'  => 'Folklore Maluku Utara sering bercerita tentang kampung tua, pelayaran, dan perdagangan rempah. Pesan leluhur: bijak bermusyawarah, jaga kehormatan, dan kuatkan persaudaraan. Maluku Utara merupakan provinsi yang memiliki peran penting dalam sejarah Nusantara, khususnya sebagai pusat Kesultanan Ternate dan Tidore. Dua kesultanan ini pernah berjaya dan berpengaruh besar dalam perdagangan rempah-rempah di masa lalu. Nilai sejarah tersebut masih terlihat dalam peninggalan budaya, adat istiadat, dan sistem sosial masyarakat Maluku Utara. Wilayah Maluku Utara terdiri dari pulau-pulau vulkanik dengan kondisi alam yang subur dan laut yang kaya hasil perikanan. Masyarakatnya hidup berdampingan dengan alam dan menjunjung tinggi adat serta tradisi lokal. Budaya Maluku Utara sangat beragam, dengan bahasa daerah, upacara adat, dan kesenian tradisional yang masih dilestarikan. Perpaduan antara sejarah kesultanan, budaya lokal, dan kekayaan alam menjadikan Maluku Utara memiliki identitas yang kuat dan khas.'
            ],

            // PAPUA REGION (6 provinsi)
            [
                'region' => 'Papua',
                'title'  => 'Asal-usul Marga dan Alam sebagai Identitas',
                'story'  => 'Cerita Papua sering menekankan asal-usul marga dan hubungan kuat dengan alam. Pesannya: berani, setia pada keluarga, dan hormat pada hutan serta pegunungan. Cerita Papua sering menekankan asal-usul marga, hubungan manusia dengan alam, serta gunung dan hutan sebagai bagian dari kehidupan spiritual. Dalam banyak kisah rakyat, leluhur dipercaya berasal dari alam sekitar, seperti gunung, batu, atau sungai, yang kemudian dijaga dan dihormati oleh keturunannya. Alam Papua tidak hanya menjadi tempat hidup, tetapi juga sumber nilai, identitas, dan kebijaksanaan masyarakat.'
            ],
            [
                'region' => 'Papua Barat',
                'title'  => 'Legenda Pesisir dan Hutan: Jaga Tanah Leluhur',
                'story'  => 'Folklore Papua Barat kerap menggambarkan leluhur sebagai penjaga pesisir dan hutan. Pesannya: jaga tanah leluhur, saling menolong, dan hidup selaras dengan alam. Folklore Papua Barat kerap menggambarkan kehidupan masyarakat pesisir dan hutan yang saling terhubung. Cerita rakyatnya banyak mengisahkan tentang laut sebagai sumber kehidupan, ikan sebagai simbol rezeki, serta hutan sebagai tempat perlindungan. Nilai menjaga keseimbangan alam dan hidup rukun antarwarga menjadi pesan utama dalam cerita-cerita tradisional Papua Barat.'
            ],
            [
                'region' => 'Papua Tengah',
                'title'  => 'Kisah Perjalanan dan Kampung di Tanah Luas',
                'story'  => 'Cerita Papua Tengah sering mengangkat perjalanan jauh, kampung, dan persaudaraan antar keluarga. Pesan leluhur: kompak, berani menjaga rumah, dan menghormati adat. Cerita Papua Tengah sering mengangkat kisah perjalanan antar kampung, hubungan kekerabatan, dan semangat kebersamaan. Tokoh-tokoh dalam cerita rakyat digambarkan sebagai pribadi yang gigih, sabar, dan menghormati adat. Alam pegunungan, lembah, dan danau menjadi latar penting yang menunjukkan bagaimana masyarakat hidup berdampingan dengan lingkungan yang keras namun penuh makna.'
            ],
            [
                'region' => 'Papua Pegunungan',
                'title'  => 'Legenda Pegunungan: Tangguh dan Setia',
                'story'  => 'Folklore Papua Pegunungan menonjolkan ketangguhan hidup di dataran tinggi. Pesannya: disiplin, setia pada keluarga, dan menjaga kehormatan kampung. Folklore Papua Pegunungan menonjolkan kehidupan masyarakat di daerah tinggi dengan kondisi alam yang menantang. Cerita-cerita daerahnya menggambarkan ketangguhan, keberanian, dan kerja sama dalam menghadapi dinginnya pegunungan dan medan yang sulit. Nilai persaudaraan, gotong royong, dan kesetiaan terhadap adat menjadi inti dari kisah-kisah masyarakat Papua Pegunungan.'
            ],
            [
                'region' => 'Papua Selatan',
                'title'  => 'Cerita Tanah Selatan: Kebersamaan dan Keteguhan',
                'story'  => 'Cerita Papua Selatan sering menekankan kebersamaan dalam menghadapi alam yang keras. Pesannya: saling bantu, kuat dalam keputusan, dan hormat pada tradisi. Cerita Papua Selatan sering menekankan kebersamaan masyarakat dalam kehidupan sehari-hari, terutama yang berkaitan dengan alam dataran rendah dan sungai. Kisah-kisahnya menggambarkan hubungan harmonis antar keluarga dan kampung, serta pentingnya saling membantu. Alam digambarkan sebagai pemberi kehidupan yang harus dijaga bersama demi generasi berikutnya.'
            ],
            [
                'region' => 'Papua Barat Daya',
                'title'  => 'Legenda Pesisir: Persaudaraan dan Keberanian',
                'story'  => 'Folklore Papua Barat Daya kerap menggambarkan leluhur pesisir sebagai pelaut dan penjaga kampung. Pesannya: berani, ramah pada tamu, dan menjaga persaudaraan. Folklore Papua Barat Daya banyak berkaitan dengan kehidupan pesisir, laut, dan persaudaraan antar masyarakat pulau. Cerita rakyatnya menekankan nilai persatuan, keterbukaan, dan saling menghormati meskipun berasal dari latar belakang yang berbeda. Laut menjadi simbol penghubung antarwilayah sekaligus lambang persahabatan dan kehidupan.'
            ],
        ];

        return view('pemberitahuan', [
            'stories' => $stories
        ]);
    }
}
