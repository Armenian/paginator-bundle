<?php

declare(strict_types=1);

namespace DMP\PaginatorBundle;

use DMP\PaginatorBundle\DependencyInjection\PaginatorExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class PaginatorBundle extends Bundle
{

    public function getContainerExtensionClass(): string
    {
        return PaginatorExtension::class;
    }

    public function getContainerExtension(): PaginatorExtension
    {
        return new PaginatorExtension();
    }
}
