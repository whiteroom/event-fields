<?php
namespace vendor\NewsEventfields\ViewHelpers;

/**
 * Use this view helper to validate email address.
 *
 * = Examples =
 *
 * <code title="Emailaddress validation for special use cases">
 *
 * <f:if condition="{newsItem.organizerEmail -> cx:validEmail()}">
 *
 *
 *
 *
 * @api
 */


 
class ValidEmailViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

		/**
	 * Return TRUE or FALSE
	 *
	 * @param string $email "valid email address"
	 * @return TRUE / FALSE
	 * @api
	 */
	public function render($email = NULL) {
		
		
		if ($email === NULL) {
			$email = $this->renderChildren();
		}
				

		switch (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			case TRUE:
				return 1;
				break;
				
			case FALSE:
				return 0;
				break;
				
			default:
				return $email;
		}
	}

}
?>