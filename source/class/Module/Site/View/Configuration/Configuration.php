<?php

namespace Planck\Extension\CMS\Module\Site\View;


use Planck\View\Component;

class Configuration extends Component
{

    public function build() {
        $this->dom->html(
           $this->obInclude(__DIR__.'/template.php', $this->getVariables())
        );
        parent::build();
    }
}
