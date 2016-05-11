<?php

namespace App\Tests\Applications\Dashboard;

use App\Tests\AbstractTestCase;
use App\Applications\Dashboard\Notifications\Facades\Notify;
use App\Tests\Traits\AuthenticateUser;
use App\Applications\Dashboard\Notifications\Notification;

class NotificationTest extends AbstractTestCase
{
    use AuthenticateUser;

    public function test_if_can_get_the_notification_instance_from_container()
    {
        $this->assertEquals(new Notification(), $this->app['Notify']);
    }
    public function test_can_view_notifications_page()
    {
        $this->visit('dashboard/notifications')
            ->see('Notificações');
    }

    public function test_can_set_a_new_notification()
    {
        Notify::set('title', 'info', 'This is a test message');

        $this->seeInDatabase(
            'notifications',
            [
                'body'=>'This is a test message',
                'title' => 'title',
                'type' => 'info'
            ]
        );
    }

    public function test_can_set_a_new_notification_with_flash_message()
    {
        Notify::set('title', 'info', 'This is a test message', true);

        $this->seeInDatabase(
            'notifications',
            [
                'body'=>'This is a test message',
                'title' => 'title',
                'type' => 'info'
            ]
        );

        $this->assertEquals(1, Notify::getNotificationCount());
    }

    public function test_can_count_multiple_flash_notifications()
    {
        Notify::set('title', 'info', 'This is a test message', true);

        Notify::set('title2', 'success', 'This is a second test message', true);

        Notify::set('title3', 'warning', 'This is a third test message', true);

        $this->assertEquals(3, Notify::getNotificationCount());
    }

    public function test_notification_types_in_database()
    {
        $types = ['info','success','error','warning'];

        foreach($types as $type){
            Notify::set('title', $type, 'This is a test message for '.$type.' label');

            $this->seeInDatabase(
                'notifications',
                [
                    'title'=>'title',
                    'type'=>$type,
                    'body'=>'This is a test message for '.$type.' label'
                ]
            );
        }
    }

    public function test_can_set_a_new_notification_with_wrong_type()
    {
        $this->setExpectedException(
            'InvalidArgumentException',
            'Type must be one of: info, success, error or warning'
        );

        Notify::set('title', 'wrong_type', 'This is a test message', true);
    }
}
