<?php

namespace Leap\Wizard;

class Mailer
{
    public function mail($recipient, $content)
    {
        echo $recipient . ' - ' . $content;
    }
}