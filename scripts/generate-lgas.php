<?php

$states = file_get_contents(
    'https://www.nigerianelite.com/api/States',
    false,
    stream_context_create([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ])
);

$states = json_decode($states);
$dataDir = dirname(__DIR__) . '/_data/';
$statesDir = dirname(__DIR__) . '/api/ng/states/';

if (!is_dir($statesDir)) {
    mkdir($statesDir);
}

foreach ($states as $state) {
    $dataFileName = sprintf('state_%s_lgas.json', $state->id);
    $dataName = sprintf('state_%s_lgas', $state->id);
    $pathName = sprintf('%s/lgas.json', $state->id);

    $lgas = getLGAs($state->state);
    file_put_contents($dataDir . $dataFileName, $lgas . "\n");

    if (!is_dir($statesDir . $state->id)) {
        mkdir($statesDir . $state->id);
    }

    $lgaData = "---\nlayout: null\n---\n{{ site.data.$dataName | jsonify }}\n";
    file_put_contents($statesDir . $pathName, $lgaData);
}


function getLGAs($stateName)
{
    if ($stateName == "Federal Capital Territory") {
        $stateName = "FCT";
    }

    $lgas = file_get_contents(
        sprintf('https://www.nigerianelite.com/api/Lga?state=%s', urlencode($stateName)),
        false,
        stream_context_create([
            'ssl' => [
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ])
    );

    return $lgas;
}
