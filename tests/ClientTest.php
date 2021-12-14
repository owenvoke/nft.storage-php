<?php

declare(strict_types=1);

use OwenVoke\NFTStorage\Api\Content;
use OwenVoke\NFTStorage\Client;

it('gets instances from the client', function () {
    $client = new Client();

    // Get an instance of the client
    expect($client->content())->toBeInstanceOf(Content::class);
    expect($client->contents())->toBeInstanceOf(Content::class);
});
