<?php

/* Product */

interface IClient
{
  public function post(string $message): void;
}

class FacebookClient implements IClient
{
  public function __construct(private string $login, private string $password)
  {
  }

  public function post(string $message): void
  {
    printf("Posted to Facebook as (%s:%s)\n", $this->login, $this->password);
  }
}

class LinkedInClient implements IClient
{
  public function __construct(private string $login, private string $password)
  {
  }

  public function post(string $message): void
  {
    printf("Posted to LinkedIn as (%s:%s)\n", $this->login, $this->password);
  }
}
