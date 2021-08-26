<?php

namespace Tests\Feature\Components;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\TestView;
use Tests\TestCase;

use App\Models\User;

class TweetComponentTest extends TestCase
{
    public function test_component_renders_username_and_icon()
    {
        $nameToSee = 'Mike Tyson';

        $user = User::factory()->make([
            'name' => $nameToSee
        ]);

        $view = $this->buildComponent($user, 'Tweet Body');

        $view->assertSee($nameToSee);
        $view->assertSee($user->avatar);

        return $user;
    }

    /**
     * @depends test_component_renders_username_and_icon
     */
    public function test_component_renders_body(User $user)
    {
        $tweetBody = 'Tweet Body';
        $view = $this->buildComponent($user, $tweetBody);

        $view->assertSee($tweetBody);

        return $view;
    }

    /**
     * @depends test_component_renders_username_and_icon
     * @depends test_component_renders_body
     */
    public function test_component_renders_user_link(User $user, TestView $view)
    {
        $userProfileLink = route('profiles.single', $user);

        $view->assertSee($userProfileLink);
    }

    private function buildComponent(User $user, string $body)
    {
        return $this->blade(
            '<x-tweet :user="$user">' .
                $body .
            '</x-tweet>',
            [
                'user' => $user
            ]
        );
    }
}
