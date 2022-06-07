<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Notifications\notifyUser;
use Illuminate\Console\Command;

class emailUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:notify-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Email to notify user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $allUser = User::all();

        foreach ($allUser as $user) {
            $user->notify(new notifyUser());
        }
    }
}
