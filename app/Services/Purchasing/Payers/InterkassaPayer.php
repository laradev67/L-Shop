<?php
declare(strict_types = 1);

namespace App\Services\Purchasing\Payers;

use App\Entity\Purchase;
use App\Services\Purchasing\Payments\Interkassa\Checkout;
use App\Services\Purchasing\Payments\Interkassa\Payment;

class InterkassaPayer implements Payer
{
    public const NAME = 'interkassa';

    /**
     * @var Checkout
     */
    private $checkout;

    /**
     * @var bool
     */
    private $enabled;

    public function __construct(Checkout $checkout, bool $enabled)
    {
        $this->checkout = $checkout;
        $this->enabled = $enabled;
    }

    /**
     * @inheritDoc
     */
    public function paymentUrl(Purchase $purchase): string
    {
        $payment = new Payment($purchase->getId(), $purchase->getCost());
        $payment->setDescription('Purchased by L-Shop');

        return $this->checkout->paymentUrl($payment);
    }

    /**
     * @inheritDoc
     */
    public function validate(array $data): bool
    {
        return $this->checkout->validate($data);
    }

    /**
     * @inheritDoc
     */
    public function purchaseId(array $data): int
    {
        return (int)$data['ik_pm_no'];
    }

    /**
     * @inheritDoc
     */
    public function successAnswer(Purchase $purchase): string
    {
        return $this->checkout->successAnswer();
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        return self::NAME;
    }

    /**
     * @inheritDoc
     */
    public function enabled(): bool
    {
        return $this->enabled;
    }
}
