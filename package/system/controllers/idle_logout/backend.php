<?php

	class backendIdle_logout extends cmsBackend
	{
		public $useDefaultOptionsAction = true;

		public function actionIndex()
		{
			$this->redirectToAction('options');
		}
	}
