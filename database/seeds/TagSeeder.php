<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    public function run()
    {
        $this->createTag('Installation', 'installation');
        $this->createTag('Blade', 'blade');
        $this->createTag('Cache', 'cache');
    }

    private function createTag(string $name, string $slug)
    {
        factory(Tag::class)->create(compact('name', 'slug'));
    }
}
