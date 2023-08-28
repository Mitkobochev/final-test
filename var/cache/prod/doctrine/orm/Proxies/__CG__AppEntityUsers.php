<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'email' => [parent::class, 'email', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'password' => [parent::class, 'password', null],
        "\0".parent::class."\0".'subscription_end' => [parent::class, 'subscription_end', null],
        "\0".parent::class."\0".'subscription_start' => [parent::class, 'subscription_start', null],
        "\0".parent::class."\0".'user_role' => [parent::class, 'user_role', null],
        "\0".parent::class."\0".'username' => [parent::class, 'username', null],
        'email' => [parent::class, 'email', null],
        'id' => [parent::class, 'id', null],
        'password' => [parent::class, 'password', null],
        'subscription_end' => [parent::class, 'subscription_end', null],
        'subscription_start' => [parent::class, 'subscription_start', null],
        'user_role' => [parent::class, 'user_role', null],
        'username' => [parent::class, 'username', null],
    ];

    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {
        if ($cloner !== null) {
            return;
        }

        self::createLazyGhost($initializer, [
            "\0".parent::class."\0".'id' => true,
        ], $this);
    }

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"], $properties['__isCloning']);

        return $properties;
    }
}
