<?php

namespace App\Models;

use Faker\Provider\Lorem;
use Faker\Test\Provider\HtmlLoremTest;
use Faker\Test\Provider\LoremTest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // maendefinisikan tugas
    protected static $task = [
        [
            'id' => 1,
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-05-29',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan tugas bahasa inggris di buku LKS halaman 10-12.',
        ], [
            'id' => 2,
            'name' => 'Matematika',
            'deadline' => '2024-05-30',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal matematika di buku PR halaman 20-25.',
        ], [
            'id' => 3,
            'name' => 'Fisika',
            'deadline' => '2024-05-31',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal fisika di buku PR halaman 30-35.',
        ], [
            'id' => 4,
            'name' => 'Kimia',
            'deadline' => '2024-06-01',
            'status' => 'Belum Selesai',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam officia distinctio quidem sapiente molestias illo, labore quasi quaerat ipsa assumenda? Provident, soluta animi error itaque expedita earum! Neque, assumenda aut?.',
        ]
    ];

    // method untuk mendapatkan semua data tugas
    public static function getALL(){
        return self::$task;
    }
}
