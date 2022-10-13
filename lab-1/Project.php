<?php

declare(strict_types=1);


class Project
{
  public function __construct(
    private INotifier $addUserNotifier,
    private User $admin,
  ) {
    $this->addUserNotifier = $addUserNotifier;
    $this->admin = $admin;
  }

  public function addUser(User $user): void
  {
    /* ...add the user... */
    $this->addUserNotifier->notify(
      user: $this->admin,
      message: 'User added',
    );
  }
}
