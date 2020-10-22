<?php

declare(strict_types=1);

/*
 * (c) 2020 Michael Joyce <mjoyce@sfu.ca>
 * This source file is subject to the GPL v2, bundled
 * with this source code in the file LICENSE.
 */

namespace App\Entity;

use DateTime;

interface ContributorInterface {
    public function getContributions() : ?array;

    public function setContributions(array $contributions);

    public function addContribution(DateTime $date, $name);
}