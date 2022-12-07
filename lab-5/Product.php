<?php

class Product
{
  public function __construct(
    public string $name,
    public string $description,
    public string $imageURL,
    public string $id,
  ) {
  }
}
