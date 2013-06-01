<?php

namespace Lvlfr\Website\Validation;

class ContactValidator extends \App\Services\Validator {

    public function getRules() {
        return array(
            'nom' => array('required', 'min:2'),
            'email' => array('required', 'email'),
            'sujet' => array('min:3'),
            'contenu' => array('required', 'min:30'),
        );
    }
}
