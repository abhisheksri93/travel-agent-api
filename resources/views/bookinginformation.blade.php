@extends('layouts.app')
@section('content')
    <section role="main" class="content-body">
        <header class="page-header">
            <div class="right-wrapper text-right">
                <ol class="breadcrumbs">
                    <li>
                        <a href="index.html">
                            <i class="fas fa-home"></i>
                        </a>
                    </li>
                    <li><span>Tables</span></li>
                    <li><span>Editable</span></li>
                </ol>
                <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
            </div>
        </header>

        <!-- start: page -->
        <section class="card">
            <header class="card-header">
                <div class="card-actions">
                    <a href="#" class="card-action card-action-toggle" data-card-toggle></a>
                </div>
                <h2 class="card-title">Add Booking</h2>
            </header>
            <div class="clearfix"></div>
            <div class="mainBox">
                <form class="informForm" id="transferForm" method="post" action="https://airportservices.ae/transferForm"
                    onsubmit="return transfervalForm();">

                    <input type="hidden" name="booking_type" id="booking_type" value="1">
                    <input type="hidden" name="locationtype" id="locationtype" value="NAP">
                    <input type="hidden" name="pickupInfo" id="pickupInfo"
                        value="ebq8vpKUlI3Uz5iufrKntsTYeKOQfHjHqOZwVFVWt9mOy49bloc">
                    <input type="hidden" name="dropupInfo" id="dropupInfo"
                        value="ebq8voJirHy-t5TZfrKnttnOlId4hqvCqtWVVFVWx8yRimqt1cXUjICUlKJZdZa4tZOTnJORTL-UoefJz4x0pYmYVpfg3bKSppjm">
                    <input type="hidden" name="distMatrix" value="aXWWl3ZRn5zh1w">
                    <input type="hidden" name="pickupDateTime" id="pickupDateTime" value="Z4mipHJgZGOll0ybWHKjlA">
                    <input type="hidden" name="returnDateTime" id="returnDateTime" value="Z4mipHJgZGOll0ybWHKjlA">
                    <input type="hidden" name="passngr" value="Z3WWl3BUVVaj">
                    <input type="hidden" name="TsFee" id="TsFee" value="Z4g">
                    <input type="hidden" name="editrefId" id="editrefId" value="">
                    <input type="hidden" name="refId" id="refId" value="">
                    <input type="hidden" name="urlRedirect" id="urlRedirect" value="">

                    <h4>&nbsp;</h4>
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading borderNone">
                                <h1 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1">
                                        Booker
                                        Details <i class="more-less glyphicon glyphicon-minus"></i> </a></h1>
                            </div>
                            <div id="tab1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-3">
                                            <h5 style="color: black;">Booker Name/Your Name</h5>
                                            <input style="width: 250px; height:50px;" type="text" id="fname"
                                                value="" name="fname" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-3">
                                            <h5 style="color: black;">Booker Email/Your Email</h5>
                                            <input style="width: 250px; height:50px;" type="email" value=""
                                                name="email" id="email" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="form-group mr-3">
                                            <h5 style="color: black;">Country Code</h5>
                                            <select style="width: 120px; height:50px;"
                                                class="form-control populate validate" name="mob_code" id="mob_code"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="">Select One</option>
                                                <option value="+93#2">(+93) - Afghanistan</option>
                                                <option value="+355#6">(+355) - Albania</option>
                                                <option value="+213#62">(+213) - Algeria</option>
                                                <option value="+1684#12">(+1684) - American Samoa</option>
                                                <option value="+376#7">(+376) - Andorra</option>
                                                <option value="+244#3">(+244) - Angola</option>
                                                <option value="+1264#4">(+1264) - Anguilla</option>
                                                <option value="+672#13">(+672) - Antarctica</option>
                                                <option value="+1268#15">(+1268) - Antigua And Barbuda</option>
                                                <option value="+54#10">(+54) - Argentina</option>
                                                <option value="+374#11">(+374) - Armenia</option>
                                                <option value="+297#1">(+297) - Aruba</option>
                                                <option value="+61#16">(+61) - Australia</option>
                                                <option value="+43#17">(+43) - Austria</option>
                                                <option value="+994#18">(+994) - Azerbaijan</option>
                                                <option value="+1242#26">(+1242) - Bahamas</option>
                                                <option value="+973#25">(+973) - Bahrain</option>
                                                <option value="+880#23">(+880) - Bangladesh</option>
                                                <option value="+1246#33">(+1246) - Barbados</option>
                                                <option value="+375#28">(+375) - Belarus</option>
                                                <option value="+32#20">(+32) - Belgium</option>
                                                <option value="+501#29">(+501) - Belize</option>
                                                <option value="+229#21">(+229) - Benin</option>
                                                <option value="+1441#30">(+1441) - Bermuda</option>
                                                <option value="+975#35">(+975) - Bhutan</option>
                                                <option value="+591#31">(+591) - Bolivia</option>
                                                <option value="+387#27">(+387) - Bosnia and Herzegovina</option>
                                                <option value="+267#37">(+267) - Botswana</option>
                                                <option value="+55#252">(+55) - Bouvet Island</option>
                                                <option value="+55#32">(+55) - Brazil</option>
                                                <option value="+246#253">(+246) - British Indian Ocean Territory
                                                </option>
                                                <option value="+1#251">(+1) - British Virgin Islands</option>
                                                <option value="+673#34">(+673) - Brunei</option>
                                                <option value="+359#24">(+359) - Bulgaria</option>
                                                <option value="+226#22">(+226) - Burkina Faso</option>
                                                <option value="+257#19">(+257) - Burundi</option>
                                                <option value="+855#115">(+855) - Cambodia</option>
                                                <option value="+237#45">(+237) - Cameroon</option>
                                                <option value="+1#39">(+1) - Canada</option>
                                                <option value="+238#50">(+238) - Cape verde</option>
                                                <option value="+1345#54">(+1345) - Cayman Islands</option>
                                                <option value="+236#38">(+236) - Central African Republic</option>
                                                <option value="+235#212">(+235) - Chad</option>
                                                <option value="+56#42">(+56) - Chile</option>
                                                <option value="+86#43">(+86) - China</option>
                                                <option value="+57#48">(+57) - Colombia</option>
                                                <option value="+269#49">(+269) - Comoros</option>
                                                <option value="+682#47">(+682) - Cook Islands</option>
                                                <option value="+506#51">(+506) - Costa Rica</option>
                                                <option value="+225#44">(+225) - Cote-d-Ivorire</option>
                                                <option value="+385#97">(+385) - Croatia</option>
                                                <option value="+53#52">(+53) - Cuba</option>
                                                <option value="+357#55">(+357) - Cyprus</option>
                                                <option value="+420#56">(+420) - Czech Republic</option>
                                                <option value="+243#248">(+243) - Democratic Republic of the Congo
                                                </option>
                                                <option value="+45#60">(+45) - Denmark</option>
                                                <option value="+253#58">(+253) - Djibouti</option>
                                                <option value="+1767#59">(+1767) - Dominica</option>
                                                <option value="+1809#61">(+1809) - Dominican Republic</option>
                                                <option value="+670#218">(+670) - East Timor</option>
                                                <option value="+593#63">(+593) - Ecuador</option>
                                                <option value="+20#64">(+20) - Egypt</option>
                                                <option value="+503#196">(+503) - El Salvador</option>
                                                <option value="+240#86">(+240) - Equatorial Guinea</option>
                                                <option value="+291#65">(+291) - Eritrea</option>
                                                <option value="+372#68">(+372) - Estonia</option>
                                                <option value="+251#69">(+251) - Ethiopia</option>
                                                <option value="+500#254">(+500) - Falkland Islands</option>
                                                <option value="+298#255">(+298) - Faroe Islands</option>
                                                <option value="+679#71">(+679) - Fiji</option>
                                                <option value="+358#70">(+358) - Finland</option>
                                                <option value="+33#73">(+33) - France</option>
                                                <option value="+594#91">(+594) - French Guiana</option>
                                                <option value="+689#181">(+689) - French Polynesia</option>
                                                <option value="+262#14">(+262) - French Southern Territories
                                                </option>
                                                <option value="+241#77">(+241) - Gabon</option>
                                                <option value="+220#84">(+220) - Gambia</option>
                                                <option value="+995#79">(+995) - Georgia</option>
                                                <option value="+49#57">(+49) - Germany</option>
                                                <option value="+233#80">(+233) - Ghana</option>
                                                <option value="+350#81">(+350) - Gibraltar</option>
                                                <option value="+30#87">(+30) - Greece</option>
                                                <option value="+299#89">(+299) - Greenland</option>
                                                <option value="+1473#88">(+1473) - Grenada</option>
                                                <option value="+590#83">(+590) - Guadeloupe</option>
                                                <option value="+1671#256">(+1671) - Guam</option>
                                                <option value="+502#90">(+502) - Guatemala</option>
                                                <option value="+224#82">(+224) - Guinea</option>
                                                <option value="+245#85">(+245) - Guinea Bissau</option>
                                                <option value="+592#93">(+592) - Guyana</option>
                                                <option value="+509#98">(+509) - Haiti</option>
                                                <option value="+0#257">(+0) - Heard Island and Mcdonald Islands
                                                </option>
                                                <option value="+504#96">(+504) - Honduras</option>
                                                <option value="+852#249">(+852) - Hong Kong</option>
                                                <option value="+36#99">(+36) - Hungary</option>
                                                <option value="+354#106">(+354) - Iceland</option>
                                                <option value="+91#101">(+91) - India</option>
                                                <option value="+62#100">(+62) - Indonesia</option>
                                                <option value="+98#104">(+98) - Iran</option>
                                                <option value="+964#105">(+964) - Iraq</option>
                                                <option value="+353#103">(+353) - Ireland</option>
                                                <option value="+44#258">(+44) - Isle of Man</option>
                                                <option value="+972#107">(+972) - Israel</option>
                                                <option value="+39#108">(+39) - Italy</option>
                                                <option value="+1876#109">(+1876) - Jamaica</option>
                                                <option value="+81#111">(+81) - Japan</option>
                                                <option value="+962#110">(+962) - Jordan</option>
                                                <option value="+7#112">(+7) - Kazakhstan</option>
                                                <option value="+254#113">(+254) - Kenya</option>
                                                <option value="+686#116">(+686) - Kiribati</option>
                                                <option value="+965#119">(+965) - Kuwait</option>
                                                <option value="+996#114">(+996) - Kyrgyzstan</option>
                                                <option value="+856#120">(+856) - Laos</option>
                                                <option value="+371#130">(+371) - Latvia</option>
                                                <option value="+961#121">(+961) - Lebanon</option>
                                                <option value="+266#127">(+266) - Lesotho</option>
                                                <option value="+231#122">(+231) - Liberia</option>
                                                <option value="+218#123">(+218) - Libya</option>
                                                <option value="+423#125">(+423) - Liechtenstein</option>
                                                <option value="+370#128">(+370) - Lithuania</option>
                                                <option value="+352#129">(+352) - Luxembourg</option>
                                                <option value="+853#250">(+853) - Macau</option>
                                                <option value="+389#139">(+389) - Macedonia</option>
                                                <option value="+261#135">(+261) - Madagascar</option>
                                                <option value="+265#151">(+265) - Malawi</option>
                                                <option value="+60#152">(+60) - Malaysia</option>
                                                <option value="+960#136">(+960) - Maldives</option>
                                                <option value="+223#140">(+223) - Mali</option>
                                                <option value="+356#141">(+356) - Malta</option>
                                                <option value="+692#138">(+692) - Marshall Islands</option>
                                                <option value="+596#149">(+596) - Martinique</option>
                                                <option value="+222#147">(+222) - Mauritania</option>
                                                <option value="+230#150">(+230) - Mauritius</option>
                                                <option value="+269#153">(+269) - Mayotte</option>
                                                <option value="+52#137">(+52) - Mexico</option>
                                                <option value="+691#75">(+691) - Micronesia</option>
                                                <option value="+373#134">(+373) - Moldova</option>
                                                <option value="+377#133">(+377) - Monaco</option>
                                                <option value="+976#144">(+976) - Mongolia</option>
                                                <option value="+382#143">(+382) - Montenegro</option>
                                                <option value="+1664#148">(+1664) - Montserrat</option>
                                                <option value="+212#132">(+212) - Morocco</option>
                                                <option value="+258#146">(+258) - Mozambique</option>
                                                <option value="+95#142">(+95) - Myanmar</option>
                                                <option value="+264#154">(+264) - Namibia</option>
                                                <option value="+674#164">(+674) - Nauru</option>
                                                <option value="+977#163">(+977) - Nepal</option>
                                                <option value="+31#161">(+31) - Netherlands</option>
                                                <option value="+599#8">(+599) - Netherlands Antilles</option>
                                                <option value="+687#259">(+687) - New Caledonia</option>
                                                <option value="+64#166">(+64) - New Zealand</option>
                                                <option value="+505#159">(+505) - Nicaragua</option>
                                                <option value="+227#156">(+227) - Niger</option>
                                                <option value="+234#158">(+234) - Nigeria</option>
                                                <option value="+683#260">(+683) - Niue</option>
                                                <option value="+672#261">(+672) - Norfolk Island</option>
                                                <option value="+850#177">(+850) - North Korea</option>
                                                <option value="+1670#262">(+1670) - Northern Mariana Islands
                                                </option>
                                                <option value="+47#162">(+47) - Norway</option>
                                                <option value="+968#167">(+968) - Oman</option>
                                                <option value="+92#168">(+92) - Pakistan</option>
                                                <option value="+680#173">(+680) - Palau</option>
                                                <option value="+970#180">(+970) - Palestine</option>
                                                <option value="+507#169">(+507) - Panama</option>
                                                <option value="+675#174">(+675) - Papua New Guinea</option>
                                                <option value="+595#179">(+595) - Paraguay</option>
                                                <option value="+51#171">(+51) - Peru</option>
                                                <option value="+63#172">(+63) - Philippines</option>
                                                <option value="+64#263">(+64) - Pitcairn</option>
                                                <option value="+48#175">(+48) - Poland</option>
                                                <option value="+351#178">(+351) - Portugal</option>
                                                <option value="+1787#176">(+1787) - Puerto Rico</option>
                                                <option value="+974#182">(+974) - Qatar</option>
                                                <option value="+242#46">(+242) - Republic Of Congo</option>
                                                <option value="+262#183">(+262) - Reunion</option>
                                                <option value="+40#184">(+40) - Romania</option>
                                                <option value="+7#185">(+7) - Russia</option>
                                                <option value="+250#186">(+250) - Rwanda</option>
                                                <option value="+290#192">(+290) - Saint Helena</option>
                                                <option value="+1869#117">(+1869) - Saint Kitts And Nevis</option>
                                                <option value="+1758#124">(+1758) - Saint Lucia</option>
                                                <option value="+508#264">(+508) - Saint Pierre and Miquelon
                                                </option>
                                                <option value="+1784#234">(+1784) - Saint Vincent And The
                                                    Grenadines</option>
                                                <option value="+684#241">(+684) - Samoa</option>
                                                <option value="+378#197">(+378) - San Marino</option>
                                                <option value="+239#202">(+239) - Sao Tome And Principe</option>
                                                <option value="+966#187">(+966) - Saudi Arabia</option>
                                                <option value="+221#189">(+221) - Senegal</option>
                                                <option value="+381#200">(+381) - Serbia</option>
                                                <option value="+248#208">(+248) - Seychelles</option>
                                                <option value="+232#195">(+232) - Sierra Leone</option>
                                                <option value="+65#190">(+65) - Singapore</option>
                                                <option value="+421#204">(+421) - Slovakia</option>
                                                <option value="+386#205">(+386) - Slovenia</option>
                                                <option value="+677#194">(+677) - Solomon Islands</option>
                                                <option value="+252#198">(+252) - Somalia</option>
                                                <option value="+27#245">(+27) - South Africa</option>
                                                <option value="+500#191">(+500) - South Georgia And The South
                                                    Sandwich Islands</option>
                                                <option value="+82#118">(+82) - South Korea</option>
                                                <option value="+211#201">(+211) - South Sudan</option>
                                                <option value="+34#67">(+34) - Spain</option>
                                                <option value="+94#126">(+94) - Sri Lanka</option>
                                                <option value="+249#188">(+249) - Sudan</option>
                                                <option value="+597#203">(+597) - Suriname</option>
                                                <option value="+47#193">(+47) - Svalbard and Jan Mayen</option>
                                                <option value="+268#207">(+268) - Swaziland</option>
                                                <option value="+46#206">(+46) - Sweden</option>
                                                <option value="+41#41">(+41) - Switzerland</option>
                                                <option value="+963#209">(+963) - Syria</option>
                                                <option value="+886#224">(+886) - Taiwan</option>
                                                <option value="+992#215">(+992) - Tajikistan</option>
                                                <option value="+255#225">(+255) - Tanzania</option>
                                                <option value="+66#214">(+66) - Thailand</option>
                                                <option value="+670#265">(+670) - Timor-leste</option>
                                                <option value="+228#213">(+228) - Togo</option>
                                                <option value="+690#266">(+690) - Tokelau</option>
                                                <option value="+676#219">(+676) - Tonga</option>
                                                <option value="+1868#220">(+1868) - Trinidad And Tobago</option>
                                                <option value="+216#221">(+216) - Tunisia</option>
                                                <option value="+90#222">(+90) - Turkey</option>
                                                <option value="+7370#217">(+7370) - Turkmenistan</option>
                                                <option value="+1649#211">(+1649) - Turks And Caicos Islands
                                                </option>
                                                <option value="+688#223">(+688) - Tuvalu</option>
                                                <option value="+256#226">(+256) - Uganda</option>
                                                <option value="+380#227">(+380) - Ukraine</option>
                                                <option value="+971#9">(+971) - United Arab Emirates</option>
                                                <option value="+44#78">(+44) - United Kingdom</option>
                                                <option value="+1#231">(+1) - United States Of America</option>
                                                <option value="+598#230">(+598) - Uruguay</option>
                                                <option value="+998#232">(+998) - Uzbekistan</option>
                                                <option value="+678#239">(+678) - Vanuatu</option>
                                                <option value="+39#233">(+39) - Vatican City</option>
                                                <option value="+58#235">(+58) - Venezuela</option>
                                                <option value="+84#238">(+84) - Vietnam</option>
                                                <option value="+1#267">(+1) - Virgin Islands</option>
                                                <option value="+681#268">(+681) - Wallis and Futuna</option>
                                                <option value="+212#66">(+212) - Western Sahara</option>
                                                <option value="+967#243">(+967) - Yemen</option>
                                                <option value="+260#246">(+260) - Zambia</option>
                                                <option value="+263#247">(+263) - Zimbabwe</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <h5 style="color: black;">Booker Mobile</h5>
                                            <input type="text" style="width: 200px; height:50px;" value=""
                                                class="form-control" name="mobile" id="mobile"
                                                placeholder="Mobile No" onClick="removeError(this.id);"
                                                autocomplete="off"
                                                onKeyUp="if (/\D/g.test(this.value))
                                                                       this.value = this.value.replace(/\D/g, '')">
                                        </div>
                                    </div>
                                    <!-- details -->
                                </div>
                                <!-- details -->
                                <div class="details">
                                    <div class="col-2">&nbsp;</div>
                                    <div class="col-2">
                                        <label>&nbsp;</label>
                                        <a href="#tab2" class="btn-success" onclick="return next1();">NEXT</a>
                                    </div>
                                </div>
                                <!-- details -->
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading borderNone">
                                <h1 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#tab2"> Passenger
                                        Details <i class="more-less glyphicon glyphicon-plus"></i> </a></h1>
                            </div>
                            <div id="tab2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class=" row">
                                        <div class="col-3">
                                            <h5>Passenger Name (as per Passport)</h5>
                                            <input style="width: 250px; height:50px;" type="text" id="pname"
                                                value="" name="pname" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="col-3 ">
                                            <h5>Passenger Email ID</h5>
                                            <input style="width: 250px; height:50px;" type="email" value=""
                                                name="pemail" id="pemail" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="form-group mr-3">
                                            <h5 style="color: black;">Country Code</h5>
                                            <select style="width: 120px; height:50px;"
                                                class="form-control populate validate" name="mob_code" id="mob_code"
                                                tabindex="-1" aria-hidden="true">
                                                <option value="">Select One</option>
                                                <option value="+93#2">(+93) - Afghanistan</option>
                                                <option value="+355#6">(+355) - Albania</option>
                                                <option value="+213#62">(+213) - Algeria</option>
                                                <option value="+1684#12">(+1684) - American Samoa</option>
                                                <option value="+376#7">(+376) - Andorra</option>
                                                <option value="+244#3">(+244) - Angola</option>
                                                <option value="+1264#4">(+1264) - Anguilla</option>
                                                <option value="+672#13">(+672) - Antarctica</option>
                                                <option value="+1268#15">(+1268) - Antigua And Barbuda</option>
                                                <option value="+54#10">(+54) - Argentina</option>
                                                <option value="+374#11">(+374) - Armenia</option>
                                                <option value="+297#1">(+297) - Aruba</option>
                                                <option value="+61#16">(+61) - Australia</option>
                                                <option value="+43#17">(+43) - Austria</option>
                                                <option value="+994#18">(+994) - Azerbaijan</option>
                                                <option value="+1242#26">(+1242) - Bahamas</option>
                                                <option value="+973#25">(+973) - Bahrain</option>
                                                <option value="+880#23">(+880) - Bangladesh</option>
                                                <option value="+1246#33">(+1246) - Barbados</option>
                                                <option value="+375#28">(+375) - Belarus</option>
                                                <option value="+32#20">(+32) - Belgium</option>
                                                <option value="+501#29">(+501) - Belize</option>
                                                <option value="+229#21">(+229) - Benin</option>
                                                <option value="+1441#30">(+1441) - Bermuda</option>
                                                <option value="+975#35">(+975) - Bhutan</option>
                                                <option value="+591#31">(+591) - Bolivia</option>
                                                <option value="+387#27">(+387) - Bosnia and Herzegovina</option>
                                                <option value="+267#37">(+267) - Botswana</option>
                                                <option value="+55#252">(+55) - Bouvet Island</option>
                                                <option value="+55#32">(+55) - Brazil</option>
                                                <option value="+246#253">(+246) - British Indian Ocean Territory
                                                </option>
                                                <option value="+1#251">(+1) - British Virgin Islands</option>
                                                <option value="+673#34">(+673) - Brunei</option>
                                                <option value="+359#24">(+359) - Bulgaria</option>
                                                <option value="+226#22">(+226) - Burkina Faso</option>
                                                <option value="+257#19">(+257) - Burundi</option>
                                                <option value="+855#115">(+855) - Cambodia</option>
                                                <option value="+237#45">(+237) - Cameroon</option>
                                                <option value="+1#39">(+1) - Canada</option>
                                                <option value="+238#50">(+238) - Cape verde</option>
                                                <option value="+1345#54">(+1345) - Cayman Islands</option>
                                                <option value="+236#38">(+236) - Central African Republic</option>
                                                <option value="+235#212">(+235) - Chad</option>
                                                <option value="+56#42">(+56) - Chile</option>
                                                <option value="+86#43">(+86) - China</option>
                                                <option value="+57#48">(+57) - Colombia</option>
                                                <option value="+269#49">(+269) - Comoros</option>
                                                <option value="+682#47">(+682) - Cook Islands</option>
                                                <option value="+506#51">(+506) - Costa Rica</option>
                                                <option value="+225#44">(+225) - Cote-d-Ivorire</option>
                                                <option value="+385#97">(+385) - Croatia</option>
                                                <option value="+53#52">(+53) - Cuba</option>
                                                <option value="+357#55">(+357) - Cyprus</option>
                                                <option value="+420#56">(+420) - Czech Republic</option>
                                                <option value="+243#248">(+243) - Democratic Republic of the Congo
                                                </option>
                                                <option value="+45#60">(+45) - Denmark</option>
                                                <option value="+253#58">(+253) - Djibouti</option>
                                                <option value="+1767#59">(+1767) - Dominica</option>
                                                <option value="+1809#61">(+1809) - Dominican Republic</option>
                                                <option value="+670#218">(+670) - East Timor</option>
                                                <option value="+593#63">(+593) - Ecuador</option>
                                                <option value="+20#64">(+20) - Egypt</option>
                                                <option value="+503#196">(+503) - El Salvador</option>
                                                <option value="+240#86">(+240) - Equatorial Guinea</option>
                                                <option value="+291#65">(+291) - Eritrea</option>
                                                <option value="+372#68">(+372) - Estonia</option>
                                                <option value="+251#69">(+251) - Ethiopia</option>
                                                <option value="+500#254">(+500) - Falkland Islands</option>
                                                <option value="+298#255">(+298) - Faroe Islands</option>
                                                <option value="+679#71">(+679) - Fiji</option>
                                                <option value="+358#70">(+358) - Finland</option>
                                                <option value="+33#73">(+33) - France</option>
                                                <option value="+594#91">(+594) - French Guiana</option>
                                                <option value="+689#181">(+689) - French Polynesia</option>
                                                <option value="+262#14">(+262) - French Southern Territories
                                                </option>
                                                <option value="+241#77">(+241) - Gabon</option>
                                                <option value="+220#84">(+220) - Gambia</option>
                                                <option value="+995#79">(+995) - Georgia</option>
                                                <option value="+49#57">(+49) - Germany</option>
                                                <option value="+233#80">(+233) - Ghana</option>
                                                <option value="+350#81">(+350) - Gibraltar</option>
                                                <option value="+30#87">(+30) - Greece</option>
                                                <option value="+299#89">(+299) - Greenland</option>
                                                <option value="+1473#88">(+1473) - Grenada</option>
                                                <option value="+590#83">(+590) - Guadeloupe</option>
                                                <option value="+1671#256">(+1671) - Guam</option>
                                                <option value="+502#90">(+502) - Guatemala</option>
                                                <option value="+224#82">(+224) - Guinea</option>
                                                <option value="+245#85">(+245) - Guinea Bissau</option>
                                                <option value="+592#93">(+592) - Guyana</option>
                                                <option value="+509#98">(+509) - Haiti</option>
                                                <option value="+0#257">(+0) - Heard Island and Mcdonald Islands
                                                </option>
                                                <option value="+504#96">(+504) - Honduras</option>
                                                <option value="+852#249">(+852) - Hong Kong</option>
                                                <option value="+36#99">(+36) - Hungary</option>
                                                <option value="+354#106">(+354) - Iceland</option>
                                                <option value="+91#101">(+91) - India</option>
                                                <option value="+62#100">(+62) - Indonesia</option>
                                                <option value="+98#104">(+98) - Iran</option>
                                                <option value="+964#105">(+964) - Iraq</option>
                                                <option value="+353#103">(+353) - Ireland</option>
                                                <option value="+44#258">(+44) - Isle of Man</option>
                                                <option value="+972#107">(+972) - Israel</option>
                                                <option value="+39#108">(+39) - Italy</option>
                                                <option value="+1876#109">(+1876) - Jamaica</option>
                                                <option value="+81#111">(+81) - Japan</option>
                                                <option value="+962#110">(+962) - Jordan</option>
                                                <option value="+7#112">(+7) - Kazakhstan</option>
                                                <option value="+254#113">(+254) - Kenya</option>
                                                <option value="+686#116">(+686) - Kiribati</option>
                                                <option value="+965#119">(+965) - Kuwait</option>
                                                <option value="+996#114">(+996) - Kyrgyzstan</option>
                                                <option value="+856#120">(+856) - Laos</option>
                                                <option value="+371#130">(+371) - Latvia</option>
                                                <option value="+961#121">(+961) - Lebanon</option>
                                                <option value="+266#127">(+266) - Lesotho</option>
                                                <option value="+231#122">(+231) - Liberia</option>
                                                <option value="+218#123">(+218) - Libya</option>
                                                <option value="+423#125">(+423) - Liechtenstein</option>
                                                <option value="+370#128">(+370) - Lithuania</option>
                                                <option value="+352#129">(+352) - Luxembourg</option>
                                                <option value="+853#250">(+853) - Macau</option>
                                                <option value="+389#139">(+389) - Macedonia</option>
                                                <option value="+261#135">(+261) - Madagascar</option>
                                                <option value="+265#151">(+265) - Malawi</option>
                                                <option value="+60#152">(+60) - Malaysia</option>
                                                <option value="+960#136">(+960) - Maldives</option>
                                                <option value="+223#140">(+223) - Mali</option>
                                                <option value="+356#141">(+356) - Malta</option>
                                                <option value="+692#138">(+692) - Marshall Islands</option>
                                                <option value="+596#149">(+596) - Martinique</option>
                                                <option value="+222#147">(+222) - Mauritania</option>
                                                <option value="+230#150">(+230) - Mauritius</option>
                                                <option value="+269#153">(+269) - Mayotte</option>
                                                <option value="+52#137">(+52) - Mexico</option>
                                                <option value="+691#75">(+691) - Micronesia</option>
                                                <option value="+373#134">(+373) - Moldova</option>
                                                <option value="+377#133">(+377) - Monaco</option>
                                                <option value="+976#144">(+976) - Mongolia</option>
                                                <option value="+382#143">(+382) - Montenegro</option>
                                                <option value="+1664#148">(+1664) - Montserrat</option>
                                                <option value="+212#132">(+212) - Morocco</option>
                                                <option value="+258#146">(+258) - Mozambique</option>
                                                <option value="+95#142">(+95) - Myanmar</option>
                                                <option value="+264#154">(+264) - Namibia</option>
                                                <option value="+674#164">(+674) - Nauru</option>
                                                <option value="+977#163">(+977) - Nepal</option>
                                                <option value="+31#161">(+31) - Netherlands</option>
                                                <option value="+599#8">(+599) - Netherlands Antilles</option>
                                                <option value="+687#259">(+687) - New Caledonia</option>
                                                <option value="+64#166">(+64) - New Zealand</option>
                                                <option value="+505#159">(+505) - Nicaragua</option>
                                                <option value="+227#156">(+227) - Niger</option>
                                                <option value="+234#158">(+234) - Nigeria</option>
                                                <option value="+683#260">(+683) - Niue</option>
                                                <option value="+672#261">(+672) - Norfolk Island</option>
                                                <option value="+850#177">(+850) - North Korea</option>
                                                <option value="+1670#262">(+1670) - Northern Mariana Islands
                                                </option>
                                                <option value="+47#162">(+47) - Norway</option>
                                                <option value="+968#167">(+968) - Oman</option>
                                                <option value="+92#168">(+92) - Pakistan</option>
                                                <option value="+680#173">(+680) - Palau</option>
                                                <option value="+970#180">(+970) - Palestine</option>
                                                <option value="+507#169">(+507) - Panama</option>
                                                <option value="+675#174">(+675) - Papua New Guinea</option>
                                                <option value="+595#179">(+595) - Paraguay</option>
                                                <option value="+51#171">(+51) - Peru</option>
                                                <option value="+63#172">(+63) - Philippines</option>
                                                <option value="+64#263">(+64) - Pitcairn</option>
                                                <option value="+48#175">(+48) - Poland</option>
                                                <option value="+351#178">(+351) - Portugal</option>
                                                <option value="+1787#176">(+1787) - Puerto Rico</option>
                                                <option value="+974#182">(+974) - Qatar</option>
                                                <option value="+242#46">(+242) - Republic Of Congo</option>
                                                <option value="+262#183">(+262) - Reunion</option>
                                                <option value="+40#184">(+40) - Romania</option>
                                                <option value="+7#185">(+7) - Russia</option>
                                                <option value="+250#186">(+250) - Rwanda</option>
                                                <option value="+290#192">(+290) - Saint Helena</option>
                                                <option value="+1869#117">(+1869) - Saint Kitts And Nevis</option>
                                                <option value="+1758#124">(+1758) - Saint Lucia</option>
                                                <option value="+508#264">(+508) - Saint Pierre and Miquelon
                                                </option>
                                                <option value="+1784#234">(+1784) - Saint Vincent And The
                                                    Grenadines</option>
                                                <option value="+684#241">(+684) - Samoa</option>
                                                <option value="+378#197">(+378) - San Marino</option>
                                                <option value="+239#202">(+239) - Sao Tome And Principe</option>
                                                <option value="+966#187">(+966) - Saudi Arabia</option>
                                                <option value="+221#189">(+221) - Senegal</option>
                                                <option value="+381#200">(+381) - Serbia</option>
                                                <option value="+248#208">(+248) - Seychelles</option>
                                                <option value="+232#195">(+232) - Sierra Leone</option>
                                                <option value="+65#190">(+65) - Singapore</option>
                                                <option value="+421#204">(+421) - Slovakia</option>
                                                <option value="+386#205">(+386) - Slovenia</option>
                                                <option value="+677#194">(+677) - Solomon Islands</option>
                                                <option value="+252#198">(+252) - Somalia</option>
                                                <option value="+27#245">(+27) - South Africa</option>
                                                <option value="+500#191">(+500) - South Georgia And The South
                                                    Sandwich Islands</option>
                                                <option value="+82#118">(+82) - South Korea</option>
                                                <option value="+211#201">(+211) - South Sudan</option>
                                                <option value="+34#67">(+34) - Spain</option>
                                                <option value="+94#126">(+94) - Sri Lanka</option>
                                                <option value="+249#188">(+249) - Sudan</option>
                                                <option value="+597#203">(+597) - Suriname</option>
                                                <option value="+47#193">(+47) - Svalbard and Jan Mayen</option>
                                                <option value="+268#207">(+268) - Swaziland</option>
                                                <option value="+46#206">(+46) - Sweden</option>
                                                <option value="+41#41">(+41) - Switzerland</option>
                                                <option value="+963#209">(+963) - Syria</option>
                                                <option value="+886#224">(+886) - Taiwan</option>
                                                <option value="+992#215">(+992) - Tajikistan</option>
                                                <option value="+255#225">(+255) - Tanzania</option>
                                                <option value="+66#214">(+66) - Thailand</option>
                                                <option value="+670#265">(+670) - Timor-leste</option>
                                                <option value="+228#213">(+228) - Togo</option>
                                                <option value="+690#266">(+690) - Tokelau</option>
                                                <option value="+676#219">(+676) - Tonga</option>
                                                <option value="+1868#220">(+1868) - Trinidad And Tobago</option>
                                                <option value="+216#221">(+216) - Tunisia</option>
                                                <option value="+90#222">(+90) - Turkey</option>
                                                <option value="+7370#217">(+7370) - Turkmenistan</option>
                                                <option value="+1649#211">(+1649) - Turks And Caicos Islands
                                                </option>
                                                <option value="+688#223">(+688) - Tuvalu</option>
                                                <option value="+256#226">(+256) - Uganda</option>
                                                <option value="+380#227">(+380) - Ukraine</option>
                                                <option value="+971#9">(+971) - United Arab Emirates</option>
                                                <option value="+44#78">(+44) - United Kingdom</option>
                                                <option value="+1#231">(+1) - United States Of America</option>
                                                <option value="+598#230">(+598) - Uruguay</option>
                                                <option value="+998#232">(+998) - Uzbekistan</option>
                                                <option value="+678#239">(+678) - Vanuatu</option>
                                                <option value="+39#233">(+39) - Vatican City</option>
                                                <option value="+58#235">(+58) - Venezuela</option>
                                                <option value="+84#238">(+84) - Vietnam</option>
                                                <option value="+1#267">(+1) - Virgin Islands</option>
                                                <option value="+681#268">(+681) - Wallis and Futuna</option>
                                                <option value="+212#66">(+212) - Western Sahara</option>
                                                <option value="+967#243">(+967) - Yemen</option>
                                                <option value="+260#246">(+260) - Zambia</option>
                                                <option value="+263#247">(+263) - Zimbabwe</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <h5 style="color: black;">Passenger Mobile</h5>
                                            <input type="text" style="width: 200px; height:50px;" value=""
                                                class="form-control" name="mobile" id="mobile"
                                                placeholder="Mobile No" onClick="removeError(this.id);"
                                                autocomplete="off"
                                                onKeyUp="if (/\D/g.test(this.value))
                                                                       this.value = this.value.replace(/\D/g, '')">
                                        </div>
                                    </div>
                                    <div class="details">
                                        <span class="tNc"><input type="checkbox" id="passDet" name="passDet">Make passenger details same as Booker details</span>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="col-2">&nbsp;</div>
                                    <div class="col-2">
                                        <label>&nbsp;</label>
                                        <a href="#tab3" class="btn-success" onclick="return next2();">NEXT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading borderNone">
                                <h1 class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                                        href="#tab3"> Flight Details <i class="more-less glyphicon glyphicon-plus"></i>
                                    </a></h1>
                            </div>
                            <div id="tab3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="form-group col-3">
                                            <h5>Airport Name</h5>
                                            <input style="width: 250px; height:50px;" type="text"
                                                name="j1_airport_name" id="autocomplete" class="form-control"
                                                placeholder="Enter Airport Name">
                                        </div>
                                        <div class="form-group col-3">
                                            <h5>Flight Number</h5>
                                            <input style="width: 250px; height:50px;" type="text"
                                                name="j1_flight_number" id="autocomplete" class="form-control"
                                                placeholder="Enter Airport Name">
                                        </div>
                                        <div class="form-group col-3">
                                            <h5>Airline Name</h5>
                                            <input style="width: 250px; height:50px;" type="text"
                                                name="j1_airline_number" id="autocomplete" class="form-control"
                                                placeholder="Enter Airport Name">
                                        </div>
                                    </div>
                                    <!-- details -->
                                    <div class="details">
                                        <span class="tNc"><input type="checkbox" id="termsAndCondion"
                                                name="termsAndCondion"> <a
                                                href="https://airportservices.ae/termsAndCondition" target="_blank"
                                                class="modalBtn">I agree to the Terms & Conditions</a></span><br>
                                        <span class="tNc"><input type="checkbox" id="privacyPolicy"
                                                name="privacyPolicy"> <a href="https://airportservices.ae/privacy-policy"
                                                class="modalBtn" target="_blank" class="modalBtn">I have read and accept
                                                the Privacy Policy & the GDPR Privacy Notice</a></span><br>
                                        <span class="tNc"><input type="checkbox" id="news_letter" name="news_letter"
                                                value="Y"> Send me more information about Airport Services and other
                                            travel services & offers</span>
                                    </div>
                                    <input type="submit" value="Submit" name="transfersbt" id="transfersbt"
                                        class="btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </section>
        <!-- end: page -->
    </section>
    </div>


    </section>
@endsection
<script type="text/javascript">
    function ShowHideDiv() {
        var ddlPassport = document.getElementById("ddlPassport");
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type='text/javascript'
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDHvjFk37MOLVvM4Sxev9Kx9NrKusGEVok&libraries=places&callback=initAutocomplete'>
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#latitudeArea").addClass("d-none");
        $("#longtitudeArea").addClass("d-none");
    });
</script>
<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', initialize);

    function initialize() {
        var input = document.getElementById('autocomplete')
        var autocomplete = new google.maps.places.Autocomplete(input)
        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace()
            $('#latitude').val(place.geometry['location'].lat())
            $('#longitude').val(place.geometry['location'].lng())
            $("#latitudeArea").removeClass("d-none")
            $("#longtitudeArea").removeClass("d-none")
        });
    }
</script>
