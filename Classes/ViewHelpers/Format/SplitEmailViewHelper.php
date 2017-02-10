<?php
namespace vendor\NewsEventfields\ViewHelpers\Format;

/**
 * Use this view helper to convert an email string to split tokens using icomoon.
 *
 * = Examples =
 *
 * <code title="Email split for special use cases">
 * <cx:format.splitEmail email="test@mail.org">Some text here</cx:format.splitEmail>
 * </code>
 * <output>
 * test(at)mail(dot)org
 * </output>
 *
 * <code title="Email split for special use cases">
 * <cx:format.splitEmail>test@mail.org</cx:format.splitEmail>
 * </code>
 * <output>
 * test<span class="icon-at-icon"></span>mail<span class="icon-dot-icon"></span>org
 * </output>
 *
 * @api
 */


 
class SplitEmailViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

		/**
	 * Render the converted text
	 *
	 * @param string $email "valid email address"
	 * @return string converted email
	 * @api
	 */
	public function render($email = NULL) {
		
		
		if ($email === NULL) {
			$email = $this->renderChildren();
		}
				

		switch (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			case TRUE:
			
		        $parts = explode("@", $email);
		        $domain = array_pop($parts);
		        $name = implode("@",$parts);
		        
		        $domainParts = explode(".", $domain);
		        $countryCode = array_pop($domainParts);
		        $domainAndSubdomain = implode(".",$domainParts);
		        
				return $name. '<span class="icon-at-icon"></span>' .$domainAndSubdomain . '<span class="icon-dot-icon"></span>' .$countryCode;
				break;

				
			case FALSE:
			
				return str_replace('.', '<span class="icon-dot-icon"></span>', $email);
			default:
				return $email;
		}
	}
	




}
?>