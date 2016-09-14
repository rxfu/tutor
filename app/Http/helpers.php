<?php

if (!function_exists('render_form_select')) {
	function render_form_select($name, $values, $text = null, $default = null) {
		if (is_null($text)) {
			$text = $values;
		} elseif (is_string($text)) {
			$default = $text;
			$text    = $values;
		}

		$form = '<select name="' . $name . '" id="' . $name . '" class="form-control">';

		foreach ($values as $key => $value) {
			$form .= '<option value="' . $value . '"';

			if (!is_null($default) && $value === $default) {
				$form .= ' selected';
			}

			$form .= '>' . $text[$key] . '</option>';
		}

		$form .= '</select>';

		return $form;
	}
}