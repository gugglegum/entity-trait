<?php

declare(strict_types=1);

namespace gugglegum\EntityTrait\tests\entities;

use gugglegum\EntityTrait\DataTransferObjectTrait;
use gugglegum\EntityTrait\EntityInterface;
use gugglegum\EntityTrait\EntityTrait;
use gugglegum\EntityTrait\PlainObjectTrait;

class DTOUser implements EntityInterface
{
    use EntityTrait, DataTransferObjectTrait, PlainObjectTrait;

    /**
     * @var string|null
     */
    public $name;

    /**
     * @var string|null
     */
    public $email;

    /**
     * @var bool
     */
    public $isAdmin = false;

    /**
     * @var bool
     */
    public $disabled = false;

    /**
     * A static property that is added just to test that static properties are not listed by `getAttributeNames()`.
     */
    public static $someStaticProperty;

    /**
     * Constructor allows initializing attribute values
     *
     * @param array $data           Associative array with [attribute => value] pairs
     */
    public function __construct(array $data = [])
    {
        $this->setFromArray($data);
    }
}
