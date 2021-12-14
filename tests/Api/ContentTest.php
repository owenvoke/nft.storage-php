<?php

declare(strict_types=1);

use OwenVoke\NFTStorage\Api\Content;

beforeEach(fn () => $this->apiClass = Content::class);

$file = [
    'cid' => 'bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u',
    'size' => 132614,
    'created' => '2021-03-12T17:03:07.787Z',
    'type' => 'image/jpeg',
    // ...
];

it('should get all files', function () use ($file) {
    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('/')
        ->willReturn(['value' => [$file]]);

    expect($api->all())->toBe(['value' => [$file]]);
});

it('should get a file by its id', function () use ($file) {
    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('/bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u')
        ->willReturn(['value' => $file]);

    expect($api->show('bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u'))->toBe(['value' => $file]);
});

it('should check the status of a file', function () {
    $status = [
        'cid' => 'bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u',
        // ...
    ];
    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('get')
        ->with('/check/bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u')
        ->willReturn(['value' => $status]);

    expect($api->status('bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u'))->toBe(['value' => $status]);
});

it('should remove a file from pinning', function () {
    $api = $this->getApiMock();

    $api->expects($this->once())
        ->method('delete')
        ->with('/bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u')
        ->willReturn(['ok' => true]);

    expect($api->remove('bafkreidivzimqfqtoqxkrpge6bjyhlvxqs3rhe73owtmdulaxr5do5in7u'))->toBe([
        'ok' => true,
    ]);
});
