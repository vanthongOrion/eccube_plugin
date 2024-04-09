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

/* MailMagazine42/Tests/AbstractMailMagazineTestCase.php */
class __TwigTemplate_eec64140fcb2ed8acab56ad52d870230 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Tests;

use Eccube\\Tests\\Service\\AbstractServiceTestCase;
use Plugin\\MailMagazine42\\Entity\\MailMagazineSendHistory;
use Plugin\\MailMagazine42\\Service\\MailMagazineService;
use Plugin\\MailMagazine42\\Repository\\MailMagazineSendHistoryRepository;
use Eccube\\Entity\\Customer;

abstract class AbstractMailMagazineTestCase extends AbstractServiceTestCase
{
    /**
     * @var MailMagazineService
     */
    protected \$mailMagazineService;

    /**
     * @var MailMagazineSendHistoryRepository
     */
    protected \$mailMagazineSendHistoryRepository;

    public function setUp(): void
    {
        parent::setUp();
        \$this->mailMagazineSendHistoryRepository = \$this->entityManager->getRepository(MailMagazineSendHistory::class);
    }

    /**
     * Create customer + mail magazine flag
     *
     * @param string \$email
     * @param string \$name01
     * @param string \$name02
     *
     * @return Customer
     */
    protected function createMailmagaCustomer(\$email = 'mail_magazine_service_test@example.com', \$name01 = 'name01', \$name02 = 'name02')
    {
        \$c = \$this->createCustomer(\$email);
        if (\$name01) {
            \$c->setName01(\$name01);
        }
        if (\$name02) {
            \$c->setName02(\$name02);
        }
        \$c->setMailmagaFlg(1);

        \$this->entityManager->persist(\$c);
        \$this->entityManager->flush(\$c);

        return \$c;
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Tests/AbstractMailMagazineTestCase.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Tests/AbstractMailMagazineTestCase.php", "/var/www/html/app/Plugin/MailMagazine42/Tests/AbstractMailMagazineTestCase.php");
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
