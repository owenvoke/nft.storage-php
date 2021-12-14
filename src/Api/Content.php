<?php

declare(strict_types=1);

namespace OwenVoke\NFTStorage\Api;

class Content extends AbstractApi
{
    public function all(array $parameters = []): array
    {
        return $this->get('/', $parameters);
    }

    public function show(string $contentId): array
    {
        return $this->get("/{$contentId}");
    }

    public function status(string $contentId): array
    {
        return $this->get("/check/{$contentId}");
    }

    public function remove(string $contentId): array
    {
        return $this->delete("/{$contentId}");
    }
}
