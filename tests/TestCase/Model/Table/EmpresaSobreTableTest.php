<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresaSobreTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresaSobreTable Test Case
 */
class EmpresaSobreTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresaSobreTable
     */
    public $EmpresaSobre;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empresa_sobre',
        'app.situations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('EmpresaSobre') ? [] : ['className' => EmpresaSobreTable::class];
        $this->EmpresaSobre = TableRegistry::getTableLocator()->get('EmpresaSobre', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmpresaSobre);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
