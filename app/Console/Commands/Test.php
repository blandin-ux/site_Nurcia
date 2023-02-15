<?php

namespace App\Console\Commands;

use App\Jobs\SendWelcomUserJob;
use App\Mail\WelcomeUserMail;
use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envoi d\'un mail à l\'utilisateur connecté ';

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
        $user = User::find(1);
        /* $data['ville'] = 'PN City new';
        $data['created_at'] = now()->format('Y-m-d H:i:s');
        DB::table('regions')->insert($data);
        $this->info('Success'); */
        Mail::to($user->email)->send(new WelcomeUserMail());
    }
}
