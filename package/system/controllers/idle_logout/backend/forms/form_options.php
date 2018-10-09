<?php

	class formIdleLogoutOptions extends cmsForm
	{

		public function init()
		{
			return [

				[
					'type'   => 'fieldset',
					'title'  => LANG_OPTIONS,
					'childs' => [

						new fieldCheckbox('is_enabled', [
							'title' => LANG_IDLE_LOGOUT_CFG_IS_ENABLED,
						]),

						new fieldString('url', [
							'title'   => LANG_IDLE_LOGOUT_CFG_URL,
							'hint'    => LANG_IDLE_LOGOUT_CFG_URL_HINT,
							'default' => '/auth/logout',
						]),

						new fieldNumber('time_exp', [
							'title'   => LANG_IDLE_LOGOUT_CFG_TIME_EXP,
							'hint'    => LANG_IDLE_LOGOUT_CFG_TIME_EXP_HINT,
							'default' => 5,
							'rules'   => [
								['required'],
								['min', 1],
							],
						]),
					],
				],
			];
		}
	}
