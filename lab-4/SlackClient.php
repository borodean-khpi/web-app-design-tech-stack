<?php

class SlackClient
{
  public function __construct(private string $login, private string $apiKey)
  {
  }

  public function authenticate(): void
  {
    printf("[Slack] Authenticated as \"%s\", API key \"%s\".\n\n", $this->login, $this->apiKey);
  }

  public function sendMessage(string $chatID, string $message): void
  {
    printf("[Slack] Sent message to #%s:\n%s\n\n", $chatID, $message);
  }
}
