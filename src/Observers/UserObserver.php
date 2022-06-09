<?php

namespace ConfrariaWeb\RealEstate\Observers;

use App\Models\User;
use ConfrariaWeb\Account\Models\Account;
use ConfrariaWeb\Account\Services\AccountService;
use Illuminate\Support\Facades\Auth;

class UserObserver
{

    public function creating(User $user)
    {
        $this->createAccountIfNotExist($user);
        $this->addPasswordfNotExist($user);
    }

    /**
     * Handle the user "created" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function created(User $user)
    {
        $this->addRoleIfNotExist($user);
    }

    /**
     * Handle the user "updated" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function updated(User $user)
    {
        $this->addRoleIfNotExist($user);
    }

    /**
     * Handle the user "deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the user "restored" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the user "force deleted" event.
     *
     * @param \App\Models\User $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }

    public function addRoleIfNotExist(User $user)
    {
        if (!isset($user->roles) || $user->roles->count() < 1) {
            $role = config('cw_user.default_role');
            if ($role) {
                $user->roles()->sync($role);
            }
        }
    }

    public function addPasswordfNotExist(User $user)
    {
        if (!isset($user->password)) {
            $user->password = 123456;
        }
    }

    public function createAccountIfNotExist(User $user)
    {
        if (!isset($user->account_id)) {
            if (Auth::check()) {
                $user->account_id = Auth::user()->account_id;
            }else{
                $accountService = new AccountService();
                $account = $accountService->create([]);
                if ($account) {
                    $user->account_id = $account->id;
                }
            }
        }
    }
}
