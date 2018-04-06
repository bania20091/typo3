<?php

class Standard_action_index_39527cf0bf88ffc3fcd2547bd0154b1c11a1e31a extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure51 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['additionalAttributes'] = NULL;
$arguments56['data'] = NULL;
$arguments56['name'] = NULL;
$arguments56['value'] = NULL;
$arguments56['property'] = NULL;
$arguments56['class'] = NULL;
$arguments56['dir'] = NULL;
$arguments56['id'] = NULL;
$arguments56['lang'] = NULL;
$arguments56['style'] = NULL;
$arguments56['title'] = NULL;
$arguments56['accesskey'] = NULL;
$arguments56['tabindex'] = NULL;
$arguments56['onclick'] = NULL;
$arguments56['name'] = 'defValues';
$arguments56['value'] = '';

$output55 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
			<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure59 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments58 = array();
$arguments58['key'] = NULL;
$arguments58['id'] = NULL;
$arguments58['default'] = NULL;
$arguments58['htmlEscape'] = NULL;
$arguments58['arguments'] = NULL;
$arguments58['extensionName'] = NULL;
$arguments58['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output55 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext), ENT_QUOTES);

$output55 .= '</h1>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['key'] = NULL;
$arguments66['id'] = NULL;
$arguments66['default'] = NULL;
$arguments66['htmlEscape'] = NULL;
$arguments66['arguments'] = NULL;
$arguments66['extensionName'] = NULL;
$arguments66['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output65 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext), ENT_QUOTES);

$output65 .= '</h2>
			';
return $output65;
};
$arguments60 = array();
$arguments60['then'] = NULL;
$arguments60['else'] = NULL;
$arguments60['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array62 = array();
$array63 = array (
);$array62['0'] = $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array63);
$array62['1'] = ' == \'\'';

$expression64 = function($context) {return (($context["node0"]) == '');};
$arguments60['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression64(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)
					),
					$renderingContext
				);
$arguments60['__thenClosure'] = $renderChildrenClosure61;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output55 .= '
			<div>
				<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['key'] = NULL;
$arguments68['id'] = NULL;
$arguments68['default'] = NULL;
$arguments68['htmlEscape'] = NULL;
$arguments68['arguments'] = NULL;
$arguments68['extensionName'] = NULL;
$arguments68['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:sel1';

$output55 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext), ENT_QUOTES);

$output55 .= '</p>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
$array72 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array72);
};
$arguments70 = array();
$arguments70['value'] = NULL;

$output55 .= isset($arguments70['value']) ? $arguments70['value'] : $renderChildrenClosure71();

$output55 .= '
			</div>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure74 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
				<div><a name="sel2"></a></div>
				<h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments82 = array();
$arguments82['key'] = NULL;
$arguments82['id'] = NULL;
$arguments82['default'] = NULL;
$arguments82['htmlEscape'] = NULL;
$arguments82['arguments'] = NULL;
$arguments82['extensionName'] = NULL;
$arguments82['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);
};
$arguments79 = array();
$arguments79['value'] = NULL;
$arguments79['keepQuotes'] = false;
$arguments79['encoding'] = 'UTF-8';
$arguments79['doubleEncode'] = true;
$value81 = ($arguments79['value'] !== NULL ? $arguments79['value'] : $renderChildrenClosure80());

