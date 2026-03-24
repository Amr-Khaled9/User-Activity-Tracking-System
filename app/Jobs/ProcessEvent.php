<?php

namespace App\Jobs;

use App\Models\Event;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Throwable;

class ProcessEvent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $tries = 3; // عدد مرات إعادة المحاولة
    public $timeout = 120; // أقصى وقت بالثواني لكل محاولة

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Execute the job.
     */
    public function handle()
    {
        Event::create([
            'user_id' => $this->data['user_id'],
            'action' => $this->data['action'],
            'page' => $this->data['page'],
        ]);
        Log::info('Event Processed:', $this->data);
    }

        public function failed(Throwable $exception)
    {
        // هنا لما الـ Job تفشل بعد 3 محاولات
        Log::error("Job failed: " . $exception->getMessage());
    }
}
