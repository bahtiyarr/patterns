<?php

require __DIR__ . '/../vendor/autoload.php';

$html = new \BlockElements\H1(
    [
        new \InlineElements\Text('hello'),
        new \InlineElements\Strong([new \InlineElements\Text('world')])
    ]);

$page = new \Page\Page($html, new \Renderer\HtmlRenderer());
echo $page->render();
