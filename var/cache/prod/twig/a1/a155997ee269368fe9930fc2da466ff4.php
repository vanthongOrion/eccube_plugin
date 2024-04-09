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

/* MailMagazine42/Tests/Web/Admin/MailMagazineEventOnRenderAdminCustomerBeforeTest.php */
class __TwigTemplate_cc79101ba62000dc6dca8f6268c51b97 extends \Eccube\Twig\Template
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

namespace Plugin\\MailMagazine42\\Tests\\Web\\Admin;

use Eccube\\Common\\Constant;
use Eccube\\Entity\\Customer;
use Plugin\\MailMagazine42\\Tests\\Web\\MailMagazineCommon;
use Eccube\\Repository\\CustomerRepository;

class MailMagazineEventOnRenderAdminCustomerBeforeTest extends MailMagazineCommon
{
    /**
     * @var CustomerRepository
     */
    protected \$customerRepository;

    public function setUp(): void
    {
        parent::setUp();
        \$this->customerRepository = \$this->entityManager->getRepository(Customer::class);
    }

    protected function createFormData()
    {
        \$faker = \$this->getFaker();
        \$tel = \$faker->phoneNumber;

        \$email = \$faker->safeEmail;
        \$password = 'password1234';
        \$birth = \$faker->dateTimeBetween;

        \$form = [
            'name' => [
                'name01' => \$faker->lastName,
                'name02' => \$faker->firstName,
            ],
            'kana' => [
                'kana01' => \$faker->lastKanaName,
                'kana02' => \$faker->firstKanaName,
            ],
            'company_name' => \$faker->company,
            'postal_code' => \$faker->postcode1().'-'.\$faker->postcode2(),
            'address' => [
                'pref' => '5',
                'addr01' => \$faker->city,
                'addr02' => \$faker->streetAddress,
            ],
            'phone_number' => \$tel,
            'email' => \$email,
            'plain_password' => [
                'first' => \$password,
                'second' => \$password,
            ],
            'birth' => \$birth->format('Y-m-d'),
            'sex' => 1,
            'job' => 1,
            'status' => 1,
            'point' => 0,
            '_token' => 'dummy',
        ];

        return \$form;
    }

    public function testOnRenderAdminCustomerBefore_Edit()
    {
        \$Customer = \$this->createMailMagazineCustomer();

        \$this->client->request('GET',
            \$this->generateUrl('admin_customer_new', ['id' => \$Customer->getId()])
        );

        \$this->assertTrue(\$this->client->getResponse()->isSuccessful());
    }

    public function testOnRenderAdminCustomerBefore_EditPost()
    {
        \$Customer = \$this->createMailMagazineCustomer();
        \$updateFlg = Constant::DISABLED;
        \$form = \$this->createFormData();
        \$form = array_merge(\$form, [
            'mailmaga_flg' => \$updateFlg,
        ]);
        \$this->client->request('POST',
            \$this->generateUrl('admin_customer_edit', ['id' => \$Customer->getId()]),
            [
                'admin_customer' => \$form,
            ]
        );
        \$this->entityManager->clear();
        \$Customer = \$this->customerRepository->find(\$Customer->getId());
        \$this->actual = \$Customer->getMailmagaFlg();
        \$this->expected = \$updateFlg;
        \$this->verify();
    }

    public function testOnRenderAdminCustomerBefore_EditPost_WithInvalidPostData()
    {
        \$Customer = \$this->createMailMagazineCustomer();
        \$updateFlg = Constant::DISABLED;
        \$form = \$this->createFormData();
        \$form = array_merge(\$form, [
            // バリデーションエラーになるケース
            'kana' => ['kana01' => 'invalid'],
            'mailmaga_flg' => \$updateFlg,
        ]);
        \$this->client->request('POST',
            \$this->generateUrl('admin_customer_edit', ['id' => \$Customer->getId()]),
            [
                'admin_customer' => \$form,
            ]
        );
        \$this->entityManager->clear();
        \$Customer = \$this->customerRepository->find(\$Customer->getId());
        \$this->actual = \$Customer->getMailmagaFlg();
        \$this->expected = \$updateFlg;
        // 保存されない
        \$this->assertNotEquals(\$this->actual, \$this->expected);
    }
}
";
    }

    public function getTemplateName()
    {
        return "MailMagazine42/Tests/Web/Admin/MailMagazineEventOnRenderAdminCustomerBeforeTest.php";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "MailMagazine42/Tests/Web/Admin/MailMagazineEventOnRenderAdminCustomerBeforeTest.php", "/var/www/html/app/Plugin/MailMagazine42/Tests/Web/Admin/MailMagazineEventOnRenderAdminCustomerBeforeTest.php");
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
