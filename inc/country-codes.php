<?php 
    // Array of all country codes

$country_codes = [
    "AF : AFGHANISTAN",
    "AL : ALBANIA",
    "DZ : ALGERIA",
    "AS : AMERICAN SAMOA",
    "AD : ANDORRA",
    "AO : ANGOLA",
    "AQ : ANTARCTICA",
    "AG : ANTIGUA AND BARBUDA",
    "AR : ARGENTINA",
    "AM : ARMENIA",
    "AW : ARUBA",
    "AU : AUSTRALIA",
    "AT : AUSTRIA",
    "AZ : AZERBAIJAN",
    "BS : BAHAMAS",
    "BH : BAHRAIN",
    "BD : BANGLADESH",
    "BB : BARBADOS",
    "BY : BELARUS",
    "BE : BELGIUM",
    "BZ : BELIZE",
    "BJ : BENIN",
    "BM : BERMUDA",
    "BT : BHUTAN",
    "BO : BOLIVIA",
    "BA : BOSNIA AND HERZEGOVINA",
    "BW : BOTSWANA",
    "BV : BOUVET ISLAND",
    "BR : BRAZIL",
    "IO : BRITISH INDIAN OCEAN TERRITORY",
    "BN : BRUNEI DARUSSALAM",
    "BG : BULGARIA",
    "BF : BURKINA FASO",
    "BI : BURUNDI",
    "KH : CAMBODIA",
    "CM : CAMEROON",
    "CA : CANADA",
    "CV : CAPE VERDE",
    "KY : CAYMAN ISLANDS",
    "CF : CENTRAL AFRICAN REPUBLIC",
    "TD : CHAD",
    "CL : CHILE",
    "CN : CHINA",
    "CX : CHRISTMAS ISLAND",
    "CC : COCOS (KEELING) ISLANDS",
    "CO : COLOMBIA",
    "KM : COMOROS",
    "CG : CONGO",
    "CD : CONGO, THE DEMOCRATIC REPUBLIC OF THE",
    "CK : COOK ISLANDS",
    "CR : COSTA RICA",
    "CI : CÔTE D'IVOIRE",
    "HR : CROATIA",
    "CU : CUBA",
    "CY : CYPRUS",
    "CZ : CZECH REPUBLIC",
    "DK : DENMARK",
    "DJ : DJIBOUTI",
    "DM : DOMINICA",
    "DO : DOMINICAN REPUBLIC",
    "EC : ECUADOR",
    "EG : EGYPT",
    "SV : EL SALVADOR",
    "GQ : EQUATORIAL GUINEA",
    "ER : ERITREA",
    "EE : ESTONIA",
    "ET : ETHIOPIA",
    "FK : FALKLAND ISLANDS (MALVINAS)",
    "FO : FAROE ISLANDS",
    "FJ : FIJI",
    "FI : FINLAND",
    "FR : FRANCE",
    "GF : FRENCH GUIANA",
    "PF : FRENCH POLYNESIA",
    "TF : FRENCH SOUTHERN TERRITORIES",
    "GA : GABON",
    "GM : GAMBIA",
    "GE : GEORGIA",
    "DE : GERMANY",
    "GH : GHANA",
    "GI : GIBRALTAR",
    "GR : GREECE",
    "GL : GREENLAND",
    "GD : GRENADA",
    "GP : GUADELOUPE",
    "GU : GUAM",
    "GT : GUATEMALA",
    "GN : GUINEA",
    "GW : GUINEA-BISSAU",
    "GY : GUYANA",
    "HT : HAITI",
    "HM : HEARD ISLAND AND MCDONALD ISLANDS",
    "HN : HONDURAS",
    "HK : HONG KONG",
    "HU : HUNGARY",
    "IS : ICELAND",
    "IN : INDIA",
    "ID : INDONESIA",
    "IR : IRAN, ISLAMIC REPUBLIC OF",
    "IQ : IRAQ",
    "IE : IRELAND",
    "IL : ISRAEL",
    "IT : ITALY",
    "JM : JAMAICA",
    "JP : JAPAN",
    "JO : JORDAN",
    "KZ : KAZAKHSTAN",
    "KE : KENYA",
    "KI : KIRIBATI",
    "KP : KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF",
    "KR : KOREA, REPUBLIC OF",
    "KW : KUWAIT",
    "KG : KYRGYZSTAN",
    "LA : LAO PEOPLE'S DEMOCRATIC REPUBLIC (LAOS)",
    "LV : LATVIA",
    "LB : LEBANON",
    "LS : LESOTHO",
    "LR : LIBERIA",
    "LY : LIBYA, STATE OF",
    "LI : LIECHTENSTEIN",
    "LT : LITHUANIA",
    "LU : LUXEMBOURG",
    "MO : MACAO",
    "MK : MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF",
    "MG : MADAGASCAR",
    "MW : MALAWI",
    "MY : MALAYSIA",
    "MV : MALDIVES",
    "ML : MALI",
    "MT : MALTA",
    "MH : MARSHALL ISLANDS",
    "MQ : MARTINIQUE",
    "MR : MAURITANIA",
    "MU : MAURITIUS",
    "YT : MAYOTTE",
    "MX : MEXICO",
    "FM : MICRONESIA, FEDERATED STATES OF",
    "MD : MOLDOVA, REPUBLIC OF",
    "MC : MONACO",
    "MN : MONGOLIA",
    "ME : MONTENEGRO",
    "MS : MONTSERRAT",
    "MA : MOROCCO",
    "MZ : MOZAMBIQUE",
    "MM : MYANMAR",
    "NA : NAMIBIA",
    "NR : NAURU",
    "NP : NEPAL, FEDERAL DEMOCRATIC REPUBLIC OF",
    "NL : NETHERLANDS",
    "AN : NETHERLANDS ANTILLES",
    "NC : NEW CALEDONIA",
    "NZ : NEW ZEALAND",
    "NI : NICARAGUA",
    "NE : NIGER",
    "NG : NIGERIA",
    "NU : NIUE",
    "NF : NORFOLK ISLAND",
    "MP : NORTHERN MARIANA ISLANDS",
    "NO : NORWAY",
    "OM : OMAN",
    "PK : PAKISTAN",
    "PW : PALAU",
    "PS : PALESTINE, STATE OF",
    "PA : PANAMA",
    "PG : PAPUA NEW GUINEA",
    "PY : PARAGUAY",
    "PE : PERU",
    "PH : PHILIPPINES",
    "PN : PITCAIRN",
    "PL : POLAND",
    "PT : PORTUGAL",
    "PR : PUERTO RICO",
    "QA : QATAR",
    "RE : RÉUNION",
    "RO : ROMANIA",
    "RU : RUSSIAN FEDERATION",
    "RW : RWANDA",
    "SH : SAINT HELENA",
    "KN : SAINT KITTS AND NEVIS",
    "LC : SAINT LUCIA",
    "PM : SAINT PIERRE AND MIQUELON",
    "VC : SAINT VINCENT AND THE GRENADINES",
    "WS : SAMOA",
    "SM : SAN MARINO",
    "ST : SAO TOME AND PRINCIPE",
    "SA : SAUDI ARABIA",
    "SN : SENEGAL",
    "RS : SERBIA",
    "SC : SEYCHELLES",
    "SL : SIERRA LEONE",
    "SG : SINGAPORE",
    "SK : SLOVAKIA",
    "SI : SLOVENIA",
    "SB : SOLOMON ISLANDS",
    "SO : SOMALIA",
    "ZA : SOUTH AFRICA",
    "GS : SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS",
    "SS : SOUTH SUDAN",
    "ES : SPAIN",
    "LK : SRI LANKA",
    "SD : SUDAN",
    "SR : SURINAME",
    "SJ : SVALBARD AND JAN MAYEN",
    "SZ : SWAZILAND",
    "SE : SWEDEN",
    "CH : SWITZERLAND",
    "SY : SYRIAN ARAB REPUBLIC",
    "TW : TAIWAN",
    "TJ : TAJIKISTAN",
    "TZ : TANZANIA, UNITED REPUBLIC OF",
    "TH : THAILAND",
    "TL : TIMOR-LESTE",
    "TG : TOGO",
    "TK : TOKELAU",
    "TO : TONGA",
    "TT : TRINIDAD AND TOBAGO",
    "TN : TUNISIA",
    "TR : TURKEY",
    "TM : TURKMENISTAN",
    "TC : TURKS AND CAICOS ISLANDS",
    "TV : TUVALU",
    "UG : UGANDA",
    "UA : UKRAINE",
    "AE : UNITED ARAB EMIRATES",
    "GB : UNITED KINGDOM",
    "US : UNITED STATES",
    "UM : UNITED STATES MINOR OUTLYING ISLANDS",
    "UY : URUGUAY",
    "UZ : UZBEKISTAN",
    "VU : VANUATU",
    "VE : VENEZUELA",
    "VN : VIET NAM",
    "VG : VIRGIN ISLANDS, BRITISH",
    "VI : VIRGIN ISLANDS, U.S.",
    "WF : WALLIS AND FUTUNA",
    "EH : WESTERN SAHARA",
    "YE : YEMEN",
    "ZM : ZAMBIA",
    "ZW : ZIMBABWE"
];


