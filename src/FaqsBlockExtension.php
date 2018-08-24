<?php namespace Anomaly\FaqsBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\FaqsBlockExtension\Block\BlockModel;

/**
 * Class FaqsBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class FaqsBlockExtension extends BlockExtension
{

    /**
     * This extension provides a FAQs
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.faqs';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.faqs_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
