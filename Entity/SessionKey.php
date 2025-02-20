<?php

namespace Phpbb\SessionsAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(readOnly=true)
 * @ORM\Table(name="sessions_keys")
 */
class SessionKey
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(name="key_id", type="string", length=32, nullable=false)
     */
    private $key;

    /**
     * @var User
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id", nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(name="last_ip", type="string", length=40)
     */
    private $lastIp;

    /**
     * @ORM\Column(name="last_login", type="integer")
     */
    private $lastLogin;

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(string $key): self
    {
        $this->key = $key;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getLastIp(): ?string
    {
        return $this->lastIp;
    }

    public function setLastIp(string $lastIp): self
    {
        $this->lastIp = $lastIp;
        return $this;
    }

    public function getLastLogin(): ?int
    {
        return $this->lastLogin;
    }

    public function setLastLogin(int $lastLogin): self
    {
        $this->lastLogin = $lastLogin;
        return $this;
    }
}
