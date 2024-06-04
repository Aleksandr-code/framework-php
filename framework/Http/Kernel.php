<?php

namespace Aleksandrcode\Framework\Http;

class Kernel
{
    public function handle(Request $request): Response
    {
        $content = '<h1>new content</h1>';

        return new Response($content);
    }
}
