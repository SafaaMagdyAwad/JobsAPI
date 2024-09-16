<?php

namespace App\Console\Commands;

use App\Mail\NewsLetterMail;
use Illuminate\Console\Command;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\Mail;

class NewsLetterCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:news-letter-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subscripers=NewsLetter::where('active',1)->get();
        foreach ($subscripers as $subscriper) {
            Mail::to($subscriper->email)->send(new NewsLetterMail($subscriper->email));
        }
    }
}
