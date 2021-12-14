<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('lokers')->insert([
            [
                'perusahaan_id' => '2',
                'pekerjaan' => 'UI Designer',
                'lokasi' => 'Bandung',
                'deskripsi' => 'Untuk kamu yang baru lulus atau fresh graduate juga bisa daftar di lowongan kerja Google Indonesia ini. Selain itu, Google Indonesia juga membuka lowongan kerja bagi kamu yang masih menempuh pendidikan S2. Bahkan, jika kamu tidak memiliki ijazah S1, tetap bisa ikut daftar lowongan kerja Google Indonesia. Asalkan, punya pengalaman yang cukup sesuai dengan kebutuhan dalam lowongan kerja tersebut.'
            ],
            [
                'perusahaan_id' => '4',
                'pekerjaan' => 'Full Stack Engineer',
                'lokasi' => 'Jakarta',
                'deskripsi' => 'Tingkatkan sistem back-end kami yang sudah ada yang berjalan di cloud serta memantau dan menanggapi masalah produk yang dilaporkan dari sumber internal dan eksternal. Tidak hanya itu, kamu harus menganalisis masalah aplikasi, sistem, dan infrastruktur yang kompleks.'
            ],
            [
                'perusahaan_id' => '4',
                'pekerjaan' => 'Front End Engineer',
                'lokasi' => 'Jakarta',
                'deskripsi' => 'Membuat aplikasi untuk memenuhi kebutuhan perusahaan di Front End atau User Interface serta bertanggung jawab atas kode sumber dan repositori proyek dan memiliki keterampilan komunikasi dan kerja tim yang baik dalam Tim Pengembang.'
            ],
            [
                'perusahaan_id' => '6',
                'pekerjaan' => 'Risk Management Associate (Marketplace)',
                'lokasi' => 'Depok',
                'deskripsi' => 'Dapat memberikan analisis mendalam atas data perilaku pengguna yang masif dan penelitian transaksi untuk mengevaluasi risiko penipuan yang terlibat, terutama di transaksi Marketplace, Kategori & RGX, dan Logistik & Ritel Baru.'
            ],
            [
                'perusahaan_id' => '6',
                'pekerjaan' => 'Media Planner Associate',
                'lokasi' => 'Depok',
                'deskripsi' => 'Dapat mengembangkan konsep dan rencana kampanye saluran Media Offline, terutama di TV Lakukan brainstorming dengan tim internal dan mitra eksternal untuk menciptakan ide yang solid untuk konsep Acara TV.'
            ],
            [
                'perusahaan_id' => '6',
                'pekerjaan' => 'Payroll',
                'lokasi' => 'Depok',
                'deskripsi' => 'Dapat merekap data absen untuk seluruh pegawai baik tetap maupun sementara serta memasukkan data ke dalam database penggajian dan administrasi serta program perangkat lunak. Dan juga dapat menyiapkan perhitungan penggajian dan semua laporan terkait.'
            ],
        ]);
    }
}
