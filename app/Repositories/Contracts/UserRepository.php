<?php

namespace App\Repositories\Contracts;

use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

/**
 * Class EloquentUserRepository.
 */
interface UserRepository
{
    /**
     * @return mixed
     */
    public function get();

    /**
     * @param $input
     *
     * @return mixed
     */
    public function store($input);

    /**
     * @param User $user
     * @param $input
     *
     * @return mixed
     */
    public function update(User $user, $input);

    /**
     * @param User $user
     *
     * @return mixed
     */
    public function destroy(User $user);

    /**
     * @param $input
     *
     * @return mixed
     */
    public function updateProfile($input);

    /**
     * @param $oldPassword
     * @param $newPassword
     *
     * @return mixed
     */
    public function changePassword($oldPassword, $newPassword);

    /**
     * @param User $user
     *
     * @return mixed
     */
    public function loginAs(User $user);

    /**
     * @return mixed
     */
    public function logoutAs();
}
