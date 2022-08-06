<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),
    'rosette' => [
        'key' => env('ROSETTE_KEY', '5f2d29d29cdf4e886f6a6cff627b3255'),
        'ping_url' => 'https://api.rosette.com/rest/v1/ping/',
        'entity_extraction' => 'https://api.rosette.com/rest/v1/entities',
        'sentiment_extraction' => 'https://api.rosette.com/rest/v1/sentiment',
    ],
    'admin_attr' => [
        'name' => 'admin',
        'email' => 'kenaf@admin.com',
        'password' => '123456'
    ],
    'users' => [
        [
            'name' => 'kenaf',
            'email' => 'kenaf@user.com',
            'password' => '123456'
        ]
    ],
    'allowed_extensions' => [
        'JPG', 'PNG', 'png', 'jpg', 'jpeg', 'jiff'
    ],
    'customer' => 'Customer',
    'admin' => 'Admin',
    'user_created_account_message' => 'User account has been created',
    'credentials_not_matched' => 'Provided credentials does not match',
    'feed_dummy_data' => [
        "data1" => [
            "url" => "https://www.nytimes.com/2021/09/07/technology/in-silicon-valley-criminal-prosecutors-see-no-evil.html",
            "probability" => 0.9790333,
            "headline" => "In Silicon Valley, Criminal Prosecutors See No Evil",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://static01.nyt.com/images/2021/09/07/business/07techcrimes-1/07techcrimes-1-facebookJumbo.jpg",
            "images" => [
                "https://static01.nyt.com/images/2021/09/07/business/07techcrimes-1/merlin_193960575_b2da9fc1-f31f-405b-8b7a-defd30a8a981-articleLarge.jpg?quality=75&auto=webp&disable=upscale",
                "https://static01.nyt.com/images/2021/09/07/business/07techcrimes-1/merlin_193960575_b2da9fc1-f31f-405b-8b7a-defd30a8a981-mobileMasterAt3x.jpg?quality=75&auto=webp&disable=upscale&width=600",
                "https://static01.nyt.com/images/2021/08/25/business/00holmes-sidebar1/00holmes-sidebar1-square320.jpg",
                "https://static01.nyt.com/images/2021/08/25/business/00holmes-sidebar1/00holmes-sidebar1-blog480-v2.jpg"
            ],
            "description" => "The Elizabeth Holmes fraud trial is set to be a major spectacle, but tech executives generally get a pass when it comes to wrongdoing.",
            "articleBody" => "SAN FRANCISCO \u2014 The coronavirus pandemic has helped Silicon Valley companies in many ways, from bringing them hordes of new customers to weakening the competition to juicing the bottom line.\n\nHere\u2019s a less obvious benefit: the threat of criminal prosecution has nearly disappeared.\n\nThat fact is obscured by the case against Elizabeth Holmes, the founder of the defunct blood-testing company Theranos and the most prominent executive to face criminal fraud charges in the history of Silicon Valley. Her trial, with opening statements set to begin on Wednesday, raises issues of deception, gender, transparency, out-of-control hype and the sartorial influence of the Apple co-founder Steve Jobs, whose style Ms. Holmes mimicked.\n\nBut behind the spectacle is the reality that criminal prosecutions in Silicon Valley are a rarity. Even a guilty verdict against Ms. Holmes is unlikely to change that.\n\nFederal prosecutors in Northern California took on only 57 white-collar crime cases in the 2020 fiscal year, down from 94 in 2019, according to researchers. Although 2021 is likely to show a rebound, the total will still be far below the heyday of prosecutorial action in 1995, when 350 cases were brought.\n\nAs Silicon Valley mushroomed from an obscure specialty industry to the wealthiest and most influential collection of companies in history, prosecutors have occasionally promised more attention to it. And there have been brief spikes in cases. They never last.\n\nNationally, there has been a long-term trend away from white-collar prosecutions. The shift was accelerated by the Sept. 11 attacks, which reallocated investigative resources to the fight against terrorism. But the drop in Northern California was nearly twice as steep from 1995 to 2019 as it was in the Southern District of New York, which has jurisdiction over Wall Street, according to data from the Transactional Records Access Clearinghouse at Syracuse University.\n\nA spokesman for Stephanie Hinds, the acting U.S. attorney for the Northern District of California, the office that is prosecuting Ms. Holmes\u2019s case, declined to comment.\n\nWho\u2019s Who in the Elizabeth Holmes Trial\n\nErin Woo\ud83d\udccdReporting from San Jose, Calif.\n\nElizabeth Holmes, the disgraced founder of the blood testing start-up Theranos, stands trial soon for two counts of conspiracy to commit wire fraud and 10 counts of wire fraud.\n\nHere are some of the key figures in the case \u2192\n\nItem 1 of 9\n\nOne possible explanation for the decline is that there is simply less crime in Silicon Valley these days. Even before the pandemic, tech was booming. Money flooded into new ventures, some of which quickly achieved $1 billion valuations. People were getting seriously rich. Why bother to do it illegally?\n\n\u201cSilicon Valley is a lot cleaner today than when I started, during the 1990s dot-com bubble,\u201d said Reed Kathrein, a San Francisco lawyer who successfully sued Ms. Holmes and Theranos in 2016 on behalf of investors. \u201cEveryone is throwing money at these start-ups. Everyone thinks they\u2019re going to win the lottery. It\u2019s easier to be honest.\u201d\n\nReforms prompted by the collapse of WorldCom, a long-distance telephone company, and Enron, an energy company, in the early 2000s have also had an impact.\n\n\u201cSome of the changes in laws, like the Sarbanes-Oxley Act, put the screws on the accountants,\u201d Mr. Kathrein said. \u201cThey have to do their jobs now.\u201d\n\nThirty years ago, the tech industry was known as much for physical products as software. Indeed, software used to be a physical product. If sales were not going well, that offered possibilities for subterfuge.\n\nMiniScribe, a Colorado disk storage company that had fallen on hard times, was taken over in 1984 by Hambrecht & Quist, prominent Silicon Valley financiers. The investment firm pumped in money and installed its own management. In 1988, to keep its numbers up, MiniScribe managers packed 26,000 bricks into MiniScribe boxes and shipped them to Singapore. When the scheme was revealed, the company went bankrupt and the chief executive went to jail.\n\nIn this sense, Mr. Kathrein noted, Ms. Holmes\u2019s case was a throwback. She was charged with making false and misleading statements to investors that Theranos\u2019s proprietary analyzer, named Edison, was a medical marvel that could perform a full range of clinical tests. It could not.\n\n\u201cShe was shipping bricks,\u201d he said. A lawyer for Ms. Holmes declined to comment.\n\nMr. Kathrein\u2019s conclusions are not widely accepted. Asked if tech people had become more honest over the decades, Margaret O\u2019Mara, a historian of Silicon Valley, burst into laughter.\n\n\u201cThe hubris and bluster and sometimes unethical (and occasionally criminal) behavior hasn\u2019t gone away, but has increased in volume as the scale, speed, wealth and hype of the tech world \u2014 and those companies that identify as tech companies \u2014 has gotten greater,\u201d she said. \u201cA decline in prosecutions should not be interpreted as less crime, but harder-to-prosecute cases.\u201d\n\nAnother significant factor: the special status of tech.\n\n\u201cThe Valley wasn\u2019t Big Oil or Wall Street,\u201d Ms. O\u2019Mara said. \u201cIt wasn\u2019t a target. It was innovators and entrepreneurs. Politicians were friendly.\u201d\n\nSo was everyone else, including reporters. Even now, the media has largely focused on the impact that the companies have on society rather than any crimes that have been committed. When eBay employees were accused last year by Massachusetts prosecutors of having terrorized the proprietors of a mildly critical website, the story barely lasted through one news cycle.\n\nIf Ms. Holmes had been an older man instead of an attractive young woman, her case would most likely not be front-page fodder. Proof of that can be seen in the case against Prithviraj Bhikha, who is known as Roger, a former senior director with Cisco Systems, a maker of networking products.\n\nMr. Bhikha, now 52, was convicted of setting up a dummy vendor called Lucena that sold $10 million of services to Cisco from 2014 to 2017. At one point, Mr. Bhikha brought in an impostor to Cisco to pose as Lucena\u2019s chief executive during a meeting. He was sentenced to three years in prison on Aug. 25, a development that yielded minimal news coverage. Cisco said in a statement that it was grateful to law enforcement.\n\nThe closest parallel to Ms. Holmes\u2019s case in recent years was that of Anthony Levandowski, a self-driving car engineer who worked at Google and later at the ride-hailing giant Uber. He pleaded guilty in 2020 to trade secret theft of Google\u2019s autonomous driving technology. Like Ms. Holmes, Mr. Levandowski was originally celebrated as a genius for whom ordinary rules did not apply. Sentenced to 18 months in prison, the engineer was pardoned by President Donald J. Trump in January.\n\nImage\n\nA year ago, David L. Anderson, then the U.S. attorney for the Northern District of California, revealed a case against the chief security officer of Uber for concealing a breach and secretly paying off the hackers.\n\n\u201cSilicon Valley is not the Wild West,\u201d Mr. Anderson said at the time. \u201cWe expect good corporate citizenship. We expect prompt reporting of criminal conduct. We expect cooperation with our investigations. We will not tolerate corporate cover-ups. We will not tolerate illegal hush money payments.\u201d\n\nThe Northern District of California stretches from Monterey to the Oregon border. Prosecutors have cases that have nothing to do with tech, including child pornography, firearms trafficking and the theft of an endangered lemur from the San Francisco Zoo. When Mr. Anderson stepped down last winter, he gave a 27-minute radio interview. He did not mention the words \u201cSilicon Valley\u201d or \u201ctech.\u201d Neither did anyone who called in.\n\nNow in private practice, Mr. Anderson declined to be interviewed.\n\nOther former U.S. attorneys who had charge of Silicon Valley also declined to be interviewed, including Robert Mueller, who served two years that had a brief jump in prosecutions before he became director of the F.B.I. in 2001. The prosecutor who oversaw Mr. Mueller\u2019s cases in Silicon Valley, Leslie Caldwell, was selected by the Department of Justice to lead its Enron task force in the same year. It was a rare shining moment for Northern California prosecutors.\n\nDavid Alan Sklansky, faculty co-director of the Stanford Criminal Justice Center, sees little likelihood of a return to those glory days, whatever Ms. Holmes\u2019s fate.\n\n\u201cTo prove someone guilty of a crime, in tech or out, it\u2019s not enough to prove claims were made that were false,\u201d he said. \u201cYou have to prove intent to deceive. That typically requires a large investment of resources \u2014 time, experienced prosecutors and investigators. That is an investment the Department of Justice hasn\u2019t been making for two decades.\u201d\n\nBut there are likely to be cases if prosecutors looked, he said.\n\n\u201cI don\u2019t know any reason to believe Silicon Valley is unusually honest,\u201d Mr. Sklansky said.",
            "articleBodyHtml" => "<article>\n\n<p>SAN FRANCISCO \u2014 The coronavirus pandemic has <a href=\"https://www.nytimes.com/2021/07/23/technology/silicon-valleys-pandemic-profits.html\" title=\"\">helped Silicon Valley companies</a> in many ways, from bringing them hordes of new customers to weakening the competition to juicing the bottom line.</p>\n\n<p>Here\u2019s a less obvious benefit: the threat of criminal prosecution has nearly disappeared.</p>\n\n<p>That fact is obscured by <a href=\"https://www.nytimes.com/2021/08/30/technology/trial-elizabeth-holmes-theranos.html\" title=\"\">the case against Elizabeth Holmes</a>, the founder of the defunct blood-testing company Theranos and the most prominent executive to face <a href=\"https://www.nytimes.com/2018/06/15/health/theranos-elizabeth-holmes-fraud.html?action=click&amp;module=RelatedLinks&amp;pgtype=Article\" title=\"\">criminal fraud charges</a> in the history of Silicon Valley. Her trial, with opening statements set to begin on Wednesday, raises issues of deception, gender, transparency, out-of-control hype and the sartorial influence of the Apple co-founder Steve Jobs, whose style Ms. Holmes mimicked.</p>\n\n<p>But behind the spectacle is the reality that criminal prosecutions in Silicon Valley are a rarity. Even a guilty verdict against Ms. Holmes is unlikely to change that.</p>\n\n<p>Federal prosecutors in Northern California took on only 57 white-collar crime cases in the 2020 fiscal year, down from 94 in 2019, according to researchers. Although 2021 is likely to show a rebound, the total will still be far below the heyday of prosecutorial action in 1995, when 350 cases were brought.</p>\n\n<p>As Silicon Valley mushroomed from an obscure specialty industry to the wealthiest and most influential collection of companies in history, prosecutors have occasionally promised more attention to it. And there have been brief spikes in cases. They never last.</p>\n\n<p>Nationally, there has been a long-term trend <a href=\"https://trac.syr.edu/whatsnew/email.210809.html\" title=\"\">away from white-collar prosecutions</a>. The shift was accelerated by the Sept. 11 attacks, which reallocated investigative resources to the fight against terrorism. But the drop in Northern California was nearly twice as steep from 1995 to 2019 as it was in the Southern District of New York, which has jurisdiction over Wall Street, according to data from the Transactional Records Access Clearinghouse at Syracuse University.</p>\n\n<p>A spokesman for Stephanie Hinds, the acting U.S. attorney for the Northern District of California, the office that is prosecuting Ms. Holmes\u2019s case, declined to comment.</p>\n\n<h2>Who\u2019s Who in the Elizabeth Holmes Trial</h2>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"><br><br>Erin Woo\ud83d\udccdReporting from San Jose, Calif.</figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-sidebar1/00holmes-sidebar1-blog480-v2.jpg\"><figcaption>Carlos Chavarria for The New York Times</figcaption></figure>\n\n<p>Elizabeth Holmes, the disgraced founder of the blood testing start-up Theranos, stands trial soon for two counts of conspiracy to commit wire fraud and 10 counts of wire fraud.</p>\n\n<p>Here are some of the key figures in the case \u2192</p>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-burst2/00holmes-burst2-blog480-v2.jpg\"></figure>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-burst3/00holmes-burst3-blog480-v3.jpg\"></figure>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-burst4/00holmes-burst4-blog480-v3.jpg\"></figure>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-burst5/00holmes-burst5-blog480-v2.jpg\"></figure>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-sidebar6/00holmes-sidebar6-blog480-v2.jpg\"></figure>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<figure><img alt=\"\" src=\"https://static01.nyt.com/images/2021/08/25/business/00holmes-burst8/00holmes-burst8-blog480-v2.jpg\"></figure>\n\n<figure data-testid=\"byline\"><img alt=\"Erin Woo\" src=\"https://static01.nyt.com/images/2021/08/26/business/author-erin-woo/author-erin-woo-thumbStandard.jpg\"></figure>\n\n<ul data-component=\"related-links-block\"><li><a href=\"https://www.nytimes.com/2021/08/24/technology/theranos-elizabeth-holmes.html\"><img src=\"https://static01.nyt.com/images/2021/08/20/business/00holmes/00holmes-mediumThreeByTwo378.jpg\"></a></li><li><a href=\"https://www.nytimes.com/2018/06/15/health/theranos-elizabeth-holmes-fraud.html\"><img src=\"https://static01.nyt.com/images/2018/06/16/business/16THERANOS/merlin_103975062_8cfff4da-823a-4b15-9da5-929980394c6a-mediumThreeByTwo378.jpg\"></a></li></ul>\n\n<p>Item 1 of 9</p>\n\n<p>One possible explanation for the decline is that there is simply less crime in Silicon Valley these days. Even before the pandemic, tech was booming. Money flooded into new ventures, some of which quickly achieved $1 billion valuations. People were getting seriously rich. Why bother to do it illegally?</p>\n\n<p>\u201cSilicon Valley is a lot cleaner today than when I started, during the 1990s dot-com bubble,\u201d said Reed Kathrein, a San Francisco lawyer who successfully sued Ms. Holmes and Theranos in 2016 on behalf of investors. \u201cEveryone is throwing money at these start-ups. Everyone thinks they\u2019re going to win the lottery. It\u2019s easier to be honest.\u201d</p>\n\n<p>Reforms prompted by the <a href=\"https://www.nytimes.com/2002/07/22/us/worldcom-s-collapse-the-overview-worldcom-files-for-bankruptcy-largest-us-case.html\" title=\"\">collapse of WorldCom</a>, a long-distance telephone company, and <a href=\"https://www.nytimes.com/2006/05/25/business/25cnd-enron.html\" title=\"\">Enron</a>, an energy company, in the early 2000s have also had an impact.</p>\n\n<p>\u201cSome of the changes in laws, like the Sarbanes-Oxley Act, put the screws on the accountants,\u201d Mr. Kathrein said. \u201cThey have to do their jobs now.\u201d</p>\n\n<p>Thirty years ago, the tech industry was known as much for physical products as software. Indeed, software used to be a physical product. If sales were not going well, that offered possibilities for subterfuge.</p>\n\n<p>MiniScribe, a Colorado disk storage company that had fallen on hard times, was taken over in 1984 by Hambrecht &amp; Quist, prominent Silicon Valley financiers. The investment firm pumped in money and installed its own management. In 1988, to keep its numbers up, MiniScribe managers packed 26,000 bricks into MiniScribe boxes and shipped them to Singapore. When the scheme was revealed, the company went bankrupt and the chief executive went to jail.</p>\n\n<p>In this sense, Mr. Kathrein noted, Ms. Holmes\u2019s case was a throwback. She was charged with making false and misleading statements to investors that Theranos\u2019s proprietary analyzer, named Edison, was a medical marvel that could perform a full range of clinical tests. It could not.</p>\n\n<p>\u201cShe was shipping bricks,\u201d he said. A lawyer for Ms. Holmes declined to comment.</p>\n\n<p>Mr. Kathrein\u2019s conclusions are not widely accepted. Asked if tech people had become more honest over the decades, <a href=\"https://www.margaretomara.com/\" title=\"\">Margaret O\u2019Mara,</a> a historian of Silicon Valley, burst into laughter.</p>\n\n<p>\u201cThe hubris and bluster and sometimes unethical (and occasionally criminal) behavior hasn\u2019t gone away, but has increased in volume as the scale, speed, wealth and hype of the tech world \u2014 and those companies that identify as tech companies \u2014 has gotten greater,\u201d she said. \u201cA decline in prosecutions should not be interpreted as less crime, but harder-to-prosecute cases.\u201d</p>\n\n<p>Another significant factor: the special status of tech.</p>\n\n<p>\u201cThe Valley wasn\u2019t Big Oil or Wall Street,\u201d Ms. O\u2019Mara said. \u201cIt wasn\u2019t a target. It was innovators and entrepreneurs. Politicians were friendly.\u201d</p>\n\n<p>So was everyone else, including reporters. Even now, the media has largely focused on the impact that the companies have on society rather than any crimes that have been committed. When eBay employees <a href=\"https://www.nytimes.com/2020/09/26/technology/ebay-cockroaches-stalking-scandal.html\" title=\"\">were accused last year by Massachusetts prosecutors </a>of having terrorized the proprietors of a mildly critical website, the story barely lasted through one news cycle.</p>\n\n<p>If Ms. Holmes had been an older man instead of an attractive young woman, her case would most likely not be front-page fodder. Proof of that can be seen in the case against Prithviraj Bhikha, who is known as Roger, a former senior director with Cisco Systems, a maker of networking products.</p>\n\n<p>Mr. Bhikha, now 52, was convicted of setting up a dummy vendor called Lucena that sold $10 million of services to Cisco from 2014 to 2017. At one point, Mr. Bhikha brought in an impostor to Cisco to pose as Lucena\u2019s chief executive during a meeting. He was sentenced to <a href=\"https://www.justice.gov/usao-ndca/pr/former-cisco-executive-sentenced-36-months-prison-fraud-scheme-and-filing-false-tax\" title=\"\">three years in prison</a> on Aug. 25, a development that yielded minimal news coverage. Cisco said in a statement that it was grateful to law enforcement.</p>\n\n<p>The closest parallel to Ms. Holmes\u2019s case in recent years was that of <a href=\"https://www.nytimes.com/2020/08/04/technology/levandowski-google-uber-sentencing-trade-secrets.html\" title=\"\">Anthony Levandowski</a>, a self-driving car engineer who worked at Google and later at the ride-hailing giant Uber. He <a href=\"https://www.nytimes.com/2020/03/19/technology/levandowski-uber-google-plea.html\" title=\"\">pleaded guilty</a> in 2020 to trade secret theft of Google\u2019s autonomous driving technology. Like Ms. Holmes, Mr. Levandowski was originally celebrated as a genius for whom ordinary rules did not apply. Sentenced to 18 months in prison, the engineer was <a href=\"https://www.nytimes.com/article/who-did-trump-pardon.html\" title=\"\">pardoned by President Donald J. Trump</a> in January.</p>\n\n<figure>Image<figcaption>\u201cSilicon Valley is not the Wild West,\u201d said David L. Anderson, the\u00a0former U.S. attorney. \u201cWe expect good corporate citizenship.\u201dCredit...Pool photo by Karl Mondon</figcaption></figure>\n\n<p>A year ago, David L. Anderson, then the U.S. attorney for the Northern District of California, revealed <a href=\"https://www.nytimes.com/2020/08/20/technology/joe-sullivan-uber-charged-hack.html\" title=\"\">a case against the chief security officer </a>of Uber for concealing a breach and secretly paying off the hackers.</p>\n\n<p>\u201cSilicon Valley is not the Wild West,\u201d Mr. Anderson said at the time. \u201cWe expect good corporate citizenship. We expect prompt reporting of criminal conduct. We expect cooperation with our investigations. We will not tolerate corporate cover-ups. We will not tolerate illegal hush money payments.\u201d</p>\n\n<p>The Northern District of California stretches from Monterey to the Oregon border. Prosecutors have cases that have nothing to do with tech, including child pornography, firearms trafficking and <a href=\"https://www.justice.gov/usao-ndca/pr/southern-california-man-faces-federal-charge-stealing-endangered-ring-tailed-lemur-sa-0\" title=\"\">the theft of an endangered lemur from the San Francisco Zoo.</a> When Mr. Anderson stepped down last winter, he gave <a href=\"https://www.kqed.org/forum/2010101882168/u-s-attorney-david-anderson-leaves-office\" title=\"\">a 27-minute radio interview</a>. He did not mention the words \u201cSilicon Valley\u201d or \u201ctech.\u201d Neither did anyone who called in.</p>\n\n<p>Now in private practice, Mr. Anderson declined to be interviewed.</p>\n\n<p>Other former U.S. attorneys who had charge of Silicon Valley also declined to be interviewed, including Robert Mueller, who served two years that had a brief jump in prosecutions before he became director of the F.B.I. in 2001. The prosecutor who oversaw Mr. Mueller\u2019s cases in Silicon Valley, Leslie Caldwell, was selected by the Department of Justice to lead its Enron task force in the same year. It was a rare shining moment for Northern California prosecutors.</p>\n\n<p>David Alan Sklansky, faculty co-director of the Stanford Criminal Justice Center, sees little likelihood of a return to those glory days, whatever Ms. Holmes\u2019s fate.</p>\n\n<p>\u201cTo prove someone guilty of a crime, in tech or out, it\u2019s not enough to prove claims were made that were false,\u201d he said. \u201cYou have to prove intent to deceive. That typically requires a large investment of resources \u2014 time, experienced prosecutors and investigators. That is an investment the Department of Justice hasn\u2019t been making for two decades.\u201d</p>\n\n<p>But there are likely to be cases if prosecutors looked, he said.</p>\n\n<p>\u201cI don\u2019t know any reason to believe Silicon Valley is unusually honest,\u201d Mr. Sklansky said.</p>\n\n</article>",
            "canonicalUrl" => "https://www.nytimes.com/2021/09/07/technology/in-silicon-valley-criminal-prosecutors-see-no-evil.html"
        ],
        "data2" => [
            "url" => "https://www.alriyadh.com/1910817",
            "probability" => 0.9790333,
            "headline" => "قطاع النقل يؤكد جدوى توصيات مكافحة التستر..",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://www.alriyadh.com/media/thumb/7d/61/1000_09c49d8f4d.jpg",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "أعرب عدد من العاملين والمستثمرين في قطاع النقل البري عن شكرهم وتقديرهم للقيادة الرشيدة -حفظها الله- نظير الاهتمام والرعاية التي توليها لهذا القطاع الأساسي المهم، وأكدوا أن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق، المتضمنة عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري، ستدعم جهود الاستراتيجية الوطنية للنقل والخدمات اللوجستية الجارية للارتقاء بمنظومة النقل والخدمات اللوجستية حتى يكون قادراً على القيام بما هو مطلوب منه لدعم مسيرة التنمية ولتحقيق مستهدفات رؤية المملكة 2030، والتي من بينها جعل المملكة ضمن أفضل 10 دول على مستوى العالم في مؤشر الأداء اللوجستي، وزيادة معدلات انخفاض حوادث الطرق بنسبة 50 %، وخلق الكثير من فرص العمل للمواطنين والمواطنات.",
            "articleBody" => "أعرب عدد من العاملين والمستثمرين في قطاع النقل البري عن شكرهم وتقديرهم للقيادة الرشيدة -حفظها الله- نظير الاهتمام والرعاية التي توليها لهذا القطاع الأساسي المهم، وأكدوا أن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق، المتضمنة عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري، ستدعم جهود الاستراتيجية الوطنية للنقل والخدمات اللوجستية الجارية للارتقاء بمنظومة النقل والخدمات اللوجستية حتى يكون قادراً على القيام بما هو مطلوب منه لدعم مسيرة التنمية ولتحقيق مستهدفات رؤية المملكة 2030، والتي من بينها جعل المملكة ضمن أفضل 10 دول على مستوى العالم في مؤشر الأداء اللوجستي، وزيادة معدلات انخفاض حوادث الطرق بنسبة 50 %، وخلق الكثير من فرص العمل للمواطنين والمواطنات.

ورفع وزير النقل والخدمات اللوجستية رئيس مجلس إدارة الهيئة العامة للنقل المهندس صالح بن ناصر الجاسر، الشكر والامتنان للقيادة الرشيدة، بمناسبة موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق، التي تتضمن عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري على الطرق ومكافحة ظاهرة التستر فيه.

وقال الجاسر: إن الموافقة الكريمة على هذه المبادرات تجسد حرص الدولة -أيدها الله- واهتمامها بدعم القطاع اللوجستي الذي يعد ممكناً لنمو قطاعات متعددة، ومكافحة التستر فيه والإسهام في تحقيق مستهدفات الاستراتيجية الوطنية للنقل والخدمات اللوجستية، إذ ستتيح هذه المبادرات الفرصة للأفراد والمنشآت الذين يملكون مركبات أعلى من الحد المسموح لهم نظامًا من تصحيح أوضاعهم والتقدم بالحصول على ترخيص نشاط نقل البضائع على الطرق البرية مقابل إعفائهم من رسوم إصدار رخص سير نقل عام ورسوم إصدار اللوحات.

وأشار إلى دعم القيادة اللامحدود للأفراد والمنشآت واهتمامها بمكافحة التستر، مؤكداً أن هذه المبادرات ستسهم في تطوير القطاع اللوجستي، وتحفيز الشباب السعودي للانضمام إليه، بما ينسجم مع مستهدفات الاستراتيجية الوطنية للنقل والخدمات اللوجستية، التي تهدف لرفع نسب التوطين في القطاع والارتقاء بالمملكة في مؤشر الأداء اللوجستي لتصبح من ضمن أفضل 10 دول في العالم.

بدوره ثمن نائب رئيس اللجنة الوطنية للنقل بمجلس الغرف السعودية سعيد البسامي، الاهتمام الكبير الذي يحظى به قطاع النقل البري من قبل القيادة الرشيدة -يحفظها الله، مشيراً إلى أن القطاع حقق بفضل ذلك الدعم العديد من الإنجازات والنجاحات، بحيث باتت المملكة تمتلك حالياً ما يزيد على 75000 كيلومتر من الطرق الوطنية، كما تقلصت نسب الوفيات جراء الحوادث بشكل كبير نتيجة لإجراءات التطوير المستمر الذي يحظى به القطاع.

وأشار سعيد البسامي، إلى أن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق فرصة ملائمة لجميع الراغبين بتصحيح أوضاعهم وممارسة النشاط بصورة قانونية، خصوصاً وأن تلك الفرصة تمنحهم العديد من التسهيلات كالإعفاء من رسوم إصدار رخص سير نقل عام، ورسوم إصدار اللوحات، وغيرها من المحفزات التي تضمنتها المبادرة، وسيكون لتطبيق تلك التوصيات دور كبير في الارتقاء بالقطاع وتسهيل الوصول لمستهدفات الرؤية والتي من بينها خلق الكثير من فرص العمل ودعم العديد من القطاعات الأخرى، لتحقيق مستهدفاتها كقطاع السياحة والحج والعمرة والتعدين والتجارة وغيرها.

بدوره قال عضو لجنة النقل البري بغرفة تجارة جدة حسين سعد حسين بن دعج: إن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق المتضمنة عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري تعكس الاهتمام الكبير الذي توليه قيادتنا الرشيدة -حفظها الله- بهذا القطاع الحيوي المهم على المستوى الاقتصادي والاجتماعي، وتأتي هذه الموافقة الكريمة امتداداً للاستراتيجية الوطنية للنقل والخدمات اللوجستية التي تهدف إلى تطوير عموم أشكال النقل وأنماطه، وجعل هذا القطاع قادراً على تحقيق مستهدفات رؤية المملكة 2030، والتي من بينها جعل المملكة ضمن أفضل 10 دول على مستوى العالم في مؤشر الأداء اللوجستي وزيادة معدلات انخفاض حوادث الطرق بنسبة 50 %، وخلق الكثير من فرص العمل للمواطنين والمواطنات. وأكد حسين بن دعجم أن المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري سيكون لها دور كبير في تحفيز القطاع وإعانة المستثمرين فيه، خصوصاً وأنهم ما زالوا يعانون من عدة معوقات يأتي في مقدمتها نقص عدد السائقين بسبب مشكلات صعوبة عودة السائقين طوال فترة جائحة كورونا.",
            "articleBodyHtml" => "أعرب عدد من العاملين والمستثمرين في قطاع النقل البري عن شكرهم وتقديرهم للقيادة الرشيدة -حفظها الله- نظير الاهتمام والرعاية التي توليها لهذا القطاع الأساسي المهم، وأكدوا أن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق، المتضمنة عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري، ستدعم جهود الاستراتيجية الوطنية للنقل والخدمات اللوجستية الجارية للارتقاء بمنظومة النقل والخدمات اللوجستية حتى يكون قادراً على القيام بما هو مطلوب منه لدعم مسيرة التنمية ولتحقيق مستهدفات رؤية المملكة 2030، والتي من بينها جعل المملكة ضمن أفضل 10 دول على مستوى العالم في مؤشر الأداء اللوجستي، وزيادة معدلات انخفاض حوادث الطرق بنسبة 50 %، وخلق الكثير من فرص العمل للمواطنين والمواطنات.

ورفع وزير النقل والخدمات اللوجستية رئيس مجلس إدارة الهيئة العامة للنقل المهندس صالح بن ناصر الجاسر، الشكر والامتنان للقيادة الرشيدة، بمناسبة موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق، التي تتضمن عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري على الطرق ومكافحة ظاهرة التستر فيه.

وقال الجاسر: إن الموافقة الكريمة على هذه المبادرات تجسد حرص الدولة -أيدها الله- واهتمامها بدعم القطاع اللوجستي الذي يعد ممكناً لنمو قطاعات متعددة، ومكافحة التستر فيه والإسهام في تحقيق مستهدفات الاستراتيجية الوطنية للنقل والخدمات اللوجستية، إذ ستتيح هذه المبادرات الفرصة للأفراد والمنشآت الذين يملكون مركبات أعلى من الحد المسموح لهم نظامًا من تصحيح أوضاعهم والتقدم بالحصول على ترخيص نشاط نقل البضائع على الطرق البرية مقابل إعفائهم من رسوم إصدار رخص سير نقل عام ورسوم إصدار اللوحات.

وأشار إلى دعم القيادة اللامحدود للأفراد والمنشآت واهتمامها بمكافحة التستر، مؤكداً أن هذه المبادرات ستسهم في تطوير القطاع اللوجستي، وتحفيز الشباب السعودي للانضمام إليه، بما ينسجم مع مستهدفات الاستراتيجية الوطنية للنقل والخدمات اللوجستية، التي تهدف لرفع نسب التوطين في القطاع والارتقاء بالمملكة في مؤشر الأداء اللوجستي لتصبح من ضمن أفضل 10 دول في العالم.

بدوره ثمن نائب رئيس اللجنة الوطنية للنقل بمجلس الغرف السعودية سعيد البسامي، الاهتمام الكبير الذي يحظى به قطاع النقل البري من قبل القيادة الرشيدة -يحفظها الله، مشيراً إلى أن القطاع حقق بفضل ذلك الدعم العديد من الإنجازات والنجاحات، بحيث باتت المملكة تمتلك حالياً ما يزيد على 75000 كيلومتر من الطرق الوطنية، كما تقلصت نسب الوفيات جراء الحوادث بشكل كبير نتيجة لإجراءات التطوير المستمر الذي يحظى به القطاع.

وأشار سعيد البسامي، إلى أن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق فرصة ملائمة لجميع الراغبين بتصحيح أوضاعهم وممارسة النشاط بصورة قانونية، خصوصاً وأن تلك الفرصة تمنحهم العديد من التسهيلات كالإعفاء من رسوم إصدار رخص سير نقل عام، ورسوم إصدار اللوحات، وغيرها من المحفزات التي تضمنتها المبادرة، وسيكون لتطبيق تلك التوصيات دور كبير في الارتقاء بالقطاع وتسهيل الوصول لمستهدفات الرؤية والتي من بينها خلق الكثير من فرص العمل ودعم العديد من القطاعات الأخرى، لتحقيق مستهدفاتها كقطاع السياحة والحج والعمرة والتعدين والتجارة وغيرها.

بدوره قال عضو لجنة النقل البري بغرفة تجارة جدة حسين سعد حسين بن دعج: إن موافقة مجلس الوزراء على توصيات اللجنة المشكلة لمكافحة ظاهرة التستر حيال شاحنات النقل على الطرق المتضمنة عدداً من المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري تعكس الاهتمام الكبير الذي توليه قيادتنا الرشيدة -حفظها الله- بهذا القطاع الحيوي المهم على المستوى الاقتصادي والاجتماعي، وتأتي هذه الموافقة الكريمة امتداداً للاستراتيجية الوطنية للنقل والخدمات اللوجستية التي تهدف إلى تطوير عموم أشكال النقل وأنماطه، وجعل هذا القطاع قادراً على تحقيق مستهدفات رؤية المملكة 2030، والتي من بينها جعل المملكة ضمن أفضل 10 دول على مستوى العالم في مؤشر الأداء اللوجستي وزيادة معدلات انخفاض حوادث الطرق بنسبة 50 %، وخلق الكثير من فرص العمل للمواطنين والمواطنات. وأكد حسين بن دعجم أن المبادرات التشجيعية لتصحيح أوضاع الأفراد والمنشآت في نشاط النقل البري سيكون لها دور كبير في تحفيز القطاع وإعانة المستثمرين فيه، خصوصاً وأنهم ما زالوا يعانون من عدة معوقات يأتي في مقدمتها نقص عدد السائقين بسبب مشكلات صعوبة عودة السائقين طوال فترة جائحة كورونا.",
            "canonicalUrl" => "https://www.alriyadh.com/1910817"
        ],
        "data3" => [
            "url" => "https://gate.ahram.org.eg/News/2984793.aspx",
            "probability" => 0.9790333,
            "headline" => 'جمال السادات: "الرئيس السيسي قال لي عقب وفاة والدتي.. عايز أعمل حاجة تليق بزوجة البطل"',
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://gate.ahram.org.eg/Media/News/2012/10/4/2012-634849492862627118-262_main.jpg",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "",
            "articleBody" => 'وأضاف خلال حواره مع الإعلامي عمرو أديب في برنامج "الحكاية" المذاع عبر فضائية "إم بي سي" أن الرئيس عبدالفتاح السيسي رد بمنتهي الهدوء وقال لي "اللي أنتم عايزينه هعملهلكم ياجمال بس لو تسمحو لي أنا عايز أعمل حاجة تليق بزوجة الرئيس أنور السادات". وأدرف قائلًا: "كان ردي للرئيس عبدالفتاح السيسي" اللي حضرتك شايفه يافندم إحنا تحت أمر حضرتك"، موضحًا أنه لم يكن يعلم نهائيًا بالترتيبات التي جرت ومكان الدفنة والمراسم.',
            "articleBodyHtml" => "Gamal El-Sadat, son of the late President Mohamed Anwar El-Sadat, recounted the details and scenes of the last hours before the burial of his mother, Jihan El-Sadat, saying: I called President El-Sisi to tell him about the matter and he offered ",
            "canonicalUrl" => "https://gate.ahram.org.eg/News/2984793.aspx"
        ],
        "data4" => [
            "url" => "https://www.alittihad.ae/news/%D8%B9%D8%B1%D8%A8%D9%8A-%D9%88%D8%AF%D9%88%D9%84%D9%8A/4225955/%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D8%AA%D8%A4%D9%83%D8%AF-%D9%85%D9%88%D8%A7%D8%B5%D9%84%D8%A9-%D8%AF%D8%B9%D9%85-%D8%A7%D9%84%D9%85%D8%B1%D8%AD%D9%84%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D8%AA%D9%82%D8%A7%D9%84%D9%8A%D8%A9-%D9%81%D9%8A-%D8%A7%D9%84%D8%B3%D9%88%D8%AF%D8%A7%D9%86",
            "probability" => 0.9790333,
            "headline" => 'الإمارات تؤكد مواصلة دعم المرحلة الانتقالية في السودان',
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://cdn1-m.alittihad.ae/store/archive/image/2021/10/3/5ad4fb36-3fdf-46f8-8870-118b6fa39964.jpg?format=jpg&width=1500",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "",
            "articleBody" => 'أسماء الحسيني، وام (الخرطوم، نيويورك)
شاركت دولة الإمارات ممثلة بوفد ترأسه سالم محمد الزعابي، مدير إدارة التعاون الأمني الدولي في وزارة الخارجية والتعاون الدولي، بالاجتماع رفيع المستوى الذي عقدته الأمم المتحدة، بالشراكة مع النرويج حول السودان، بعد مداولات الدورة السادسة والسبعين للجمعية العامة، وبمشاركة معالي الدكتور عبدالله حمدوك رئيس مجلس الوزراء السوداني وأنطونيو جوتيريش الأمين العام للأمم المتحدة ووزراء خارجية وممثلي دول أصدقاء السودان.
وأكد سالم محمد الزعابي في كلمة خلال الاجتماع التزام دولة الإمارات بمواصلة دعم المرحلة الانتقالية في السودان، وتضامن الدولة بشكل كامل مع الشعب السوداني الشقيق في الحفاظ على سيادة السودان ووحدته الوطنية، مشيراً إلى أنه يجب أن تستمر العملية الانتقالية جنباً إلى جنب مع تحقيق تطلعات الشعب السوداني الشقيق ورفض أي محاولات لتعطيل جهوده في تحقيق الأمن والاستقرار. وأشاد بجهود الحكومة السودانية في التقدم الكبير الذي أحرزته البلاد منذ عام 2019 طوال المرحلة الانتقالية، على الرغم من التحديات العديدة التي تمثلها جائحة «كوفيد- 19»، كما أثنى على جهود السلطات السودانية في تحقيق المزيد من التقدم من خلال الإصلاحات الاقتصادية العاجلة، والتي مهدت الطريق لبدء تخفيف الديون في إطار مبادرة الدول الفقيرة المثقلة بالديون «HIPC».
وأوضح أن دولة الإمارات ترحب بالتقدم المحرز في تنفيذ اتفاق جوبا للسلام، وتدعو المجتمع الدولي إلى مواصلة تقديم دعمه غير المحدود للسودان لإحراز مزيد من التقدم، مما سيمكن السودان من التغلب على تحدياته الأمنية.
وفي سياق آخر، احتفل السودان أمس بالذكرى السنوية الأولى لتوقيع اتفاق جوبا للسلام بين الحكومة و«الجبهة الثورية» التي ضمت عدداً من الحركات المسلحة، بينها حركتا «العدل والمساواة» برئاسة جبريل إبراهيم وحركة «تحرير السودان» برئاسة مني أركو مناوي، اللتان أعلنتا أمس الأول، الانشقاق ضمن كيان يضم 16 حزباً وحركة مسلحة عن تحالف قوى «الحرية والتغيير» الحاضنة السياسية للحكومة السودانية.
وهنأ رئيس مجلس السيادة الفريق أول عبدالفتاح البرهان الشعب السوداني بحلول الذكرى الأولى، لتوقيع اتفاق جوبا للسلام، مؤكداً أن الاتفاقية شكلت منعطفاً تاريخياً في طريق السودان نحو السلام المستدام والديمقراطية والعدالة والتنمية.
وأكد البرهان الالتزام الكامل بتنفيذ الاتفاق مع شركاء السلام الموقعين على الاتفاقية، داعياً عبدالعزيز الحلو رئيس «الحركة الشعبية» وعبدالواحد نور رئيس حركة «تحرير السودان» للانضمام لعملية السلام الشامل، الذي لا يستثني أي مكون من مكونات الشعب السوداني، كما دعا الموقعين على اتفاق جوبا لبذل المزيد من الجهد والعمل الدؤوب لاستكمال تنفيذ بنود الاتفاقية، خاصة بند الترتيبات الأمنية وتعويض التأخير الذي حدث.',
            "articleBodyHtml" => 'أسماء الحسيني، وام (الخرطوم، نيويورك)
شاركت دولة الإمارات ممثلة بوفد ترأسه سالم محمد الزعابي، مدير إدارة التعاون الأمني الدولي في وزارة الخارجية والتعاون الدولي، بالاجتماع رفيع المستوى الذي عقدته الأمم المتحدة، بالشراكة مع النرويج حول السودان، بعد مداولات الدورة السادسة والسبعين للجمعية العامة، وبمشاركة معالي الدكتور عبدالله حمدوك رئيس مجلس الوزراء السوداني وأنطونيو جوتيريش الأمين العام للأمم المتحدة ووزراء خارجية وممثلي دول أصدقاء السودان.
وأكد سالم محمد الزعابي في كلمة خلال الاجتماع التزام دولة الإمارات بمواصلة دعم المرحلة الانتقالية في السودان، وتضامن الدولة بشكل كامل مع الشعب السوداني الشقيق في الحفاظ على سيادة السودان ووحدته الوطنية، مشيراً إلى أنه يجب أن تستمر العملية الانتقالية جنباً إلى جنب مع تحقيق تطلعات الشعب السوداني الشقيق ورفض أي محاولات لتعطيل جهوده في تحقيق الأمن والاستقرار. وأشاد بجهود الحكومة السودانية في التقدم الكبير الذي أحرزته البلاد منذ عام 2019 طوال المرحلة الانتقالية، على الرغم من التحديات العديدة التي تمثلها جائحة «كوفيد- 19»، كما أثنى على جهود السلطات السودانية في تحقيق المزيد من التقدم من خلال الإصلاحات الاقتصادية العاجلة، والتي مهدت الطريق لبدء تخفيف الديون في إطار مبادرة الدول الفقيرة المثقلة بالديون «HIPC».
وأوضح أن دولة الإمارات ترحب بالتقدم المحرز في تنفيذ اتفاق جوبا للسلام، وتدعو المجتمع الدولي إلى مواصلة تقديم دعمه غير المحدود للسودان لإحراز مزيد من التقدم، مما سيمكن السودان من التغلب على تحدياته الأمنية.
وفي سياق آخر، احتفل السودان أمس بالذكرى السنوية الأولى لتوقيع اتفاق جوبا للسلام بين الحكومة و«الجبهة الثورية» التي ضمت عدداً من الحركات المسلحة، بينها حركتا «العدل والمساواة» برئاسة جبريل إبراهيم وحركة «تحرير السودان» برئاسة مني أركو مناوي، اللتان أعلنتا أمس الأول، الانشقاق ضمن كيان يضم 16 حزباً وحركة مسلحة عن تحالف قوى «الحرية والتغيير» الحاضنة السياسية للحكومة السودانية.
وهنأ رئيس مجلس السيادة الفريق أول عبدالفتاح البرهان الشعب السوداني بحلول الذكرى الأولى، لتوقيع اتفاق جوبا للسلام، مؤكداً أن الاتفاقية شكلت منعطفاً تاريخياً في طريق السودان نحو السلام المستدام والديمقراطية والعدالة والتنمية.
وأكد البرهان الالتزام الكامل بتنفيذ الاتفاق مع شركاء السلام الموقعين على الاتفاقية، داعياً عبدالعزيز الحلو رئيس «الحركة الشعبية» وعبدالواحد نور رئيس حركة «تحرير السودان» للانضمام لعملية السلام الشامل، الذي لا يستثني أي مكون من مكونات الشعب السوداني، كما دعا الموقعين على اتفاق جوبا لبذل المزيد من الجهد والعمل الدؤوب لاستكمال تنفيذ بنود الاتفاقية، خاصة بند الترتيبات الأمنية وتعويض التأخير الذي حدث.',
            "canonicalUrl" => "https://www.alittihad.ae/news/%D8%B9%D8%B1%D8%A8%D9%8A-%D9%88%D8%AF%D9%88%D9%84%D9%8A/4225955/%D8%A7%D9%84%D8%A5%D9%85%D8%A7%D8%B1%D8%A7%D8%AA-%D8%AA%D8%A4%D9%83%D8%AF-%D9%85%D9%88%D8%A7%D8%B5%D9%84%D8%A9-%D8%AF%D8%B9%D9%85-%D8%A7%D9%84%D9%85%D8%B1%D8%AD%D9%84%D8%A9-%D8%A7%D9%84%D8%A7%D9%86%D8%AA%D9%82%D8%A7%D9%84%D9%8A%D8%A9-%D9%81%D9%8A-%D8%A7%D9%84%D8%B3%D9%88%D8%AF%D8%A7%D9%86"
        ],
        "data5" => [
            "url" => "https://assahraa.ma/web/2021/157105",
            "probability" => 0.9790333,
            "headline" => 'مدير مختبر الدراسات الدستورية وتحليل الأزمات قال ل"الصحراء المغربية" إن قرار المحكمة يسير في اتجاه معاكسة المصالح المغربية وال',
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://cdn1-m.alittihad.ae/store/archive/image/2021/10/3/5ad4fb36-3fdf-46f8-8870-118b6fa39964.jpg?format=jpg&width=1500",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "",
            "articleBody" => 'FacebookTwitterالمزيد1
قال إدريس لكريني أستاذ القانون الدولي والعلاقات الدولية بجامعة القاضي عياض بمراكش، أمس الخميس، إن قرار محكمة الاتحاد الأوروبي بخصوص اتفاقيتي الفلاحة والصيد البحري الموقعتين مع المغرب، حركته اعتبارات سياسية أكثر مما هي قانونية، ويسير في اتجاه معاكسة المصالح المغربية وكذا المصالح الأوروبية.

وأضاف  لكريني في هذا الصدد، أن الأمر يتعلق بضربة للعلاقات المتينة التي تجمع المغرب والاتحاد الأوروبي، والتي تم التعبير عنها بصورة واضحة عشية إصدار هدا القرار بإصرار المغرب والاتحاد الأوروبي على تطوير علاقتهما ومواصلة جهودهما في إطار الدفاع عن السلامة القانونية للاتفاقيات المبرمة بين الجانبين خدمة للشريكين ولمصالح المغرب من جهة ودول الاتحاد الأوروبي من جهة ثانية.

وأوضح لكريني مدير مختبر الدراسات الدستورية وتحليل الأزمات والسياسات في تصريح ل"الصحراء المغربية"، أن قرار المحكمة الأوروبية يعكس الجهل بأسس النزاع المفتعل حول قضية الصحراء المغربية، وجاء كذلك ليشوش على قرارات مجلس الأمن باعتباره المسؤول الرئيسي عن مواكبة ومتابعة هذا الملف، وبالتالي معاكسة روح مجمل القرارات الصادرة عن مجلس الأمن بصدد هذه القضية.

وأشار لكريني، إلى أن الأمر يتعلق بالاستجابة لتوجه جهات معادية للمغرب خصوصا البوليساريو التي لاتتوفر على الصفة القانونية ولا على المقومات الكفيلة لها باتخاذ مثل هذه التدابير المرتبطة بالطعن الذي توجهت به أمام المحكمة على اعتبار أنها لاتتوفر فيها شروط الدولة كماهي متعارف عليها دوليا وقانونيا.

ومن هدا المنطلق، أكد أستاذ العلاقات الدولية أن المغرب واع بأن الأمر يتعلق بحكم ابتدائي وليس نهائي ولاتتوفر فيه الإلزامية، وهو ما يفسح المجال لسلوك المساطر القانونية المتاحة من خلال الطعن في هذا الحكم أمام محكمة الاستئناف من جهة، والاستمرار في تعزيز علاقاته وشراكاته سواء مع دول الاتحاد الأوروبي التي تربطهما معا مجموعة من المصالح والأولويات المشتركة.

وخلص إلى القول، إن خيار المغرب بعد صدور قرار المحكمة الأوروبية، هو تنويع شراكاته مع دوائر مختلفة كالدائرة الأمريكية وبريطانيا وروسيا والصين، باعتباره خيار رابح كسبيل لتجاوز أية ضغوط أو أية انحرافات يمكن أن تستمر على هذا المستوى من قبل المحكمة الأوربية سواء في مرحلتيها الابتدائية والاستئنافية.

وبمقتضى اتفاقية الصيد البحري الحالية التي وقعها الاتحاد الأوروبي مع المملكة المغربية، سنة 2019 بعد المصادقة عليها من طرف البرلمان الأوروبي، إثر مفاوضات طويلة بين المغرب والاتحاد الأوروبي، تستغل أكثر من 120 سفينة أوروبية المياه المغربية في الصيد.

وكان المغرب  والاتحاد الأوروبي، وقعا بالأحرف الأولى، يوم 24 يوليوز سنة 2018 ، على اتفاقية الصيد البحري بعد انتهاء صلاحية الاتفاق السابق الموقع سنة 2014، اثر سلسلة من المفاوضات بين الجانبين بالرباط وبروكسيل، أسفرت عن اتفاق جديد يراعي المصالح العليا للمملكة المغربية الغير قابلة للتفاوض.',
            "articleBodyHtml" => 'FacebookTwitterالمزيد1
قال إدريس لكريني أستاذ القانون الدولي والعلاقات الدولية بجامعة القاضي عياض بمراكش، أمس الخميس، إن قرار محكمة الاتحاد الأوروبي بخصوص اتفاقيتي الفلاحة والصيد البحري الموقعتين مع المغرب، حركته اعتبارات سياسية أكثر مما هي قانونية، ويسير في اتجاه معاكسة المصالح المغربية وكذا المصالح الأوروبية.

وأضاف  لكريني في هذا الصدد، أن الأمر يتعلق بضربة للعلاقات المتينة التي تجمع المغرب والاتحاد الأوروبي، والتي تم التعبير عنها بصورة واضحة عشية إصدار هدا القرار بإصرار المغرب والاتحاد الأوروبي على تطوير علاقتهما ومواصلة جهودهما في إطار الدفاع عن السلامة القانونية للاتفاقيات المبرمة بين الجانبين خدمة للشريكين ولمصالح المغرب من جهة ودول الاتحاد الأوروبي من جهة ثانية.

وأوضح لكريني مدير مختبر الدراسات الدستورية وتحليل الأزمات والسياسات في تصريح ل"الصحراء المغربية"، أن قرار المحكمة الأوروبية يعكس الجهل بأسس النزاع المفتعل حول قضية الصحراء المغربية، وجاء كذلك ليشوش على قرارات مجلس الأمن باعتباره المسؤول الرئيسي عن مواكبة ومتابعة هذا الملف، وبالتالي معاكسة روح مجمل القرارات الصادرة عن مجلس الأمن بصدد هذه القضية.

وأشار لكريني، إلى أن الأمر يتعلق بالاستجابة لتوجه جهات معادية للمغرب خصوصا البوليساريو التي لاتتوفر على الصفة القانونية ولا على المقومات الكفيلة لها باتخاذ مثل هذه التدابير المرتبطة بالطعن الذي توجهت به أمام المحكمة على اعتبار أنها لاتتوفر فيها شروط الدولة كماهي متعارف عليها دوليا وقانونيا.

ومن هدا المنطلق، أكد أستاذ العلاقات الدولية أن المغرب واع بأن الأمر يتعلق بحكم ابتدائي وليس نهائي ولاتتوفر فيه الإلزامية، وهو ما يفسح المجال لسلوك المساطر القانونية المتاحة من خلال الطعن في هذا الحكم أمام محكمة الاستئناف من جهة، والاستمرار في تعزيز علاقاته وشراكاته سواء مع دول الاتحاد الأوروبي التي تربطهما معا مجموعة من المصالح والأولويات المشتركة.

وخلص إلى القول، إن خيار المغرب بعد صدور قرار المحكمة الأوروبية، هو تنويع شراكاته مع دوائر مختلفة كالدائرة الأمريكية وبريطانيا وروسيا والصين، باعتباره خيار رابح كسبيل لتجاوز أية ضغوط أو أية انحرافات يمكن أن تستمر على هذا المستوى من قبل المحكمة الأوربية سواء في مرحلتيها الابتدائية والاستئنافية.

وبمقتضى اتفاقية الصيد البحري الحالية التي وقعها الاتحاد الأوروبي مع المملكة المغربية، سنة 2019 بعد المصادقة عليها من طرف البرلمان الأوروبي، إثر مفاوضات طويلة بين المغرب والاتحاد الأوروبي، تستغل أكثر من 120 سفينة أوروبية المياه المغربية في الصيد.

وكان المغرب  والاتحاد الأوروبي، وقعا بالأحرف الأولى، يوم 24 يوليوز سنة 2018 ، على اتفاقية الصيد البحري بعد انتهاء صلاحية الاتفاق السابق الموقع سنة 2014، اثر سلسلة من المفاوضات بين الجانبين بالرباط وبروكسيل، أسفرت عن اتفاق جديد يراعي المصالح العليا للمملكة المغربية الغير قابلة للتفاوض.',
            "canonicalUrl" => "https://assahraa.ma/web/2021/157105"
        ],
        "data6" => [
            "url" => "https://www.elbilad.net/international/%D8%B0%D9%83%D8%B1%D9%89-%D9%85%D9%82%D8%AA%D9%84-%D8%AE%D8%A7%D8%B4%D9%82%D8%AC%D9%8A-%D9%88%D9%82%D9%81%D8%A9-%D8%A7%D8%AD%D8%AA%D8%AC%D8%A7%D8%AC%D9%8A%D8%A9-%D8%A3%D9%85%D8%A7%D9%85-%D8%A7%D9%84%D8%B3%D9%81%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%A8%D9%88%D8%A7%D8%B4%D9%86%D8%B7%D9%86-%D9%88%D8%A3%D8%AE%D8%B1%D9%89-%D8%A3%D9%85%D8%A7%D9%85-%D8%A7%D9%84%D9%83%D9%88%D9%86%D8%BA%D8%B1%D8%B3-97843",
            "probability" => 0.9790333,
            "headline" => "ذكرى مقتل خاشقجي.. وقفة احتجاجية أمام السفارة السعودية بواشنطن وأخرى أمام الكونغرس",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://www.elbilad.net/storage/images/article/d_6100f8f5d6b3bec705fb7fa641c08182.png",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "",
            "articleBody" => 'ذكرى مقتل خاشقجي.. وقفة احتجاجية أمام السفارة السعودية بواشنطن وأخرى أمام الكونغرس',
            "articleBodyHtml" => 'ذكرى مقتل خاشقجي.. وقفة احتجاجية أمام السفارة السعودية بواشنطن وأخرى أمام الكونغرس',
            "canonicalUrl" => "https://www.elbilad.net/international/%D8%B0%D9%83%D8%B1%D9%89-%D9%85%D9%82%D8%AA%D9%84-%D8%AE%D8%A7%D8%B4%D9%82%D8%AC%D9%8A-%D9%88%D9%82%D9%81%D8%A9-%D8%A7%D8%AD%D8%AA%D8%AC%D8%A7%D8%AC%D9%8A%D8%A9-%D8%A3%D9%85%D8%A7%D9%85-%D8%A7%D9%84%D8%B3%D9%81%D8%A7%D8%B1%D8%A9-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D8%A8%D9%88%D8%A7%D8%B4%D9%86%D8%B7%D9%86-%D9%88%D8%A3%D8%AE%D8%B1%D9%89-%D8%A3%D9%85%D8%A7%D9%85-%D8%A7%D9%84%D9%83%D9%88%D9%86%D8%BA%D8%B1%D8%B3-97843"
        ],
        "data7" => [
            "url" => "https://marebpress.net/news_details.php?sid=178215",
            "probability" => 0.9790333,
            "headline" => 'ما وراء قرار "الانتقالي" حظر التظاهر في سقطرى؟.. تقرير',
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://marebpress.net/userimages/2021/10/1633287953blobid2.jpg",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => '',
            "articleBody" => 'لا يتوقف المجلس الانتقالي الانفصالي الجنوبي المدعوم إماراتياً، عن اتخاذ عدد من الإجراءات الأمنية الهادفة إلى توسيع سلطته على جزيرة سقطرى اليمنية، واعتبارها مدينة خارج سيطرة الحكومة اليمنية.ولم ترهب سيطرة "الانتقالي" على الجزيرة سكانها الذين خرجوا مراتٍ عديدة رافضين وجود قواته ومطالبين بعودة محافظ الجزيرة؛ وهو ما دفع المليشيا إلى فرض إجراءات تمثلت بمنع أي تظاهرات، واتخاذ إجراءات صارمة ضد المخالفين.ومن شأن الإجراءات التي يقوم بها حلفاء الإمارات في سقطرى، أن تقوض التفاهمات النسبية المتقدمة في "اتفاق الرياض"، بعد الضغوط السعودية على الحكومة الشرعية، وعودة رئيسها إلى مدينة عدن العاصمة المؤقتة للبلاد.


تظاهرات ترعب المليشيا

يعتقد "الانتقالي الجنوبي" أن التظاهرات التي يخرج فيها سكان الجزيرة من حين لآخر، تهدد وجوده وتؤثر جدياً في مخططاته، التي يقول مواطنون إنها تهدف إلى تحويلها لجزيرة تتبع الإمارات.


في 27 سبتمبر 2021، توعدت مليشيا المجلس الانتقالي الجنوبي في أرخبيل سقطرى باتخاذ إجراءات صارمة بحق المتظاهرين في الأرخبيل المناوئين لها والمطالبين بعودة الدولة.


وأقرت اللجنة الأمنية في سقطرى التابعة لـ"الانتقالي"، في بيان لها، منع التظاهرات والوقفات الاحتجاجية في الأرخبيل غداة مظاهرة كبيرة احتفاءً بذكرى ثورة 26 سبتمبر، رددت شعارات مناهضة لـ"الانتقالي" والإمارات.',
            "articleBodyHtml" => 'لا يتوقف المجلس الانتقالي الانفصالي الجنوبي المدعوم إماراتياً، عن اتخاذ عدد من الإجراءات الأمنية الهادفة إلى توسيع سلطته على جزيرة سقطرى اليمنية، واعتبارها مدينة خارج سيطرة الحكومة اليمنية.ولم ترهب سيطرة "الانتقالي" على الجزيرة سكانها الذين خرجوا مراتٍ عديدة رافضين وجود قواته ومطالبين بعودة محافظ الجزيرة؛ وهو ما دفع المليشيا إلى فرض إجراءات تمثلت بمنع أي تظاهرات، واتخاذ إجراءات صارمة ضد المخالفين.ومن شأن الإجراءات التي يقوم بها حلفاء الإمارات في سقطرى، أن تقوض التفاهمات النسبية المتقدمة في "اتفاق الرياض"، بعد الضغوط السعودية على الحكومة الشرعية، وعودة رئيسها إلى مدينة عدن العاصمة المؤقتة للبلاد.


تظاهرات ترعب المليشيا

يعتقد "الانتقالي الجنوبي" أن التظاهرات التي يخرج فيها سكان الجزيرة من حين لآخر، تهدد وجوده وتؤثر جدياً في مخططاته، التي يقول مواطنون إنها تهدف إلى تحويلها لجزيرة تتبع الإمارات.


في 27 سبتمبر 2021، توعدت مليشيا المجلس الانتقالي الجنوبي في أرخبيل سقطرى باتخاذ إجراءات صارمة بحق المتظاهرين في الأرخبيل المناوئين لها والمطالبين بعودة الدولة.


وأقرت اللجنة الأمنية في سقطرى التابعة لـ"الانتقالي"، في بيان لها، منع التظاهرات والوقفات الاحتجاجية في الأرخبيل غداة مظاهرة كبيرة احتفاءً بذكرى ثورة 26 سبتمبر، رددت شعارات مناهضة لـ"الانتقالي" والإمارات.',
            "canonicalUrl" => "https://marebpress.net/news_details.php?sid=178215"
        ],
        "data8" => [
            "url" => "https://www.theguardian.com/politics/2021/sep/14/disgusting-pms-joke-over-uk-becoming-saudi-arabia-of-penal-policy-condemned",
            "probability" => 0.9790333,
            "headline" => "PM condemned for joke about UK becoming ‘Saudi Arabia of penal policy’",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://i.guim.co.uk/img/media/65e1264c2d412c6201fed35b5896f2f60804d9b1/0_7_1734_1040/master/1734.jpg?width=700&quality=85&auto=format&fit=max&s=c203d35fb6c6d597fb2ab999765c0956",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "A joke by Boris Johnson that the UK could become “the Saudi Arabia of penal policy” under Priti Patel has been condemned as “disgusting” and a “new low” by opposition politicians.",
            "articleBody" => "A joke by Boris Johnson that the UK could become “the Saudi Arabia of penal policy” under Priti Patel has been condemned as “disgusting” and a “new low” by opposition politicians. The prime minister made the remarks, which can be viewed in video footage obtained and reported by Business Insider, during a speech behind closed doors at a Conservative party fundraiser event on 10 September. At least 27 senior members of government sat close together without face masks on Tuesday ‘One rule for them’: Boris Johnson criticised for maskless cabinet meeting Read more “In the immortal words of Priti Patel or Michael Howard or some other hardline home secretary, addressing the inmates of one of our larger prisons: it’s fantastic to see so many of you here,” Johnson told the 300 attenders at the lunch, which took place at the InterContinental London Park Lane in Mayfair.",
            "articleBodyHtml" => "A joke by Boris Johnson that the UK could become “the Saudi Arabia of penal policy” under Priti Patel has been condemned as “disgusting” and a “new low” by opposition politicians. The prime minister made the remarks, which can be viewed in video footage obtained and reported by Business Insider, during a speech behind closed doors at a Conservative party fundraiser event on 10 September. At least 27 senior members of government sat close together without face masks on Tuesday ‘One rule for them’: Boris Johnson criticised for maskless cabinet meeting Read more “In the immortal words of Priti Patel or Michael Howard or some other hardline home secretary, addressing the inmates of one of our larger prisons: it’s fantastic to see so many of you here,” Johnson told the 300 attenders at the lunch, which took place at the InterContinental London Park Lane in Mayfair.",
            "canonicalUrl" => "https://www.theguardian.com/politics/2021/sep/14/disgusting-pms-joke-over-uk-becoming-saudi-arabia-of-penal-policy-condemned"
        ],
        "data9" => [
            "url" => "https://www.bbc.com/news/world-58780465",
            "probability" => 0.9790333,
            "headline" => "Pandora Papers: Secret wealth and dealings of world leaders exposed",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://ichef.bbci.co.uk/news/976/cpsprodpb/1A85/production/_120798760_promo_mainstory_day1_b-nc.jpg",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => "The secret wealth and dealings of world leaders, politicians and billionaires has been exposed in one of the biggest leaks of financial documents.",
            "articleBody" => "The secret wealth and dealings of world leaders, politicians and billionaires has been exposed in one of the biggest leaks of financial documents.

Some 35 current and former leaders and more than 300 public officials are featured in the files from offshore companies, dubbed the Pandora Papers.

They reveal the King of Jordan secretly amassed £70m of UK and US property.

They also show how ex-UK PM Tony Blair and his wife saved £312,000 in stamp duty when they bought a London office.

The couple bought an offshore firm that owned the building.

The leak also links Russian President Vladimir Putin to secret assets in Monaco, and shows the Czech Prime Minister Andrej Babis - facing an election later this week - failed to declare an offshore investment company used to purchase two villas for £12m in the south of France.",
            "articleBodyHtml" => "The secret wealth and dealings of world leaders, politicians and billionaires has been exposed in one of the biggest leaks of financial documents.

Some 35 current and former leaders and more than 300 public officials are featured in the files from offshore companies, dubbed the Pandora Papers.

They reveal the King of Jordan secretly amassed £70m of UK and US property.

They also show how ex-UK PM Tony Blair and his wife saved £312,000 in stamp duty when they bought a London office.

The couple bought an offshore firm that owned the building.

The leak also links Russian President Vladimir Putin to secret assets in Monaco, and shows the Czech Prime Minister Andrej Babis - facing an election later this week - failed to declare an offshore investment company used to purchase two villas for £12m in the south of France.",
            "canonicalUrl" => "https://www.bbc.com/news/world-58780465"
        ],
        "data10" => [
            "url" => "https://www.yenisafak.com/yazarlar/huseyin-likoglu/yok-mu-beni-basbakan-yapacak-bir-cumhurbaskani-adayi-2059776",
            "probability" => 0.9790333,
            "headline" => "Yok mu beni başbakan yapacak bir cumhurbaşkanı adayı…",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://img.piri.net/mnresize/250/2000/resim/imagecrop/2021/02/22/12/34/554x554resized_434cc-185c0972author5.png",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => '',
            "articleBody" => 'Siyasette temel esas iktidara gelmek, ülke yönetimine talip olmaktır. İktidarların seçim yoluyla belirlendiği sistemlerde seçime giren siyasi partiler bunun için seçmenden oy ister. Bütün siyasi partiler de bu amaç için kurulur ve siyaset üretir.

Çok partili hayata geçtiğimiz 1946 yılından beri de her seçim bu amaçla yapıldı. ‘Açık oy gizli tasnif’ gibi bazı anti demokratik uygulamalar olsa da, vesayet yoluyla bazı müdahaleler olsa da Türkiye’de iktidarlar seçimle gelip gitti.

Seçimle iktidar değiştirme ümitleri kalmayanlar, başka yollara tevessül etmiştir. 27 Mayıs darbesi başta olmak üzere darbeler ile diğer kaos ve kriz arayışlarının altında bu anlayış yatmaktadır.

Meral Akşener, 15 Temmuz öncesi “Ben başbakan olacağım” dediğinde hepimiz şaşırmıştık. “Meral Hanım milletvekili bile değil, ufukta seçim de yok. Nasıl başbakan olacak” diye sormuştuk. Sorunun cevabı 15 Temmuz gecesi geldi, meğer Yurtta Sulh Konseyi belirleyecekmiş başbakanı.

Bugünlerde Meral Akşener’in başbakanlık isteği tekrar depreşti. “Cumhurbaşkanlığına aday değilim, ben başbakanlığa adayım” dedi. Bu sefer başbakanlığı, paydaşı olduğu Millet İttifakı’nın cumhurbaşkanı adayından bekliyor.

Yani Millet İttifakı’nın cumhurbaşkanı adayının tek görevi var: Meral Akşener’i Başbakan yapmak. 2023 seçimlerine giderken olay şöyle olacak; Kılıçdaroğlu veya birilerinin uygun göreceği muhalefetin cumhurbaşkanı adayı, halkın karşısına çıkacak, “Ey halkım! Bana oy verirseniz, ben de Meral Akşener’i başbakan yapacağım” diyecek.

Bunun dışındaki bütün söylemlerin hiçbir karşılığı yoktur. Yürütme yetkisini kayıtsız şartsız Meral Akşener’e teslim edecek bir cumhurbaşkanı adayının ne vadettiğinin hiçbir önemi yok. Bu ciddiyetsiz tartışmaların bir anlamı olmayabilir, ama bir nedeni vardır.

Millet İttifakı ülkeyi nasıl yöneteceğini ortaya koyamadığı için gündemi bu karşılığı olmayan söylemlerle meşgul ediyor. Bırakın, anayasayı değiştirmeyi, parlamenter sistemi geri getirmeyi, nasıl bir sistem önerdikleri konusunda bile tek kelimelik fikirleri yok.

Bu farazi tartışmalardan çıkıp, birkaç basit konuda ne düşündüklerini ilân etsinler. Mesela, Türkiye Büyük Millet Meclisi’nin her yasama yılının açılışının ardından Suriye, Libya, Irak, Somali, Katar gibi dünyanın muhtelif yerlerinde görev yapan Mehmetçik’lerimizin görev süreleri için tezkere sunulur Meclis’e. Millet İttifakı ve paydaşları, bıraksın sistem değişikliği fantezilerini de bu konuda ne düşündüklerini ve ne yapacaklarını anlatsınlar.

Doğrusu bu tartışmaları beğenmediğimi söyleyemem. Zira düşünsenize… Siz el ense keyif yapıyorsunuz, birileri sizi başbakan yapmak için il il gezip oy istiyor. Bu durum rüyada bile görülmez.

Çözüm: Kurtarmak istediklerini kurtarılamaz hale getirmek

Muhalefet, küresel emperyalizmin maşalarını kurtarmaya kararlı. PKK ve FETÖ için siyasi hayatını ortaya koymuş ve yarınını düşünmeyen bir muhalefet var ortada. KHK ve görünürde Kürt sorununu çözme vaatleri bunun en açık göstergesi. Belli ki küresel güçler, bunun karşılığında destek sözü vermiş. Türkiye düşmanlarının elindeki en önemli iki aparat terör örgütleri PKK ve FETÖ idi. 15 Temmuz’dan sonra bu iki aparat da yok edilme noktasına getirildi. Devlet bu iki örgütün tepesine binmiş boğazını sıkıyor.

Nefesi kesilen ve boğulmak üzere olan bu iki aparatı kurtarmak için bütün güçleriyle harekete geçtiler. Bunun için deşifre olmaktan, siyasi hayatlarını bitirmekten, kendileriyle çelişmekten, hâsılı hiçbir şeyden çekinmeden bu aparatları kurtarmak için ne gerekiyorsa yapıyorlar. Kimi mecburiyetten yapıyor, kimi siyasi ihtirasından, kimi ihanet, kimi de cehaletinden yapıyor.

Burada yapılacak tek şey, bu boğaz sıkma işini bir an önce neticelendirmektir. Eğer siz PKK ve FETÖ’yü ortadan kaldırırsanız, karşınızdaki yapıyı dağıtırsınız. Kurtaracakları kimse kalmazsa belki size düşmanlıkları artar ama Türkiye kurtulmuş olur.',
            "articleBodyHtml" => 'Siyasette temel esas iktidara gelmek, ülke yönetimine talip olmaktır. İktidarların seçim yoluyla belirlendiği sistemlerde seçime giren siyasi partiler bunun için seçmenden oy ister. Bütün siyasi partiler de bu amaç için kurulur ve siyaset üretir.

Çok partili hayata geçtiğimiz 1946 yılından beri de her seçim bu amaçla yapıldı. ‘Açık oy gizli tasnif’ gibi bazı anti demokratik uygulamalar olsa da, vesayet yoluyla bazı müdahaleler olsa da Türkiye’de iktidarlar seçimle gelip gitti.

Seçimle iktidar değiştirme ümitleri kalmayanlar, başka yollara tevessül etmiştir. 27 Mayıs darbesi başta olmak üzere darbeler ile diğer kaos ve kriz arayışlarının altında bu anlayış yatmaktadır.

Meral Akşener, 15 Temmuz öncesi “Ben başbakan olacağım” dediğinde hepimiz şaşırmıştık. “Meral Hanım milletvekili bile değil, ufukta seçim de yok. Nasıl başbakan olacak” diye sormuştuk. Sorunun cevabı 15 Temmuz gecesi geldi, meğer Yurtta Sulh Konseyi belirleyecekmiş başbakanı.

Bugünlerde Meral Akşener’in başbakanlık isteği tekrar depreşti. “Cumhurbaşkanlığına aday değilim, ben başbakanlığa adayım” dedi. Bu sefer başbakanlığı, paydaşı olduğu Millet İttifakı’nın cumhurbaşkanı adayından bekliyor.

Yani Millet İttifakı’nın cumhurbaşkanı adayının tek görevi var: Meral Akşener’i Başbakan yapmak. 2023 seçimlerine giderken olay şöyle olacak; Kılıçdaroğlu veya birilerinin uygun göreceği muhalefetin cumhurbaşkanı adayı, halkın karşısına çıkacak, “Ey halkım! Bana oy verirseniz, ben de Meral Akşener’i başbakan yapacağım” diyecek.

Bunun dışındaki bütün söylemlerin hiçbir karşılığı yoktur. Yürütme yetkisini kayıtsız şartsız Meral Akşener’e teslim edecek bir cumhurbaşkanı adayının ne vadettiğinin hiçbir önemi yok. Bu ciddiyetsiz tartışmaların bir anlamı olmayabilir, ama bir nedeni vardır.

Millet İttifakı ülkeyi nasıl yöneteceğini ortaya koyamadığı için gündemi bu karşılığı olmayan söylemlerle meşgul ediyor. Bırakın, anayasayı değiştirmeyi, parlamenter sistemi geri getirmeyi, nasıl bir sistem önerdikleri konusunda bile tek kelimelik fikirleri yok.

Bu farazi tartışmalardan çıkıp, birkaç basit konuda ne düşündüklerini ilân etsinler. Mesela, Türkiye Büyük Millet Meclisi’nin her yasama yılının açılışının ardından Suriye, Libya, Irak, Somali, Katar gibi dünyanın muhtelif yerlerinde görev yapan Mehmetçik’lerimizin görev süreleri için tezkere sunulur Meclis’e. Millet İttifakı ve paydaşları, bıraksın sistem değişikliği fantezilerini de bu konuda ne düşündüklerini ve ne yapacaklarını anlatsınlar.

Doğrusu bu tartışmaları beğenmediğimi söyleyemem. Zira düşünsenize… Siz el ense keyif yapıyorsunuz, birileri sizi başbakan yapmak için il il gezip oy istiyor. Bu durum rüyada bile görülmez.

Çözüm: Kurtarmak istediklerini kurtarılamaz hale getirmek

Muhalefet, küresel emperyalizmin maşalarını kurtarmaya kararlı. PKK ve FETÖ için siyasi hayatını ortaya koymuş ve yarınını düşünmeyen bir muhalefet var ortada. KHK ve görünürde Kürt sorununu çözme vaatleri bunun en açık göstergesi. Belli ki küresel güçler, bunun karşılığında destek sözü vermiş. Türkiye düşmanlarının elindeki en önemli iki aparat terör örgütleri PKK ve FETÖ idi. 15 Temmuz’dan sonra bu iki aparat da yok edilme noktasına getirildi. Devlet bu iki örgütün tepesine binmiş boğazını sıkıyor.

Nefesi kesilen ve boğulmak üzere olan bu iki aparatı kurtarmak için bütün güçleriyle harekete geçtiler. Bunun için deşifre olmaktan, siyasi hayatlarını bitirmekten, kendileriyle çelişmekten, hâsılı hiçbir şeyden çekinmeden bu aparatları kurtarmak için ne gerekiyorsa yapıyorlar. Kimi mecburiyetten yapıyor, kimi siyasi ihtirasından, kimi ihanet, kimi de cehaletinden yapıyor.

Burada yapılacak tek şey, bu boğaz sıkma işini bir an önce neticelendirmektir. Eğer siz PKK ve FETÖ’yü ortadan kaldırırsanız, karşınızdaki yapıyı dağıtırsınız. Kurtaracakları kimse kalmazsa belki size düşmanlıkları artar ama Türkiye kurtulmuş olur.',
            "canonicalUrl" => "https://www.yenisafak.com/yazarlar/huseyin-likoglu/yok-mu-beni-basbakan-yapacak-bir-cumhurbaskani-adayi-2059776"
        ],
        "data11" => [
            "url" => "https://www.sabah.com.tr/gundem/2021/10/03/ak-parti-sozcusu-omer-celik-paylasti-eylul-ayinda-14-proje-hayata-gecirildi",
            "probability" => 0.9790333,
            "headline" => "AK Parti Sözcüsü Ömer Çelik paylaştı! Eylül ayında 14 proje hayata geçirildi",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://iasbh.tmgrup.com.tr/1f8638/752/395/1/0/422/221?u=https://isbh.tmgrup.com.tr/sbh/2021/10/03/ak-parti-sozcusu-omer-celik-paylasti-eylul-ayinda-14-proje-hayata-gecirildi-1633290210832.jpg",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => '',
            "articleBody" => 'AK Parti Sözcüsü Ömer Çelik sosyal medya hesabından yaptığı paylaşımda, son 1 ayda hayata geçirilen projelere yer verdi. Çelik"in yaptığı paylaşımda eylül ayında 14 yatırımın Türkiye"ye kazandırıldığı görüldü. Öte yandan Çelik"in yaptığı paylaşımda, Ampute Futbol Milli Takımı"nın Avrupa Şampiyonasında elde ettiği başarıya da yer verildi. AK Parti Sözcüsü Ömer Çelik sosyal medya hesabından dikkat çeken bir paylaşımda bulundu. Çelik yaptığı videolu paylaşımda, eylül ayında AK Parti"nin hayata geçirdiği projelere ve Türkiye"ye kazandırdığı eserlere yer verdi.',
            "articleBodyHtml" => 'AK Parti Sözcüsü Ömer Çelik sosyal medya hesabından yaptığı paylaşımda, son 1 ayda hayata geçirilen projelere yer verdi. Çelik"in yaptığı paylaşımda eylül ayında 14 yatırımın Türkiye"ye kazandırıldığı görüldü. Öte yandan Çelik"in yaptığı paylaşımda, Ampute Futbol Milli Takımı"nın Avrupa Şampiyonasında elde ettiği başarıya da yer verildi. AK Parti Sözcüsü Ömer Çelik sosyal medya hesabından dikkat çeken bir paylaşımda bulundu. Çelik yaptığı videolu paylaşımda, eylül ayında AK Parti"nin hayata geçirdiği projelere ve Türkiye"ye kazandırdığı eserlere yer verdi.',
            "canonicalUrl" => "https://www.sabah.com.tr/gundem/2021/10/03/ak-parti-sozcusu-omer-celik-paylasti-eylul-ayinda-14-proje-hayata-gecirildi"
        ],
        "data12" => [
            "url" => "https://sharghdaily.com/fa/main/detail/299066/%D8%B1%D8%A7%D9%87%E2%80%8C%D8%AD%D9%84%D8%8C-%D8%AC%D9%84%D9%88%DA%AF%DB%8C%D8%B1%DB%8C-%D8%A7%D8%B2-%D8%AF%D8%AE%D8%A7%D9%84%D8%AA-%D8%A7%D8%B1%D8%AA%D8%B4%E2%80%8C%D9%87%D8%A7%DB%8C-%D8%A8%DB%8C%DA%AF%D8%A7%D9%86%D9%87-%D8%A7%D8%B3%D8%AA",
            "probability" => 0.9790333,
            "headline" => "راه‌حل، جلوگیری از دخالت ارتش‌های بیگانه است",
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://iasbh.tmgrup.com.tr/1f8638/752/395/1/0/422/221?u=https://isbh.tmgrup.com.tr/sbh/2021/10/03/ak-parti-sozcusu-omer-celik-paylasti-eylul-ayinda-14-proje-hayata-gecirildi-1633290210832.jpg",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => '',
            "articleBody" => 'ایگاه اطلاع‌رسانی مقام معظم رهبری: حضرت آیت‌الله خامنه‌ای، فرمانده معظم کل قوا، صبح یکشنبه در ارتباط تصویری با مراسم مشترک دانش‌آموختگی دانشجویان دانشگاه‌های افسری نیروهای مسلح در دانشگاه افسری امام حسین علیه‌السلام، این نیروهای پر‌افتخار را «قلعه مستحکم امنیت ملت سربلند ایران و میهن مقتدر و عزیز» خواندند و افزودند: دخالت بیگانگان در منطقه مایه اختلاف و خسارت است و همه مسائل و حوادث باید بدون دخالت بیگانه و با الگوپذیری کشورهای منطقه از اقتدار و عقلانیت ایران و نیروهای مسلح جمهوری اسلامی حل شود».
مقام معظم رهبری با ابراز امیدواری برای توفیق دانش‌آموختگان و ارتقای جوانان نیروهای مسلح در مکتب و دانشگاه حسینی، به ملت ایران به‌خاطر داشتن جوانان مؤمن، صالح، شجاع و دارای عزم و بصیرت تبریک گفتند و افزودند: فرماندهان عزیزی که جوانان میهن را این‌گونه تربیت می‌کنند، شایسته افتخار و تقدیرند.
فرمانده کل قوا با اشاره به تحقق فرموده امیرمؤمنان درباره نیروهای مسلح افزودند: به فضل الهی، نیروهای مسلح ایران امروز به معنای واقعی کلمه سپر دفاعی ملت و کشور در مقابل تهدیدهای سخت دشمنان بیرونی و درونی هستند. حضرت آیت‌الله خامنه‌ای سربازی ملت ایران را موجب سرافرازی و عزت دانستند و گفتند: آمادگی برای دفاع از ملت ایران و هویت اسلامی، ملی و انقلابی کشور افتخار بزرگ نیروهای مسلح است.
ایشان امنیت را زیرساخت اساسی همه فعالیت‌های ضروری برای پیشرفت کشور برشمردند و با مهم‌خواندن تحقق امنیت کشور بدون تکیه بر بیگانگان افزودند: این مسئله البته برای ملت ایران عادی است اما کشورهای مختلف حتی کشورهای اروپایی از این مشکل رنج می‌برند.
 ایشان به بگو‌مگوهای اخیر اروپا و آمریکا اشاره کردند و گفتند: برخی اروپایی‌ها، اقدام آمریکا را خنجر از پشت خواندند و به نوعی گفتند اروپا باید بدون اتکا به ناتو و در ‌واقع به آمریکا، مستقلا امنیت خود را تأمین کند.
مقام معظم رهبری افزودند: وقتی کشورهای اروپایی به علت اتکا‌ به آمریکا، یعنی کشوری که با اروپا مخالف هم نیست در تحقق امنیت پایدار احساس کمبود می‌کنند، حساب کشورهای دیگر که نیروهای مسلح خود را تحت کنترل آمریکا و دیگر بیگانگان قرار داده‌اند، مشخص است.
فرمانده کل قوا، تأمین امنیت با تکیه بر دیگران را فقط یک توهم خواندند و گفتند: کسانی که به این توهم دچارند سیلی آن را به‌زودی خواهند خورد؛ چرا‌که دخالت مستقیم یا غیرمستقیم بیگانگان در امنیت و جنگ و صلح هر کشوری، فاجعه‌ای مصیبت‌بار است.
ایشان با تجلیل از اقتدار و سربلندی نیروهای مسلح در آزمایش‌های بسیار مهم و دشوار به‌ویژه جنگ تحمیلی هشت‌ساله گفتند: اقتدار نیروهای مسلح به مسائلی مانند آموزش‌ها، ابتکارات و پیشرفت‌های علمی، تجهیزات و انضباط سازمانی وابسته است اما مهم‌ترین عامل اقتدار نیروهای مسلح، روحیه، معنویت و مسائل دینی و اخلاقی است.
 مقام معظم رهبری، خروج ارتش مجهز و بدون روحیه اخلاقی و معنوی آمریکا از افغانستان را نمونه‌ای از نتایج اقتدار ظاهری و نه واقعی خواندند و گفتند: آمریکایی‌ها ۲۰ سال قبل برای سرنگونی طالبان به افغانستان لشکرکشی کردند و در این اشغالگری طولانی‌مدت، کشتار و جنایت و خسارات فراوانی به بار آوردند اما بعد از این همه هزینه مادی و انسانی، حکومت را به طالبان دادند و خارج شدند که این واقعیت برای همه کشورها درس‌آموز است.
فرمانده کل قوا، اوضاع ارتش آمریکا هنگام خروج از افغانستان را نشان‌دهنده ماهیت واقعی این ارتش دانستند و گفتند: آن تصاویر هالیوودی از ارتش آمریکا و کشورهای امثال او، فقط نمایش است؛ چرا‌که ماهیت واقعی آنها همین است که در افغانستان دیده شد.
مقام معظم رهبری، نفرت مردم شرق آسیا از ارتش آمریکا را یادآور شدند و گفتند: آمریکایی‌ها هر‌جا دخالت کنند، منفور ملت‌ها هستند. فرمانده کل قوا، حضور نظامی بیگانگان در منطقه را نیز مایه اختلاف و خسارت و ویرانی برشمردند و تأکید کردند: صلاح منطقه در این است که همه کشورها از ارتشی مستقل و متکی به ملت خود و هم‌افزا با ارتش‌های همسایگان برخوردار باشند.
مقام معظم رهبری افزودند: ارتش‌های منطقه می‌توانند امنیت منطقه را تأمین کنند و نباید اجازه دهند که ارتش‌های بیگانه برای حفظ منافع خود، دخالت یا حضور نظامی داشته باشند.
فرمانده کل قوا افزودند: حوادثی که در شمال‌غرب ایران، در برخی کشورهای همسایه در جریان است، باید با همین منطق پرهیز از دادن مجوز حضور بیگانگان حل شود. ایشان گفتند: نیروهای مسلح کشور عزیز ما همواره با اقتدار همراه با عقلانیت عمل می‌کنند و این عقلانیت باید الگویی برای دیگر کشورها و عامل حل مسائل موجود باشد و همه بدانند که اگر کسی برای برادران خود چاه بکند اول خودش در چاه می‌افتد.
فرمانده کل قوا در پایان سخنانشان نیروهای مسلح را برای تداوم افتخار خدمت به ملت و کشور و افزایش روزافزون توانایی‌های مادی و معنوی توصیه مؤکد کردند.
 پیش از سخنان فرمانده کل قوا، سردار سرلشکر محمد باقری، رئیس ستاد کل نیروهای مسلح با بیان گزارشی از توانمندی‌ها و آمادگی‌های رزمی، دفاعی و امنیتی نیروهای مسلح و همچنین خدمات اجتماعی این نیروها به مردم، به شکست آمریکا در افغانستان اشاره کرد و گفت: این شکست خفت‌بار و تخلیه بخش بزرگی از تجهیزات و پایگاه‌های آنها در منطقه‌ و شکست رژیم صهیونیستی در نبرد ۱۲‌روزه موسوم به شمشیر قدس، نشانه‌های تسریع در افول آمریکا است.
در این مراسم که هم‌زمان در دانشگاه‌های افسری نیروهای مسلح از طریق ارتباط تصویری دریافت می‌شد، سردار سرتیپ پاسدار غلامی، فرمانده دانشگاه امام حسین(ع)، امیر سرتیپ دوم خلبان رودباری، فرمانده دانشگاه شهید ستاری و سردار سرتیپ دوم پاسدار بختیاری، فرمانده دانشگاه علوم انتظامی امین گزارشی از فعالیت‌ها، اقدامات و برنامه‌های تحصیلی این دانشگاه‌ها بیان کردند.
قرائت سوگندنامه، اعطای پرچم توسط دانشجویان قدیم به جدید و اجرای سرود مشترک توسط دانشجویان مستقر در میدان از دیگر برنامه‌های مراسم مشترک دانش‌آموختگی نیروهای مسلح بود. همچنین رئیس ستاد ‌کل نیروهای مسلح با کسب اجازه از فرمانده کل قوا به تعدادی از برگزیدگان دانشگاه‌های افسری درجه و سردوشی داد.',
            "articleBodyHtml" => 'ایگاه اطلاع‌رسانی مقام معظم رهبری: حضرت آیت‌الله خامنه‌ای، فرمانده معظم کل قوا، صبح یکشنبه در ارتباط تصویری با مراسم مشترک دانش‌آموختگی دانشجویان دانشگاه‌های افسری نیروهای مسلح در دانشگاه افسری امام حسین علیه‌السلام، این نیروهای پر‌افتخار را «قلعه مستحکم امنیت ملت سربلند ایران و میهن مقتدر و عزیز» خواندند و افزودند: دخالت بیگانگان در منطقه مایه اختلاف و خسارت است و همه مسائل و حوادث باید بدون دخالت بیگانه و با الگوپذیری کشورهای منطقه از اقتدار و عقلانیت ایران و نیروهای مسلح جمهوری اسلامی حل شود».
مقام معظم رهبری با ابراز امیدواری برای توفیق دانش‌آموختگان و ارتقای جوانان نیروهای مسلح در مکتب و دانشگاه حسینی، به ملت ایران به‌خاطر داشتن جوانان مؤمن، صالح، شجاع و دارای عزم و بصیرت تبریک گفتند و افزودند: فرماندهان عزیزی که جوانان میهن را این‌گونه تربیت می‌کنند، شایسته افتخار و تقدیرند.
فرمانده کل قوا با اشاره به تحقق فرموده امیرمؤمنان درباره نیروهای مسلح افزودند: به فضل الهی، نیروهای مسلح ایران امروز به معنای واقعی کلمه سپر دفاعی ملت و کشور در مقابل تهدیدهای سخت دشمنان بیرونی و درونی هستند. حضرت آیت‌الله خامنه‌ای سربازی ملت ایران را موجب سرافرازی و عزت دانستند و گفتند: آمادگی برای دفاع از ملت ایران و هویت اسلامی، ملی و انقلابی کشور افتخار بزرگ نیروهای مسلح است.
ایشان امنیت را زیرساخت اساسی همه فعالیت‌های ضروری برای پیشرفت کشور برشمردند و با مهم‌خواندن تحقق امنیت کشور بدون تکیه بر بیگانگان افزودند: این مسئله البته برای ملت ایران عادی است اما کشورهای مختلف حتی کشورهای اروپایی از این مشکل رنج می‌برند.
 ایشان به بگو‌مگوهای اخیر اروپا و آمریکا اشاره کردند و گفتند: برخی اروپایی‌ها، اقدام آمریکا را خنجر از پشت خواندند و به نوعی گفتند اروپا باید بدون اتکا به ناتو و در ‌واقع به آمریکا، مستقلا امنیت خود را تأمین کند.
مقام معظم رهبری افزودند: وقتی کشورهای اروپایی به علت اتکا‌ به آمریکا، یعنی کشوری که با اروپا مخالف هم نیست در تحقق امنیت پایدار احساس کمبود می‌کنند، حساب کشورهای دیگر که نیروهای مسلح خود را تحت کنترل آمریکا و دیگر بیگانگان قرار داده‌اند، مشخص است.
فرمانده کل قوا، تأمین امنیت با تکیه بر دیگران را فقط یک توهم خواندند و گفتند: کسانی که به این توهم دچارند سیلی آن را به‌زودی خواهند خورد؛ چرا‌که دخالت مستقیم یا غیرمستقیم بیگانگان در امنیت و جنگ و صلح هر کشوری، فاجعه‌ای مصیبت‌بار است.
ایشان با تجلیل از اقتدار و سربلندی نیروهای مسلح در آزمایش‌های بسیار مهم و دشوار به‌ویژه جنگ تحمیلی هشت‌ساله گفتند: اقتدار نیروهای مسلح به مسائلی مانند آموزش‌ها، ابتکارات و پیشرفت‌های علمی، تجهیزات و انضباط سازمانی وابسته است اما مهم‌ترین عامل اقتدار نیروهای مسلح، روحیه، معنویت و مسائل دینی و اخلاقی است.
 مقام معظم رهبری، خروج ارتش مجهز و بدون روحیه اخلاقی و معنوی آمریکا از افغانستان را نمونه‌ای از نتایج اقتدار ظاهری و نه واقعی خواندند و گفتند: آمریکایی‌ها ۲۰ سال قبل برای سرنگونی طالبان به افغانستان لشکرکشی کردند و در این اشغالگری طولانی‌مدت، کشتار و جنایت و خسارات فراوانی به بار آوردند اما بعد از این همه هزینه مادی و انسانی، حکومت را به طالبان دادند و خارج شدند که این واقعیت برای همه کشورها درس‌آموز است.
فرمانده کل قوا، اوضاع ارتش آمریکا هنگام خروج از افغانستان را نشان‌دهنده ماهیت واقعی این ارتش دانستند و گفتند: آن تصاویر هالیوودی از ارتش آمریکا و کشورهای امثال او، فقط نمایش است؛ چرا‌که ماهیت واقعی آنها همین است که در افغانستان دیده شد.
مقام معظم رهبری، نفرت مردم شرق آسیا از ارتش آمریکا را یادآور شدند و گفتند: آمریکایی‌ها هر‌جا دخالت کنند، منفور ملت‌ها هستند. فرمانده کل قوا، حضور نظامی بیگانگان در منطقه را نیز مایه اختلاف و خسارت و ویرانی برشمردند و تأکید کردند: صلاح منطقه در این است که همه کشورها از ارتشی مستقل و متکی به ملت خود و هم‌افزا با ارتش‌های همسایگان برخوردار باشند.
مقام معظم رهبری افزودند: ارتش‌های منطقه می‌توانند امنیت منطقه را تأمین کنند و نباید اجازه دهند که ارتش‌های بیگانه برای حفظ منافع خود، دخالت یا حضور نظامی داشته باشند.
فرمانده کل قوا افزودند: حوادثی که در شمال‌غرب ایران، در برخی کشورهای همسایه در جریان است، باید با همین منطق پرهیز از دادن مجوز حضور بیگانگان حل شود. ایشان گفتند: نیروهای مسلح کشور عزیز ما همواره با اقتدار همراه با عقلانیت عمل می‌کنند و این عقلانیت باید الگویی برای دیگر کشورها و عامل حل مسائل موجود باشد و همه بدانند که اگر کسی برای برادران خود چاه بکند اول خودش در چاه می‌افتد.
فرمانده کل قوا در پایان سخنانشان نیروهای مسلح را برای تداوم افتخار خدمت به ملت و کشور و افزایش روزافزون توانایی‌های مادی و معنوی توصیه مؤکد کردند.
 پیش از سخنان فرمانده کل قوا، سردار سرلشکر محمد باقری، رئیس ستاد کل نیروهای مسلح با بیان گزارشی از توانمندی‌ها و آمادگی‌های رزمی، دفاعی و امنیتی نیروهای مسلح و همچنین خدمات اجتماعی این نیروها به مردم، به شکست آمریکا در افغانستان اشاره کرد و گفت: این شکست خفت‌بار و تخلیه بخش بزرگی از تجهیزات و پایگاه‌های آنها در منطقه‌ و شکست رژیم صهیونیستی در نبرد ۱۲‌روزه موسوم به شمشیر قدس، نشانه‌های تسریع در افول آمریکا است.
در این مراسم که هم‌زمان در دانشگاه‌های افسری نیروهای مسلح از طریق ارتباط تصویری دریافت می‌شد، سردار سرتیپ پاسدار غلامی، فرمانده دانشگاه امام حسین(ع)، امیر سرتیپ دوم خلبان رودباری، فرمانده دانشگاه شهید ستاری و سردار سرتیپ دوم پاسدار بختیاری، فرمانده دانشگاه علوم انتظامی امین گزارشی از فعالیت‌ها، اقدامات و برنامه‌های تحصیلی این دانشگاه‌ها بیان کردند.
قرائت سوگندنامه، اعطای پرچم توسط دانشجویان قدیم به جدید و اجرای سرود مشترک توسط دانشجویان مستقر در میدان از دیگر برنامه‌های مراسم مشترک دانش‌آموختگی نیروهای مسلح بود. همچنین رئیس ستاد ‌کل نیروهای مسلح با کسب اجازه از فرمانده کل قوا به تعدادی از برگزیدگان دانشگاه‌های افسری درجه و سردوشی داد.',
            "canonicalUrl" => "https://sharghdaily.com/fa/main/detail/299066/%D8%B1%D8%A7%D9%87%E2%80%8C%D8%AD%D9%84%D8%8C-%D8%AC%D9%84%D9%88%DA%AF%DB%8C%D8%B1%DB%8C-%D8%A7%D8%B2-%D8%AF%D8%AE%D8%A7%D9%84%D8%AA-%D8%A7%D8%B1%D8%AA%D8%B4%E2%80%8C%D9%87%D8%A7%DB%8C-%D8%A8%DB%8C%DA%AF%D8%A7%D9%86%D9%87-%D8%A7%D8%B3%D8%AA"
        ],
        "data13" => [
            "url" => "https://www.maariv.co.il/news/Education/Article-868069",
            "probability" => 0.9790333,
            "headline" => '"לא יתייחסו אלינו כשקופות": אלפי מטפלות חסמו כבישים בת"א',
            "datePublished" => "2021-09-07T09:00:13.727000+00:00",
            "datePublishedRaw" => "2021-09-07T09:00:13.727Z",
            "dateModified" => "2021-09-07T09:00:13.727000+00:00",
            "dateModifiedRaw" => "2021-09-07T09:00:13.727Z",
            "author" => "David Streitfeld",
            "authorsList" => [
                "David Streitfeld"
            ],
            "inLanguage" => "en",
            "mainImage" => "https://images.maariv.co.il/image/upload/f_auto,fl_lossy/t_ArticleControlTransformaionFaceDetect/668400",
            "images" => [
                "https://www.alriyadh.com/media/thumb/eb/32/1000_c5fbdae98d.jpg",
                "https://www.alriyadh.com/media/thumb/65/ee/1000_e54eaba166.jpg",
                "https://www.alriyadh.com/media/thumb/90/36/1000_379b2a9ad5.jpg",
            ],
            "description" => '',
            "articleBody" => 'כ-6,500 מטפלות והורים משתתפים בצעדת מחאה בתל אביב במסגרת השביתה במעונות היום: "בנט וליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש", מחו לקראת השביתה במעונות היום: היום (ראשון) החלה השביתה, הבלתי-מוגבלת בזמן, במעונות היום המסובסדים. כ-6,500 מטפלות שנאבקות נגד מחסור בכוח אדם ותנאי שכר נמוכים בהשוואה לגנים עירוניים, משתתפות בצעדת מחאה שיצאה מככר רבין בתל אביב וזועקות לשרת הכלכלה ח"כ אורנה ברביבאי ושר האוצר ח"כ אביגדור ליברמן: "לא נסכים שיתייחסו אלינו כשקופות - דורשות פתיחה מידית במו"מ". אל המטפלות הצטרפו הורים שזעקו: "ראש הממשלה בנט ושר האוצר ליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש". בשל הצעדה נחסמו לתנועה בת"א הרחובות דוד המלך, ויצמן, שאול המלך ואבן גבירול. לקראת השביתה במעונות היום: היום (ראשון) החלה השביתה, הבלתי-מוגבלת בזמן, במעונות היום המסובסדים. כ-6,500 מטפלות שנאבקות נגד מחסור בכוח אדם ותנאי שכר נמוכים בהשוואה לגנים עירוניים, משתתפות בצעדת מחאה שיצאה מככר רבין בתל אביב וזועקות לשרת הכלכלה ח"כ אורנה ברביבאי ושר האוצר ח"כ אביגדור ליברמן: "לא נסכים שיתייחסו אלינו כשקופות - דורשות פתיחה מידית במו"מ". אל המטפלות הצטרפו הורים שזעקו: "ראש הממשלה בנט ושר האוצר ליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש". בשל הצעדה נחסמו לתנועה בת"א הרחובות דוד המלך, ויצמן, שאול המלך ואבן גבירול.יו"ר אמונה ליאורה מינקה שמשתתפת במחאה אמרה כי "אנחנו במשבר ענק. הבקשות שלנו לקיים משא ומתן לא נענו. שמחנו לשמוע שהנושא עלה על סדר היום הציבורי בממשלה החדשה אך בפועל הכאוס רק התעצם. זרוע העבודה עברה לאחרונה למשרד הכלכלה ומינואר תעבור למשרד החינוך אך רק בתחום הפדגוגי וכל זה מייצר רק כאוס גדול יותר. והכי גרוע, שבתוך משחק הכיסאות בין לוקחי האחריות אף אחד לא מדבר איתנו. המשבר בשיאו. מעולם לא היה המצב כל כך חמור. אנחנו מפעילים מעונות עם צוות מסור, אנחנו יודעים את העבודה ואוהבים את הילדים אך לא יכולים להמשיך כך". לקראת השביתה במעונות היום: היום (ראשון) החלה השביתה, הבלתי-מוגבלת בזמן, במעונות היום המסובסדים. כ-6,500 מטפלות שנאבקות נגד מחסור בכוח אדם ותנאי שכר נמוכים בהשוואה לגנים עירוניים, משתתפות בצעדת מחאה שיצאה מככר רבין בתל אביב וזועקות לשרת הכלכלה ח"כ אורנה ברביבאי ושר האוצר ח"כ אביגדור ליברמן: "לא נסכים שיתייחסו אלינו כשקופות - דורשות פתיחה מידית במו"מ". אל המטפלות הצטרפו הורים שזעקו: "ראש הממשלה בנט ושר האוצר ליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש". בשל הצעדה נחסמו לתנועה בת"א הרחובות דוד המלך, ויצמן, שאול המלך ואבן גבירול.יו"ר אמונה ליאורה מינקה שמשתתפת במחאה אמרה כי "אנחנו במשבר ענק. הבקשות שלנו לקיים משא ומתן לא נענו. שמחנו לשמוע שהנושא עלה על סדר היום הציבורי בממשלה החדשה אך בפועל הכאוס רק התעצם. זרוע העבודה עברה לאחרונה למשרד הכלכלה ומינואר תעבור למשרד החינוך אך רק בתחום הפדגוגי וכל זה מייצר רק כאוס גדול יותר. והכי גרוע, שבתוך משחק הכיסאות בין לוקחי האחריות אף אחד לא מדבר איתנו. המשבר בשיאו. מעולם לא היה המצב כל כך חמור. אנחנו מפעילים מעונות עם צוות מסור, אנחנו יודעים את העבודה ואוהבים את הילדים אך לא יכולים להמשיך כך".

היא הוסיפה כי "יש מחסור עצום בכוח אדם וזה לא מאפשר לנו להפעיל את המעונות באופן שמבטיח טיפול מיטבי לילדים. יש לנו פערי שכר בלתי סבירים בין המטפלות-מחנכות שלנו לבין הסייעות בגני הילדים. הוצגו מסמכים ומחקרים ומעשים אין. גם בתקציב הנוכחי אין התייחסות לכך. משבר הקורונה רק העצים את המשבר. מתפרסמים כל יום מתווים לגנים לבתי הספר או לתיכונים אך לנו אין בכלל מתווה. כנראה שבממשלה חושבים שילדים נולדים בגיל 3. צר לנו לאכזב אתכם אך הילדים שלנו לא נולדים בגיל 3 וחובה על הממשלה לייצר מתווה ישים ואחראי להפעלת מעונות היום".',
            "articleBodyHtml" => 'כ-6,500 מטפלות והורים משתתפים בצעדת מחאה בתל אביב במסגרת השביתה במעונות היום: "בנט וליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש", מחו לקראת השביתה במעונות היום: היום (ראשון) החלה השביתה, הבלתי-מוגבלת בזמן, במעונות היום המסובסדים. כ-6,500 מטפלות שנאבקות נגד מחסור בכוח אדם ותנאי שכר נמוכים בהשוואה לגנים עירוניים, משתתפות בצעדת מחאה שיצאה מככר רבין בתל אביב וזועקות לשרת הכלכלה ח"כ אורנה ברביבאי ושר האוצר ח"כ אביגדור ליברמן: "לא נסכים שיתייחסו אלינו כשקופות - דורשות פתיחה מידית במו"מ". אל המטפלות הצטרפו הורים שזעקו: "ראש הממשלה בנט ושר האוצר ליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש". בשל הצעדה נחסמו לתנועה בת"א הרחובות דוד המלך, ויצמן, שאול המלך ואבן גבירול. לקראת השביתה במעונות היום: היום (ראשון) החלה השביתה, הבלתי-מוגבלת בזמן, במעונות היום המסובסדים. כ-6,500 מטפלות שנאבקות נגד מחסור בכוח אדם ותנאי שכר נמוכים בהשוואה לגנים עירוניים, משתתפות בצעדת מחאה שיצאה מככר רבין בתל אביב וזועקות לשרת הכלכלה ח"כ אורנה ברביבאי ושר האוצר ח"כ אביגדור ליברמן: "לא נסכים שיתייחסו אלינו כשקופות - דורשות פתיחה מידית במו"מ". אל המטפלות הצטרפו הורים שזעקו: "ראש הממשלה בנט ושר האוצר ליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש". בשל הצעדה נחסמו לתנועה בת"א הרחובות דוד המלך, ויצמן, שאול המלך ואבן גבירול.יו"ר אמונה ליאורה מינקה שמשתתפת במחאה אמרה כי "אנחנו במשבר ענק. הבקשות שלנו לקיים משא ומתן לא נענו. שמחנו לשמוע שהנושא עלה על סדר היום הציבורי בממשלה החדשה אך בפועל הכאוס רק התעצם. זרוע העבודה עברה לאחרונה למשרד הכלכלה ומינואר תעבור למשרד החינוך אך רק בתחום הפדגוגי וכל זה מייצר רק כאוס גדול יותר. והכי גרוע, שבתוך משחק הכיסאות בין לוקחי האחריות אף אחד לא מדבר איתנו. המשבר בשיאו. מעולם לא היה המצב כל כך חמור. אנחנו מפעילים מעונות עם צוות מסור, אנחנו יודעים את העבודה ואוהבים את הילדים אך לא יכולים להמשיך כך". לקראת השביתה במעונות היום: היום (ראשון) החלה השביתה, הבלתי-מוגבלת בזמן, במעונות היום המסובסדים. כ-6,500 מטפלות שנאבקות נגד מחסור בכוח אדם ותנאי שכר נמוכים בהשוואה לגנים עירוניים, משתתפות בצעדת מחאה שיצאה מככר רבין בתל אביב וזועקות לשרת הכלכלה ח"כ אורנה ברביבאי ושר האוצר ח"כ אביגדור ליברמן: "לא נסכים שיתייחסו אלינו כשקופות - דורשות פתיחה מידית במו"מ". אל המטפלות הצטרפו הורים שזעקו: "ראש הממשלה בנט ושר האוצר ליברמן מוכנים לנהל מו״מ עם החמאס, אבל מסרבים לנהל מו״מ עם מטפלות שמרוויחות 5,000 שקל בחודש". בשל הצעדה נחסמו לתנועה בת"א הרחובות דוד המלך, ויצמן, שאול המלך ואבן גבירול.יו"ר אמונה ליאורה מינקה שמשתתפת במחאה אמרה כי "אנחנו במשבר ענק. הבקשות שלנו לקיים משא ומתן לא נענו. שמחנו לשמוע שהנושא עלה על סדר היום הציבורי בממשלה החדשה אך בפועל הכאוס רק התעצם. זרוע העבודה עברה לאחרונה למשרד הכלכלה ומינואר תעבור למשרד החינוך אך רק בתחום הפדגוגי וכל זה מייצר רק כאוס גדול יותר. והכי גרוע, שבתוך משחק הכיסאות בין לוקחי האחריות אף אחד לא מדבר איתנו. המשבר בשיאו. מעולם לא היה המצב כל כך חמור. אנחנו מפעילים מעונות עם צוות מסור, אנחנו יודעים את העבודה ואוהבים את הילדים אך לא יכולים להמשיך כך".

היא הוסיפה כי "יש מחסור עצום בכוח אדם וזה לא מאפשר לנו להפעיל את המעונות באופן שמבטיח טיפול מיטבי לילדים. יש לנו פערי שכר בלתי סבירים בין המטפלות-מחנכות שלנו לבין הסייעות בגני הילדים. הוצגו מסמכים ומחקרים ומעשים אין. גם בתקציב הנוכחי אין התייחסות לכך. משבר הקורונה רק העצים את המשבר. מתפרסמים כל יום מתווים לגנים לבתי הספר או לתיכונים אך לנו אין בכלל מתווה. כנראה שבממשלה חושבים שילדים נולדים בגיל 3. צר לנו לאכזב אתכם אך הילדים שלנו לא נולדים בגיל 3 וחובה על הממשלה לייצר מתווה ישים ואחראי להפעלת מעונות היום".',
            "canonicalUrl" => "https://www.maariv.co.il/news/Education/Article-868069"
        ],
    ],
    'octoparse_url' => 'https://advancedapi.octoparse.com',
    'octoparse_credentials' => [
        'user_name' => 'Kenaf1',
        'password' => 'FZM2015',
        'grant_type' => 'password'
    ],
