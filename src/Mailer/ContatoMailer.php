<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * Contato mailer.
 */
class ContatoMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Contato';

    public function novaMsgContato($msgContato){
        $this->setTo($msgContato->email);
        

    }
}
