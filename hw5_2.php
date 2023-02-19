<?php

class user
{
    private string $username;
    private string $email;

    function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
}

class Comment
{
    private User $author;
    private Task $task;
    private string $text;

    function __construct(User $author, Task $task, string $text)
    {
        $this->author = $author;
        $this->task = $task;
        $this->text = $text;
    }
}

class TaskService
{
    public static function addComment(User $user, Task $task, string $text): void
    {
        $comment = new Comment($user, $task, $text);
        $task->addComment($comment);
    }
}

class Task
{
    private User $user;
    private int $priority;
    private string $description;
    private string $dateCreated;
    private string $dateUpdated;
    private string $dateDone;
    private bool $isDone = false;
    private array $comments;

    function __construct(User $user, int $priority, string $description)
    {
        $this->user = $user;
        $this->priority = $priority;
        $this->description = $description;
        $this->dateCreated = date('Y-m-d H:i:s');
        $this->dateUpdated = date('Y-m-d H:i:s');
    }

    public function markAsDone(): void
    {
        $this->dateDone = date('Y-m-d H:i:s');
        $this->dateUpdated = date('Y-m-d H:i:s');
        $this->isDone = true;
    }

    public function addComment(Comment $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @return  self
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of priority
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of dateCreated
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set the value of dateCreated
     *
     * @return  self
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get the value of dateUpdated
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set the value of dateUpdated
     *
     * @return  self
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get the value of dateDone
     */
    public function getDateDone()
    {
        return $this->dateDone;
    }

    /**
     * Set the value of dateDone
     *
     * @return  self
     */
    public function setDateDone($dateDone)
    {
        $this->dateDone = $dateDone;

        return $this;
    }

    /**
     * Get the value of isDone
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set the value of isDone
     *
     * @return  self
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }
};

$user = new User('Stas', 'Stas@gmail.com');
$task = new Task($user, 5, 'My task');
$task->setDescription('Take a walk with the dog');
$task->markAsDone();
$user2 = new User('Sergey', 'sergey@rambler.ru');
TaskService::addComment($user2, $task, 'Super!');
var_dump($task);
