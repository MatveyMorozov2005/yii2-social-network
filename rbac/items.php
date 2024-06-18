<?php

return [
    'user' => [
        'type' => 1,
        'children' => [
            'updateOwnProfile',
            'updateOwnConversation',
        ],
    ],
    'moderator' => [
        'type' => 1,
        'children' => [
            'user',
        ],
    ],
    'admin' => [
        'type' => 1,
        'children' => [
            'moderator',
            'user',
        ],
    ],
    'updateOwnProfile' => [
        'type' => 2,
        'ruleName' => 'updateProfile',
    ],
    'updateOwnConversation' => [
        'type' => 2,
        'ruleName' => 'updateConversation',
    ],
];
