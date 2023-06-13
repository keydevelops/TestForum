<?php

namespace XF\Install\Upgrade;

class Version2021071 extends AbstractUpgrade
{
	public function getVersionName()
	{
		return '2.2.10 Patch 1';
	}

	public function step1()
	{
		$this->insertUpgradeJob('upgradePatch2210', 'XF:Upgrade\\Patch2210', []);
	}
}