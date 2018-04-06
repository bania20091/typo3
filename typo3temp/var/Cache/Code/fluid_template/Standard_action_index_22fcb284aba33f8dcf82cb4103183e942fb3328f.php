<?php

class Standard_action_index_22fcb284aba33f8dcf82cb4103183e942fb3328f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
<div class="media media-new-content-element-wizard">
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
			<div class="media-left">
				<input type="radio" name="tempB" value="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
$array10 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardKey', $array10);
};
$arguments7 = array();
$arguments7['value'] = NULL;
$arguments7['keepQuotes'] = false;
$arguments7['encoding'] = 'UTF-8';
$arguments7['doubleEncode'] = true;
$value9 = ($arguments7['value'] !== NULL ? $arguments7['value'] : $renderChildrenClosure8());

$output6 .= !is_string($value9) && !(is_object($value9) && method_exists($value9, '__toString')) ? $value9 : htmlspecialchars($value9, ($arguments7['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments7['encoding'], $arguments7['doubleEncode']);

$output6 .= '" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure12 = function() use ($renderingContext, $self) {
$array14 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardOnClick', $array14);
};
$arguments11 = array();
$arguments11['value'] = NULL;
$arguments11['keepQuotes'] = false;
$arguments11['encoding'] = 'UTF-8';
$arguments11['doubleEncode'] = true;
$value13 = ($arguments11['value'] !== NULL ? $arguments11['value'] : $renderChildrenClosure12());

$output6 .= !is_string($value13) && !(is_object($value13) && method_exists($value13, '__toString')) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments11['encoding'], $arguments11['doubleEncode']);

$output6 .= '"/>
			</div>
		';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('onClickEvent', $array4);
$array3['1'] = ' == \'\'';

$expression5 = function($context) {return (($context["node0"]) == '');};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
		<a href="#" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
$array24 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array24);
};
$arguments21 = array();
$arguments21['value'] = NULL;
$arguments21['keepQuotes'] = false;
$arguments21['encoding'] = 'UTF-8';
$arguments21['doubleEncode'] = true;
$value23 = ($arguments21['value'] !== NULL ? $arguments21['value'] : $renderChildrenClosure22());

$output20 .= !is_string($value23) && !(is_object($value23) && method_exists($value23, '__toString')) ? $value23 : htmlspecialchars($value23, ($arguments21['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments21['encoding'], $arguments21['doubleEncode']);

$output20 .= '">
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
$array27 = array (
);return $renderingContext->getVariableProvider()->getByPath('content', $array27);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output20 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output20 .= '
		</a>
		';
return $output20;
};
$arguments15 = array();
$arguments15['then'] = NULL;
$arguments15['else'] = NULL;
$arguments15['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array17 = array();
$array18 = array (
);$array17['0'] = $renderingContext->getVariableProvider()->getByPath('content', $array18);

$expression19 = function($context) {return ($context["node0"]);};
$arguments15['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression19(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)
					),
					$renderingContext
				);
$arguments15['__thenClosure'] = $renderChildrenClosure16;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '
		<div class="media-left">
			<a href="#" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$array31 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array31);
};
$arguments28 = array();
$arguments28['value'] = NULL;
$arguments28['keepQuotes'] = false;
$arguments28['encoding'] = 'UTF-8';
$arguments28['doubleEncode'] = true;
$value30 = ($arguments28['value'] !== NULL ? $arguments28['value'] : $renderChildrenClosure29());

$output0 .= !is_string($value30) && !(is_object($value30) && method_exists($value30, '__toString')) ? $value30 : htmlspecialchars($value30, ($arguments28['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments28['encoding'], $arguments28['doubleEncode']);

$output0 .= '">
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure33 = function() use ($renderingContext, $self) {
$array34 = array (
);return $renderingContext->getVariableProvider()->getByPath('icon', $array34);
};
$arguments32 = array();
$arguments32['value'] = NULL;

$output0 .= isset($arguments32['value']) ? $arguments32['value'] : $renderChildrenClosure33();

$output0 .= '
			</a>
		</div>
		<div class="media-body">
			<a href="#" onclick="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure36 = function() use ($renderingContext, $self) {
$array38 = array (
);return $renderingContext->getVariableProvider()->getByPath('aOnClick', $array38);
};
$arguments35 = array();
$arguments35['value'] = NULL;
$arguments35['keepQuotes'] = false;
$arguments35['encoding'] = 'UTF-8';
$arguments35['doubleEncode'] = true;
$value37 = ($arguments35['value'] !== NULL ? $arguments35['value'] : $renderChildrenClosure36());

$output0 .= !is_string($value37) && !(is_object($value37) && method_exists($value37, '__toString')) ? $value37 : htmlspecialchars($value37, ($arguments35['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments35['encoding'], $arguments35['doubleEncode']);

$output0 .= '">
				<strong>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
$array42 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.title', $array42);
};
$arguments39 = array();
$arguments39['value'] = NULL;
$arguments39['keepQuotes'] = false;
$arguments39['encoding'] = 'UTF-8';
$arguments39['doubleEncode'] = true;
$value41 = ($arguments39['value'] !== NULL ? $arguments39['value'] : $renderChildrenClosure40());

$output0 .= !is_string($value41) && !(is_object($value41) && method_exists($value41, '__toString')) ? $value41 : htmlspecialchars($value41, ($arguments39['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments39['encoding'], $arguments39['doubleEncode']);

$output0 .= '</strong>
				<br />
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure47 = function() use ($renderingContext, $self) {
$array48 = array (
);return $renderingContext->getVariableProvider()->getByPath('wizardInformation.description', $array48);
};
$arguments46 = array();
$arguments46['value'] = NULL;
$renderChildrenClosure47 = $arguments46['value'] ? function() use ($arguments46) { return $arguments46['value']; } : $renderChildrenClosure47;return TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);
};
$arguments43 = array();
$arguments43['value'] = NULL;
$arguments43['keepQuotes'] = false;
$arguments43['encoding'] = 'UTF-8';
$arguments43['doubleEncode'] = true;
$value45 = ($arguments43['value'] !== NULL ? $arguments43['value'] : $renderChildrenClosure44());

$output0 .= !is_string($value45) && !(is_object($value45) && method_exists($value45, '__toString')) ? $value45 : htmlspecialchars($value45, ($arguments43['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments43['encoding'], $arguments43['doubleEncode']);

$output0 .= '
			</a>
		</div>
</div>

';

return $output0;
}


}
#