<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titles = [
            'Memulai dengan Laravel 11: Panduan Lengkap',
            'Membangun UI Modern dengan React dan Tailwind CSS',
            'Menguasai Optimasi Database di Laravel',
            'Masa Depan Pengembangan Web: Tren yang Perlu Diperhatikan',
            'Membuat RESTful API dengan Laravel Sanctum',
        ];

        $title = fake()->unique()->randomElement($titles);
        $slug = \Illuminate\Support\Str::slug($title) . '-' . fake()->unique()->numberBetween(1, 10000);

        $content = $this->generateMarkdownContent();

        return [
            'title' => $title,
            'slug' => $slug,
            'excerpt' => fake()->paragraph(2),
            'content' => $content,
            'published_at' => fake()->dateTimeBetween('-3 months', 'now'),
            'image' => 'https://picsum.photos/seed/' . $slug . '/1200/630',
        ];
    }

    private function generateMarkdownContent(): string
    {
        return <<<'MARKDOWN'
# Pendahuluan

Pengembangan web telah berkembang pesat selama dekade terakhir. Framework modern seperti **Laravel** dan **React** telah merevolusi cara kita membangun aplikasi, membuat pengembangan lebih cepat, lebih aman, dan lebih menyenangkan.

## Mengapa Laravel?

Laravel adalah framework PHP yang powerful yang menyediakan:

- **Sintaks yang elegan** yang membuat kode mudah dibaca dan dipelihara
- **Sistem autentikasi dan otorisasi bawaan**
- **Eloquent ORM** untuk interaksi database
- **Blade templating** engine untuk view yang indah

```php
// Contoh: Membuat route sederhana
Route::get('/articles', [ArticleController::class, 'index']);
```

## Pengembangan Frontend Modern

Lanskap frontend telah berubah secara dramatis dengan diperkenalkannya framework berbasis komponen. React, Vue, dan lainnya telah memungkinkan kita membangun antarmuka pengguna yang kompleks dan interaktif dengan mudah.

### Manfaat Utama

1. **Reusabilitas Komponen** - Tulis sekali, gunakan di mana saja
2. **Virtual DOM** - Rendering lebih cepat dan performa lebih baik
3. **Ekosistem yang Kaya** - Ribuan package dan tools
4. **Komunitas yang Kuat** - Dukungan aktif dan peningkatan berkelanjutan

## Praktik Terbaik

Saat membangun aplikasi web modern, pertimbangkan praktik terbaik berikut:

- Gunakan **version control** (Git) untuk semua proyek
- Tulis **kode yang bersih dan terdokumentasi**
- Implementasikan **automated testing**
- Ikuti **praktik keamanan terbaik**
- Optimalkan untuk **performa**

> "Kode terbaik adalah tidak ada kode sama sekali. Setiap baris kode yang Anda tulis adalah tanggung jawab." - Jeff Atwood

## Kesimpulan

Baik Anda membangun blog sederhana atau aplikasi enterprise yang kompleks, memilih tools yang tepat dan mengikuti praktik terbaik akan membuat Anda sukses. Laravel dan framework JavaScript modern menyediakan fondasi yang sangat baik untuk proyek web apa pun.

Selamat coding! 🚀
MARKDOWN;
    }
}
