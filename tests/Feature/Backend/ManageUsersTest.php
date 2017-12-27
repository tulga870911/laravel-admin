<?php

namespace Tests\Feature\Backend;

use Tests\TestCase;

class ManageUsersTest extends TestCase
{
    /** @test */
    public function a_user_can_view_active_users()
    {
        $this->actingAs($this->admin)
            ->get(route('admin.access.user.index'))
            ->assertViewIs('backend.access.users.index')
            ->assertSee(trans('labels.backend.access.users.management'))
            ->assertSee(trans('labels.backend.access.users.active'))
            ->assertSee('Export')
            ->assertSee('Action');
    }

    /** @test */
    public function a_user_can_view_deactevated_users()
    {
        $this->actingAs($this->admin)
            ->get(route('admin.access.user.deactivated'))
            ->assertViewIs('backend.access.users.deactivated')
            ->assertSee(trans('labels.backend.access.users.management'))
            ->assertSee(trans('labels.backend.access.users.deactivated'))
            ->assertSee('Export')
            ->assertSee('Action');
    }

    /** @test */
    public function a_user_can_view_deleted_users()
    {
        $this->actingAs($this->admin)
            ->get(route('admin.access.user.deleted'))
            ->assertViewIs('backend.access.users.deleted')
            ->assertSee(trans('labels.backend.access.users.management'))
            ->assertSee(trans('labels.backend.access.users.deleted'))
            ->assertSee('Export')
            ->assertSee('Action');
    }
}
