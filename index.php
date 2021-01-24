<?php 
$myip=$_SERVER['REMOTE_ADDR'];
$string = file_get_contents("https://get.apigeoip.com/xml/".$myip);
$xml = simplexml_load_string($string);
$country=$xml->CountryCode;

if (strpos($country, 'AD') !== false) { echo 'ADS Andorra'; }
elseif (strpos($country, 'AE') !== false) { echo 'ADS United Arab Emirates'; }
elseif (strpos($country, 'AF') !== false) { echo 'ADS Afghanistan'; }
elseif (strpos($country, 'AG') !== false) { echo 'ADS Antigua and Barbuda'; }
elseif (strpos($country, 'AI') !== false) { echo 'ADS Anguilla'; }
elseif (strpos($country, 'AL') !== false) { echo 'ADS Albania'; }
elseif (strpos($country, 'AM') !== false) { echo 'ADS Armenia'; }
elseif (strpos($country, 'AN') !== false) { echo 'ADS Netherlands Antilles'; }
elseif (strpos($country, 'AO') !== false) { echo 'ADS Angola'; }
elseif (strpos($country, 'AQ') !== false) { echo 'ADS Antarctica'; }
elseif (strpos($country, 'AR') !== false) { echo 'ADS Argentina'; }
elseif (strpos($country, 'AS') !== false) { echo 'ADS American Samoa'; }
elseif (strpos($country, 'AT') !== false) { echo 'ADS Austria'; }
elseif (strpos($country, 'AU') !== false) { echo 'ADS Australia'; }
elseif (strpos($country, 'AW') !== false) { echo 'ADS Aruba'; }
elseif (strpos($country, 'AZ') !== false) { echo 'ADS Azerbaijan'; }
elseif (strpos($country, 'BA') !== false) { echo 'ADS Bosnia and Herzegovina'; }
elseif (strpos($country, 'BB') !== false) { echo 'ADS Barbados'; }
elseif (strpos($country, 'BD') !== false) { echo 'ADS Bangladesh'; }
elseif (strpos($country, 'BE') !== false) { echo 'ADS Belgium'; }
elseif (strpos($country, 'BF') !== false) { echo 'ADS Burkina Faso'; }
elseif (strpos($country, 'BG') !== false) { echo 'ADS Bulgaria'; }
elseif (strpos($country, 'BH') !== false) { echo 'ADS Bahrain'; }
elseif (strpos($country, 'BI') !== false) { echo 'ADS Burundi'; }
elseif (strpos($country, 'BJ') !== false) { echo 'ADS Benin'; }
elseif (strpos($country, 'BM') !== false) { echo 'ADS Bermuda'; }
elseif (strpos($country, 'BN') !== false) { echo 'ADS Brunei Darussalam'; }
elseif (strpos($country, 'BO') !== false) { echo 'ADS Bolivia'; }
elseif (strpos($country, 'BR') !== false) { echo 'ADS Brazil'; }
elseif (strpos($country, 'BS') !== false) { echo 'ADS Bahamas'; }
elseif (strpos($country, 'BT') !== false) { echo 'ADS Bhutan'; }
elseif (strpos($country, 'BV') !== false) { echo 'ADS Bouvet Island'; }
elseif (strpos($country, 'BW') !== false) { echo 'ADS Botswana'; }
elseif (strpos($country, 'BY') !== false) { echo 'ADS Belarus'; }
elseif (strpos($country, 'BZ') !== false) { echo 'ADS Belize'; }
elseif (strpos($country, 'CA') !== false) { echo 'ADS Canada'; }
elseif (strpos($country, 'CC') !== false) { echo 'ADS Cocos (Keeling) Islands'; }
elseif (strpos($country, 'CF') !== false) { echo 'ADS Central African Republic'; }
elseif (strpos($country, 'CG') !== false) { echo 'ADS Congo'; }
elseif (strpos($country, 'CH') !== false) { echo 'ADS Switzerland'; }
elseif (strpos($country, 'CI') !== false) { echo 'ADS Cote D"Ivoire (Ivory Coast)'; }
elseif (strpos($country, 'CK') !== false) { echo 'ADS Cook Islands'; }
elseif (strpos($country, 'CL') !== false) { echo 'ADS Chile'; }
elseif (strpos($country, 'CM') !== false) { echo 'ADS Cameroon'; }
elseif (strpos($country, 'CN') !== false) { echo 'ADS China'; }
elseif (strpos($country, 'CO') !== false) { echo 'ADS Colombia'; }
elseif (strpos($country, 'CR') !== false) { echo 'ADS Costa Rica'; }
elseif (strpos($country, 'CS') !== false) { echo 'ADS Serbia and Montenegro'; }
elseif (strpos($country, 'CU') !== false) { echo 'ADS Cuba'; }
elseif (strpos($country, 'CV') !== false) { echo 'ADS Cape Verde'; }
elseif (strpos($country, 'CX') !== false) { echo 'ADS Christmas Island'; }
elseif (strpos($country, 'CY') !== false) { echo 'ADS Cyprus'; }
elseif (strpos($country, 'CZ') !== false) { echo 'ADS Czech Republic'; }
elseif (strpos($country, 'DE') !== false) { echo 'ADS Germany'; }
elseif (strpos($country, 'DJ') !== false) { echo 'ADS Djibouti'; }
elseif (strpos($country, 'DK') !== false) { echo 'ADS Denmark'; }
elseif (strpos($country, 'DM') !== false) { echo 'ADS Dominica'; }
elseif (strpos($country, 'DO') !== false) { echo 'ADS Dominican Republic'; }
elseif (strpos($country, 'DZ') !== false) { echo 'ADS Algeria'; }
elseif (strpos($country, 'EC') !== false) { echo 'ADS Ecuador'; }
elseif (strpos($country, 'EE') !== false) { echo 'ADS Estonia'; }
elseif (strpos($country, 'EG') !== false) { echo 'ADS Egypt'; }
elseif (strpos($country, 'EH') !== false) { echo 'ADS Western Sahara'; }
elseif (strpos($country, 'ER') !== false) { echo 'ADS Eritrea'; }
elseif (strpos($country, 'ES') !== false) { echo 'ADS Spain'; }
elseif (strpos($country, 'ET') !== false) { echo 'ADS Ethiopia'; }
elseif (strpos($country, 'FI') !== false) { echo 'ADS Finland'; }
elseif (strpos($country, 'FJ') !== false) { echo 'ADS Fiji'; }
elseif (strpos($country, 'FK') !== false) { echo 'ADS Falkland Islands (Malvinas)'; }
elseif (strpos($country, 'FM') !== false) { echo 'ADS Micronesia'; }
elseif (strpos($country, 'FO') !== false) { echo 'ADS Faroe Islands'; }
elseif (strpos($country, 'FR') !== false) { echo 'ADS France'; }
elseif (strpos($country, 'FX') !== false) { echo 'ADS France, Metropolitan'; }
elseif (strpos($country, 'GA') !== false) { echo 'ADS Gabon'; }
elseif (strpos($country, 'GB') !== false) { echo 'ADS Great Britain (UK)'; }
elseif (strpos($country, 'GD') !== false) { echo 'ADS Grenada'; }
elseif (strpos($country, 'GE') !== false) { echo 'ADS Georgia'; }
elseif (strpos($country, 'GF') !== false) { echo 'ADS French Guiana'; }
elseif (strpos($country, 'GH') !== false) { echo 'ADS Ghana'; }
elseif (strpos($country, 'GI') !== false) { echo 'ADS Gibraltar'; }
elseif (strpos($country, 'GL') !== false) { echo 'ADS Greenland'; }
elseif (strpos($country, 'GM') !== false) { echo 'ADS Gambia'; }
elseif (strpos($country, 'GN') !== false) { echo 'ADS Guinea'; }
elseif (strpos($country, 'GP') !== false) { echo 'ADS Guadeloupe'; }
elseif (strpos($country, 'GQ') !== false) { echo 'ADS Equatorial Guinea'; }
elseif (strpos($country, 'GR') !== false) { echo 'ADS Greece'; }
elseif (strpos($country, 'GS') !== false) { echo 'ADS S. Georgia and S. Sandwich Isls.'; }
elseif (strpos($country, 'GT') !== false) { echo 'ADS Guatemala'; }
elseif (strpos($country, 'GU') !== false) { echo 'ADS Guam'; }
elseif (strpos($country, 'GW') !== false) { echo 'ADS Guinea-Bissau'; }
elseif (strpos($country, 'GY') !== false) { echo 'ADS Guyana'; }
elseif (strpos($country, 'HK') !== false) { echo 'ADS Hong Kong'; }
elseif (strpos($country, 'HM') !== false) { echo 'ADS Heard and McDonald Islands'; }
elseif (strpos($country, 'HN') !== false) { echo 'ADS Honduras'; }
elseif (strpos($country, 'HR') !== false) { echo 'ADS Croatia (Hrvatska)'; }
elseif (strpos($country, 'HT') !== false) { echo 'ADS Haiti'; }
elseif (strpos($country, 'HU') !== false) { echo 'ADS Hungary'; }
elseif (strpos($country, 'ID') !== false) { echo 'ADS Indonesia'; }
elseif (strpos($country, 'IE') !== false) { echo 'ADS Ireland'; }
elseif (strpos($country, 'IL') !== false) { echo 'ADS Israel'; }
elseif (strpos($country, 'IN') !== false) { echo 'ADS India'; }
elseif (strpos($country, 'IO') !== false) { echo 'ADS British Indian Ocean Territory'; }
elseif (strpos($country, 'IQ') !== false) { echo 'ADS Iraq'; }
elseif (strpos($country, 'IR') !== false) { echo 'ADS Iran'; }
elseif (strpos($country, 'IS') !== false) { echo 'ADS Iceland'; }
elseif (strpos($country, 'IT') !== false) { echo 'ADS Italy'; }
elseif (strpos($country, 'JM') !== false) { echo 'ADS Jamaica'; }
elseif (strpos($country, 'JO') !== false) { echo 'ADS Jordan'; }
elseif (strpos($country, 'JP') !== false) { echo 'ADS Japan'; }
elseif (strpos($country, 'KE') !== false) { echo 'ADS Kenya'; }
elseif (strpos($country, 'KG') !== false) { echo 'ADS Kyrgyzstan'; }
elseif (strpos($country, 'KH') !== false) { echo 'ADS Cambodia'; }
elseif (strpos($country, 'KI') !== false) { echo 'ADS Kiribati'; }
elseif (strpos($country, 'KM') !== false) { echo 'ADS Comoros'; }
elseif (strpos($country, 'KN') !== false) { echo 'ADS Saint Kitts and Nevis'; }
elseif (strpos($country, 'KP') !== false) { echo 'ADS Korea (North)'; }
elseif (strpos($country, 'KR') !== false) { echo 'ADS Korea (South)'; }
elseif (strpos($country, 'KW') !== false) { echo 'ADS Kuwait'; }
elseif (strpos($country, 'KY') !== false) { echo 'ADS Cayman Islands'; }
elseif (strpos($country, 'KZ') !== false) { echo 'ADS Kazakhstan'; }
elseif (strpos($country, 'LA') !== false) { echo 'ADS Laos'; }
elseif (strpos($country, 'LB') !== false) { echo 'ADS Lebanon'; }
elseif (strpos($country, 'LC') !== false) { echo 'ADS Saint Lucia'; }
elseif (strpos($country, 'LI') !== false) { echo 'ADS Liechtenstein'; }
elseif (strpos($country, 'LK') !== false) { echo 'ADS Sri Lanka'; }
elseif (strpos($country, 'LR') !== false) { echo 'ADS Liberia'; }
elseif (strpos($country, 'LS') !== false) { echo 'ADS Lesotho'; }
elseif (strpos($country, 'LT') !== false) { echo 'ADS Lithuania'; }
elseif (strpos($country, 'LU') !== false) { echo 'ADS Luxembourg'; }
elseif (strpos($country, 'LV') !== false) { echo 'ADS Latvia'; }
elseif (strpos($country, 'LY') !== false) { echo 'ADS Libya'; }
elseif (strpos($country, 'MA') !== false) { echo 'ADS Morocco'; }
elseif (strpos($country, 'MC') !== false) { echo 'ADS Monaco'; }
elseif (strpos($country, 'MD') !== false) { echo 'ADS Moldova'; }
elseif (strpos($country, 'MG') !== false) { echo 'ADS Madagascar'; }
elseif (strpos($country, 'MH') !== false) { echo 'ADS Marshall Islands'; }
elseif (strpos($country, 'MK') !== false) { echo 'ADS Macedonia'; }
elseif (strpos($country, 'ML') !== false) { echo 'ADS Mali'; }
elseif (strpos($country, 'MM') !== false) { echo 'ADS Myanmar'; }
elseif (strpos($country, 'MN') !== false) { echo 'ADS Mongolia'; }
elseif (strpos($country, 'MO') !== false) { echo 'ADS Macau'; }
elseif (strpos($country, 'MP') !== false) { echo 'ADS Northern Mariana Islands'; }
elseif (strpos($country, 'MQ') !== false) { echo 'ADS Martinique'; }
elseif (strpos($country, 'MR') !== false) { echo 'ADS Mauritania'; }
elseif (strpos($country, 'MS') !== false) { echo 'ADS Montserrat'; }
elseif (strpos($country, 'MT') !== false) { echo 'ADS Malta'; }
elseif (strpos($country, 'MU') !== false) { echo 'ADS Mauritius'; }
elseif (strpos($country, 'MV') !== false) { echo 'ADS Maldives'; }
elseif (strpos($country, 'MW') !== false) { echo 'ADS Malawi'; }
elseif (strpos($country, 'MX') !== false) { echo 'ADS Mexico'; }
elseif (strpos($country, 'MY') !== false) { echo 'ADS Malaysia'; }
elseif (strpos($country, 'MZ') !== false) { echo 'ADS Mozambique'; }
elseif (strpos($country, 'NA') !== false) { echo 'ADS Namibia'; }
elseif (strpos($country, 'NC') !== false) { echo 'ADS New Caledonia'; }
elseif (strpos($country, 'NE') !== false) { echo 'ADS Niger'; }
elseif (strpos($country, 'NF') !== false) { echo 'ADS Norfolk Island'; }
elseif (strpos($country, 'NG') !== false) { echo 'ADS Nigeria'; }
elseif (strpos($country, 'NI') !== false) { echo 'ADS Nicaragua'; }
elseif (strpos($country, 'NL') !== false) { echo 'ADS Netherlands'; }
elseif (strpos($country, 'NO') !== false) { echo 'ADS Norway'; }
elseif (strpos($country, 'NP') !== false) { echo 'ADS Nepal'; }
elseif (strpos($country, 'NR') !== false) { echo 'ADS Nauru'; }
elseif (strpos($country, 'NT') !== false) { echo 'ADS Neutral Zone'; }
elseif (strpos($country, 'NU') !== false) { echo 'ADS Niue'; }
elseif (strpos($country, 'NZ') !== false) { echo 'ADS New Zealand (Aotearoa)'; }
elseif (strpos($country, 'OM') !== false) { echo 'ADS Oman'; }
elseif (strpos($country, 'PA') !== false) { echo 'ADS Panama'; }
elseif (strpos($country, 'PE') !== false) { echo 'ADS Peru'; }
elseif (strpos($country, 'PF') !== false) { echo 'ADS French Polynesia'; }
elseif (strpos($country, 'PG') !== false) { echo 'ADS Papua New Guinea'; }
elseif (strpos($country, 'PH') !== false) { echo 'ADS Philippines'; }
elseif (strpos($country, 'PK') !== false) { echo 'ADS Pakistan'; }
elseif (strpos($country, 'PL') !== false) { echo 'ADS Poland'; }
elseif (strpos($country, 'PM') !== false) { echo 'ADS St. Pierre and Miquelon'; }
elseif (strpos($country, 'PN') !== false) { echo 'ADS Pitcairn'; }
elseif (strpos($country, 'PR') !== false) { echo 'ADS Puerto Rico'; }
elseif (strpos($country, 'PT') !== false) { echo 'ADS Portugal'; }
elseif (strpos($country, 'PW') !== false) { echo 'ADS Palau'; }
elseif (strpos($country, 'PY') !== false) { echo 'ADS Paraguay'; }
elseif (strpos($country, 'QA') !== false) { echo 'ADS Qatar'; }
elseif (strpos($country, 'RE') !== false) { echo 'ADS Reunion'; }
elseif (strpos($country, 'RO') !== false) { echo 'ADS Romania'; }
elseif (strpos($country, 'RU') !== false) { echo 'ADS Russian Federation'; }
elseif (strpos($country, 'RW') !== false) { echo 'ADS Rwanda'; }
elseif (strpos($country, 'SA') !== false) { echo 'ADS Saudi Arabia'; }
elseif (strpos($country, 'Sb') !== false) { echo 'ADS Solomon Islands'; }
elseif (strpos($country, 'SC') !== false) { echo 'ADS Seychelles'; }
elseif (strpos($country, 'SD') !== false) { echo 'ADS Sudan'; }
elseif (strpos($country, 'SE') !== false) { echo 'ADS Sweden'; }
elseif (strpos($country, 'SG') !== false) { echo 'ADS Singapore'; }
elseif (strpos($country, 'SH') !== false) { echo 'ADS St. Helena'; }
elseif (strpos($country, 'SI') !== false) { echo 'ADS Slovenia'; }
elseif (strpos($country, 'SJ') !== false) { echo 'ADS Svalbard and Jan Mayen Islands'; }
elseif (strpos($country, 'SK') !== false) { echo 'ADS Slovak Republic'; }
elseif (strpos($country, 'SL') !== false) { echo 'ADS Sierra Leone'; }
elseif (strpos($country, 'SM') !== false) { echo 'ADS San Marino'; }
elseif (strpos($country, 'SN') !== false) { echo 'ADS Senegal'; }
elseif (strpos($country, 'SO') !== false) { echo 'ADS Somalia'; }
elseif (strpos($country, 'SR') !== false) { echo 'ADS Suriname'; }
elseif (strpos($country, 'ST') !== false) { echo 'ADS Sao Tome and Principe'; }
elseif (strpos($country, 'SU') !== false) { echo 'ADS USSR (former)'; }
elseif (strpos($country, 'SV') !== false) { echo 'ADS El Salvador'; }
elseif (strpos($country, 'SY') !== false) { echo 'ADS Syria'; }
elseif (strpos($country, 'SZ') !== false) { echo 'ADS Swaziland'; }
elseif (strpos($country, 'TC') !== false) { echo 'ADS Turks and Caicos Islands'; }
elseif (strpos($country, 'TD') !== false) { echo 'ADS Chad'; }
elseif (strpos($country, 'TF') !== false) { echo 'ADS French Southern Territories'; }
elseif (strpos($country, 'TG') !== false) { echo 'ADS Togo'; }
elseif (strpos($country, 'TH') !== false) { echo 'ADS Thailand'; }
elseif (strpos($country, 'TJ') !== false) { echo 'ADS Tajikistan'; }
elseif (strpos($country, 'TK') !== false) { echo 'ADS Tokelau'; }
elseif (strpos($country, 'TM') !== false) { echo 'ADS Turkmenistan'; }
elseif (strpos($country, 'TN') !== false) { echo 'ADS Tunisia'; }
elseif (strpos($country, 'TO') !== false) { echo 'ADS Tonga'; }
elseif (strpos($country, 'TP') !== false) { echo 'ADS East Timor'; }
elseif (strpos($country, 'TR') !== false) { echo 'ADS Turkey'; }
elseif (strpos($country, 'TT') !== false) { echo 'ADS Trinidad and Tobago'; }
elseif (strpos($country, 'TV') !== false) { echo 'ADS Tuvalu'; }
elseif (strpos($country, 'TW') !== false) { echo 'ADS Taiwan'; }
elseif (strpos($country, 'TZ') !== false) { echo 'ADS Tanzania'; }
elseif (strpos($country, 'UA') !== false) { echo 'ADS Ukraine'; }
elseif (strpos($country, 'UG') !== false) { echo 'ADS Uganda'; }
elseif (strpos($country, 'UK') !== false) { echo 'ADS United Kingdom'; }
elseif (strpos($country, 'UM') !== false) { echo 'ADS US Minor Outlying Islands'; }
elseif (strpos($country, 'US') !== false) { echo 'ADS United States'; }
elseif (strpos($country, 'UY') !== false) { echo 'ADS Uruguay'; }
elseif (strpos($country, 'UZ') !== false) { echo 'ADS Uzbekistan'; }
elseif (strpos($country, 'VA') !== false) { echo 'ADS Vatican City State (Holy See)'; }
elseif (strpos($country, 'VC') !== false) { echo 'ADS Saint Vincent and the Grenadines'; }
elseif (strpos($country, 'VE') !== false) { echo 'ADS Venezuela'; }
elseif (strpos($country, 'VG') !== false) { echo 'ADS Virgin Islands (British)'; }
elseif (strpos($country, 'VI') !== false) { echo 'ADS Virgin Islands (U.S.)'; }
elseif (strpos($country, 'VN') !== false) { echo 'ADS Viet Nam'; }
elseif (strpos($country, 'VU') !== false) { echo 'ADS Vanuatu'; }
elseif (strpos($country, 'WF') !== false) { echo 'ADS Wallis and Futuna Islands'; }
elseif (strpos($country, 'WS') !== false) { echo 'ADS Samoa'; }
elseif (strpos($country, 'YE') !== false) { echo 'ADS Yemen'; }
elseif (strpos($country, 'YT') !== false) { echo 'ADS Mayotte'; }
elseif (strpos($country, 'YU') !== false) { echo 'ADS Yugoslavia'; }
elseif (strpos($country, 'ZA') !== false) { echo 'ADS South Africa'; }
elseif (strpos($country, 'ZM') !== false) { echo 'ADS Zambia'; }
elseif (strpos($country, 'ZR') !== false) { echo 'ADS Zaire'; }
elseif (strpos($country, 'ZW') !== false) { echo 'ADS Zimbabwe'; }
else { echo 'ADS other'; }
?>