/*
|--------------------------------------------------------------------------
| Application Environment
|--------------------------------------------------------------------------
|
| This value determines the "environment" your application is currently
| running in. This may determine how you prefer to configure various
| services the application utilizes. Set this in your ".env" file.
|
*/

'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool)env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

    /*
     * Laravel Framework Service Providers...
     */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    Illuminate\Database\DatabaseServiceProvider::class,
    Illuminate\Encryption\EncryptionServiceProvider::class,
    Illuminate\Filesystem\FilesystemServiceProvider::class,
    Illuminate\Foundation\Providers\FoundationServiceProvider::class,
    Illuminate\Hashing\HashServiceProvider::class,
    Illuminate\Mail\MailServiceProvider::class,
    Illuminate\Notifications\NotificationServiceProvider::class,
    Illuminate\Pagination\PaginationServiceProvider::class,
    Illuminate\Pipeline\PipelineServiceProvider::class,
    Illuminate\Queue\QueueServiceProvider::class,
    Illuminate\Redis\RedisServiceProvider::class,
    Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
    Illuminate\Session\SessionServiceProvider::class,
    Illuminate\Translation\TranslationServiceProvider::class,
    Illuminate\Validation\ValidationServiceProvider::class,
    Illuminate\View\ViewServiceProvider::class,

    /*
     * Package Service Providers...
     */

    /*
     * Application Service Providers...
     */
    App\Providers\AppServiceProvider::class,
    App\Providers\AuthServiceProvider::class,
    // App\Providers\BroadcastServiceProvider::class,
    App\Providers\EventServiceProvider::class,
    App\Providers\RouteServiceProvider::class,
    App\Providers\RepositoryServiceProvider::class,
    Spatie\Permission\PermissionServiceProvider::class,
    App\Providers\HelperServiceProvider::class
],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

    'App' => Illuminate\Support\Facades\App::class,
    'Arr' => Illuminate\Support\Arr::class,
    'Artisan' => Illuminate\Support\Facades\Artisan::class,
    'Auth' => Illuminate\Support\Facades\Auth::class,
    'Blade' => Illuminate\Support\Facades\Blade::class,
    'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
    'Bus' => Illuminate\Support\Facades\Bus::class,
    'Cache' => Illuminate\Support\Facades\Cache::class,
    'Config' => Illuminate\Support\Facades\Config::class,
    'Cookie' => Illuminate\Support\Facades\Cookie::class,
    'Crypt' => Illuminate\Support\Facades\Crypt::class,
    'DB' => Illuminate\Support\Facades\DB::class,
    'Eloquent' => Illuminate\Database\Eloquent\Model::class,
    'Event' => Illuminate\Support\Facades\Event::class,
    'File' => Illuminate\Support\Facades\File::class,
    'Gate' => Illuminate\Support\Facades\Gate::class,
    'Hash' => Illuminate\Support\Facades\Hash::class,
    'Http' => Illuminate\Support\Facades\Http::class,
    'Lang' => Illuminate\Support\Facades\Lang::class,
    'Log' => Illuminate\Support\Facades\Log::class,
    'Mail' => Illuminate\Support\Facades\Mail::class,
    'Notification' => Illuminate\Support\Facades\Notification::class,
    'Password' => Illuminate\Support\Facades\Password::class,
    'Queue' => Illuminate\Support\Facades\Queue::class,
    'Redirect' => Illuminate\Support\Facades\Redirect::class,
    'Redis' => Illuminate\Support\Facades\Redis::class,
    'Request' => Illuminate\Support\Facades\Request::class,
    'Response' => Illuminate\Support\Facades\Response::class,
    'Route' => Illuminate\Support\Facades\Route::class,
    'Schema' => Illuminate\Support\Facades\Schema::class,
    'Session' => Illuminate\Support\Facades\Session::class,
    'Storage' => Illuminate\Support\Facades\Storage::class,
    'Str' => Illuminate\Support\Str::class,
    'URL' => Illuminate\Support\Facades\URL::class,
    'Validator' => Illuminate\Support\Facades\Validator::class,
    'View' => Illuminate\Support\Facades\View::class,

],

];
