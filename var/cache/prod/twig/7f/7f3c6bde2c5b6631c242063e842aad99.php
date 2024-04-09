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

/* MailMagazine42/Entity/CustomerTrait.php */
class __TwigTemplate_e80ddd19761a1a511e0749b07c885602 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Eccube\\Annotation as Eccube;

/**
 * @Eccube\\EntityExtension(\"Eccube\\Entity\\Customer\")
 */
trait CustomerTrait
{
    /**
     * @ORM\\Column(name=\"plg_mailmagazine_flg\", type=\"smallint\", length=1, nullable=true, options={\"default\":0, \"unsigned\": true})
     *
     * @var int
     */
    protected \$mailmaga_flg;

    /**
     * Set mailmaga_flg
     *
     * @param \$mailmagaFlg
     *
     * @return \$this
     */
    public function setMailmagaFlg(\$mailmagaFlg)
    {
        \$this->mailmaga_flg = \$mailmagaFlg;

        return \$this;
    }

    /**
     * Get mailmaga_flg
     *
     * @return int
     */
    public function getMailmagaFlg()
    {
        return \$this->mailmaga_flg;
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Entity/CustomerTrait.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Entity/CustomerTrait.php", "/var/www/html/app/Plugin/MailMagazine42/Entity/CustomerTrait.php");
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