$output78 .= !is_string($value81) && !(is_object($value81) && method_exists($value81, '__toString')) ? $value81 : htmlspecialchars($value81, ($arguments79['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments79['encoding'], $arguments79['doubleEncode']);

$output78 .= '</h2>
				<div>
					<p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure85 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments87 = array();
$arguments87['key'] = NULL;
$arguments87['id'] = NULL;
$arguments87['default'] = NULL;
$arguments87['htmlEscape'] = NULL;
$arguments87['arguments'] = NULL;
$arguments87['extensionName'] = NULL;
$arguments87['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:sel2';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);
};
$arguments84 = array();
$arguments84['value'] = NULL;
$arguments84['keepQuotes'] = false;
$arguments84['encoding'] = 'UTF-8';
$arguments84['doubleEncode'] = true;
$value86 = ($arguments84['value'] !== NULL ? $arguments84['value'] : $renderChildrenClosure85());

$output78 .= !is_string($value86) && !(is_object($value86) && method_exists($value86, '__toString')) ? $value86 : htmlspecialchars($value86, ($arguments84['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments84['encoding'], $arguments84['doubleEncode']);

$output78 .= '</p>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure90 = function() use ($renderingContext, $self) {
$array91 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array91);
};
$arguments89 = array();
$arguments89['value'] = NULL;

$output78 .= isset($arguments89['value']) ? $arguments89['value'] : $renderChildrenClosure90();

$output78 .= '
				</div>
			';
return $output78;
};
$arguments73 = array();
$arguments73['then'] = NULL;
$arguments73['else'] = NULL;
$arguments73['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array75 = array();
$array76 = array (
);$array75['0'] = $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array76);
$array75['1'] = ' == \'\'';

$expression77 = function($context) {return (($context["node0"]) == '');};
$arguments73['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression77(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array75)
					),
					$renderingContext
				);
$arguments73['__thenClosure'] = $renderChildrenClosure74;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output55 .= '
		';
return $output55;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['action'] = NULL;
$arguments53['arguments'] = array (
);
$arguments53['controller'] = NULL;
$arguments53['extensionName'] = NULL;
$arguments53['pluginName'] = NULL;
$arguments53['pageUid'] = NULL;
$arguments53['object'] = NULL;
$arguments53['pageType'] = 0;
$arguments53['noCache'] = false;
$arguments53['noCacheHash'] = false;
$arguments53['section'] = '';
$arguments53['format'] = '';
$arguments53['additionalParams'] = array (
);
$arguments53['absolute'] = false;
$arguments53['addQueryString'] = false;
$arguments53['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments53['addQueryStringMethod'] = 'GET';
$arguments53['fieldNamePrefix'] = NULL;
$arguments53['actionUri'] = NULL;
$arguments53['objectName'] = NULL;
$arguments53['hiddenFieldClassName'] = NULL;
$arguments53['enctype'] = NULL;
$arguments53['method'] = NULL;
$arguments53['name'] = NULL;
$arguments53['onreset'] = NULL;
$arguments53['onsubmit'] = NULL;
$arguments53['target'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['action'] = '';
$arguments53['name'] = 'editForm';
$arguments53['id'] = 'NewContentElementController';

$output52 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output52 .= '
	';
return $output52;
};
$arguments50 = array();

$output49 .= '';

$output49 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output94 = '';

$output94 .= '
		<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments95 = array();
$arguments95['key'] = NULL;
$arguments95['id'] = NULL;
$arguments95['default'] = NULL;
$arguments95['htmlEscape'] = NULL;
$arguments95['arguments'] = NULL;
$arguments95['extensionName'] = NULL;
$arguments95['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output94 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext), ENT_QUOTES);

$output94 .= '</h1>
	';
return $output94;
};
$arguments92 = array();
$arguments92['if'] = NULL;

$output49 .= '';

$output49 .= '
';
return $output49;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array46 = array();
$array47 = array (
);$array46['0'] = $renderingContext->getVariableProvider()->getByPath('hasAccess', $array47);

$expression48 = function($context) {return ($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression48(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array46)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['additionalAttributes'] = NULL;
$arguments7['data'] = NULL;
$arguments7['name'] = NULL;
$arguments7['value'] = NULL;
$arguments7['property'] = NULL;
$arguments7['class'] = NULL;
$arguments7['dir'] = NULL;
$arguments7['id'] = NULL;
$arguments7['lang'] = NULL;
$arguments7['style'] = NULL;
$arguments7['title'] = NULL;
$arguments7['accesskey'] = NULL;
$arguments7['tabindex'] = NULL;
$arguments7['onclick'] = NULL;
$arguments7['name'] = 'defValues';
$arguments7['value'] = '';

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output6 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext), ENT_QUOTES);

$output6 .= '</h1>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$output16 = '';

$output16 .= '
				<h2>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['key'] = NULL;
$arguments17['id'] = NULL;
$arguments17['default'] = NULL;
$arguments17['htmlEscape'] = NULL;
$arguments17['arguments'] = NULL;
$arguments17['extensionName'] = NULL;
$arguments17['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:1_selectType';

$output16 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext), ENT_QUOTES);

$output16 .= '</h2>
			';
return $output16;
};
$arguments11 = array();
$arguments11['then'] = NULL;
$arguments11['else'] = NULL;
$arguments11['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array13 = array();
$array14 = array (
);$array13['0'] = $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array14);
$array13['1'] = ' == \'\'';

$expression15 = function($context) {return (($context["node0"]) == '');};
$arguments11['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression15(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)
					),
					$renderingContext
				);
$arguments11['__thenClosure'] = $renderChildrenClosure12;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output6 .= '
			<div>
				<p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments19 = array();
$arguments19['key'] = NULL;
$arguments19['id'] = NULL;
$arguments19['default'] = NULL;
$arguments19['htmlEscape'] = NULL;
$arguments19['arguments'] = NULL;
$arguments19['extensionName'] = NULL;
$arguments19['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:sel1';

$output6 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext), ENT_QUOTES);

$output6 .= '</p>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array23 = array (
);return $renderingContext->getVariableProvider()->getByPath('renderedTabs', $array23);
};
$arguments21 = array();
$arguments21['value'] = NULL;

$output6 .= isset($arguments21['value']) ? $arguments21['value'] : $renderChildrenClosure22();

