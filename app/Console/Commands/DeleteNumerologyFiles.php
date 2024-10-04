<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Numerology;
use Illuminate\Support\Facades\Log;

class DeleteNumerologyFiles extends Command
{
    // The name and signature of the console command
    protected $signature = 'delete:oldnumerologypdfs';

    // The console command description
    protected $description = 'Delete old PDF files from numerology directories based on expiry_day from the numerology table';

    // Execute the console command
    public function handle()
    {
        try {
            Log::info('Command executed at: ' . now());

            // Define the directories and their corresponding numerology types
            $directories = [
                'uploads/nameNumerology/' => 1,
                'uploads/phoneNumerology/' => 2,
                'uploads/advanceNumerology/' => 3,
                'uploads/businessNumerology/' => 4,
            ];

            $now = Carbon::now('Asia/Kolkata');
            $numerologyTypes = Numerology::all()->keyBy('numerology_type');  // Fetch and index numerology types by their ID

            // Loop through each directory and delete old PDFs based on expiry_day
            foreach ($directories as $directory => $numerologyTypeId) {
                $numerologyType = $numerologyTypes->get($numerologyTypeId);

                // Get expiry day; default to 7 if not set or invalid
                $expiryDay = is_numeric($numerologyType->expiry_day) ? $numerologyType->expiry_day : 7;

                // Fetch all files in the directory
                $files = Storage::disk('public')->files($directory);

                // Loop through each file in the directory
                foreach ($files as $file) {
                    $lastModified = Storage::disk('public')->lastModified($file);
                    $fileAge = Carbon::createFromTimestamp($lastModified);

                    // Check if the file age exceeds the expiry day
                    if ($fileAge->diffInDays($now) > $expiryDay) {
                        Storage::disk('public')->delete($file);
                        Log::info("Deleted: $file");
                        $this->info("Deleted: $file");
                    }
                }
            }

            $this->info('Old numerology PDFs deletion process completed.');
            Log::info('Old numerology PDFs deletion process completed.');
        } catch (\Exception $e) {
            $this->error('Failed to delete old PDF files: ' . $e->getMessage());
            Log::error('Failed to delete old PDF files: ' . $e->getMessage());
        }
    }
}
