<?php

class DonateBoxInSidebar {
    public static function getBox( BaseTemplate $tpl, array &$toolbox ) {
        $toolbox['donate']['id'] = 't-donate';
        $toolbox['donate']['href'] = $tpl->getMsg( 'donate-text-link' )->text();
        $toolbox['donate']['text'] = $tpl->getMsg( 'donate' )->text();
    }
}
