<?php declare(strict_types=1);
/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    GNU General Public License version 2 or later.
 */

namespace Windwalker\Authorisation;

/**
 * The AuthorisationInterface class.
 *
 * @since  3.0
 */
interface AuthorisationInterface
{
    /**
     * authorise
     *
     * @param string $policy
     * @param mixed  $user
     * @param mixed  $data
     *
     * @return  boolean
     */
    public function authorise($policy, $user, $data = null);

    /**
     * addPolicy
     *
     * @param   string                   $name
     * @param   PolicyInterface|callable $handler
     *
     * @return  static
     */
    public function addPolicy($name, $handler);

    /**
     * registerPolicy
     *
     * @param PolicyProviderInterface $policy
     *
     * @return  static
     */
    public function registerPolicyProvider(PolicyProviderInterface $policy);
}
