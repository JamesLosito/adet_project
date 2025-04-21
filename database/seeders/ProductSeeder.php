<?php 
use App\Models\Perfumes;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    public function run()
    {
        Perfumes::create([
            'name' => 'Blush Enchanté',
            'image' => 'images/blush-enchante.jpg',
            'price' => 59.99,
            'is_best_seller' => true
        ]);

        Perfumes::create([
            'name' => 'Shadow Crest',
            'image' => 'images/shadow-crest.jpg',
            'price' => 64.99,
            'is_best_seller' => true
        ]);
    }
}
