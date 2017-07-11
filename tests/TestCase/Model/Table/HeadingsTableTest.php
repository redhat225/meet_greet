<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HeadingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HeadingsTable Test Case
 */
class HeadingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HeadingsTable
     */
    public $Headings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.headings',
        'app.root_headings',
        'app.articles',
        'app.article_illustrations',
        'app.articles_headings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Headings') ? [] : ['className' => HeadingsTable::class];
        $this->Headings = TableRegistry::get('Headings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Headings);

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
