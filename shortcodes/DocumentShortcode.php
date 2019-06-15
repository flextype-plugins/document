<?php


namespace Flextype;

use Thunder\Shortcode\ShortcodeFacade;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [document url="https://www.gnu.org/licenses/gpl-3.0.rtf"]
$flextype['shortcodes']->addHandler('document', function (ShortcodeInterface $s) use ($flextype) {
    return $flextype->DocumentController->document($s->getParameter('url'),
                   ((null !== $s->getParameter('width')) ? $s->getParameter('width') : 560 ),
                   ((null !== $s->getParameter('height')) ? $s->getParameter('height') : 315 ),
                   ((null !== $s->getParameter('class')) ? $s->getParameter('class') : '' ));
});
