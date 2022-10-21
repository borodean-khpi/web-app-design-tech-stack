<?php

interface INotifier
{
  public function notify(User $user, string $message): void;
}

class EmailNotifier implements INotifier
{
  public function notify(User $user, string $message): void
  {
    /* TODO: notify via email. */
  }
}

class SMSNotifier implements INotifier
{
  public function notify(User $user, string $message): void
  {
    /* TODO: notify via SMS. */
  }
}

class MessengerNotifier implements INotifier
{
  public function notify(User $user, string $message): void
  {
    /* TODO: notify via Messenger. */
  }
}
