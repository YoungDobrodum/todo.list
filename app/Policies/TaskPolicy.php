<?php

namespace App\Policies;


use App\Models\Task;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TaskPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * @param User $user
     * @param Task $task
     * @return bool|\Carbon\Carbon|float|\Illuminate\Support\Collection|int|mixed|string|null
     */
    public function owner(User $user, Task $task)
    {
        return $user->id = $task->user_id;
    }
}
