<?php
/**
 * This file is part of infnet-tasks.
 * (c) Renan Taranto <renantaranto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController
{
    #[Route('/ping', name: 'docker_healthcheck')]
    public function ping(): Response
    {
        return new Response('pong');
    }
}
