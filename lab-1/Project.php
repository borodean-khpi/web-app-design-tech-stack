<?php

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
    /* TODO: add the user. */

    $this->addUserNotifier->notify(
      user: $this->admin,
      message: 'User added',
    );
  }
}
