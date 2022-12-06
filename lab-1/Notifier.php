<?php

interface INotifier
{
  public function notify(User $user, string $message): void;
}

class EmailNotifier implements INotifier
{
  public function notify(User $user, string $message): void
  {
  }
}

class SMSNotifier implements INotifier
{
  public function notify(User $user, string $message): void
  {
  }
}

class MessengerNotifier implements INotifier
{
  public function notify(User $user, string $message): void
  {
  }
}
