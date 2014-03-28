<?php

namespace App\Presenters;

use Nette,
	App\Model;
use Nette\Mail\Message;
use Nette\Mail\SendmailMailer;


/**
 * Invoice presenter.
 */
class InvoicePresenter extends BasePresenter {

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

	public function renderShow($invoiceId) {
		$invoice = $this->database->table('invoices')->get($invoiceId);
		
		if (!$invoice) {
			$this->error('Page not found.');
		}

		$this->template->invoice = $invoice;
	}

	/**
	 * Invoice form factory.
	 * @return Nette\Application\UI\Form
	 */
	protected function createComponentInvoiceForm() {
		$form = new Nette\Application\UI\Form;
		$form->addText('title', 'Title:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Title')
			 ->setRequired();
		$form->addText('company', 'Company:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Company')
			 ->setRequired();
		$form->addText('contact', 'Contact:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Contact');
		$form->addText('employee', 'Employee:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Employee');
		$form->addText('created', 'Created:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Created')
			 ->setRequired();
		$form->addText('delivered', 'Delivered:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Delivered')
			 ->setRequired();
		$form->addText('due', 'Due:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Due')
			 ->setRequired();
		$form->addText('bank_account', 'Bank Account:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Bank Account');
		$form->addText('iban', 'IBAN:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'IBAN');
		$form->addText('swift', 'SWIFT:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'SWIFT');
		$form->addText('constant_symbol', 'Constant symbol:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Constant symbol');
		$form->addText('variable_symbol', 'Variable symbol:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Variable symbol');
		$form->addText('specific_number', 'Specific number:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Specific number');
		$form->addText('total_value', 'Total value:')
			 ->setAttribute('class', 'form-control')
			 ->setAttribute('placeholder', 'Total value')
			 ->setRequired();
		$form->addTextArea('note', 'Note:')
			 ->setAttribute('class', 'form-control');
		$form->addSubmit('send', 'Save')
			 ->setAttribute('class', 'btn btn-primary');

		$form->onSuccess[] = $this->invoiceFormSucceeded;

		return $form;
	}

	public function invoiceFormSucceeded($form) {
		if (!$this->user->isLoggedIn()) {
			$this->error('You must be logged in for creating or editing posts.');
		}

		$values = $form->getValues();

		$userId = $this->getUser()->getId();
		$invoiceId = $this->getParameter('invoiceId');

		if ($invoiceId) {
			$invoice = $this->database->table('invoices')->get($invoiceId);
			$invoice->update($values);
		} else {	
			$this->database->table('invoices')->insert(array(
				'user_id' => $userId,
				'title' => $values->title,
				'company' => $values->company,
				'contact' => $values->contact,
				'employee' => $values->employee,
				'created' => date('Y-m-d', strtotime($values->created)),
				'delivered' => date('Y-m-d', strtotime($values->delivered)),
				'due' => date('Y-m-d', strtotime($values->due)),
				'bank_account' => $values->bank_account,
				'iban' => $values->iban,
				'swift' => $values->swift,
				'constant_symbol' => $values->constant_symbol,
				'variable_symbol' => $values->variable_symbol,
				'specific_number' => $values->specific_number,
				'total_value' => $values->total_value,
				'note' => $values->note,
			));
		}
		
		$this->flashMessage("The invoice has been successfully saved.", 'success');
		$this->redirect('Homepage:');
	}

	public function actionCreate() {
		if (!$this->user->isLoggedIn()) {
			$this->redirect('Sign:in');
		}
	}

	public function actionEdit($invoiceId) {
		if (!$this->user->isLoggedIn()) {
			$this->redirect('Sign:in');
		}

		$invoice = $this->database->table('invoices')->get($invoiceId);
		if (!$invoice) {
			$this->error('Invoice was not find.');
		}
		$this['invoiceForm']->setDefaults($invoice->toArray());
		$this->template->invoiceId = $invoiceId;
	}

	public function sendNotifications() {

		$users = $this->database->table('users')->get();

		foreach ($users as $user) {

			$invoices = $this->database->table('invoices')
									   ->where('user_id', $user->id)
									   ->order('due ASC')
									   ->limit(5);

			$message = new Message;
			$message->setFrom('Invoice Reminder')
					->addTo($user->email);

			$template = $this->createTemplate();
			$template->setFile(__DIR__ . '/../templates/EmailNotifications/expiringInvoices.latte');
			$template->title = 'Message from Invoice Reminder';
			$template->invoices = $invoices;

			$message->setHtmlBody($template)
			->send();

			$mailer = new SendmailMailer;
			$mailer->send($message);
		}
	}

}