$output6 .= '
			</div>

			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output29 = '';

$output29 .= '
				<div><a name="sel2"></a></div>
				<h2>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['key'] = NULL;
$arguments33['id'] = NULL;
$arguments33['default'] = NULL;
$arguments33['htmlEscape'] = NULL;
$arguments33['arguments'] = NULL;
$arguments33['extensionName'] = NULL;
$arguments33['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:2_selectPosition';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);
};
$arguments30 = array();
$arguments30['value'] = NULL;
$arguments30['keepQuotes'] = false;
$arguments30['encoding'] = 'UTF-8';
$arguments30['doubleEncode'] = true;
$value32 = ($arguments30['value'] !== NULL ? $arguments30['value'] : $renderChildrenClosure31());

$output29 .= !is_string($value32) && !(is_object($value32) && method_exists($value32, '__toString')) ? $value32 : htmlspecialchars($value32, ($arguments30['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments30['encoding'], $arguments30['doubleEncode']);

$output29 .= '</h2>
				<div>
					<p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments38 = array();
$arguments38['key'] = NULL;
$arguments38['id'] = NULL;
$arguments38['default'] = NULL;
$arguments38['htmlEscape'] = NULL;
$arguments38['arguments'] = NULL;
$arguments38['extensionName'] = NULL;
$arguments38['key'] = 'LLL:EXT:backend/Resources/Private/Language/locallang_db_new_content_el.xlf:sel2';
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = 'UTF-8';
$arguments35['doubleEncode'] = true;
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output29 .= !is_string($value37) && !(is_object($value37) && method_exists($value37, '__toString')) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments35['encoding'], $arguments35['doubleEncode']);

$output29 .= '</p>
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure41 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('posMap', $array42);
};
$arguments40 = array();
$arguments40['value'] = NULL;

$output29 .= isset($arguments40['value']) ? $arguments40['value'] : $renderChildrenClosure41();

$output29 .= '
				</div>
			';
return $output29;
};
$arguments24 = array();
$arguments24['then'] = NULL;
$arguments24['else'] = NULL;
$arguments24['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array26 = array();
$array27 = array (
);$array26['0'] = $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array27);
$array26['1'] = ' == \'\'';

$expression28 = function($context) {return (($context["node0"]) == '');};
$arguments24['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression28(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)
					),
					$renderingContext
				);
$arguments24['__thenClosure'] = $renderChildrenClosure25;

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output6 .= '
		';
return $output6;
};
$arguments4 = array();
$arguments4['additionalAttributes'] = NULL;
$arguments4['data'] = NULL;
$arguments4['action'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['controller'] = NULL;
$arguments4['extensionName'] = NULL;
$arguments4['pluginName'] = NULL;
$arguments4['pageUid'] = NULL;
$arguments4['object'] = NULL;
$arguments4['pageType'] = 0;
$arguments4['noCache'] = false;
$arguments4['noCacheHash'] = false;
$arguments4['section'] = '';
$arguments4['format'] = '';
$arguments4['additionalParams'] = array (
);
$arguments4['absolute'] = false;
$arguments4['addQueryString'] = false;
$arguments4['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments4['addQueryStringMethod'] = 'GET';
$arguments4['fieldNamePrefix'] = NULL;
$arguments4['actionUri'] = NULL;
$arguments4['objectName'] = NULL;
$arguments4['hiddenFieldClassName'] = NULL;
$arguments4['enctype'] = NULL;
$arguments4['method'] = NULL;
$arguments4['name'] = NULL;
$arguments4['onreset'] = NULL;
$arguments4['onsubmit'] = NULL;
$arguments4['target'] = NULL;
$arguments4['class'] = NULL;
$arguments4['dir'] = NULL;
$arguments4['id'] = NULL;
$arguments4['lang'] = NULL;
$arguments4['style'] = NULL;
$arguments4['title'] = NULL;
$arguments4['accesskey'] = NULL;
$arguments4['tabindex'] = NULL;
$arguments4['onclick'] = NULL;
$arguments4['action'] = '';
$arguments4['name'] = 'editForm';
$arguments4['id'] = 'NewContentElementController';

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
	';
return $output3;
};
$arguments1['__elseClosures'][] = function() use ($renderingContext, $self) {
$output43 = '';

$output43 .= '
		<h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments44 = array();
$arguments44['key'] = NULL;
$arguments44['id'] = NULL;
$arguments44['default'] = NULL;
$arguments44['htmlEscape'] = NULL;
$arguments44['arguments'] = NULL;
$arguments44['extensionName'] = NULL;
$arguments44['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_misc.xlf:newContentElement';

$output43 .= htmlspecialchars(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext), ENT_QUOTES);

$output43 .= '</h1>
	';
return $output43;
};

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

return $output0;
}


}
#