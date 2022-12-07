<?php

abstract class Page
{
  public function __construct(protected IRenderer $renderer)
  {
  }

  abstract public function render(): string;
}

class SimplePage extends Page
{
  public function __construct(
    IRenderer $renderer,
    private string $title,
    private string $content,
  ) {
    parent::__construct($renderer);
  }

  public function render(): string
  {
    return $this->renderer->renderRoot(
      $this->renderer->renderTitle($this->title),
      $this->renderer->renderText($this->content),
    );
  }
}

class ProductPage extends Page
{
  public function __construct(IRenderer $renderer, private Product $product)
  {
    parent::__construct($renderer);
  }

  public function render(): string
  {
    return $this->renderer->renderRoot(
      $this->renderer->renderTitle($this->product->name),
      $this->renderer->renderText($this->product->description),
      $this->renderer->renderImage($this->product->imageURL),
    );
  }
}
