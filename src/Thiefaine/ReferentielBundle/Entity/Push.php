<?php

namespace Thiefaine\ReferentielBundle\Entity;

use RMS\PushNotificationsBundle\Message\AndroidMessage;

/**
 * Push
 */
class Push {

    public function makeMessage() { 
    
        $message = new AndroidMessage();
        $message->setGCM(true);

        $pushMessage = 'Oh my! A push notification!';
        $token = 'APA91bHKSwdWQDNz-JjeGbtehmmz3n-1iuGsEEcGiQyOR9QuXcgWax3PZ-Ezv42TAPY1KjzaRmo2mu98Vcxd1zLGaiv7v2CZw6xaI6LKS9W_ueu3CVIJ_NQkXiskT10XNPwFvjZhkbVKtdZdelZNXLu42X_6bw_bIRW1M9s3yfVYpTKyvTX6r35PiqJITRAuw2BYbx2lQLzD';

        $message->setMessage(array( 'message' => $pushMessage, ));
        $message->setDeviceIdentifier($token);

        return $message;
    }
    
}