$c_codes = [
    "af : afghanistan",
    "al : albania",
    "dz : algeria",
    "as : american samoa",
    "ad : andorra",
    "ao : angola",
    "aq : antarctica",
    "ag : antigua and barbuda",
    "ar : argentina",
    "am : armenia",
    "aw : aruba",
    "au : australia",
    "at : austria",
    "az : azerbaijan",
    "bs : bahamas",
    "bh : bahrain",
    "bd : bangladesh",
    "bb : barbados",
    "by : belarus",
    "be : belgium",
    "bz : belize",
    "bj : benin",
    "bm : bermuda",
    "bt : bhutan",
    "bo : bolivia",
    "ba : bosnia and herzegovina",
    "bw : botswana",
    "bv : bouvet island",
    "br : brazil",
    "io : british indian ocean territory",
    "bn : brunei darussalam",
    "bg : bulgaria",
    "bf : burkina faso",
    "bi : burundi",
    "kh : cambodia",
    "cm : cameroon",
    "ca : canada",
    "cv : cape verde",
    "ky : cayman islands",
    "cf : central african republic",
    "td : chad",
    "cl : chile",
    "cn : china",
    "cx : christmas island",
    "cc : cocos (keeling) islands",
    "co : colombia",
    "km : comoros",
    "cg : congo",
    "cd : congo, the democratic republic of the",
    "ck : cook islands",
    "cr : costa rica",
    "ci : côte d'ivoire",
    "hr : croatia",
    "cu : cuba",
    "cy : cyprus",
    "cz : czech republic",
    "dk : denmark",
    "dj : djibouti",
    "dm : dominica",
    "do : dominican republic",
    "ec : ecuador",
    "eg : egypt",
    "sv : el salvador",
    "gq : equatorial guinea",
    "er : eritrea",
    "ee : estonia",
    "et : ethiopia",
    "fk : falkland islands (malvinas)",
    "fo : faroe islands",
    "fj : fiji",
    "fi : finland",
    "fr : france",
    "gf : french guiana",
    "pf : french polynesia",
    "tf : french southern territories",
    "ga : gabon",
    "gm : gambia",
    "ge : georgia",
    "de : germany",
    "gh : ghana",
    "gi : gibraltar",
    "gr : greece",
    "gl : greenland",
    "gd : grenada",
    "gp : guadeloupe",
    "gu : guam",
    "gt : guatemala",
    "gn : guinea",
    "gw : guinea-bissau",
    "gy : guyana",
    "ht : haiti",
    "hm : heard island and mcdonald islands",
    "hn : honduras",
    "hk : hong kong",
    "hu : hungary",
    "is : iceland",
    "in : india",
    "id : indonesia",
    "ir : iran, islamic republic of",
    "iq : iraq",
    "ie : ireland",
    "il : israel",
    "it : italy",
    "jm : jamaica",
    "jp : japan",
    "jo : jordan",
    "kz : kazakhstan",
    "ke : kenya",
    "ki : kiribati",
    "kp : korea, democratic people's republic of",
    "kr : korea, republic of",
    "kw : kuwait",
    "kg : kyrgyzstan",
    "la : lao people's democratic republic (laos)",
    "lv : latvia",
    "lb : lebanon",
    "ls : lesotho",
    "lr : liberia",
    "ly : libya, state of",
    "li : liechtenstein",
    "lt : lithuania",
    "lu : luxembourg",
    "mo : macao",
    "mk : macedonia, the former yugoslav republic of",
    "mg : madagascar",
    "mw : malawi",
    "my : malaysia",
    "mv : maldives",
    "ml : mali",
    "mt : malta",
    "mh : marshall islands",
    "mq : martinique",
    "mr : mauritania",
    "mu : mauritius",
    "yt : mayotte",
    "mx : mexico",
    "fm : micronesia, federated states of",
    "md : moldova, republic of",
    "mc : monaco",
    "mn : mongolia",
    "me : montenegro",
    "ms : montserrat",
    "ma : morocco",
    "mz : mozambique",
    "mm : myanmar",
    "na : namibia",
    "nr : nauru",
    "np : nepal, federal democratic republic of",
    "nl : netherlands",
    "an : netherlands antilles",
    "nc : new caledonia",
    "nz : new zealand",
    "ni : nicaragua",
    "ne : niger",
    "ng : nigeria",
    "nu : niue",
    "nf : norfolk island",
    "mp : northern mariana islands",
    "no : norway",
    "om : oman",
    "pk : pakistan",
    "pw : palau",
    "ps : palestine, state of",
    "pa : panama",
    "pg : papua new guinea",
    "py : paraguay",
    "pe : peru",
    "ph : philippines",
    "pn : pitcairn",
    "pl : poland",
    "pt : portugal",
    "pr : puerto rico",
    "qa : qatar",
    "re : réunion",
    "ro : romania",
    "ru : russian federation",
    "rw : rwanda",
    "sh : saint helena",
    "kn : saint kitts and nevis",
    "lc : saint lucia",
    "pm : saint pierre and miquelon",
    "vc : saint vincent and the grenadines",
    "ws : samoa",
    "sm : san marino",
    "st : sao tome and principe",
    "sa : saudi arabia",
    "sn : senegal",
    "rs : serbia",
    "sc : seychelles",
    "sl : sierra leone",
    "sg : singapore",
    "sk : slovakia",
    "si : slovenia",
    "sb : solomon islands",
    "so : somalia",
    "za : south africa",
    "gs : south georgia and the south sandwich islands",
    "ss : south sudan",
    "es : spain",
    "lk : sri lanka",
    "sd : sudan",
    "sr : suriname",
    "sj : svalbard and jan mayen",
    "sz : swaziland",
    "se : sweden",
    "ch : switzerland",
    "sy : syrian arab republic",
    "tw : taiwan",
    "tj : tajikistan",
    "tz : tanzania, united republic of",
    "th : thailand",
    "tl : timor-leste",
    "tg : togo",
    "tk : tokelau",
    "to : tonga",
    "tt : trinidad and tobago",
    "tn : tunisia",
    "tr : turkey",
    "tm : turkmenistan",
    "tc : turks and caicos islands",
    "tv : tuvalu",
    "ug : uganda",
    "ua : ukraine",
    "ae : united arab emirates",
    "gb : united kingdom",
    "us : united states",
    "um : united states minor outlying islands",
    "uy : uruguay",
    "uz : uzbekistan",
    "vu : vanuatu",
    "ve : venezuela",
    "vn : viet nam",
    "vg : virgin islands, british",
    "vi : virgin islands, u.s.",
    "wf : wallis and futuna",
    "eh : western sahara",
    "ye : yemen",
    "zm : zambia",
    "zw : zimbabwe",
];

?>