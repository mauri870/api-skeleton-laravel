<?php
namespace App\Applications\Dashboard\Notifications;

use Illuminate\Support\Facades\Session;

class Notification
{
    /**
     * @var
     */
    private $sessionNotificationCount = 0;

    /**
     * Set a new persistent notification
     *
     * @param null $title The message title
     * @param string $type Type must be one of: info, success, error or warning
     * @param string $body Message
     * @param bool $setFlashNotification Create a new flash notification too?
     * @return $this
     */
    public function set($title = null, $type, $body, $setFlashNotification = true)
    {
        $this->checkTypeIsValid($type);

        \App\Domains\Users\Notification::create([
            'title'=> $title,
            'type'=> $type,
            'body'=> $body,
            'user_id'=> auth()->user()->id,
        ]);

        if($setFlashNotification == true){
            $this->setFlashNotification($type, $body);
        }

        $this->incrementNotificationCounter();

        return $this;
    }
        
    public function setFlashNotification($type, $message)
    {
        $this->checkTypeIsValid($type);

        switch($type){
            case "info":
                \Krucas\Notification\Facades\Notification::info($message);
                break;
            case "success":
                \Krucas\Notification\Facades\Notification::success($message);
                break;
            case "error":
                \Krucas\Notification\Facades\Notification::error($message);
                break;
            case "warning":
                \Krucas\Notification\Facades\Notification::warning($message);
                break;
        }

        return true;
    }

    /**
     * Check if type is an valid argument
     *
     * @param $type
     * @return bool
     */
    protected function checkTypeIsValid($type)
    {
        $types = ['info','success','error','warning'];

        if(!in_array($type, $types)){
            throw new \InvalidArgumentException("Type must be one of: info, success, error or warning");
        }

        return true;
    }

    /**
     * Get the count of total notifications stored from the last request
     *
     * @return mixed
     */
    public function getNotificationCount()
    {
        if(session()->has('notification_count')){
            $notification_count = session()->pull('notification_count');
            return $notification_count;
        }else{
            return 0;
        }
    }

    /**
     * Increments the notification count and save to a session
     */
    private function incrementNotificationCounter(){
        $this->sessionNotificationCount ++;

        session()->put('notification_count',$this->sessionNotificationCount);
    }

}