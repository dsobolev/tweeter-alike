<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class ProfileTest extends TestCase
{
    public function test_single_profile_username()
    {
        $user = User::first();
        $view = $this->view('profiles.single', ['user' => $user]);

        $view->assertSee( $user->username );
    }
}
