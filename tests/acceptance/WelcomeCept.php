<?php

$I = new WebGuy($scenario);
$I->wantTo('Ensure the homepage Works');
$I->amOnPage('/');
$I->see('Laravel France');
$I->seeResponseCodeIs('200');
