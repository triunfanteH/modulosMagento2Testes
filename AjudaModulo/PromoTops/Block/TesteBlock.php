<?php
namespace Sway\PromoTops\Block;
//Sempre extender isso
class TesteBlock extends \Magento\Framework\View\Element\Template {
    //crio a função aqui e executo no phtml pelo $block
    public function digaOla(){
        return 'Ola Mundo';
    }
}
