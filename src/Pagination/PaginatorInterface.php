<?php

declare(strict_types=1);


namespace DMP\PaginatorBundle\Pagination;

use Doctrine\ORM\QueryBuilder;

interface PaginatorInterface
{
    public function paginate(
        QueryBuilder $queryBuilder,
        Pagination   $paginationParameters,
        bool $fetchJoinCollection,
        ?callable $callback
    ): PaginatedCollection;
}
