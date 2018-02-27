<?php

namespace OC\PlatformBundle\Service;

class FakeEmail
{
    public function getFakeEmail()
    {
        $messages = [
            "Appel d'un service indépendant!",
            'Service qui est tout seul appelé!',
            'Super travail! Le service fonctionne!',
        ];

        $index = array_rand($messages);

        return $messages[$index];
    }

}
