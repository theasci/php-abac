<?php

namespace PhpAbac\Manager;

use PhpAbac\Repository\AttributeRepository;

use PhpAbac\Model\Attribute;

class AttributeManager {
    /** @var AttributeRepository **/
    protected $repository;
    
    public function __construct() {
        $this->repository = new AttributeRepository();
    }
    
    /**
     * @param string $name
     * @param string $table
     * @param string $column
     * @param string $criteriaColumn
     * @return Attribute
     */
    public function create($name, $table, $column, $criteriaColumn) {
        return $this->repository->createAttribute($name, $table, $column, $criteriaColumn);
    }
    
    public function retrieveAttribute(Attribute $attribute, $criteria) {
        $this->repository->retrieveAttribute($attribute, $criteria);
    }
}