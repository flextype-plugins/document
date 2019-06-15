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

include_once 'app/Controllers/DocumentController.php';
include_once 'shortcodes/DocumentShortcode.php';
include_once 'twig/DocumentTwigExtension.php';

$flextype['DocumentController'] = function ($container) {
    return new DocumentController($container);
};

// Add Twig Extension
$flextype->view->addExtension(new DocumentTwigExtension($flextype));
