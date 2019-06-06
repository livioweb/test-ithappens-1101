<?php

namespace App\Console\Commands;

use App\Http\Repositories\DashboardRepositories;
use Illuminate\Console\Command;

class VencimentoConvenio extends Command
{
    public $dr;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'convenio:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Executa rotina que envia e-mails com os dados dos convenios com o vencimento de 30 e 60 dias';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(DashboardRepositories $dashboardRepositories)
    {
        $this->dr = $dashboardRepositories;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $n_convenio = null;
        $titulo_email = null;
        $base_email = null;
        $main = null;
        $cv1mes = $this->dr->conveniosVencendo1mes();
        $titulo_email = "Emails contendo os convenios com vencimento a um mes <br>\n";
        foreach ($cv1mes as $cv1){

            $n_convenio .=  "http://siconvconsult.herokuapp.com/admin/numero_processo?numero_processo=".$cv1->numero_processo.PHP_EOL;

        }
        $base_email = "Clique nos links para acessar os convenios<br>\n";
        $main = $titulo_email.$n_convenio.$base_email;
        //echo $main;

        if(mail('liviorodrigueslopes@gmail.com', 'SINCONV', $main)){
            $this->info('Enviado com sucesso');
        }
        }
        //dd($cv1mes);

}
