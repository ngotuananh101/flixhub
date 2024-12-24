<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $envFiles = file_get_contents(base_path('.env'));
        $envLines = explode("\n", $envFiles);
        foreach ($envLines as $line) {
            if (empty($line) || strpos($line, '#') === 0) {
                continue;
            }
            $line = explode('=', $line);
            $key = strtolower($line[0]);
            $value = str_replace('"', '', $line[1]);
            \App\Models\Setting::create([
                'key' => $key,
                'value' => $value,
                'env_key' => $key,
            ]);
        }

        // Push all settings to cache
        $settings = \App\Models\Setting::all();
        $settings = $settings->pluck('value', 'key')->toArray();
        cache()->forever('settings', $settings);
    }
}
