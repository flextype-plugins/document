<?php

/**
 * @package Flextype
 *
 * @author Sergey Romanenko <hello@romanenko.digital>
 * @link http://romanenko.digital
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype;

class DocumentTwigExtension extends \Twig_Extension
{
    /**
     * Flextype Dependency Container
     */
    private $flextype;

    /**
     * Constructor
     */
    public function __construct($flextype)
    {
        $this->flextype = $flextype;
    }

    /**
     * Callback for twig.
     *
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('document', [$this, 'document'], ['is_safe' => ['html']])
        ];
    }

    public function document(string $url, int $width = 560, int $height = 315, string $class = '')
    {
        return $this->flextype->DocumentController->document($url, $width, $height, $class);
    }
}
