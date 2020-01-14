<?php

class MontlewisTemplateFilter_SetClass extends PerchTemplateFilter
{
	public function filterAfterProcessing($value, $valueIsMarkup = true)
	{
		if ($this->Tag->setclass) {
			$setclass = $this->Tag->setclass;
			$settag = $this->Tag->settag;
			$replace = str_replace('<'.$settag.'>', '<'.$settag.' class="'.$setclass.'">', $value);

			return $replace;
		}
		else
		{
			return $value;
		}
	}
}
PerchSystem::register_template_filter('setclass', 'MontlewisTemplateFilter_SetClass');
// <perch:content id="additionalDescHTML" html filter="setclass" setclass="list-marked" settag="ul" />