<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class userPolicy
{
    use HandlesAuthorization;

    public function edit(User $currentUser, User $user) {
        return $currentUser->is($user);
    }
}
