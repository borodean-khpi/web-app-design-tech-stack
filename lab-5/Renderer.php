<?php

/* Implementation */

interface IRenderer
{
  public function renderImage(string $url): string;
  public function renderRoot(string ...$children): string;
  public function renderText(string $content): string;
  public function renderTitle(string $content): string;
}

/* Concrete implementation 1 */

class HTMLRenderer implements IRenderer
{
  public function renderImage(string $url): string
  {
    return sprintf('<img src="%s">', $url);
  }

  public function renderRoot(string ...$children): string
  {
    return sprintf("<article>\n%s\n</article>\n", implode("\n", $children));
  }

  public function renderText(string $content): string
  {
    return sprintf('<p>%s</p>', $content);
  }

  public function renderTitle(string $content): string
  {
    return sprintf('<h1>%s</h1>', $content);
  }
}

/* Concrete implementation 2 */

class JSONRenderer implements IRenderer
{
  public function renderImage(string $url): string
  {
    return sprintf('"imageURL": "%s"', $url);
  }

  public function renderRoot(string ...$children): string
  {
    return sprintf("{\n%s\n}\n", implode(",\n", $children));
  }

  public function renderText(string $content): string
  {
    return sprintf('"text": "%s"', $content);
  }

  public function renderTitle(string $content): string
  {
    return sprintf('"title": "%s"', $content);
  }
}

/* Concrete implementation 3 */

class XMLRenderer implements IRenderer
{
  public function renderImage(string $url): string
  {
    return sprintf('<image>%s</image>', $url);
  }

  public function renderRoot(string ...$children): string
  {
    return sprintf("<root>\n%s\n</root>\n", implode("\n", $children));
  }

  public function renderText(string $content): string
  {
    return sprintf('<text>%s</text>', $content);
  }

  public function renderTitle(string $content): string
  {
    return sprintf('<title>%s</title>', $content);
  }
}
