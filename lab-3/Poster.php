<?php

/* Creator */

abstract class Poster
{
  abstract public function createClient(): IClient;

  public function post(string $message): void
  {
    $poster = $this->createClient();
    $poster->post($message);
  }
}

class FacebookPoster extends Poster
{
  public function __construct(private string $login, private string $password)
  {
  }

  public function createClient(): IClient
  {
    return new FacebookClient($this->login, $this->password);
  }
}

class LinkedInPoster extends Poster
{
  public function __construct(private string $email, private string $password)
  {
  }

  public function createClient(): IClient
  {
    return new LinkedInClient($this->email, $this->password);
  }
}
