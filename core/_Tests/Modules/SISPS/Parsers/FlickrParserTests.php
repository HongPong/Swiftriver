<?php
namespace Swiftriver\Core;
require_once 'PHPUnit/Framework.php';
class FlickrParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Include the SiSPS Setup
     */
    protected function setUp() {
        include_once(dirname(__FILE__)."/../../../../Setup.php");
    }

    public function test()
    {
        $parser = new Modules\SiSPS\Parsers\FlickrParser();

        $channel = new ObjectModel\Channel();

        $channel->type = "Flickr";

        $channel->subType = "Tag Search";

        $channel->parameters = array ("tags" => "fun happy");

        $results = $parser->GetAndParse($channel);
    }

}
?>
