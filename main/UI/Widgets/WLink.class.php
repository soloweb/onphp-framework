<?php
/***************************************************************************
 *   Copyright (C) by Evgeny M. Stepanov                                   *
 *                                                                         *
 *   This program is free software; you can redistribute it and/or modify  *
 *   it under the terms of the GNU Lesser General Public License as        *
 *   published by the Free Software Foundation; either version 3 of the    *
 *   License, or (at your option) any later version.                       *
 ***************************************************************************/


	class WLink extends WPropertiesElement
	{
		protected $tplName = 'hyperlink';

		/**
		 * @static
		 * @param null $name
		 * @return WLink
		 */
		public static function create($name=null)
		{
			return new static($name);
		}

		public function __construct($name = null)
		{
			parent::__construct($name);
		}
	}

