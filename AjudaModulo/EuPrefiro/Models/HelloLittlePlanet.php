<?php
namespace Sway\EuPrefiro\Models;
use Sway\Teste\Console\Command\HelloWorld;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloLittlePlanet extends HelloWorld{

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Hello Planetinha!");
        $output->writeln($this->formatText('>','<'));
    }


}


