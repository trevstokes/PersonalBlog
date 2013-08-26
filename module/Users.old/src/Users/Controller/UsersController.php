<?php
namespace Users\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Authentication\AuthenticationService;

class UsersController extends AbstractActionController
{
	protected $usersTable;
	
    public function indexAction()
    {
        return new ViewModel(array(
            'albums' => $this->getUsersTable()->fetchAll(),
        ));
    }
	
    public function getUsersTable()
    {
        if (!$this->usersTable) {
            $sm = $this->getServiceLocator();
            $this->usersTable = $sm->get('Users\Model\UsersTable');
        }
        return $this->usersTable;
    }
	
	public function authAction()
	{
		$auth = new AuthenticationService();
		$authAdapter = new My\Auth\Adapter($username, $password);
		$result = $auth->authenticate($authAdapter);
		if (!$result->isValid()) {
			foreach ($result->getMessages() as $message)
			{
				echo "$message\n";
			}
		} 
		else {
			// Authentication succeeded; the identity ($username) is stored
			// in the session
			// $result->getIdentity() === $auth->getIdentity()
			// $result->getIdentity() === $username
		}
	}
}