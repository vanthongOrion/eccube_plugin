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

/* Api42/Security/Core/Encoder/UserPasswordEncoder.php */
class __TwigTemplate_921c8fb0f19ccfbd5e6e369d1dc5416a extends \Eccube\Twig\Template
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

namespace Plugin\\Api42\\Security\\Core\\Encoder;

use Eccube\\Security\\Core\\Encoder\\PasswordEncoder;
use Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class UserPasswordEncoder implements UserPasswordEncoderInterface
{
    /**
     * @var PasswordEncoder
     */
    private \$passwordEncoder;

    /**
     * UserPasswordEncoder constructor.
     * @param PasswordEncoder \$passwordEncoder
     */
    public function __construct(PasswordEncoder \$passwordEncoder)
    {
        \$this->passwordEncoder = \$passwordEncoder;
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword(UserInterface \$user, \$plainPassword)
    {
        return \$this->passwordEncoder->encodePassword(\$plainPassword, \$user->getSalt());
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid(UserInterface \$user, \$raw)
    {
        return \$this->passwordEncoder->isPasswordValid(\$user->getPassword(), \$raw, \$user->getSalt());

    }

    /**
     * @inheritDoc
     */
    public function needsRehash(UserInterface \$user): bool
    {
        // TODO: Implement needsRehash() method.
    }
}
";
    }

    public function getTemplateName()
    {
        return "Api42/Security/Core/Encoder/UserPasswordEncoder.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Api42/Security/Core/Encoder/UserPasswordEncoder.php", "/var/www/html/app/Plugin/Api42/Security/Core/Encoder/UserPasswordEncoder.php");
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
