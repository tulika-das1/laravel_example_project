<?php

namespace App\Policies;

use App\Models\BlogPost;
use App\Models\UserData;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(UserData $userData)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\UserData  $userData
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(UserData $userData, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\UserData  $userData
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(UserData $userData)
    {
        return $userData->posts()->count()  < 10 ? Response::allow() : Response::deny('You can only create ten posts.');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\UserData  $userData
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(UserData $userData, BlogPost $blog)
    {
        return $userData->id === $blog->user_id 
        ? Response::allow()
        : Response::deny('You do not own this post.');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\UserData  $userData
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(UserData $userData, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\UserData  $userData
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(UserData $userData, BlogPost $blogPost)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\UserData  $userData
     * @param  \App\Models\BlogPost  $blogPost
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(UserData $userData, BlogPost $blogPost)
    {
        //
    }
}
