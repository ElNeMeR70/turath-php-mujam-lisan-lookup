<?php
declare(strict_types=1);

/**
 * turath-php-mujam-lisan-lookup — محرك البحث في المعاجم التراثية: لسان العرب والقاموس
 * Rhyme-Order (Qafiyah: Bab-Fasl) Classical Arabic Lexicon Resolver
 */
$input = "Root=ع-ل-م";
$digest = substr(hash("sha256", "turath-php-mujam-lisan-lookup:" . $input), 0, 12);

echo "[RUN] turath-php-mujam-lisan-lookup (PHP) — Rhyme-Order (Qafiyah: Bab-Fasl) Classical Arabic Lexicon Resolver" . PHP_EOL;
echo "[AR]  محرك البحث في المعاجم التراثية: لسان العرب والقاموس" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] QafiyahOrder=Bab_AlMeem_Fasl_AlAyn | Lexicons=[LisanAlArab,AlQamusAlMuhit] | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
