<?php
/***************************************************************************
 *   Copyright (C) by Evgeny M. Stepanov & Georgiy T. Kutsurua             *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU Lesser General Public License as        *
 *   published by the Free Software Foundation; either version 3 of the    *
 *   License, or (at your option) any later version.                       *
 ***************************************************************************/

/**
 * @package UI\Widget
 */
class WFormElement extends WPropertiesElement
{

	protected $tplPrefix = 'form';

	/**
	 * @static
	 * @param null $name
	 * @return WFormElement
	 */
	public static function create($name=null)
	{
		return new static($name);
	}

	public function __construct($name = null)
	{
		parent::__construct($name);
		$this->model->
			set('required', '')->
			set('disabled', '')->
			set('label', '')->
			set('name', $this->name)->
			set('message', '');
	}

	/**
	 * @param $name
	 * @return WFormElement
	 */
	public function setName($name)
	{
		$this->model->set('name', $name);

		return $this;
	}

	/**
	 *
	 * @param boolean $required
	 * @return WFormElement
	 */
	public function setRequired($required = true)
	{
		$this->model->set('required', $required);
		return $this;
	}

	/**
	 *
	 * @param boolean $disabled
	 * @return WFormElement
	 */
	public function setDisabled($disabled = true)
	{
		$this->model->set('disabled', $disabled);
		return $this;
	}
	/**
	 *
	 * @param string $label
	 * @return WFormElement
	 */
	public function setLabel($label)
	{
		$this->model->set('label', $label);
		return $this;
	}

	/**
	 *
	 * @param mixed $value
	 * @return WFormElement
	 */
	public function setMessage($value)
	{
		$this->model->set('message', $value);
		return $this;
	}
}