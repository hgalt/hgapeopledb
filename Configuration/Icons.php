<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

   return [
       // Icon identifier
       'hgaicon' => [
           // Icon provider class
           'provider' => SvgIconProvider::class,
           // The source SVG for the SvgIconProvider
           'source' => 'EXT:hgapeopledb/Resources/Public/Icons/hga.svg',
       ],
       'hgapeopleicon' => [
           // Icon provider class
           'provider' => BitmapIconProvider::class,
           // The source SVG for the SvgIconProvider
           'source' => 'EXT:hgapeopledb/Resources/Public/Icons/people.gif',
       ],
   ];
