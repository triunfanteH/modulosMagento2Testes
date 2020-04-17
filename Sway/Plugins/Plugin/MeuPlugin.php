<?php
namespace Sway\Plugins\Plugin;

class MeuPlugin
{

    public function beforeFormatText(\Sway\Teste\Console\Command\HelloWorld $subject){
        $prefix = '>>';
        $sulfix = '<<';
        return [$prefix,$sulfix];
    }

    public function afterFormatText(\Sway\Teste\Console\Command\HelloWorld $subject , $result,$prefix, $sulfix ){
        $result = str_replace(">","|",$result);
        $result = str_replace("<","|",$result);
        return $result;
    }

}
