<?php

	class onIdleLogoutEngineStart extends cmsAction
	{

		public function run()
		{
			if (!cmsUser::isLogged()) {
				return false;
			}

			$options  = cmsController::loadOptions('idle_logout');

			if (!$options['is_enabled']) {
				return false;
			}

			$template = cmsTemplate::getInstance();

			$template->addCSS('templates/' . $template->name . '/controllers/idle_logout/assets/plugins/sweetalert2/sweetalert2.min.css');

			$template->addJS('templates/' . $template->name . '/controllers/idle_logout/assets/plugins/idle-logout/idle-logout.min.js');
			$template->addJS('templates/' . $template->name . '/controllers/idle_logout/assets/plugins/sweetalert2/sweetalert2.all.min.js');
			$template->addJS('templates/' . $template->name . '/controllers/idle_logout/assets/plugins/cookie/cookie.min.js');
			$template->addJS('templates/' . $template->name . '/controllers/idle_logout/assets/js/init.min.js');

			$template->addHead('<meta name="idle_time" content="' . $options['time_exp'] . '" url="' . $options['url'] . '">');

			return true;
		}
	}
