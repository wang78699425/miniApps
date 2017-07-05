<?php
namespace admin\assets;

use dmstr\web\AdminLteAsset as baseAdminLteAsset;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class AdminLteAsset extends baseAdminLteAsset
{
    /**
     * 皮肤
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = 'skin-blue';
}
