<?php

/**
 * default actions.
 *
 * @package    Beacon
 * @subpackage default
 * @author     Graham Christensen
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class defaultActions extends sfActions {
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
		$c = new Criteria;
		$c->add(ConferencePeer::DELETED_AT, null, Criteria::ISNULL);
		$c->addAscendingOrderByColumn(ConferencePeer::START_DATE);
		$this->forms = ConferencePeer::doSelect($c);
    }

    public function executeModule(sfWebRequest $request) {
        // Heh.
    }

	public function executeError404(sfWebRequest $request) {
		// :)
	}
}
