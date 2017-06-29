<?php namespace RainLab\User\NotifyRules;

use RainLab\Notify\Classes\EventBase;

class UserActivatedEvent extends EventBase
{
    /**
     * Returns information about this event, including name and description.
     */
    public function eventDetails()
    {
        return [
            'name'        => 'Activated',
            'description' => 'A user is activated',
            'group'       => 'user'
        ];
    }

    /**
     * Defines the properties used by this class.
     */
    public function defineProperties()
    {
        return [
            'user' => [
                'title' => 'User',
                'description' => 'The activated user',
            ],
        ];
    }

    public static function makePropertiesFromEvent(array $args, $eventName = null)
    {
        return [
            'user' => array_get($args, 0)
        ];
    }
}
