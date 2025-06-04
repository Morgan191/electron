<?php

namespace App\Service;

class MailService
{
    public function sendMail(String $sujet, string $message): string
    {
        //code pour envoyer un email
        //Smail->setSubject($sujet);
        //Smail->setMessage (Smessage) ;
        //$mail-›send();

        dd($sujet);
    }
}
