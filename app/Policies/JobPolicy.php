<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Gate;

class JobPolicy
{
    public function edit(User $user, Job $Job): bool
    {
        return $Job->employer->user->is($user);
    }
    public function destroy(User $user, Job $Job): bool
    {
        return $Job->employer->user->is($user);
    }
    public function update(User $user, Job $Job): bool
    {
        return $Job->employer->user->is($user);
    }
}
