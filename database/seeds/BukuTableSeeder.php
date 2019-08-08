<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buku = new \App\Buku();
        $buku->nama_buku = "Ceritaku";
        $buku->pengarang = "dika";
        $buku->penerbit = "ananda";
        $buku->save();
    }
}
