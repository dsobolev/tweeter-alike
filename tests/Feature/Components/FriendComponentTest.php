<?php

namespace Tests\Feature\Components;

use Tests\TestCase;
use App\View\Components\Friend;
use App\Models\User;

class FriendComponentTest extends TestCase
{
    public function test_component_renders_name_and_icon_url()
    {
        $nameToSee = 'Some Friend';
        $user = User::factory()->make([
            'name' => $nameToSee
        ]);

        $view = $this->component(Friend::class, [
            'user' => $user,
        ]);

        $view->assertSee($nameToSee);
        $view->assertSee( $user->avatar );
    }

    public function test_component_renders_user_link()
    {
        $this->assertTrue(false);
    }
}
