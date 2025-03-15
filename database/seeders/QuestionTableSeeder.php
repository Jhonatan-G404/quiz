<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $questions = [
            "Menjadi entrepreneur perlu memiliki pengetahuan tentang risiko usaha",
            "Menjadi entrepreneur perlu mengetahui tentang cara menganalisis peluang usaha",
            "Merumuskan solusi atas suatu masalah merupakan pengetahuan yang diperlukan wirausaha",
            "Pengalaman masa lalu mampu meyakinkan saya bahwa saya akan menjadi entrepreneur yang sukses",
            "Teman saya telah menjadi entrepreneur yang sukses jadi saya juga yakin bahwa saya juga akan dapat sukses menjadi entrepreneur",
            "Cibiran/hinaan/kata-kata yang merendahkan telah meyakinkan saya bahwa saya harus menjadi entrepreneur yang sukses",
            "Saya siap bekerja keras untuk menjadi entrepreneur yang sukses",
            "Saya tidak takut gagal menjadi entrepreneur",
            "Saya tidak khawatir tidak mendapat rejeki jika saya menjadi entrepreneur",
            "Tantangan / kesulitan tidak merintangi saya untuk menjadi seorang entrepreneur",
            "Tantangan/kesulitan yang menghadang seorang entrepreneur akan saya selesaikan dengan baik",
            "Saya yakin bahwa tugas-tugas menjadi entrepreneur secara keseluruhan akan saya kerjakan dengan baik",
            "Saya sangat yakin dengan kemampuan saya bahwa saya akan menjadi entrepreneur yang sukses",
            "Saya dengan bangga menunjukkan bahwa saya seorang entrepreneur",
            "Saya yakin dapat menemukan peluang sebagai dasar yang kuat untuk melakukan usaha",
            "Saya yakin mampu menciptakan produk-produk baru sebagai dasar yang kuat untuk melakukan usaha",
            "Saya yakin dapat memimpin usaha dengan baik",
            "Saya yakin dapat memasarkan produk/jasa yang dihasilkan dari usaha saya",
            "Saya bersemangat untuk menjadi entrepreneur",
            "Saya mampu untuk mengambil keputusan sendiri tanpa bergantung pada orang lain",
            "Saya mendapatkan keterampilan mengenai kewirausahaan dari Perguruan Tinggi",
            "Saya mendapatkan pengetahuan mengenai kewirausahaan dari Institusi Pendidikan",
            "Saya mendapatkan penguasaan teknik pengambilan keputusan dan risiko dari Perguruan Tinggi",
            "Saya mendapatkan pengalaman berwirausaha dari Perguruan Tinggi",
            "Karakter wirausaha saya dibentuk saat saya mengenyam pendidikan di Perguruan Tinggi",
            "Kreatifitas dan kemampuan saya untuk berwirausaha dibentuk dan diasah saat mengenyam pendidikan di Perguruan Tinggi",
            "Sifat dasar keluarga memberikan dukungan untuk saya menjadi entrepreneur",
            "Sebagai anak pertama dalam keluarga, orang tua mengijinkan saya menjadi entrepreneur",
            "Perubahan yang terjadi dalam keluarga (perceraian, dll) tidak mengurungkan niat saya menjadi entrepreneur",
            "Keluarga memberikan dukungan yang besar atas keputusan saya menjadi entrepreneur",
            "Teman-teman memberikan dukungan yang besar atas keputusan saya menjadi entrepreneur",
            "Orang-orang terdekat memberikan dukungan yang besar atas keputusan saya menjadi entrepreneur",
            "Lingkungan usaha tempat saya tinggal merupakan tempat yang kondusif untuk tumbuh dan berkembangnya wirausaha",
            "Saya suka menerima tantangan dengan menerima proyek-proyek baru",
            "Saya cukup menikmati ketika berada dalam situasi sulit",
            "Ketika orang lain memandang sebagai masalah, saya justru melihatnya sebagai peluang",
            "Saya memiliki keinginan bahwa usaha yang saya rintis akan mendapat pengakuan dari masyarakat",
            "Saya senang mengambil inisiatif atas masalah yang saya hadapi",
            "Saya tidak segan untuk menghadapi rintangan yang timbul dari lingkungan",
            "Saya memiliki ketertarikan yang kuat untuk menjadi entrepreneur saat lulus nanti",
            "Saya memiliki ketertarikan yang besar untuk menjadi entrepreneur",
            "Saya senang bila saya bisa menjadi entrepreneur",
            "Saya yakin bahwa saya bisa menjadi entrepreneur yang sukses",
            "Saya memiliki keinginan yang kuat untuk menjadi entrepreneur saat lulus nanti",
            "Saya akan memilih karir sebagai wirausahawan setelah lulus nanti",
            "Saya lebih suka menjadi wirausahawan dalam usaha saya sendiri daripada menjadi karyawan suatu perusahaan/ organisasi",
            "Saya memperkirakan dapat memulai usaha saya sendiri (berwirausaha) dalam 1-3 tahun kedepan"
        ];

        foreach ($questions as $question) {
            Question::create(['title' => $question]);
        }
    }
}
