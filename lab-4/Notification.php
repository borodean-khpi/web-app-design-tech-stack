<?php

interface Notification
{
  public function send(string $title, string $message);
}

class EmailNotification implements Notification
{
  private $adminEmail;

  public function __construct(string $adminEmail)
  {
    $this->adminEmail = $adminEmail;
  }

  public function send(string $title, string $message): void
  {
    mail($this->adminEmail, $title, $message);
    echo "Sent email with title '$title' to '{$this->adminEmail}' that
says '$message'.";
  }
}

/* Adapter 1 */

class SlackNotification implements Notification
{
  public function __construct(private SlackClient $client, private $chatID)
  {
  }

  public function send(string $title, string $message): void
  {
    $this->client->authenticate();
    $this->client->sendMessage($this->chatID, $title . "\n" . $message);
  }
}

/* Adapter 2 */

class SMSNotification implements Notification
{
  private SMSClient $client;

  public function __construct(private string $phone, private string $sender)
  {
    $this->client = new SMSClient();
  }

  public function send(string $title, string $message): void
  {
    $this->client->send($this->phone, $this->sender, $title . "\n" . $message);
  }
}
