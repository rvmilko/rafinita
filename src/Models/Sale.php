<?php

namespace App\Models;

class Sale {
    private string $action;
    private string $clientKey;
    private string $channelId;
    private string $orderId;
    private float $orderAmount;
    private string $orderCurrency;
    private string $orderDescription;
    private string $cardNumber;
    private string $cardExpMonth;
    private string $cardExpYear;
    private string $cardCvv2;
    private string $payerFirstName;
    private string $payerLastName;
    private string $payerMiddleName;
    private string $payerBirthDate;
    private string $payerAddress;
    private string $payerAddress2;
    private string $payerCountry;
    private string $payerState;
    private string $payerCity;
    private string $payerZip;
    private string $payerEmail;
    private string $payerPhone;
    private string $payerIp;
    private string $termUrl3ds;
    private string $recurringInit;
    private string $auth;
    private string $hash;

    public function getAction(): string
    {
        return $this->action;
    }

    public function setAction(string $action): void
    {
        $this->action = $action;
    }

    public function getClientKey(): string
    {
        return $this->clientKey;
    }

    public function setClientKey(string $clientKey): void
    {
        $this->clientKey = $clientKey;
    }

    public function getChannelId(): string
    {
        return $this->channelId;
    }

    public function setChannelId(string $channelId): void
    {
        $this->channelId = $channelId;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getOrderAmount(): float
    {
        return $this->orderAmount;
    }

    public function setOrderAmount(float $orderAmount): void
    {
        $this->orderAmount = $orderAmount;
    }

    public function getOrderCurrency(): string
    {
        return $this->orderCurrency;
    }

    public function setOrderCurrency(string $orderCurrency): void
    {
        $this->orderCurrency = $orderCurrency;
    }

    public function getOrderDescription(): string
    {
        return $this->orderDescription;
    }

    public function setOrderDescription(string $orderDescription): void
    {
        $this->orderDescription = $orderDescription;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    public function getCardExpMonth(): string
    {
        return $this->cardExpMonth;
    }

    public function setCardExpMonth(string $cardExpMonth): void
    {
        $this->cardExpMonth = $cardExpMonth;
    }

    public function getCardExpYear(): string
    {
        return $this->cardExpYear;
    }

    public function setCardExpYear(string $cardExpYear): void
    {
        $this->cardExpYear = $cardExpYear;
    }

    public function getCardCvv2(): string
    {
        return $this->cardCvv2;
    }

    public function setCardCvv2(string $cardCvv2): void
    {
        $this->cardCvv2 = $cardCvv2;
    }

    public function getPayerFirstName(): string
    {
        return $this->payerFirstName;
    }

    public function setPayerFirstName(string $payerFirstName): void
    {
        $this->payerFirstName = $payerFirstName;
    }

    public function getPayerLastName(): string
    {
        return $this->payerLastName;
    }

    public function setPayerLastName(string $payerLastName): void
    {
        $this->payerLastName = $payerLastName;
    }

    public function getPayerMiddleName(): string
    {
        return $this->payerMiddleName;
    }

    public function setPayerMiddleName(string $payerMiddleName): void
    {
        $this->payerMiddleName = $payerMiddleName;
    }

    public function getPayerBirthDate(): string
    {
        return $this->payerBirthDate;
    }

    public function setPayerBirthDate(string $payerBirthDate): void
    {
        $this->payerBirthDate = $payerBirthDate;
    }

    public function getPayerAddress(): string
    {
        return $this->payerAddress;
    }

    public function setPayerAddress(string $payerAddress): void
    {
        $this->payerAddress = $payerAddress;
    }

    public function getPayerAddress2(): string
    {
        return $this->payerAddress2;
    }

    public function setPayerAddress2(string $payerAddress2): void
    {
        $this->payerAddress2 = $payerAddress2;
    }

    public function getPayerCountry(): string
    {
        return $this->payerCountry;
    }

    public function setPayerCountry(string $payerCountry): void
    {
        $this->payerCountry = $payerCountry;
    }

    public function getPayerState(): string
    {
        return $this->payerState;
    }

    public function setPayerState(string $payerState): void
    {
        $this->payerState = $payerState;
    }

    public function getPayerCity(): string
    {
        return $this->payerCity;
    }

    public function setPayerCity(string $payerCity): void
    {
        $this->payerCity = $payerCity;
    }

    public function getPayerZip(): string
    {
        return $this->payerZip;
    }

    public function setPayerZip(string $payerZip): void
    {
        $this->payerZip = $payerZip;
    }

    public function getPayerEmail(): string
    {
        return $this->payerEmail;
    }

    public function setPayerEmail(string $payerEmail): void
    {
        $this->payerEmail = $payerEmail;
    }

    public function getPayerPhone(): string
    {
        return $this->payerPhone;
    }

    public function setPayerPhone(string $payerPhone): void
    {
        $this->payerPhone = $payerPhone;
    }

    public function getPayerIp(): string
    {
        return $this->payerIp;
    }

    public function setPayerIp(string $payerIp): void
    {
        $this->payerIp = $payerIp;
    }

    public function getTermUrl3ds(): string
    {
        return $this->termUrl3ds;
    }

    public function setTermUrl3ds(string $termUrl3ds): void
    {
        $this->termUrl3ds = $termUrl3ds;
    }

    public function getRecurringInit(): string
    {
        return $this->recurringInit;
    }

    public function setRecurringInit(string $recurringInit): void
    {
        $this->recurringInit = $recurringInit;
    }

    public function getAuth(): string
    {
        return $this->auth;
    }

    public function setAuth(string $auth): void
    {
        $this->auth = $auth;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }
}