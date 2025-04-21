<?php
use Illuminate\Console\Command;
use App\Models\Product;
use Illuminate\Support\Facades\File;

class ImportImages extends Command
{
    protected $signature = 'import:images';
    protected $description = 'Import images from public/images into the products table';

    public function handle()
    {
        $imageDir = public_path('images/INTENSE');
        $files = File::files($imageDir);

        foreach ($files as $file) {
            $filename = $file->getFilename();

            Product::create([
                'name' => pathinfo($filename, PATHINFO_FILENAME),
                'description' => 'Auto-imported product image.',
                'image_path' => 'images/INTENSE/' . $filename,
            ]);

            $this->info("Imported: $filename");
        }
    }
}
