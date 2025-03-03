<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tao ra lop hop
        $this->call(SchoolClassSeeder::class);

        // tao ra hoc sinh
        \App\Models\Student::factory(100)->create();
    }
}

// php artisan migrate // chay cac file migration
// php artisan migrate:rollback // rollback migration truoc do
// php artisan migrate:reset // rollback tat ca migration
// php artisan migrate:refresh // rollback tat ca migration va chay lai
// php artisan migrate:status // xem trang thai cua migration
//php artisan migrate:fresh --seed // xoa toan bo bang va chay lai migration, sau do chay seeder