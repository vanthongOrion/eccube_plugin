<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Api42/EventListener/UserResolveListener.php */
class __TwigTemplate_2dde4870e394796fc554ee7fc8b30109 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\\Api42\\EventListener;

use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
use Symfony\\Component\\Security\\Core\\User\\UserProviderInterface;
use League\\Bundle\\OAuth2ServerBundle\\Event\\UserResolveEvent;

final class UserResolveListener
{
    /**
     * @var UserProviderInterface
     */
    private \$userProvider;

    /**
     * @var UserPasswordEncoderInterface
     */
    private \$userPasswordEncoder;

    /**
     * @param UserProviderInterface \$userProvider
     * @param UserPasswordEncoderInterface \$userPasswordEncoder
     */
    public function __construct(UserProviderInterface \$userProvider, UserPasswordEncoderInterface \$userPasswordEncoder)
    {
        \$this->userProvider = \$userProvider;
        \$this->userPasswordEncoder = \$userPasswordEncoder;
    }

    /**
     * @param UserResolveEvent \$event
     */
    public function onUserResolve(UserResolveEvent \$event): void
    {
        \$user = \$this->userProvider->loadUserByUsername(\$event->getUsername());

        if (null === \$user) {
            return;
        }

        if (!\$this->userPasswordEncoder->isPasswordValid(\$user, \$event->getPassword())) {
            return;
        }

        \$event->setUser(\$user);
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/EventListener/UserResolveListener.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/EventListener/UserResolveListener.php", "/var/www/html/app/Plugin/Api42/EventListener/UserResolveListener.php");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
