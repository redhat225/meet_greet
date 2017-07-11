<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArticleIllustrationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArticleIllustrationsTable Test Case
 */
class ArticleIllustrationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArticleIllustrationsTable
     */
    public $ArticleIllustrations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.article_illustrations',
        'app.articles',
        'app.headings',
        'app.root_headings',
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
        $config = TableRegistry::exists('ArticleIllustrations') ? [] : ['className' => ArticleIllustrationsTable::class];
        $this->ArticleIllustrations = TableRegistry::get('ArticleIllustrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ArticleIllustrations);

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
