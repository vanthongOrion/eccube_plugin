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

/* MailMagazine42/MailMagazineNav.php */
class __TwigTemplate_06c1bbc35fb0c27482a09b55b7cf277e extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42;

use Eccube\\Common\\EccubeNav;

class MailMagazineNav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'mailmagazine' => [
                'id' => 'mailmagazine',
                'name' => 'mailmagazine.title',
                'icon' => 'fa-envelope',
                'children' => [
                    'mailmagazine' => [
                        'id' => 'mailmagazine',
                        'name' => 'mailmagazine.index.title',
                        'url' => 'plugin_mail_magazine',
                    ],
                    'mailmagazine_template' => [
                        'id' => 'mailmagazine_template',
                        'name' => 'mailmagazine.template.title',
                        'url' => 'plugin_mail_magazine_template',
                    ],
                    'mailmagazine_history' => [
                        'id' => 'mailmagazine_history',
                        'name' => 'mailmagazine.history.title',
                        'url' => 'plugin_mail_magazine_history',
                    ],
                ],
            ],
        ];
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/MailMagazineNav.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/MailMagazineNav.php", "/var/www/html/app/Plugin/MailMagazine42/MailMagazineNav.php");
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
