<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class SayHellos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'say:{order}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Say Hello to user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // if ($this->confirm('Do you Wish to continue ?')) {
        //     $name = $this->choice('Whats is your name: ', ['aakash', 'arun']);
        //     $this->info("Hello {$name} !");
        // }

        // $headers = ['Name', 'Email'];
        // $users =   Product::select('name', 'detail')->where('name', 'like', '%'.'F'.'%' )->get()->toArray();
        // $this->table($headers, $users);
        // if ($this->confirm('Do you want to add more users ?')) {
        //     $name = '[name] => '.$this->ask('Enter Name');
        //     $email = '[email] => '.$this->ask('Enter your email:');
        //     $fulldetails = [$name, $email];
        //     if ($fulldetails != null) {
        //         $this->table($headers, $fulldetails);
        //     }
        // }
    }
}
