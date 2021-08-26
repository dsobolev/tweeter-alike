<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    public function test_main_and_large_avatars_links()
    {
        $avatarUrl = 'https://i.pravatar.cc/';
        $mainSize = 40;
        $largeSize = 150;
        $user = User::factory()->make();

        $this->assertEquals(
            $this->buildAvatarUrl($user, $avatarUrl, $mainSize),
            $user->avatar
        );

        $this->assertEquals(
            $this->buildAvatarUrl($user, $avatarUrl, $largeSize),
            $user->avatarLarge
        );
    }

    private function buildAvatarUrl(User $user, string $baseUrl, int $size)
    {
        return $baseUrl . $size . '?u=' . $user->email;
    }
}
