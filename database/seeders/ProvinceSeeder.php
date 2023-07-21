<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['name' => 'Sumatera Selatan', 'slug' => 'sumsel', 'picture' => 'Sumatra_Selatan.png'],
            ['name' => 'Sumatera Utara', 'slug' => 'sumut', 'picture' => 'sumatera_utara.png'],
            ['name' => 'Sumatera Barat', 'slug' => 'sumbar', 'picture' => 'sumatera_barat.png'],
            ['name' => 'Riau', 'slug' => 'riau', 'picture' => 'riau.png'],
            ['name' => 'Kepulauan Riau', 'slug' => 'kepulauan_riau', 'picture' => 'kepulauan_riau.png'],
            ['name' => 'Kalimantan Barat', 'slug' => 'kalimantan_barat', 'picture' => 'kalimantan_barat.png'],
            ['name' => 'Kalimantan Timur', 'slug' => 'kalimantan_timur', 'picture' => 'kalimantan_timur.png'],
            ['name' => 'Kalimantan Selatan', 'slug' => 'kalimantan_selatan', 'picture' => 'kalimantan_selatan.png'],
            ['name' => 'Kalimantan Tengah', 'slug' => 'kalimantan_tengah', 'picture' => 'kalimantan_tengah.png'],
            ['name' => 'Kalimantan Utara', 'slug' => 'kalimantan_utara', 'picture' => 'kalimantan_utara.png'],
            ['name' => 'Jawa Barat', 'slug' => 'jawa_barat', 'picture' => 'jawa_barat.png'],
            ['name' => 'Jawa Tengah', 'slug' => 'jawa_tengah', 'picture' => 'jawa_tengah.png'],
            ['name' => 'Jawa Timur', 'slug' => 'jawa_timur', 'picture' => 'jawa_timur.png'],
            ['name' => 'Sulawesi Barat', 'slug' => 'sulawesi_barat', 'picture' => 'sulawesi_barat.png'],
            ['name' => 'Sulawesi Tengah', 'slug' => 'sulawesi_tengah', 'picture' => 'sulawesi_tengah.png'],
            ['name' => 'Sulawesi Utara', 'slug' => 'sulawesi_utara', 'picture' => 'sulawesi_utara.png'],
            ['name' => 'Sulawesi Selatan', 'slug' => 'sulawesi_selatan', 'picture' => 'sulawesi_selatan.png'],
            ['name' => 'Nusa Tenggara Barat', 'slug' => 'ntb', 'picture' => 'ntb.png'],
            ['name' => 'Nusa Tenggara Timur', 'slug' => 'ntt', 'picture' => 'ntt.png'],
            ['name' => 'NA Darussalam', 'slug' => 'aceh', 'picture' => 'aceh.png'],
            ['name' => 'Lampung', 'slug' => 'lampung', 'picture' => 'lampung.png'],
            ['name' => 'Bangka Belitung', 'slug' => 'bangka', 'picture' => 'bangka.png'],
            ['name' => 'Jambi', 'slug' => 'jambi', 'picture' => 'jambi.png'],
            ['name' => 'Bengkulu', 'slug' => 'bengkulu', 'picture' => 'bengkulu.png'],
            ['name' => 'Banten', 'slug' => 'banten', 'picture' => 'banten.png'],
            ['name' => 'DKI Jakarta', 'slug' => 'jakarta', 'picture' => 'jakarta.png'],
            ['name' => 'DI Yogyakarta', 'slug' => 'yogyakarta', 'picture' => 'yogyakarta.png'],
            ['name' => 'Bali', 'slug' => 'bali', 'picture' => 'bali.png'],
            ['name' => 'Maluku', 'slug' => 'maluku', 'picture' => 'maluku.png'],
            ['name' => 'Maluku Utara', 'slug' => 'maluku_utara', 'picture' => 'maluku_utara.png'],
            ['name' => 'Papua', 'slug' => 'papua', 'picture' => 'papua.png'],
            ['name' => 'Papua Barat', 'slug' => 'papua_barat', 'picture' => 'papua_barat.png'],
            ['name' => 'Papua Tengah', 'slug' => 'papua_tengah', 'picture' => 'papua_tengah.png'],
            ['name' => 'Papua Pegunungan', 'slug' => 'papua_pegunungan', 'picture' => 'papua_pegunungan.png'],
            ['name' => 'Papua Selatan', 'slug' => 'papua_selatan', 'picture' => 'papua_selatan.png'],
            ['name' => 'Papua Barat Daya', 'slug' => 'papua_barat_daya', 'picture' => 'papua_barat_daya.png'],
            ['name' => 'Gorontalo', 'slug' => 'gorontalo', 'picture' => 'gorontalo.png'],
            ['name' => 'Sulawesi tenggara', 'slug' => 'sulawesi_tenggara', 'picture' => 'sulawesi_tenggara.png'],
        ];

        Province::insert($provinces);
    }
}
