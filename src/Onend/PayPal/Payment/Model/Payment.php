<?php

namespace Onend\PayPal\Payment\Model;

use Onend\PayPal\Common\Enum\Intent;
use Onend\PayPal\Common\Model\AbstractModel;

class Payment extends AbstractModel
{
    protected $id;

    protected $create_time;

    /**
     * @var
     */
    protected $update_time;

    /**
     * @var string
     */
    protected $intent;

    /**
     * @var Payer
     */
    protected $payer;

    /**
     * @var array
     */
    protected $transactions;

    protected $redirect_urls;

    /**
     * @return string
     */
    public function getIntent()
    {
        return $this->intent;
    }

    /**
     * @param string $intent
     * @throws \InvalidArgumentException
     */
    public function setIntent( $intent )
    {
        Intent::checkValue($intent);
        $this->intent = $intent;
    }

    /**
     * @return Payer
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param Payer $payer
     */
    public function setPayer( Payer $payer )
    {
        $this->payer = $payer;
    }

    /**
     * @return array
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param array $transactions
     */
    public function setTransactions( array $transactions )
    {
        foreach ( $transactions as $transaction ) {
            $this->addTransaction($transaction);
        }
    }

    /**
     * @param Transaction $transaction
     */
    public function addTransaction( Transaction $transaction )
    {
        $this->transactions[] = $transaction;
    }
}