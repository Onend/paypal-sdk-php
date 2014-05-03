<?php

namespace Onend\PayPal\Payment\Model;

use JMS\Serializer\Annotation as JMS;

use Onend\PayPal\Common\Enum\Intent;
use Onend\PayPal\Common\Model\AbstractModel;

class Payment extends AbstractModel
{
    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $id;

    /**
     * @JMS\Type("string")
     *
     *
     * @var string
     */
    protected $create_time;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $update_time;

    /**
     * @JMS\Type("string")
     *
     * @var string
     */
    protected $intent;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\Payer")
     *
     * @var Payer
     */
    protected $payer;

    /**
     * @JMS\Type("array<Onend\PayPal\Payment\Model\Transaction>")
     *
     * @var Transaction[]
     */
    protected $transactions;

    /**
     * @JMS\Type("Onend\PayPal\Payment\Model\RedirectUrl")
     *
     * @var RedirectUrl
     */
    protected $redirect_urls;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * @param string $createTime
     */
    public function setCreateTime($createTime)
    {
        $this->create_time = $createTime;
    }

    /**
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * @param string $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->update_time = $updateTime;
    }

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
    public function setIntent($intent)
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
    public function setPayer(Payer $payer)
    {
        $this->payer = $payer;
    }

    /**
     * @return Transaction[]
     */
    public function getTransactions()
    {
        return $this->transactions;
    }

    /**
     * @param array $transactions
     */
    public function setTransactions(array $transactions)
    {
        foreach ($transactions as $transaction) {
            $this->addTransaction($transaction);
        }
    }

    /**
     * @param Transaction $transaction
     */
    public function addTransaction(Transaction $transaction)
    {
        $this->transactions[] = $transaction;
    }

    /**
     * @return RedirectUrl
     */
    public function getRedirectUrls()
    {
        return $this->redirect_urls;
    }

    /**
     * @param RedirectUrl $redirectUrl
     */
    public function setRedirectUrls(RedirectUrl $redirectUrl)
    {
        $this->redirect_urls = $redirectUrl;
    }
}
