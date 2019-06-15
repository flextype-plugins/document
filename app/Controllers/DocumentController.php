<?php

namespace Flextype;

class DocumentController extends Controller {
    public function document(string $url, int $width = 560, int $height = 315, string $class = '') : string
    {
        return '<div class="document ' . $class . '"><iframe src="//docs.google.com/viewer?embedded=true&url=' . $url . '" width="' . $width . '" height="' . $height . '"></iframe></div>';
    }
}
