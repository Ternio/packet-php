<?php namespace PacketHost\Client\Domain;

class Project extends BaseDomain
{

    /**
     * @var string
     */
    public $name;

    public $members;

    public $memberships;

    public $invitations;

    public $devices;

    public $paymentMethod;

    public $paymentMethodId;

    public $invoices;

    public $maxDevices;

    public $sshKeys;
}
