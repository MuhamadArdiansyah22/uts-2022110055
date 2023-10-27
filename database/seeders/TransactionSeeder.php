<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['income', 'expense'];
        $incomeCategories = ['wage', 'bonus', 'gift'];
        $expenseCategories = ['food & drinks', 'shopping', 'charity', 'housing', 'insurance', 'taxes', 'transportation'];

        for ($i = 0; $i < 100; $i++) {
            $type = $types[rand(0, 1)];
            $category = $type == 'income' ? $incomeCategories[rand(0, count($incomeCategories) - 1)] : $expenseCategories[rand(0, count($expenseCategories) - 1)];

            Transaction::create([
                'amount' => rand(1, 1000),
                'type' => $type,
                'category' => $category,
                'notes' => 'Dummy transaction ' . ($i + 1),
            ]);
        }
    }
}
