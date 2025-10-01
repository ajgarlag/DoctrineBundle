<?php

declare(strict_types=1);

namespace Doctrine\Bundle\DoctrineBundle\Tests\DependencyInjection;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\IgnoreDeprecations;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class XmlDoctrineExtensionTest extends AbstractDoctrineExtensionTestCase
{
    protected function loadFromFile(
        ContainerBuilder $container,
        string $file,
    ): void {
        $loadXml = new XmlFileLoader($container, new FileLocator(__DIR__ . '/Fixtures/config/xml'));
        $loadXml->import($file . '.{xml}');
    }

    #[IgnoreDeprecations]
    public function testDbalLoadFromXmlMultipleConnections(): void
    {
        parent::testDbalLoadFromXmlMultipleConnections();
    }

    #[IgnoreDeprecations]
    public function testDbalLoadFromXmlSingleConnections(): void
    {
        parent::testDbalLoadFromXmlSingleConnections();
    }

    #[IgnoreDeprecations]
    public function testDbalDbnameSuffix(): void
    {
        parent::testDbalDbnameSuffix();
    }

    #[IgnoreDeprecations]
    public function testDbalDriverScheme(): void
    {
        parent::testDbalDriverScheme();
    }

    #[IgnoreDeprecations]
    public function testDbalLoadSinglePrimaryReplicaConnection(): void
    {
        parent::testDbalLoadSinglePrimaryReplicaConnection();
    }

    #[IgnoreDeprecations]
    public function testDbalLoadDisableTypeComments(): void
    {
        parent::testDbalLoadDisableTypeComments();
    }

    #[IgnoreDeprecations]
    public function testDbalSchemaManagerFactory(): void
    {
        parent::testDbalSchemaManagerFactory();
    }

    #[IgnoreDeprecations]
    public function testDbalResultCache(): void
    {
        parent::testDbalResultCache();
    }

    #[IgnoreDeprecations]
    public function testLoadSimpleSingleConnection(): void
    {
        parent::testLoadSimpleSingleConnection();
    }

    #[IgnoreDeprecations]
    public function testLoadSimpleSingleConnectionWithoutDbName(): void
    {
        parent::testLoadSimpleSingleConnectionWithoutDbName();
    }

    #[IgnoreDeprecations]
    public function testLoadSingleConnection(): void
    {
        parent::testLoadSingleConnection();
    }

    #[IgnoreDeprecations]
    public function testLoadMultipleConnections(): void
    {
        parent::testLoadMultipleConnections();
    }

    #[IgnoreDeprecations]
    public function testEntityManagerMetadataCacheDriverConfiguration(): void
    {
        parent::testEntityManagerMetadataCacheDriverConfiguration();
    }

    #[IgnoreDeprecations]
    public function testSingleEntityManagerMultipleMappingBundleDefinitions(): void
    {
        parent::testSingleEntityManagerMultipleMappingBundleDefinitions();
    }

    #[IgnoreDeprecations]
    public function testMultipleEntityManagersMappingBundleDefinitions(): void
    {
        parent::testMultipleEntityManagersMappingBundleDefinitions();
    }

    #[IgnoreDeprecations]
    public function testSingleEntityManagerDefaultTableOptions(): void
    {
        parent::testSingleEntityManagerDefaultTableOptions();
    }

    #[IgnoreDeprecations]
    public function testSetTypes(): void
    {
        parent::testSetTypes();
    }

    #[IgnoreDeprecations]
    public function testSetCustomFunctions(): void
    {
        parent::testSetCustomFunctions();
    }

    #[IgnoreDeprecations]
    public function testSetNamingStrategy(): void
    {
        parent::testSetNamingStrategy();
    }

    #[IgnoreDeprecations]
    public function testSetIdentityGenerationPreferences(): void
    {
        parent::testSetIdentityGenerationPreferences();
    }

    #[IgnoreDeprecations]
    public function testSetQuoteStrategy(): void
    {
        parent::testSetQuoteStrategy();
    }

    #[IgnoreDeprecations]
    public function testSetTypedFieldMapper(): void
    {
        parent::testSetTypedFieldMapper();
    }

    #[IgnoreDeprecations]
    #[DataProvider('cacheConfigProvider')]
    public function testCacheConfig(string|null $expectedClass, string $entityManagerName, string|null $cacheGetter): void
    {
        parent::testCacheConfig($expectedClass, $entityManagerName, $cacheGetter);
    }

    #[IgnoreDeprecations]
    public function testSecondLevelCache(): void
    {
        parent::testSecondLevelCache();
    }

    #[IgnoreDeprecations]
    public function testSingleEMSetCustomFunctions(): void
    {
        parent::testSingleEMSetCustomFunctions();
    }

    #[IgnoreDeprecations]
    public function testAddCustomHydrationMode(): void
    {
        parent::testAddCustomHydrationMode();
    }

