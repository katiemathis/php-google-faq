<?php

/*faq array*/
$faqs = [
    'How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?' => [
        [
            'answer' => 'The recent <a href="#" style="color:#3367d6">ruling by the Court of Justice of the European Union </a> has profound consequences for search engines in Europe. 
                The court found that certain users have the right to ask search engines like Google to remove results for queries that include the persons name. 
                To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive. * 
                Since this ruling was published on 13 May 2014, weve been working round the clock to comply. This is a complicated process because we need to assess each individual request and balance the rights of the individual to control his or her personal data with publics right to know and distribute information. * 
                If you have a removal request, please fill out this <a href="#" style="color:#3367d6">webform</a>. Youll receive an automatic reply confirming that we have received your request. 
                We will then assess your case—please note this may take some time because we have already received many such requests. 
                In evaluating your request, we will look at whether the results include outdated information about your private life. 
                Well also look at whether theres a public interest in the information remaining in our search results—for example, if it relates to financial scams, professional malpractice, criminal convictions or your public conduct as a government official (elected or unelected). 
                These are difficult judgements and as a private organization, we may not be in a good position to decide on your case. If you disagree with our decision you can contact your local DPA.*
                We look forward to working closely with data protection authorities and others over the coming months as we refine our approach. 
                The CJEUs ruling constitutes a significant change for search engines. While we are concerned about its impact, we also believe its important to respect the Courts judgment and are working hard to devise a process that complies with the law. * 
                When you search for a name, you may see a notice that says that results may have been modified in accordance with data protection law in Europe. 
                We’re showing this notice in Europe when a user searches for most names, not just pages that have been affected by a removal.',
            'subtitle' => '',
            'subtext' => ''
        ],
    ],
    'How does Google protect my privacy and keep my information secure?' => [
        [
            'answer' => 'We know security and privacy are important to you – and they are important to us, too. 
                We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.*
                We’re constantly working to ensure strong security, protect your privacy, and make Google even more effective and efficient for you. 
                We spend hundreds of millions of dollars every year on security, and employ world-renowned experts in data security to keep your information safe. 
                We also built easy-to-use privacy and security tools like Google Dashboard, 2-step verification and Ads Settings. So when it comes to the information you share with Google, you’re in control.*
                You can learn more about safety and security online, including how to protect yourself and your family online, at the <a href="#" style="color:#3367d6">Google Safety Center.</a>*
                <a href="#" style="color:#3367d6">Learn more</a> about how we keep your personal information private and safe — and put you in control.',
            'subtitle' => '',
            'subtext' => ''   
        ],
    ],
    'Why is my account associated with a country?' => [
        [
            'answer' => 'Your account is associated with a country (or territory) in the Terms of Service so that we can determine two things: <ol class="list"> 
                <li> The Google affiliate that provides the services, that processes your information, and that is responsible for complying with applicable privacy laws. Generally, Google offers its consumer services through either of two companies: <ol type="a" style="margin-left: 20px">
                <li> Google Ireland Limited, if you’re located in the European Economic Area (EU countries plus Iceland, Liechtenstein, and Norway) or Switzerland </li>
                <li> Google LLC, based in the United States, for the rest of the world </li> </ol> </li>
                <li> The version of the terms that govern our relationship, which can vary depending on local laws </li> </ol> 
                <p> Keep in mind that Google services are essentially the same regardless of the affiliate that provides the services or your country association.</p>',
            'subtitle' => 'Determining the country associated with your account',
            'subtext' => 'When you create a new account, we associate your account with a country based on where you created your Google Account. 
                For accounts at least a year old, we use the country from which you usually access Google services — typically where you’ve spent the most time in the last year.*
                Frequent travel doesn’t generally affect the country associated with your account. If you move to a new country, it can take about a year for your country association to update.*
                If the country associated with your account doesn’t correspond to your country of residence, it could be because of a difference between your country of work and residence, 
                because you’ve installed a Virtual Private Network (VPN) to mask your IP address, or because you live close to a territorial border. <a href="#" style="color:#3367d6">Contact us</a> if you think your country association is wrong.'   
        ],
    ],
    'How can I remove information about myself from Googles search results?' => [
        [
            'answer' => 'Google search results are a reflection of the content publicly available on the web. 
                Search engines cant remove content directly from websites, so removing search results from Google wouldnt remove the content from the web. 
                If you want to remove something from the web, you should <a href="#" style="color:#3367d6">contact the webmaster</a> of the site the content is posted on and ask him or her to make a change. 
                Additionally, if under European data protection law, you would like to request removal of certain information about you that appears in Googles search results, please <a href="#" style="color:#3367d6">click here.</a> 
                Once the content has been removed and Google has noted the update, the information will no longer appear in Googles search results. 
                If you have an urgent removal request, you can also visit our help page for more information.',
            'subtitle' => '',
            'subtext' => '',
        ],      
    ],
    'Are my search queries sent to websites when I click on Google Search results?' => [
        [
            'answer' => 'In some cases, yes. When you click on a search result in Google Search, your web browser also may send the Internet address, or URL, of the search results page to the destination webpage as the <a href="#" style="color:#3367d6">Referrer URL.</a> 
            The URL of the search results page may sometimes contain the search query you entered. If you are using SSL Search (Google’s encrypted search functionality), under most circumstances, your search terms will not be sent as part of the URL in the Referrer URL. 
            There are some exceptions to this behavior, such as if you are using some less popular browsers. More information on SSL Search can be found <a href="#" style="color:#3367d6">here.</a> 
            Search queries or information contained in the Referrer URL may be available via Google Analytics or an application programming interface (API). 
            In addition, advertisers may receive information relating to the exact keywords that triggered an ad click.',
            'subtitle' => '',
            'subtext' => '',
        ],           
    ]
];

