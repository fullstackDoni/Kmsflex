<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Video;
use Illuminate\Auth\Access\HandlesAuthorization;

class VideoPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }
    public function view(User $user, Video $video)
    {
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Video $video)
    {
        //
    }
    public function delete(User $user, Video $video)
    {
        return ($user->id==$video->user_id)||($user->role->name!='users');
    }
    public function restore(User $user, Video $video)
    {
        //
    }

    public function forceDelete(User $user, Video $video)
    {
        //
    }
}
