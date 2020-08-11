<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:admin:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $confirmed = false;
        $name = "";
        $email = "";
        $password = "";

        do {
            $name = $this->ask('Name');
            $email = $this->ask('Email');
            $password = $this->ask('Password');

            $info = sprintf("Name: %s\nEmail: %s\nPassword: %s", $name, $email, $password);
            $this->line($info);
            $confirmed = $this->confirm('Do you wish to continue?');
        } while (! $confirmed);

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->email_verified_at = now();
        $user->password = Hash::make($password);
        $user->type = 'admin';
        $user->save();

        $this->info("Account created successfully!");
    }
}
