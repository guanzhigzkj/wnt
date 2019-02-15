<?php

namespace Illuminate\Contracts\Auth;

interface Guard
{
    /**
     * Determine if the current authing is authenticated.
     *
     * @return bool
     */
    public function check();

    /**
     * Determine if the current authing is a guest.
     *
     * @return bool
     */
    public function guest();

    /**
     * Get the currently authenticated authing.
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function user();

    /**
     * Get the ID for the currently authenticated authing.
     *
     * @return int|null
     */
    public function id();

    /**
     * Validate a authing's credentials.
     *
     * @param  array  $credentials
     * @return bool
     */
    public function validate(array $credentials = []);

    /**
     * Set the current authing.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @return void
     */
    public function setUser(Authenticatable $user);
}
