<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {

	/** @var Nette\Database\Context */
	private $database;

	public function __construct(Nette\Database\Context $database) {
		$this->database = $database;
	}

	public function beforeRender() {
		if (!$this->user->isLoggedIn()) {
			$this->redirect('Sign:in');
		}
	}

	public function renderDefault() {
		$this->template->invoices = $this->database->table('invoices')
												   ->where('user_id', $this->getUser()->getId())
												   ->order('created DESC');

		$this->template->costs = $this->database->table('invoices')
												->where('user_id', $this->getUser()->getId())
												->order('created ASC');

		$this->template->expiringInvoices = $this->database->table('invoices')
														   ->where('user_id', $this->getUser()->getId())
														   ->order('due ASC')
														   ->limit(5);
	}
}
