<?php namespace Anomaly\FaqsBlockExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\FaqsBlockExtension\Block\Contract\BlockRepositoryInterface;
use Anomaly\FaqsBlockExtension\Block\BlockRepository;
use Anomaly\Streams\Platform\Model\FaqsBlock\FaqsBlockBlocksEntryModel;
use Anomaly\FaqsBlockExtension\Block\BlockModel;
use Anomaly\FaqsBlockExtension\Faq\Contract\FaqRepositoryInterface;
use Anomaly\FaqsBlockExtension\Faq\FaqRepository;
use Anomaly\Streams\Platform\Model\FaqsBlock\FaqsBlockFaqsEntryModel;
use Anomaly\FaqsBlockExtension\Faq\FaqModel;
use Illuminate\Routing\Router;

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
        FaqsBlockFaqsEntryModel::class => FaqModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        BlockRepositoryInterface::class => BlockRepository::class,
        FaqRepositoryInterface::class => FaqRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
