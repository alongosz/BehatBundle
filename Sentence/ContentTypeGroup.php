<?php
/**
 * File containing the ContentTypeGroup sentences interface for BehatBundle.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

namespace EzSystems\BehatBundle\Sentence;

use Behat\Gherkin\Node\TableNode;

interface ContentTypeGroup
{
    /**
     * @When /^I create a Content Type Group with identifier "(?P<identifier>[^"]*)"$/
     */
    public function iCreateContentTypeGroup( $identifier );

    /**
     * @When /^I read Content Type Group with identifier "(?P<identifier>[^"]*)"$/
     */
    public function iReadContentTypeGroup( $identifier );

    /**
     * @When /^I read Content Type Group with id "(?<id>[^"]+)"$/
     */
    public function iReadContentTypeGroupWithId( $id );

    /**
     * @When /^I read Content Type Groups list$/
     */
    public function iReadContentTypeGroupsList();

    /**
     * @When /^I update Content Type Group with identifier "(?P<actualIdentifier>[^"]*)" to "(?P<newIdentifier>[^"]*)"$/
     */
    public function iUpdateContentTypeGroupIdentifier( $actualIdentifier, $newIdentifier );

    /**
     * @When /^I delete Content Type Group with identifier "(?P<identifier>[^"]*)"$/
     */
    public function iDeleteContentTypeGroup( $identifier );

    /**
     * @Then /^I see (?:a |)Content Type Group with identifier "(?P<identifier>[^"]*)"$/
     * @Then /^response contains (?:a |)Content Type Group with identifier "(?P<identifier>[^"]*)"$/
     */
    public function iSeeContentTypeGroup( $identifier );

    /**
     * @Then /^I see the following Content Type Groups:$/
     */
    public function iSeeTheFollowingContentTypeGroups( TableNode $groups );
}
