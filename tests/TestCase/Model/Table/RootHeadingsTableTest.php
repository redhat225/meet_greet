<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RootHeadingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RootHeadingsTable Test Case
 */
class RootHeadingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RootHeadingsTable
     */
    public $RootHeadings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.root_headings',
        'app.headings',
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
        $config = TableRegistry::exists('RootHeadings') ? [] : ['className' => RootHeadingsTable::class];
        $this->RootHeadings = TableRegistry::get('RootHeadings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RootHeadings);

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
}
