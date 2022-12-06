<?php

class SMSClient
{
  public function send(string $phone, string $sender, string $message): void
  {
    printf("[SMS] Sent message to \"%s\" from \"%s\":\n%s\n\n", $phone, $sender, $message);
  }
}