/*header menu array*/
$headerMenuItems = [
    'item1' => 'Overview',
    'item2' => 'Privacy Policy',
    'item3' => 'Terms of Service',
    'item4' => 'Technologies',
    'item5' => '<span style="color:blue;padding-bottom: 3px;border-bottom:3px solid blue;font-style:bold; font-size:1.1em">FAQ</span>',

];

/*footer menu array*/
$footerMenuItems = [
    'item1' => 'Google',
    'item2' => 'About Google',
    'item3' => 'Privacy',
    'item4' => 'Terms',

]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google FAQ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- begin header -->
    <header>

    <!-- begin left header items -->
        <div class="header_left">
        <a href="#" id="header-menu"><i class="fas fa-bars menu_icon"></i></a>
        <?php
                foreach ($headerMenuItems as $item)
                    echo '<p class="header_menu_items"><a href="#" class="header_links">' .$item. '</a></p>'
        ?>
        <h2 id="faq" class="menu_item">FAQ</h2>
        </div>
    <!-- end left header items -->

    <!-- begin right header items -->
        <div class="header_right">
            <a href="#"><i class="fas fa-th menu_icon"></i></a>
            <div class="image_container">
                <img src="img/katie.jpeg" alt="user">
            </div>
        </div>

    <!-- end left header items -->
    </header>

    <!-- end header -->

    <!-- begin main content -->

    <main class="main_content">

    <!-- begin faq's -->
        <div class="faqs">
           <?php 
           foreach ($faqs as $key => $faq) {
                echo '<h3 class="question">' . $key . '</h3>';

                foreach($faq as $key => $singleFAQ) {
                    $answer = explode('*', $singleFAQ['answer']);

                    for($i=0;$i<count($answer);$i++) {
                        echo '<p class="answer">' . $answer[$i]. '</p>';
                    }
                    if ($singleFAQ['subtitle'] != '' && $singleFAQ['subtext'] != '') {
                        echo '<h4 class="subtitle">' . $singleFAQ['subtitle'] . '</h4>';
                        echo '<p class="subtext">' . $singleFAQ['subtext'] . '</p>';
                    }

                }

            } ?>
        </div>
    <!-- end faq's -->

    </main>
    <!-- end main content -->

    <!-- begin footer -->
    <footer>
        <div class="footer-container">

        <!-- begin left side footer -->
            <div class="footer_left_side">
                <?php
                    foreach ($footerMenuItems as $item)
                        echo '<p class="footer_menu_items"><a href="#" class="footer_links">' .$item. '</a><span> * </span></p>'
                ?>
            </div>
        <!-- end left side footer -->

        <!-- begin right side footer -->
            <div class="footer_right_side">
                <i class="fa fa-globe"></i>
                <select class="iCthae" id="i3" jsname="O1htCb">
                    <option value="af">Afrikaans</option>
                    <option value="id">Bahasa Indonesia</option>
                    <option value="ms">Bahasa Melayu</option>
                    <option value="ca">Català</option>
                    <option value="cs">Čeština</option>
                    <option value="da">Dansk</option>
                    <option value="de">Deutsch</option>
                    <option value="et">Eesti</option>
                    <option selected="" value="en">English</option>
                    <option value="en-GB">English (United Kingdom)</option>
                    <option value="es">Español</option>
                    <option value="es-419">Español (Latinoamérica)</option>
                    <option value="eu">Euskara</option>
                    <option value="fil">Filipino</option>
                    <option value="fr">Français</option>
                    <option value="fr-CA">Français (Canada)</option>
                    <option value="gl">Galego</option>
                    <option value="hr">Hrvatski</option>
                    <option value="zu">Isizulu</option>
                    <option value="is">Íslenska</option>
                    <option value="it">Italiano</option>
                    <option value="sw">Kiswahili</option>
                    <option value="lv">Latviešu</option>
                    <option value="lt">Lietuvių</option>
                    <option value="hu">Magyar</option>
                    <option value="nl">Nederlands</option>
                    <option value="no">Norsk</option>
                    <option value="pl">Polski</option>
                    <option value="pt-BR">Português (Brasil)</option>
                    <option value="pt-PT">Português (Portugal)</option>
                    <option value="ro">Română</option>
                    <option value="sk">Slovenčina</option>
                    <option value="sl">Slovenščina</option>
                    <option value="sr-Latn">Srpski</option>
                    <option value="fi">Suomi</option>
                    <option value="sv">Svenska</option>
                    <option value="vi">Tiếng Việt</option>
                    <option value="tr">Türkçe</option>
                    <option value="el">Ελληνικά</option>
                    <option value="bg">Български</option>
                    <option value="ru">Русский</option>
                    <option value="sr">Српски</option>
                    <option value="uk">Українська</option>
                    <option value="iw">‫עברית‬</option>
                    <option value="ur">‫اردو‬</option>
                    <option value="ar">‫العربية‬</option>
                    <option value="fa">‫فارسی‬</option>
                    <option value="am">አማርኛ</option>
                    <option value="mr">मराठी</option>
                    <option value="hi">हिन्दी</option>
                    <option value="bn">বাংলা</option>
                    <option value="gu">ગુજરાતી</option>
                    <option value="ta">தமிழ்</option>
                    <option value="te">తెలుగు</option>
                    <option value="kn">ಕನ್ನಡ</option>
                    <option value="ml">മലയാളം</option>
                    <option value="th">ไทย</option>
                    <option value="ko">한국어</option>
                    <option value="zh-HK">中文 (香港)</option>
                    <option value="zh-CN">中文（简体中文）</option>
                    <option value="zh-TW">中文（繁體中文）</option>
                    <option value="ja">日本語</option></select>

            </div>
        <!-- end right side footer -->
        </div>

    </footer>
    <!-- end footer -->
    
</body>
</html>