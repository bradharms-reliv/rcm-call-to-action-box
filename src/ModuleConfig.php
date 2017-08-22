<?php

namespace RcmCallToActionBox;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfig
{
    /**
     * __invoke
     *
     * @return array
     */
    public function __invoke()
    {
        $config = include __DIR__ . '/../config/module.config.php';

        return [
            'rcmPlugin' => $config['rcmPlugin'],
            'asset_manager' => $config['asset_manager'],
        ];
    }
}
