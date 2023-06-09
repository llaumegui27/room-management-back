<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'vendor/autoload.php';
(require __DIR__.'/App_KernelProdContainer.php')->set(\ContainerBS89dhN\App_KernelProdContainer::class, null);
require __DIR__.'/ContainerBS89dhN/EntityManagerGhost6410e2e.php';
require __DIR__.'/ContainerBS89dhN/RequestPayloadValueResolverGhostDc06dea.php';
require __DIR__.'/ContainerBS89dhN/getValidator_WhenService.php';
require __DIR__.'/ContainerBS89dhN/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerBS89dhN/getValidator_NoSuspiciousCharactersService.php';
require __DIR__.'/ContainerBS89dhN/getValidator_ExpressionLanguageService.php';
require __DIR__.'/ContainerBS89dhN/getValidator_ExpressionService.php';
require __DIR__.'/ContainerBS89dhN/getValidator_EmailService.php';
require __DIR__.'/ContainerBS89dhN/getTwig_Runtime_SerializerService.php';
require __DIR__.'/ContainerBS89dhN/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerBS89dhN/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerBS89dhN/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerBS89dhN/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerBS89dhN/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerBS89dhN/getTwigService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_LocaleSwitcherService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_YmlService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_XliffService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_ResService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_QtService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_PoService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_PhpService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_MoService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_JsonService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_IniService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_DatService.php';
require __DIR__.'/ContainerBS89dhN/getTranslation_Loader_CsvService.php';
require __DIR__.'/ContainerBS89dhN/getTexter_TransportsService.php';
require __DIR__.'/ContainerBS89dhN/getSession_Handler_NativeService.php';
require __DIR__.'/ContainerBS89dhN/getSession_FactoryService.php';
require __DIR__.'/ContainerBS89dhN/getServicesResetterService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_UserValueResolverService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_SecurityTokenValueResolverService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerBS89dhN/getSecurity_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerBS89dhN/getSecrets_VaultService.php';
require __DIR__.'/ContainerBS89dhN/getRouting_LoaderService.php';
require __DIR__.'/ContainerBS89dhN/getPropertyInfo_SerializerExtractorService.php';
require __DIR__.'/ContainerBS89dhN/getNotifier_TransportFactory_NullService.php';
require __DIR__.'/ContainerBS89dhN/getMonolog_Logger_MessengerService.php';
require __DIR__.'/ContainerBS89dhN/getMonolog_Logger_MailerService.php';
require __DIR__.'/ContainerBS89dhN/getMonolog_Logger_DeprecationService.php';
require __DIR__.'/ContainerBS89dhN/getMonolog_LoggerService.php';
require __DIR__.'/ContainerBS89dhN/getMonolog_Handler_DeprecationService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_TransportFactoryService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Transport_Sync_FactoryService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Transport_FailedService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Transport_Doctrine_FactoryService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Transport_AsyncService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_RoutableMessageBusService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Retry_SendFailedMessageForRetryListenerService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Retry_MultiplierRetryStrategy_FailedService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Retry_MultiplierRetryStrategy_AsyncService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Listener_StopWorkerOnRestartSignalListenerService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Failure_SendFailedMessageToFailureTransportListenerService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_DefaultBusService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Bus_Default_Middleware_SendMessageService.php';
require __DIR__.'/ContainerBS89dhN/getMessenger_Bus_Default_Middleware_HandleMessageService.php';
require __DIR__.'/ContainerBS89dhN/getMailer_TransportsService.php';
require __DIR__.'/ContainerBS89dhN/getMailer_TransportFactory_SmtpService.php';
require __DIR__.'/ContainerBS89dhN/getMailer_TransportFactory_SendmailService.php';
require __DIR__.'/ContainerBS89dhN/getMailer_TransportFactory_NullService.php';
require __DIR__.'/ContainerBS89dhN/getMailer_TransportFactory_NativeService.php';
require __DIR__.'/ContainerBS89dhN/getHttpClient_UriTemplateService.php';
require __DIR__.'/ContainerBS89dhN/getHttpClient_TransportService.php';
require __DIR__.'/ContainerBS89dhN/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerBS89dhN/getErrorControllerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Messenger_EventSubscriber_DoctrineClearEntityManagerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Messenger_DoctrineSchemaListenerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Listeners_LockStoreSchemaListenerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaListenerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaListenerService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_EntityValueResolverService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerBS89dhN/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerBS89dhN/getDebug_ErrorHandlerConfiguratorService.php';
require __DIR__.'/ContainerBS89dhN/getController_TemplateAttributeListenerService.php';
require __DIR__.'/ContainerBS89dhN/getContainer_GetenvService.php';
require __DIR__.'/ContainerBS89dhN/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerBS89dhN/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerBS89dhN/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerBS89dhN/getCache_ValidatorExpressionLanguageService.php';
require __DIR__.'/ContainerBS89dhN/getCache_SystemClearerService.php';
require __DIR__.'/ContainerBS89dhN/getCache_SystemService.php';
require __DIR__.'/ContainerBS89dhN/getCache_SecurityExpressionLanguageService.php';
require __DIR__.'/ContainerBS89dhN/getCache_Messenger_RestartWorkersSignalService.php';
require __DIR__.'/ContainerBS89dhN/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerBS89dhN/getCache_AppClearerService.php';
require __DIR__.'/ContainerBS89dhN/getCache_AppService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_SessionService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_RequestService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_QueryParameterValueResolverService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerBS89dhN/getArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerBS89dhN/getTemplateControllerService.php';
require __DIR__.'/ContainerBS89dhN/getRedirectControllerService.php';
require __DIR__.'/ContainerBS89dhN/getUserRepositoryService.php';
require __DIR__.'/ContainerBS89dhN/getRoomRepositoryService.php';
require __DIR__.'/ContainerBS89dhN/getReservationRepositoryService.php';
require __DIR__.'/ContainerBS89dhN/get_ServiceLocator_Y4Zrx_Service.php';
require __DIR__.'/ContainerBS89dhN/get_ServiceLocator_C7f47p7Service.php';
require __DIR__.'/ContainerBS89dhN/get_Security_RequestMatcher_KLbKLHaService.php';
require __DIR__.'/ContainerBS89dhN/get_Messenger_HandlerDescriptor_VMw0m61Service.php';
require __DIR__.'/ContainerBS89dhN/get_Messenger_HandlerDescriptor_TGvt0LHService.php';
require __DIR__.'/ContainerBS89dhN/get_Messenger_HandlerDescriptor_P4QvabmService.php';
require __DIR__.'/ContainerBS89dhN/get_Messenger_HandlerDescriptor_XZowc_TService.php';
require __DIR__.'/ContainerBS89dhN/get_Messenger_HandlerDescriptor_Lml2ICsService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Twig\Extra\TwigExtraBundle\TwigExtraBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Symfony\Bundle\MonologBundle\MonologBundle';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlerDescriptor';
$classes[] = 'Symfony\Component\Notifier\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\Messenger\Handler\RedispatchMessageHandler';
$classes[] = 'Symfony\Component\Mailer\Messenger\MessageHandler';
$classes[] = 'Symfony\Component\Notifier\Transport\Transports';
$classes[] = 'Symfony\Component\Notifier\Transport';
$classes[] = 'Symfony\Component\HttpFoundation\ChainRequestMatcher';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher\PathRequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Repository\ReservationRepository';
$classes[] = 'App\Repository\RoomRepository';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\Clock\Clock';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestPayloadValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\CacheAttributeListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\IsGrantedAttributeListener';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'Symfony\Bridge\Twig\EventListener\TemplateAttributeListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\ErrorHandlerConfigurator';
$classes[] = 'Symfony\Bridge\Monolog\Logger';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Schema\LegacySchemaManagerFactory';
$classes[] = 'Doctrine\DBAL\Tools\DsnParser';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\LockStoreSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\MessengerTransportDoctrineSchemaListener';
$classes[] = 'Symfony\Bridge\Doctrine\Messenger\DoctrineClearEntityManagerWorkerSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\SerializerErrorRenderer';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Contracts\HttpClient\HttpClientInterface';
$classes[] = 'Symfony\Component\HttpClient\HttpClient';
$classes[] = 'Symfony\Component\HttpClient\UriTemplateHttpClient';
$classes[] = 'current';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'App\Kernel';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessengerTransportListener';
$classes[] = 'Symfony\Component\Mailer\Transport\NativeTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\SendmailTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Smtp\EsmtpTransportFactory';
$classes[] = 'Symfony\Component\Mailer\Transport\Transports';
$classes[] = 'Symfony\Component\Mailer\Transport';
$classes[] = 'Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\HandleMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Handler\HandlersLocator';
$classes[] = 'Symfony\Component\Messenger\Middleware\SendMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Transport\Sender\SendersLocator';
$classes[] = 'Symfony\Component\Messenger\MessageBus';
$classes[] = 'Symfony\Component\Messenger\EventListener\AddErrorDetailsStampListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageToFailureTransportListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnRestartSignalListener';
$classes[] = 'Symfony\Component\Messenger\EventListener\StopWorkerOnCustomStopExceptionListener';
$classes[] = 'Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware';
$classes[] = 'Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware';
$classes[] = 'Symfony\Component\Messenger\Retry\MultiplierRetryStrategy';
$classes[] = 'Symfony\Component\Messenger\EventListener\SendFailedMessageForRetryListener';
$classes[] = 'Symfony\Component\Messenger\RoutableMessageBus';
$classes[] = 'Symfony\Component\Messenger\Transport\TransportInterface';
$classes[] = 'Symfony\Component\Messenger\Bridge\Doctrine\Transport\DoctrineTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Transport\InMemory\InMemoryTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Transport\Serialization\PhpSerializer';
$classes[] = 'Symfony\Component\Messenger\Transport\Sync\SyncTransportFactory';
$classes[] = 'Symfony\Component\Messenger\Transport\TransportFactory';
$classes[] = 'Symfony\Component\Mime\MimeTypes';
$classes[] = 'Symfony\Bridge\Monolog\Handler\ConsoleHandler';
$classes[] = 'Monolog\Handler\StreamHandler';
$classes[] = 'Monolog\Handler\FingersCrossedHandler';
$classes[] = 'Monolog\Formatter\JsonFormatter';
$classes[] = 'Symfony\Bridge\Monolog\Handler\FingersCrossed\HttpCodeActivationStrategy';
$classes[] = 'Monolog\Handler\FingersCrossed\ErrorLevelActivationStrategy';
$classes[] = 'Monolog\Processor\PsrLogMessageProcessor';
$classes[] = 'Symfony\Component\Notifier\EventListener\NotificationLoggerListener';
$classes[] = 'Symfony\Component\Notifier\Transport\NullTransportFactory';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoCacheExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\PhpStanExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\SerializerExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\Psr4DirectoryLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\FirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Http\Controller\SecurityTokenValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\Serializer\Serializer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UnwrappingDenormalizer';
$classes[] = 'Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ProblemNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\UidNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer';
$classes[] = 'Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter';
$classes[] = 'Symfony\Component\Serializer\Normalizer\MimeMessageNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\PropertyNormalizer';
$classes[] = 'Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\FormErrorNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\DataUriNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ArrayDenormalizer';
$classes[] = 'Symfony\Component\Serializer\Normalizer\ObjectNormalizer';
$classes[] = 'Symfony\Component\Serializer\Encoder\XmlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\JsonEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\YamlEncoder';
$classes[] = 'Symfony\Component\Serializer\Encoder\CsvEncoder';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\CacheClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\LoaderChain';
$classes[] = 'Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader';
$classes[] = 'Psr\Cache\CacheItemPoolInterface';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\Translation\Loader\CsvFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuDatFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IniFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\JsonFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\MoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\PoFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\QtFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\IcuResFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\XliffFileLoader';
$classes[] = 'Symfony\Component\Translation\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Translation\LocaleSwitcher';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Translation\Translator';
$classes[] = 'Symfony\Component\Translation\Formatter\MessageFormatter';
$classes[] = 'Symfony\Component\Translation\IdentityTranslator';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\WebLinkExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Bridge\Twig\Extension\SerializerRuntime';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NoSuspiciousCharactersValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\WhenValidator';
$classes[] = 'Symfony\Component\WebLink\EventListener\AddLinkHeaderListener';
$classes[] = 'Symfony\Component\WebLink\HttpHeaderSerializer';

$preloaded = Preloader::preload($classes);

$classes = [];
$classes[] = 'Doctrine\\ORM\\Mapping\\ClassMetadata';
$classes[] = 'Doctrine\\ORM\\Id\\IdentityGenerator';
$classes[] = 'C:\\3BCI\\projet-final\\room-management-back\\api_room_management\\var\\cache\\prod/doctrine/orm/Proxies/__CG__AppEntityReservation.php';
$classes[] = 'C:\\3BCI\\projet-final\\room-management-back\\api_room_management\\var\\cache\\prod/doctrine/orm/Proxies/__CG__AppEntityRoom.php';
$classes[] = 'C:\\3BCI\\projet-final\\room-management-back\\api_room_management\\var\\cache\\prod/doctrine/orm/Proxies/__CG__AppEntityUser.php';
$preloaded = Preloader::preload($classes, $preloaded);