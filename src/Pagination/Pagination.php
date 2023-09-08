<?php

declare(strict_types=1);

namespace DMP\PaginatorBundle\Pagination;

final class Pagination
{
    public function __construct(
        private readonly int $page,
        private readonly int $limit)
    {}

    public function getPage(): int
    {
        return $this->page;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
