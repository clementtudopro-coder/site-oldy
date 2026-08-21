<?php
/* Données structurées Schema.org — décrivent l'activité pour les moteurs. */
?>
<script type="application/ld+json">
<?= json_encode([
    '@context'    => 'https://schema.org',
    '@type'       => 'ProfessionalService',
    'name'        => 'OLDY',
    'alternateName' => 'Ateliers OLDY',
    'description' => $site['description'],
    'url'         => 'https://ateliersoldy.fr/',
    'image'       => 'https://ateliersoldy.fr/assets/logo.svg',
    'email'       => $site['email'],
    'telephone'   => $site['telephone'],
    'priceRange'  => 'EUR',
    'address'     => [
        '@type'           => 'PostalAddress',
        'addressLocality' => 'Saint-Rémy-lès-Chevreuse',
        'postalCode'      => '78470',
        'addressCountry'  => 'FR',
    ],
    'areaServed'  => [
        ['@type' => 'AdministrativeArea', 'name' => 'Yvelines'],
        ['@type' => 'AdministrativeArea', 'name' => 'Île-de-France'],
    ],
    'founder'     => ['@type' => 'Person', 'name' => 'Tara Lebon'],
    'serviceType' => 'Ateliers créatifs et sensoriels pour seniors',
    'audience'    => [
        '@type' => 'Audience',
        'audienceType' => 'Résidences seniors, résidences autonomie, EHPAD, CCAS',
    ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
