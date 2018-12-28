<?php

/**
 *
 * Flextype Document Plugin
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;
use Flextype\Component\Event\Event;

// Event: onShortcodesInitialized
Event::addListener('onShortcodesInitialized', function () {

    // Shortcode: [document url="https://www.gnu.org/licenses/gpl-3.0.rtf"]
    Entries::shortcode()->addHandler('document', function(ShortcodeInterface $s) {
        return document($s->getParameter('url'),
                       ((null !== $s->getParameter('width')) ? $s->getParameter('width') : 560 ),
                       ((null !== $s->getParameter('height')) ? $s->getParameter('height') : 315 ),
                       ((null !== $s->getParameter('class')) ? $s->getParameter('class') : '' ));
    });
});


function document(string $url, int $width = 560, int $height = 315, string $class = '') : string
{
    return '<div class="document ' . $class . '"><iframe src="//docs.google.com/viewer?embedded=true&url=' . $url . '" width="' . $width . '" height="' . $height . '"></iframe></div>';
}
