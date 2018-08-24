<?php namespace Anomaly\FaqsBlockExtension;

use Anomaly\FaqsBlockExtension\Block\BlockModel;
use Anomaly\FaqsBlockExtension\Faq\FaqModel;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\FaqsBlock\FaqsBlockBlocksEntryModel;
use Anomaly\Streams\Platform\Model\FaqsBlock\FaqsBlockFaqsEntryModel;

/**
 * Class FaqsBlockExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class FaqsBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        FaqsBlockBlocksEntryModel::class => BlockModel::class,
        FaqsBlockFaqsEntryModel::class   => FaqModel::class,
    ];

}
