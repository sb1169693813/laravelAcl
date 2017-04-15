<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
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

    //编辑权限验证
    public function update(User $user,Post $post)
    {
        return $user->owns($post);
    }
    //还可以写权限规则
    public function store()
    {

    }
    
}
