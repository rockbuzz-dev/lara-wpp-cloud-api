<?php
 
namespace Rockbuzz\LaraWppCloudApi;

use Illuminate\Notifications\Notification;
 
class WhatsAppChannel
{
    /**
     * Send the given notification.
     *
     * @param  mixed  $notifiable
     * @param  mixed  $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $notification->toWhatsAppMessage($notifiable)->send();
    }
}