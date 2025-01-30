<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Assuming you are using the DB facade for direct database access
        
    
        // Optional: Truncate the bookshops table to start fresh
        DB::table('bookshops')->truncate();
    
        $bookshops = [
            'Prague' => ['Knihy Dobrovský', 'Kosmas', 'Neoluxor'],
            'London' => ['Blackwell\'s', 'Daunt Books', 'Foyles', 'John Smith & Son', 'W H Smith', 'Waterstones', 'The Works'],
            'New York' => [
                'Amazon Books', 'Anderson\'s Bookshops', 'Barnes & Noble', 'Bookmans', 'Books-A-Million', 'Books, Inc.',
                'Deseret Book, also operates Seagull Book', 'Follett\'s', 'Half Price Books', 'Hudson News',
                'Joseph-Beth Booksellers', 'Kinokuniya', 'Mardel Christian Stores', 'Powell\'s Books', 'Schuler Books & Music', 'Tattered Cover'
            ]
        ];
    
        foreach ($bookshops as $city => $shops) {
            foreach ($shops as $shop) {
                DB::table('bookshops')->insert([
                    'city' => $city,
                    'name' => $shop,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
