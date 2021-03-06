<?php

/*
 * This file is part of Laravel Rewardable.
 *
 * (c) PackageBackup <hello@draperstud.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PackageBackup\Rewardable\Contracts;

interface Creditable
{
    public function credits();
    public function getCredit();
    public function getCreditByType($type);
    public function getBalance();
    public function getBalanceByType($type);
    public function getSpendCredits();
    public function grantCredit($credit);
    public function grantCredits($credits);
    public function revokeCredit($credit);
    public function revokeCredits($credits);
    public function revokeAllCredits();
    public function reGrantCredits($credits);
}
