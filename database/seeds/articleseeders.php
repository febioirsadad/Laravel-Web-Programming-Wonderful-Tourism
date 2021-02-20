<?php

use Illuminate\Database\Seeder;

class articleseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([

            ['tourismuser_id' => 3,
            'tourismcategory_id'=>1,
            'title' => 'Pantai Raja Ampat',
            'description' =>'Raja Ampat adalah kepulauan yang terdiri 
            dari banyak sekali pulau karang dan tersebar luas di seluruh wilayahnya. 
            Namun demikian, Raja Ampat memiliki 4 pulau utama yang paling besar, yaitu Pulau Waigeo, 
            Pulau Batanta, Pulau Salawati, dan Pulau Misool. Empat pulau besar inilah yang menjadi titik awal penyebaran seluruh penduduk 
            Raja Ampat yang sebagian besar berprofesi sebagai nelayan. Wilayah perairan adalah daya tarik utama Raja Ampat, mengingat perairan 
            Raja Ampat adalah salah satu dari 10 perairan terbaik di seluruh dunia. Hal ini didasarkan pada berbagai penelitian tentang kekayaan 
            flora-fauna dan kelestarian alam laut yang dimiliki Raja Ampat.',
            'image' => '../img/Pantai Raja Ampat.jpg'],
            ['tourismuser_id' => 3,
            'tourismcategory_id'=>1,
            'title' => 'Pantai Pangandaran',
            'description' =>'Pantai Pangandaran merupakan wisata tepi laut yang berada di daerah Ciamis tepatnya di Desa Pananjung. Pantai ini pernah dinobatkan oleh AsiaRooms sebagai pantai terbaik di provinsi Jawa Barat. Pantai Pangandaran pun diajukan menjadi Unesco Global Geopark untuk menjadikannya wisata berkelas dunia.
            Pantainya landai dengan hamparan pasir putih dan air yang jernih. Jarak antara pasang dan surut relatif lama sehingga memungkinkan untuk berenang dengan aman. Destinasi wisata ini memungkinkan wisatawan untuk menikmati terbit dan tenggelamnya matahari dari tempat yang sama.',
            'image' => '../img/Pantai Pangandaran.jpg'],
            ['tourismuser_id' => 4,
            'tourismcategory_id'=>1,
            'title' => 'Pantai Bunaken',
            'description' =>'Kecantikan alam bawah laut pulau yang satu ini selalu membuat wisatawan dari berbagai dunia berdecak kagum. Kaya akan biota laut menjadi penyebab mengapa pulau ini bagaikan sihir bagi para wisatawan yang silih berganti datang. Terumbu karang yang terjaga, jenis ikan cantik aneka warna, sangat mudah ditemukan di pulau yang berada di wilayah Sulawesi Utara ini. Pulau ini bernama Pulau Bunaken, satu dari 4 pulau di Taman Nasional Bunaken yang mendunia.
            Pulau Bunaken terletak di Teluk Manado bersebelahan dengan Pulau Manado Tua, Pulau Siladen dan Pulau Mantihage. Secara administratif, pulau yang memiliki luas mencapai sekitar 8000 hektar ini masuk dalam wilayah Kota Manado.
            Menuju ke Pulau Bunaken, wisatawan bisa datang ke pelabuhan Kota Manado atau Pelabuhan Marina yang hanya berjarak 10 menit dari pusat kota. Di pelabuhan ini banyak perahu dan kapal-kapal cepat yang siap membantu wisatawan untuk sampai ke Pulau Bunaken. Biaya sewa perahu berkisar antara Rp900.000-Rp2.500.000. Harga ini tergantung dengan besarnya perahu yang digunakan.',
            'image' => '../img/Pantai Bunaken.jpg'],
            ['tourismuser_id' => 4,
            'tourismcategory_id'=>1,
            'title' => 'Pantai Senggigi',
            'description' =>'Raja Ampat adalah kepulauan yang terdiri 
            dari banyak sekali pulau karang dan tersebar luas di seluruh wilayahnya. 
            Namun demikian, Raja Ampat memiliki 4 pulau utama yang paling besar, yaitu Pulau Waigeo, 
            Pulau Batanta, Pulau Salawati, dan Pulau Misool. Empat pulau besar inilah yang menjadi titik awal penyebaran seluruh penduduk 
            Raja Ampat yang sebagian besar berprofesi sebagai nelayan. Wilayah perairan adalah daya tarik utama Raja Ampat, mengingat perairan 
            Raja Ampat adalah salah satu dari 10 perairan terbaik di seluruh dunia. Hal ini didasarkan pada berbagai penelitian tentang kekayaan 
            flora-fauna dan kelestarian alam laut yang dimiliki Raja Ampat.',
            'image' => '../img/pantai senggigi lombok.jpg'],
            ['tourismuser_id' => 2,
            'tourismcategory_id'=>2,
            'title' => 'Gunung Bromo',
            'description' =>'Pesona Gunung Bromo yang indah tidak hanya terkenal di Indonesia, tetapi juga di banyak negara asing. Padang pasir, savana, dan kawah gunung berapi adalah beberapa panorama ikon Jawa Timur.
            Keindahan ikon pariwisata Jawa Timur ini sudah terkenal di mancanegara. Gunung Bromo adalah gunung api aktif yang terletak di perbatasan kabupaten Lumajang, Malang, Pasuruan dan Probolinggo. Pesonanya membuat saya dan teman-teman ingin mengunjunginya.
            Inna Tretes Hotel, Resort & Meeting yang terletak di daerah pegunungan Pasuruan adalah tempat kita beristirahat sebelum menjelajah ke Gunung Bromo, yang konon berasal dari kata "Brahma", salah satu dewa Hindu. Suasana hotel yang tenang dan sejuk membuatnya cocok sebagai tempat beristirahat.
            Sekitar pukul 00.00 WIB kami bergegas dari Inna Tretes dikawal dengan mobil dari hotel. Karena masih tengah malam, pemandangan selama perjalanan tidak menyenangkan sampai menemukan jalan berliku tanpa henti sebelum tiba di tempat untuk berganti kendaraan. Pada saat itu kami tiba sekitar pukul 02:15, waktu perjalanan cepat karena keterampilan pengemudi.',
            'image' => '../img/Gunung Bromo.jpg'],
            ['tourismuser_id' => 3,
            'tourismcategory_id'=>2,
            'title' => 'Gunung Gede Pangrango',
            'description' =>'Gunung Gede Pangrango ditetapkan sebagai salah satu dari 5 taman nasional pertama di Indonesia oleh pemerintah Indonesia melalui Surat Keputusan Menteri Pertanian tahun 1980.
            Sejarah awal konservasi di kawasan ini hanya sedikit diketahui, walaupun hutan dan gunung merupakan bagian dari legenda-legenda di tanah Sunda. Tampaknya ada jalur sejarah dari kota tua Cianjur sampai Bogor melalui Cipanas. Bagian lereng pegunungan yang rendah, tidak rata dan berteras-teras dulunya digunakan untuk pertanian dengan pergiliran tanaman.
            Dikenalkannya tanaman teh sebagai tanaman perkebunan memberikan dampak nyata bagi kawasan ini. Teh varietas Jepang telah ditanam sejak tahun 1728, dan perkebunan ini terbentang mulai dari Ciawi sampai Cikopo di tahun 1835. Kemudian, tahun 1878, teh Assam diperkenalkan dan tumbuh dengan sangat baik, menyebabkan ekonomi dan kondisi lingkungan di kampung-kampung dilereng pegunungan berubah.',
            'image' => '../img/Gunung Gede dan Pangrango.jpg'],
            ['tourismuser_id' => 2,
            'tourismcategory_id'=>3,
            'title' => 'Museum Fatahillah',
            'description' =>'Jakarta sebagai ibukota RI telah menyimpan riwayat sejarah yang amat panjang, bahkan hingga ke masa prasejarah. Perjalanan sejarah ini masih dapat kita pelajari dan kita nikmati hingga kini di Museum Fatahillah, yang terletak di Kawasan Kota Tua, atau tepatnya di Jalan Taman Fatahillah No. 2, Jakarta Barat. Disini anda dapat menelusuri berbagai peninggalan sejarah kota Jakarta sejak zaman prasejarah, masa kejayaan pelabuhan Sunda Kelapa, era penjajahan, hingga ke masa setelah kemerdekaan.
            Gedung Museum yang berdiri saat ini awalnya merupakan Balai Kota (Stadhuis) yang diresmikan oleh Gubernur Jendral Abraham Van Riebeeck pada tahun 1710. Pembangunan gedung ini sendiri telah dimulai pada era Gubernur Jendral Jan Pieterszoon Coen, pada tahun 1620. Kondisi tanah Jakarta yang labil membuat gedung ini sempat anjlok, sehingga dilakukan beberapa kali usaha pemugaran hingga peresmiannya.          
            Pada masa selanjutnya, gedung ini sempat mengalami beberapa kali peralihan fungsi. Gedung ini pernah berfungsi antara lain sebagai Kantor Pemerintah Provinsi Jawa Barat (1925-1942), kantor pengumpulan logistik Dai Nippon (1942-1945), markas Komando Militer Kota/Kodim 0503 Jakarta Barat (1952-1968). Baru pada tahun 1968, gedung secara resmi diserahkan kepada Pemda DKI Jakarta pada 1968 dan diresmikan sebagai Museum Sejarah Jakarta pada tanggal 30 Maret 1974 oleh Gubernur DKI Jakarta, Ali Sadikin.',
            'image' => '../img/Museum Fatahillah 2.jpg'],
            ['tourismuser_id' => 2,
            'tourismcategory_id'=>3,
            'title' => 'Museum Angkut',
            'description' =>'Bagi masyarakat Jawa Timur, Malang adalah salah satu tujuan wisata yang menjadi favorit karena kondisi alamnya yang sejuk khas daerah pegunungan. Jika pada zaman dulu Malang terkenal sebagai tempat wisata agro dan wisata alam, sekarang ini tempat wisata di Malang telah berkembang dan bertambah dengan banyak tujuan wisata modern. Museum angkut adalah salah satu tempat wisata modern yang ada di Malang dengan luas sekira 3,8 hektar di lereng gunung Panderman. Bertempat di jalan Terusan Sultan Agung Atas no.2, Desa Ngaglik, Kecamatan Batu, Malang.',
            'image' => '../img/museum-angkut.jpg'],
        ]);
    }
}
