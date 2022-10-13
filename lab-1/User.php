<?php

class User
{
  public function __construct(private INotifier $notifier)
  {
    $this->notifier = $notifier;
  }

  public function addTask(Task $task): void
  {
    /* ...add the task... */
    $this->notifier->notify(
      user: $this,
      message: 'Task added',
    );
  }
}
