<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresaSobsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresaSobsTable Test Case
 */
class EmpresaSobsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresaSobsTable
     */
    public $EmpresaSobs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empresa_sobs',
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
        $config = TableRegistry::getTableLocator()->exists('EmpresaSobs') ? [] : ['className' => EmpresaSobsTable::class];
        $this->EmpresaSobs = TableRegistry::getTableLocator()->get('EmpresaSobs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmpresaSobs);

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