    #[IgnoreDeprecations]
    public function testAddFilter(): void
    {
        parent::testAddFilter();
    }

    #[IgnoreDeprecations]
    public function testDisablingLazyGhostOnOrm3Throws(): void
    {
        parent::testDisablingLazyGhostOnOrm3Throws();
    }

    #[IgnoreDeprecations]
    public function testDisablingReportFieldsWhereDeclaredOnOrm3Throws(): void
    {
        parent::testDisablingReportFieldsWhereDeclaredOnOrm3Throws();
    }

    #[IgnoreDeprecations]
    public function testEnablingReportFieldsWhereDeclaredOnOrm3IsDeprecated(): void
    {
        parent::testEnablingReportFieldsWhereDeclaredOnOrm3IsDeprecated();
    }

    #[IgnoreDeprecations]
    public function testSettingDisableTypeCommentsWithDbal4IsDeprecated(): void
    {
        parent::testSettingDisableTypeCommentsWithDbal4IsDeprecated();
    }

    #[IgnoreDeprecations]
    public function testSettingUseSavepointsWithDbal4IsDeprecated(): void
    {
        parent::testSettingUseSavepointsWithDbal4IsDeprecated();
    }

    #[IgnoreDeprecations]
    public function testResolveTargetEntity(): void
    {
        parent::testResolveTargetEntity();
    }

    #[IgnoreDeprecations]
    public function testSchemaIgnoreClasses(): void
    {
        parent::testSchemaIgnoreClasses();
    }

    #[IgnoreDeprecations]
    public function testFetchModeSubselectBatchSize(): void
    {
        parent::testFetchModeSubselectBatchSize();
    }

    #[IgnoreDeprecations]
    public function testAttachEntityListeners(): void
    {
        parent::testAttachEntityListeners();
    }

    #[IgnoreDeprecations]
    public function testDbalAutoCommit(): void
    {
        parent::testDbalAutoCommit();
    }

    #[IgnoreDeprecations]
    public function testDbalOracleConnectstring(): void
    {
        parent::testDbalOracleConnectstring();
    }

    #[IgnoreDeprecations]
    public function testDbalOracleInstancename(): void
    {
        parent::testDbalOracleInstancename();
    }

    #[IgnoreDeprecations]
    public function testDbalSchemaFilterNewConfig(): void
    {
        parent::testDbalSchemaFilterNewConfig();
    }

    #[IgnoreDeprecations]
    public function testWellKnownSchemaFilterDefaultTables(): void
    {
        parent::testWellKnownSchemaFilterDefaultTables();
    }

    #[IgnoreDeprecations]
    public function testWellKnownSchemaFilterOverriddenTables(): void
    {
        parent::testWellKnownSchemaFilterOverriddenTables();
    }

    #[IgnoreDeprecations]
    public function testEntityListenerResolver(): void
    {
        parent::testEntityListenerResolver();
    }

    #[IgnoreDeprecations]
    public function testAttachEntityListenerTag(): void
    {
        parent::testAttachEntityListenerTag();
    }

    #[IgnoreDeprecations]
    public function testAttachEntityListenersTwoConnections(): void
    {
        parent::testAttachEntityListenersTwoConnections();
    }

    #[IgnoreDeprecations]
    public function testAttachLazyEntityListener(): void
    {
        parent::testAttachLazyEntityListener();
    }

    #[IgnoreDeprecations]
    public function testAttachLazyEntityListenerForCustomResolver(): void
    {
        parent::testAttachLazyEntityListenerForCustomResolver();
    }

    #[IgnoreDeprecations]
    public function testLazyEntityListenerResolverWithoutCorrectInterface(): void
    {
        parent::testLazyEntityListenerResolverWithoutCorrectInterface();
    }

    #[IgnoreDeprecations]
    public function testPrivateLazyEntityListener(): void
    {
        parent::testPrivateLazyEntityListener();
    }

    #[IgnoreDeprecations]
    public function testAbstractEntityListener(): void
    {
        parent::testAbstractEntityListener();
    }

    #[IgnoreDeprecations]
    public function testRepositoryFactory(): void
    {
        parent::testRepositoryFactory();
    }

    #[IgnoreDeprecations]
    public function testDisableSchemaValidation(): void
    {
        parent::testDisableSchemaValidation();
    }

    #[IgnoreDeprecations]
    public function testNativeLazyObjectsWithoutConfig(): void
    {
        parent::testNativeLazyObjectsWithoutConfig();
    }

    #[IgnoreDeprecations]
    public function testNativeLazyObjectsWithConfigTrue(): void
    {
        parent::testNativeLazyObjectsWithConfigTrue();
    }

    #[IgnoreDeprecations]
    public function testNativeLazyObjectsWithConfigFalse(): void
    {
        parent::testNativeLazyObjectsWithConfigFalse();
    }
}
