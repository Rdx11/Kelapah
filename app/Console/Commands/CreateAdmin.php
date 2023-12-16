<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdmin extends Command
{
    public const E_OK = 0;
    public const E_USER_EXISTS = 1;
    public const E_CHAOS = 5;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:kelapah-admin {--force : Do not ask questions, just do it ;)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'this command is used to create super admin,for handle this app.';

    /**
     * Execute the console command.
     */
    public function handle(): mixed
    {
        $user = new User;
        $user->name = $this->ask('name');
        $user->email = $this->ask('email');
        $user->password = Hash::make($this->secret('What is the password?') ?? 'admin');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);

        if ($user->name && $user->email != null) {
            if ($this->option('force') === true || $this->confirm('Save this user?', true)) {
                $exists = (new User)->where([
                    'name' => $user->name,
                    'email' => $user->email,
                ])->first();
                if ($exists === null) {
                    $user->save();
                    $user->assignRole('admin');
                    $this->info("Success! ".$user->email." may now login at ".route('login'));

                    return self::E_OK;
                } else {
                    $this->error('This email already in use!');

                    return self::E_USER_EXISTS;
                }
            }
            $this->error('failed to create admin');
            return self::E_CHAOS;
        }
    }
}
