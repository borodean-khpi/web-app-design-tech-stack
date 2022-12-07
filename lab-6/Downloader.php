<?php

/* Service interface */

interface IDownloader
{
  public function download(string $url): void;
}

/* Service */

class SimpleDownloader implements IDownloader
{
  public function download(string $url): void
  {
    printf("Download: %s\n", $url);
  }
}

/* Proxy */

class CachedDownloader implements IDownloader
{
  private array $cache;
  private SimpleDownloader $simpleDownloader;

  public function __construct()
  {
    $this->cache = [];
    $this->simpleDownloader = new SimpleDownloader();
  }

  public function download(string $url): void
  {
    if (array_key_exists($url, $this->cache)) {
      printf("Retrieve from cache: %s\n", $url);
    } else {
      $this->simpleDownloader->download($url);
      $this->cache[$url] = true;
    }
  }
}
