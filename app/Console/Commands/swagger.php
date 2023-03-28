<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class swagger extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'swagger';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Roda o script do swagger para atualizar a documentação OpenAPI em public/openapi.yaml';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {    
        $openapi = \OpenApi\Generator::scan(config('swagger.sources'));
        header('Content-Type: application/x-yaml');
        file_put_contents('public/documentation/openapi.yaml', $openapi->toYaml());
        return Command::SUCCESS;
    }
}
