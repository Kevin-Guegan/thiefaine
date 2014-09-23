<?php

namespace Thiefaine\ReferentielBundle\Entity;

use RMS\PushNotificationsBundle\Message\AndroidMessage;

/**
 * Push
 */
class Push {

    public function makeMessage($sendMessage, $deviceToken) { 
    
        $message = new AndroidMessage();
        $message->setGCM(true);

        $pushMessage = $sendMessage;
        $token = $deviceToken;

        $message->setMessage(array( 'message' => $pushMessage, ));
        $message->setDeviceIdentifier($token);

        return $message;
    }
    
}