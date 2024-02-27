<?php

namespace Vertuoza\Repositories;

use Overblog\PromiseAdapter\PromiseAdapterInterface;
use Vertuoza\Repositories\Database\QueryBuilder;
use Vertuoza\Repositories\Settings\CollaboratorTypes\CollaboratorRepository;
use Vertuoza\Repositories\Settings\UnitTypes\UnitTypeRepository;

class RepositoriesFactory
{
  public UnitTypeRepository $unitType;
  public CollaboratorRepository $collaboratorType;

  public function __construct(QueryBuilder $database, PromiseAdapterInterface $dataLoaderPromiseAdapter)
  {
    $this->unitType = new UnitTypeRepository($database, $dataLoaderPromiseAdapter);
    $this->collaboratorType = new CollaboratorRepository($database, $dataLoaderPromiseAdapter);
  }
}
