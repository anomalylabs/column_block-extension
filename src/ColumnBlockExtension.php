<?php namespace Anomaly\ColumnBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\ColumnBlockExtension\Block\BlockModel;

/**
 * Class ColumnBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class ColumnBlockExtension extends BlockExtension
{

    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'layout';

    /**
     * This extension provides a column
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.column';

    /**
     * The content view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.column_block::content';

    /**
     * The block wrapper.
     *
     * @var string
     */
    protected $wrapper = 'anomaly.extension.column_block::wrapper';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
