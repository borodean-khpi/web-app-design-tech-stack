<?php

class Task
{
  public function __construct(private Logger $logger)
  {
    $this->logger = $logger;
  }

  public function updateStatus(User $user, string $newStatus): void
  {
    $this->logger->log('Status updated', time(), $user);
  }
}
