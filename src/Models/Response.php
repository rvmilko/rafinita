<?php

namespace App\Models;

class Response
{
    private string $action;
    private string $result;
    private string $status;
    private string $orderId;
    private string $transId;
    private string $transDate;
    private string $descriptor;
    private string $statement;
    private string $amount;
    private string $currency;
    private string $redirectUrl;
    private string $redirectParams;
    private string $redirectMethod;

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): void
    {
        $this->result = $result;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getTransId(): string
    {
        return $this->transId;
    }

    public function setTransId(string $transId): void
    {
        $this->transId = $transId;
    }

    public function getTransDate(): string
    {
        return $this->transDate;
    }

    public function setTransDate(string $transDate): void
    {
        $this->transDate = $transDate;
    }

    public function getDescriptor(): string
    {
        return $this->descriptor;
    }

    public function setDescriptor(string $descriptor): void
    {
        $this->descriptor = $descriptor;
    }

    public function getStatement(): string
    {
        return $this->statement;
    }

    public function setStatement(string $statement): void
    {
        $this->statement = $statement;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(string $redirectUrl): void
    {
        $this->redirectUrl = $redirectUrl;
    }

    public function getRedirectParams(): string
    {
        return $this->redirectParams;
    }

    public function setRedirectParams(string $redirectParams): void
    {
        $this->redirectParams = $redirectParams;
    }

    public function getRedirectMethod(): string
    {
        return $this->redirectMethod;
    }

    public function setRedirectMethod(string $redirectMethod): void
    {
        $this->redirectMethod = $redirectMethod;
    }

    public function setValuesFromArray($array): void
    {
        foreach ($array as $key => $value)
        {
            $newKey = lcfirst(str_replace('_', '', ucwords($key, '_ ')));
            $this->$newKey = $value;
        }
    }

    public function getAllProperties(): array
    {
        return get_object_vars($this);
    }
}