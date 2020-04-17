<?php
namespace Sway\Teste\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command{

    protected function configure()
    {
        $this->setName('sway:teste')->setDescription('Comando Teste');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello World!");
        $output->writeln($this->formatText('>','<'));
    }
    public function formatText($prefix,$sulfix){
        return $prefix."Algum Texto".$sulfix;
    }


}


