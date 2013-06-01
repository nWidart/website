<?php

$I = new WebGuy($scenario);
$I->wantTo('Tester la page contact');
$I->amOnPage('/contact');
$I->see('Contact');
$I->seeResponseCodeIs('200');

$I->click('Valider');
$I->see('Le champ nom est obligatoire');
$I->see('Le champ email est obligatoire');
$I->see('Le champ contenu est obligatoire');

$I->fillField('#nom', 'Mon nom');
$I->fillField('#contenu', 'stuff stuff stuff stuff stuff stuff stuff stuff stuff stuff stuff stuff');
$I->click('Valider');

$I->seeInField('#nom', 'Mon nom');
$I->seeInField('#contenu', 'stuff stuff stuff stuff stuff stuff stuff stuff stuff stuff stuff stuff');
$I->see('Le champ email est obligatoire');
