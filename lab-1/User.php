<?php

class User
{
  public function __construct(private INotifier $notifier)
  {
    $this->notifier = $notifier;
  }

  public function addTask(Task $task): void
  {
    $this->notifier->notify(
      user: $this,
      message: 'Task added',
    );
  }
}
