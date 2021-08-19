<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\View\Components\Friend;

class FriendComponentTest extends TestCase
{
    public function test_component_renders_name_and_icon_url()
    {
        $view = $this->component(Friend::class, [
            'name' => 'MyFriend',
            'icon' => 'http://some.url'
        ]);

        $view->assertSee('MyFriend');
        $view->assertSee('http://some.url');
    }
}
