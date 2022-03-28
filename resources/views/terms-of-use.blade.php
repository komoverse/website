@php
    $pagetitle['en'] = 'Terms of Use - Komoverse';
    $pagetitle['id'] = 'Syarat Penggunaan - Komoverse';
    $pagetitle['zh'] = '使用条款 - Komoverse'
@endphp
@extends('template')
@section('pagemeta')
<title>{{ $pagetitle[$lang] }}</title>
@endsection
@section('content')
<div class="section-1 container-fluid">
    <div class="row py-5">
        <div class="col"></div>
        <div class="col-12 col-md-12 p-2 p-lg-5">
            <div class="card">
                <div class="card-body whitepaper-wrapper overflow-auto p-2 p-lg-5">

@if ($lang == 'en')
<h2>Komoverse</h2>
<h2>Komodo Metaverse</h2>
<h1 class="h2-style">TERMS OF USE</h1>
<b>Last Updated: March, 2022</b>
<hr>
Please read these terms of use carefully before accessing or using the Services as defined below or the Site as defined below.  By accessing or using the Site or the Services, you are deemed to have read, understood, and accepted all of the terms and conditions contained in these terms of use and all other documents referenced herein. If you do not agree to the terms that follow hereafter, please do not access the Site or use the Services contained herein.
<br><br>
These terms of use are between PT Komodo Legends Interaktif (KOML), a company incorporated in Indonesia, and you.  References to “KOML” “we,” “our” or “us” are to KOML and references to “you” or “your“ are to the person with whom KOML enters into these terms of use.
<br><br>
You are prohibited from signing up for an account or using the Site as defined below or using the Services as defined below, if you are a citizen, national or resident, or located in, incorporated in, or otherwise organized, established in or under the control of: 
<br>(i) Balkans, Belarus, Burma, Cote D’Ivoire (Ivory Coast), Cuba, Democratic Republic of Congo, Iran, Iraq, Liberia, Myanmar, North Korea, South Sudan, Sudan, Syria, Zimbabwe; 
<br>(ii) any State, country or other jurisdiction that is embargoed by the United States of America; 
<br>(iii) any State, country or other jurisdiction where it would be illegal according to applicable law for you, by reason of your nationality, domicile, citizenship, residence or otherwise, to access or use the Services; or 
<br>(iv) any State, country or other jurisdiction where the publication or availability of the Services is prohibited or contrary to local law or regulation, or could subject KOML to local registration or licensing requirements (together, the “restricted jurisdictions”).
<br><br>
KOML may, at its sole discretion, implement controls to restrict access to the Services in any of the restricted jurisdictions. If KOML determines that you are accessing the Services from any restricted jurisdiction, or have provided false representations as to your location, place of incorporation, establishment, citizenship or place of residence, KOML reserves the right to immediately close your account and liquidate any open positions.
<br><br>
You acknowledge and agree that you are aware of the risks associated with transactions of digital assets and that you shall assume all risks related to the use of KOML’s Services and transactions of digital assets. KOML shall not be liable for any such risks or adverse outcomes that ensue.
<br><br>
By accessing or using KOML’s Services in any way, you acknowledge that you accept and agree to be bound by these terms of use. If you do not agree, then do not access KOML’s Site or use KOML’s Services.
<br>
<ol>
    <li>DEFINITIONS AND INTERPRETATION
        <ol>
            <li>Definitions. In these terms of use, unless the context otherwise requires:
                <ol>
                    <li>“Account” means an account registered with us enabling you to use the Services.</li>
                    <li>“AML Policy” means our internal anti-money laundering policy, as varied or amended by us from time to time at our sole discretion.</li>
                    <li>“Business Day” means a day which is not a Saturday, a Sunday, or an official public holiday in Indonesia.</li>
                    <li>“Clearly Erroneous Transaction” means a transaction (whether or not filled, executed, matched or completed), based upon the market data, for a purchase or sale of digital assets which is substantially inconsistent with the prevailing market price at the time of execution.</li>
                    <li>“Digital Assets” means a digital asset or virtual currency based on the cryptographic protocol of a computer or blockchain network that may be <br>(a) expressed as a unit; <br>(b) not denominated in any currency; <br>(c) used as a medium of exchange accepted by the public or a section of the public, as payment for goods or services or the discharge of a debt; <br>(d) transferred, stored or traded electronically; <br>(e) centralized or decentralized; and <br>(f) closed or open source.</li>
                    {{-- <li>“Fee Schedule” means the fee schedule set out on this webpage (<a href="https://komodolegends.io/fee">https://www.komodolegends.io/fee</a>), as varied or amended by us from time to time at our sole discretion.</li> --}}
                    <li>“Order” means an order to buy and/or sell one digital asset for another digital asset using the spot exchange.</li>
                    <li>“Privacy Policy” means the privacy policy set out on this webpage (<a href="{{ url('privacy-policy') }}">{{ url('privacy-policy') }}</a>), as amended, supplemented or replaced by us from time to time at our sole discretion.</li>
                    <li>“Services” refers to various services provided to you by us via the Site, including, but not limited to, spot exchange, contract trading, earn, loan, launchpad, and any other services we may make available from time to time on the Site.</li>
                    <li>“Site” means the website located at <a href="{{ url('/') }}">{{ url('/') }}</a>, or any of our associated websites, application programming interface (API) or applications.</li>
                    <li>“Spot Exchange” means the spot exchange service provided through the Site to enable users to exchange one type of digital asset for another type of digital asset.</li>
                </ol>
            </li>
            <li>Interpretation. In these terms of use, unless the context otherwise requires:
                <ol>
                    <li>headings, underlines and bold type are for ease of reference only and shall not govern the meaning or interpretation of any provision of these terms of use.</li>
                    <li>the singular includes the plural and the plural includes the singular;</li>
                    <li>other parts of speech and grammatical forms of a word or phrase defined in these terms of use have a corresponding meaning;</li>
                    <li>references to a document includes all amendments or supplements to, or replacements or novations of, that document;</li>
                    <li>references to a party to a document includes the successors and permitted assigns;</li>
                    <li>references to “dollars” or “$” refers to the lawful currency of the United States;</li>
                    <li>no provision of these terms of use” shall be construed adversely to a party because that party was responsible for the preparation of these terms of use or that provision;</li>
                    <li>a reference to a clause, section, attachment, exhibit or schedule is a reference to a clause, section, attachment, exhibit or schedule to these terms of use, and a reference to these terms of use includes any attachment, exhibit or schedule;</li>
                    <li>a reference to any legislation includes all delegated legislation made under it and amendments, consolidations, replacements or re-enactments of any of them; and</li>
                    <li>the expression “including” or similar expression does not limit what else is included</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>OUR SERVICES
        <ol>
            <li>Eligibility. The use of our Services is subject to you complying with all of the following conditions:
                <ol>
                    <li>if you are an individual, you must be an individual of at least 18 years old and you are not a citizen, national or resident, or located in, incorporated in, or otherwise organized, established in or under the control of a restricted jurisdiction;</li>
                    <li>if you are a legal entity, you are duly organized and validly existing under the applicable laws of your jurisdiction of organisation and the individual accessing and/or using the Site have been duly authorized by you to act on your behalf and bind you;</li>
                    <li>no laws applicable to you prohibit your use of the Services or generally the buying, selling and/or holding of any digital assets; and</li>
                    <li>all such other conditions as set out herein and as we may from time to time notify you of on the Site.</li>
                </ol>
            </li>
            <li>Compliance. You agree and undertake to:
                <ol>
                    <li>at all times comply in all respects with the provisions of these terms of use, the Privacy Policy and the specific terms and conditions applicable to the various Services, each of which you hereby confirm you have read and understood, and which shall be deemed incorporated into these terms of use by reference; and</li>
                    <li>pay to us the fees set out in the Fee Schedule, and in this regard, you authorize KOML to automatically deduct from your account any applicable fees that you owe to us from time to time.</li>
                    <li>Support. If you require any assistance with the Services, you may contact us. We make no representation or warranty on the level of support we will provide to you.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>ACCOUNTS
        <ol>
            <li>Opening. In order to use the Services, you must open an account by providing us with your name, email address, password and such other information and documents as we may from time to time require.  We may, in our sole discretion, refuse to open an Account for you or limit the number of accounts that you may hold.</li>
            <li>AML Clearance. You agree to provide us with all information and documents as we may request from time to time or require in connection with the opening and ongoing maintenance of your account as well as in compliance with our AML Policy. We may make such further inquiries as we deem necessary (whether directly or through third parties) to verify your identity and in connection with our AML Policy. You must under no circumstance allow any person (other than yourself) to use the Services through your account. You must be the sole legal and beneficial owner of all Digital Assets deposited into or linked with your account.</li>
            <li>Access. Your account will be secured through the use of such login credentials and other forms of authentication as we may from time to time require. In connection with the security of your account, we may from time to time prohibit access to your account from or by any device which we in our sole discretion deem to be a risk to the security of your account. You are solely responsible for the security of your account login credentials and other forms of authentication and must keep all login credentials and other forms of authentication strictly secret and confidential and not disclose this information to any third party. <br><br>You will take appropriate steps to logout from your account at the end of each visit to the Site. You are responsible for all activities that occur in or through your account, and you shall have no claim against us in connection with us acting in reliance on the instructions given or sent from your account. It is your responsibility to ensure that any instructions, orders or transactions sent to us are well-formatted, clear and accurate.</li>
            <li>Unauthorized Use. If you suspect or become aware of any unauthorized use of your Account login credentials, including your username and password, you should notify us immediately. We assume no liability for any loss or damage arising from the use of your account by you or any third party with or without your authorization.</li>
            <li>Suspension. We may at any time, at our sole discretion, suspend any account for reasons such as <br>(a) any breach or suspected breach of these terms of use; <br>(b) your account becoming subject to any investigation or court order; <br>(c) any suspicious or illegal activity being detected on your Account; or <br>(d) any other reason. If your account is suspended, then for the duration of such suspension:
                <ol>
                    <li>You may not be able to use the Services; and</li>
                    <li>notwithstanding section 5, all deposits and withdrawals of digital assets credited to the account shall not be allowed. Any waiver or exception to the aforesaid shall be at our sole and absolute discretion on a case-by-case basis.</li>
                </ol>
            </li>
            <li>Closure. We may at any time, at our sole discretion, close any account for reasons such as <br>(a) breach or suspected breach of these terms of use; <br>(b) your account becoming subject to any investigation or court order; <br>(c) any suspicious or illegal activity being detected on your account; or <br>(d) any other reason. You may also submit a request for us to close your account. Upon closure of an account:
                <ol>
                    <li>where your account is subject to any investigation or court order, we will inform you of the manner in which the digital assets which are credited to your account may be withdrawn; and</li>
                    <li>in all other cases, we will return the digital assets to the address from which it was received or, where the digital assets address is unavailable, we will request for an address to which we can return the digital assets. If we do not receive a response from you within one (1) year from the date of our request, the digital assets shall be regarded as a donation and all rights, title and interests shall be deemed vested in us.</li>
                    <li>Your user content and other information associated with your account may continue to be kept, retained, and used by us following the closure of your account for as long as a legitimate business purpose exists. All provisions of these terms of use (including, but not limited to, our rights to the user content) shall survive the closure or termination of an account.</li>
                </ol>
            </li>
            <li>Access. You will require an Internet connection as well as the necessary equipment (such as a computer, smartphone or tablet) in order to use and access the Services via the Site.</li>
        </ol>
    </li>
    <li>OUR RIGHTS
        <ol>
            <li>Supported Digital Assets. We shall have the sole and absolute discretion to <br>(a) determine and allow the buying, selling and/or trading of any digital assets using the Services; or <br>(b) delist, suspend or remove any digital assets from being bought or sold using the Services.</li>
            <li>Unsolicited Transfers. If we receive any digital assets which are not buyable or sellable using the Services in a digital assets address which we control, the digital assets will be regarded as a donation and all rights, title and interests shall be deemed vested in us. If we receive any digital assets which are supported by or tradeable through the Services in a digital assets address which we control, you may submit a request to claim for such digital assets and we may ask that you execute additional transfer(s) (or such other actions as we deem necessary) to satisfy us of your ownership of the digital assets. If no claim is submitted to us within one (1) month from the date the digital assets were transferred to us, the digital assets will be regarded as a donation and all rights, title and interests shall be deemed vested to us. Any waiver or exception to the aforesaid shall be in our sole and absolute discretion on a case-by-case basis.</li>
            <li>Sole Discretion. We may, in our sole discretion, correct, withdraw, reverse or cancel any order, trade, transfer, or other transaction or activity with respect to which we have discovered that there was an error or abnormality, whether such error or abnormality was caused by you, us, or a third party or due to technical issues, system issues, software failure or otherwise.</li>
            <li>Right to Liquidate. We shall be authorized to take any measures we deem reasonable at our sole discretion in relation to any of your trading activities and positions (including, but not limited to, forced liquidated and forced position reduction under specific circumstances) in accordance with our internal policies and risk management policies (as varied from time to time without notice to you).  Additionally, we shall also be authorized to liquidate all or part of your positions regardless of the profit/loss position and without prior notice to you <br>(a) if any dispute arises concerning any of your trade; <br>(b) upon any breach by you of the terms of use; or <br>(c) where we deem liquidation necessary or advisable in order to manage our risks.</li>
            <li>Security Interest. All digital assets and assets of any kind held by or on behalf of us for your account are hereby pledged to us and are subject to a perfected first priority lien and security interest in our favour to secure performance of obligations and liabilities to us under these terms of use and/or any other agreement you may have with us.</li>
            <li>Account Deficit. If your account incurs a deficit for whatsoever reason, margin interest rates will apply until the balance is repaid, and we have the right to treat that account as a margin account. You agree to pay reasonable costs of collection for any unpaid deficit (including, but not limited to, any legal fees).</li>
        </ol>
    </li>
    <li>DEPOSITS, WITHDRAWALS AND CUSTODY
        <ol>
            <li>Digital Asset Deposits. You may deposit digital assets into your account by submitting a request to us through the Site and executing the transfer on the network of the digital assets being deposited from your wallet into our designated wallet. Subject to any disruption or congestion on the digital assets network, deposits of Digital Assets will be credited following the requisite number of network confirmations having occurred on the blockchain of the digital assets.</li>
            <li>Digital Asset Withdrawals. You may withdraw digital assets credited to your account by submitting a request to us through the Site. Subject to any additional reconciliation and other procedures on our end:
                <ol>
                    <li>Digital Asset withdrawals will be processed as soon as we receive your request;</li>
                    <li>we shall be entitled to rely on the details of the request submitted to us; and</li>
                    <li>we shall not be liable for the digital assets once the said digital assets have been sent to the wallet address submitted by you.</li>
                    <li>Fiat Deposits and Withdrawals. Fiat currency cannot be deposited into or withdrawn from your account or through the Services. The Services do not support the buying or selling of any digital assets in exchange for fiat currency.</li>
                    <li>Custody. The digital assets which you may from time-to-time deposit into your account will be held by us and/or our authorized third party digital asset custodian, and may not be segregated from other digital assets held by us, our authorized third party digital asset custodian and/or our other users.</li>
                    <li>Tracking. We will track the balance and ownership of the digital assets of each Account, and show you details of the same through the Site. In the event of any errors, you must within seven (7) days inform us of the error.</li>
                </ol>
            </li>
        </ol>   
    </li>
    <li>ORDERS
        <ol>
            <li>Placement.
                <ol>
                    <li>You may place an order using the Services. An order once placed is binding upon you.</li>
                    <li>All Orders are pre-funded and you are not permitted to place an order unless you have the sufficient quantity of digital assets credited into your account to satisfy your order.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>MARKET DATA
        <ol>
            <li>Market Data. Market data is generated based on our trade matching algorithm, and may include, reference and/or be derived from our service providers.</li>
            <li>Rights. All rights, title and interests in and to our market data shall remain our exclusive property.</li>
        </ol>
    </li>
    <li>REPRESENTATIONS, WARRANTIES AND UNDERTAKINGS
        <ol>
            <li>Warranties and Undertakings. You represent, warrant and undertake to us as follows:
                <ol>
                    <li>You have full power and authority to enter into these terms of use and to perform all of your obligations hereunder.</li>
                    <li>Your entry into these terms of use has been duly and effectively authorized by all necessary actions on your part and these terms of use constitute binding and enforceable obligations upon you.</li>
                    <li>The entry into and performance by you of your obligations hereunder do not and will not conflict with or result in a breach of any law, regulation, order, judgment or decree of any court, governmental authority or regulatory body applicable to you.</li>
                    <li>You will comply in all respects with all laws and regulations applicable to you in relation to your use of the Services.</li>
                    <li>All information and documents as you may from time to time submit to us are true, accurate, authentic and not misleading in any manner.</li>
                    <li>Your account must only be used by yourself and you must not allow any other person to use your Account or to use the Services through your account.</li>
                    <li>You are the sole legal and beneficial owner of all digital assets deposited into, held under or linked with your account.</li>
                    <li>Except with our prior written consent, you will not pledge, encumber or create any security interests over any of your digital assets which are deposited into your account or held with or by us.</li>
                    <li>You have not previously been suspended or removed from using any of the Services.</li>
                    <li>You are not located in, incorporated or otherwise established in, under the control of, or a national or resident of any Restricted Jurisdictions and your use of the Services does not constitute a breach of applicable law.</li>
                    <li>The Services should only be used by you if you (a) have knowledge and experience in highly volatile markets; (b) are trading with digital assets that you can afford to lose; and (c) have a high risk-tolerance.</li>
                    <li>Your use of any of the Services is at your own risk. We are not liable for any damages arising out of your use of any of the Services.</li>
                    <li>You agree to such other conditions as are set out herein and as we may from time to time notify you of on the Site.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>INTELLECTUAL PROPERTY
        <ol>
            <li>Our IP. We shall retain all rights, title and interests in and to all of our intellectual property. Except as expressly provided in these terms of use, no rights or obligations in respect to our intellectual property are granted to you or are to be implied from these terms of use.</li>
            <li>No Infringement. You must not infringe upon any of our intellectual property or that of any third party. All contents of, and materials located on, this Site, including but not limited to the text, images and other information herein and their arrangement, are protected by copyright, trademark and other proprietary rights of KOML and where applicable, the proprietary rights of relevant third-party providers. This means that you shall not without the express written consent of KOML distribute the text or graphics to others or for any unlawful or unauthorized purpose; "mirror" or include this information on your own server or documents; or modify or re-use the text or graphics on this system. “Komoverse”, “Komodo Metaverse” and “komoverse.io” and all logos related to “Komoverse” or displayed on the Site are the trademarks or registered marks of KOML and/or our licensors. You may not copy, imitate or use them without our prior written approval. </li>
        </ol>
    </li>
    <li>DATA PROTECTION
        <ol>
            <li>Your Consent. You hereby consent to our collection, use, disclosure, storage, retention, processing and transmission of all personal data (as disclosed by you to us) in accordance with our Privacy Policy.</li>
            <li>Disclosure to Us. Each time you disclose any personal data to us, you are representing and warranting to us that:
                <ol>
                    <li>the relevant individuals have consented to the collection, use, disclosure, storage, retention, processing and transmission of their personal data by us in accordance with our Privacy Policy; and</li>
                    <li>all necessary consents and approvals of the relevant individuals as required under applicable laws (including, but not limited to, the general data protection regulations of the European Union) have been obtained, such that we may collect, use, disclose, store, retain, process and transmit the personal data of such individuals in accordance with our Privacy Policy.</li>
                    <li>Disclosure by Us. If required by any tax authority or under any applicable laws, information on your account (including your identity and transaction history) may be disclosed by us to such tax or other relevant authority. You hereby consent to all such disclosure.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>LIABILITIES
        <ol>
            <li>No Warranties. The Services are provided on an “as is,” “where is” and “as available” basis without warranties of any kind whatsoever. We expressly disclaim any and all warranties (whether express or implied) including, but not limited to, the implied warranties of accuracy, completeness, security, merchantability, satisfactory quality, functionality, fitness for a particular purpose, availability, title, freedom from malicious code and non-infringement.</li>
            <li>Disclaimer of Liabilities. To the fullest extent permissible under applicable laws, we expressly disclaim (and you expressly release us from) all liabilities for:
                <ol>
                    <li>the truth, accuracy, adequacy, completeness or reasonableness of any content contained in or accessed through the Services;</li>
                    <li>the Services being uninterrupted or free from errors, loss, corruption, attack, virus, interference, hacking or other security intrusions;</li>
                    <li>any act, omission or loss suffered by you following a period of any unavailability of the Services or the Site (such as, but not limited to, significant changes in the market conditions and prices during the period of Services unavailability);</li>
                    <li>any act, omission or loss suffered by you with your use or attempted use of the Services or the Site;</li>
                    <li>any act, omission or loss arising from any instructions given from your Account which we have relied and/or acted upon;</li>
                    <li>any order erroneously submitted by you which is subsequently filled, executed or matched (in whole or in part);</li>
                    <li>losses arising from your failure to fulfil any of your obligations hereunder;</li>
                    <li>loss of profits, loss of anticipated savings, loss of business, loss of opportunity, loss of revenue, loss of time, loss of goodwill or injury to reputation, and loss of or harm to data, whether direct or indirect, nor for any punitive, indirect, consequential or special losses, howsoever caused and whether foreseeable or not;</li>
                    <li>losses arising from any breach of applicable data protection laws due to your failure to obtain and maintain the relevant consents in order for us to provide the Services pursuant to the provisions hereunder;</li>
                    <li>loss of data, information and records (howsoever caused) and computer malfunction;</li>
                    <li>loss arising from any cause whatsoever through no fault of us (including, but not limited to, any computer or system virus interference, sabotage or any other causes whatsoever which may interfere with your computer systems, and any loss of, destruction to or error in your data, information and records, howsoever caused); and</li>
                    <li>any claims, demands or damages (whether actual, consequential or otherwise) of any kind or nature arising out of or in any way connected with any dispute you may have with one or more users of the Services.</li>
                </ol>
            </li>
            <li>Internet Trading Disclaimer. The Internet is, due to unpredictable traffic congestion and other reasons, an inherently unreliable medium of communication and that such unreliability is beyond the control of KOML. You acknowledge that, as a result of such unreliability, there may be delays in the transmission and receipt of orders, instructions and other information which may result in delays in the execution of orders or instructions and/or the execution of orders or instructions at prices different from those prevailing at the time the order or Instructions were given. You further acknowledge and agree that there are risks of misunderstanding or errors in any communication and that such risks shall be absolutely borne by you. You acknowledge and agree that it will not usually be possible to cancel an order after it has been placed.</li>
            <li>No Professional Advice. You acknowledge and agree that we do not provide any investment, financial, accounting, valuation, tax, legal or other professional advice. All decisions to buy, sell or trade any digital assets using the Services are made solely by you, and you are fully responsible for all such decisions.</li>
            <li>Taxes. It is your sole responsibility to determine whether, and to what extent, any taxes apply to any transactions you conduct through the Services, and to withhold, collect, report and remit the correct amount of tax to the appropriate tax authorities.</li>
            <li>Protocol and Networks. We do not own or control the underlying software protocols of the Digital Assets networks which govern the operation of the Digital Assets. You acknowledge and agree that: (a) we shall not be responsible for the operation of the underlying protocols; and (b) we make no representation, warranty, undertaking or guarantee whatsoever with respect to their security, merchantability, satisfactory quality, functionality, fitness for a particular purpose, availability, title, freedom from malicious code or non-infringement.</li>
            <li>Limitations of Liability. Notwithstanding any provision of these terms of use, our maximum aggregate liability to you arising out of or in connection with these Terms of Use whenever made shall be limited to USD100.</li>
            <li>Indemnity. You agree to indemnify us, our related corporations, our (and our related corporations’) officers, directors, employees, and agents (together, the “Indemnified Parties”) against any and all claims, damages, losses, obligations, deficiencies, judgments, awards, demands, penalties, taxes, expenses, disbursements, costs, fines and other liabilities (including, but not limited to, any expenses of investigation and legal fees and expenses in connection with any action, suit or proceeding) suffered or incurred by any of the Indemnified Parties arising out of or in connection with:
                <ol>
                    <li>any misrepresentation or breach of any representation, warranty, undertaking or agreement made by you hereunder;</li>
                    <li>any infringement of any intellectual property rights as a result of any of your acts or omissions;</li>
                    <li>any other person’s breach of any provision of these terms of use, where such person was able to use the Services through your account; and</li>
                    <li>any breach of applicable data protection laws as a result of any of your acts or omissions.</li>
                </ol>
            </li>
            <li>Trading Halts. We may at our sole discretion halt any of the Services and/or the Site for any reason (including, but not limited to, maintaining an orderly market or due to market disruption). We hereby disclaim, and you hereby irrevocably release us from, all liability for any profits or losses (whether actual, claimed or otherwise) whatsoever as a result of such trading halt.</li>
            <li>Risk Acknowledgement. You acknowledge and agree that:
                <ol>
                    <li>the digital asset market is novel and may not continue to grow;</li>
                    <li>you may face difficulties or the impossibility of liquidating your positions under certain market conditions;</li>
                    <li>the trading, lending, borrowing, holding of and/or otherwise dealing with Digital Assets entails exceptionally high risks. In particular, Digital Assets may be traded non-stop throughout the day and there may be no limit on price changes. The price may be prone to significant fluctuations caused by, without limitation, market participants or government policies in different jurisdictions;</li>
                    <li>a considerable loss may be sustained or incurred whilst trading, lending, borrowing, holding and/or otherwise dealing with Digital Assets;</li>
                    <li>Digital assets may be unregulated and the trading, lending, borrowing, holding of and/or otherwise dealing with digital assets may be deemed illegal in certain jurisdictions;</li>
                    <li>you are advised to seek and obtain appropriate legal, financial, tax, investment and other professional advice prior to using any of the Services;</li>
                    <li>Digital assets may not be issued by any central bank, financial institution or by us; and</li>
                    <li>Digital assets and their underlying protocol may be susceptible to security breaches and government policies. You acknowledge and agree that the risks associated with digital assets as set out in this agreement is non-exhaustive and there may be additional risks not listed or foreseen by us. You have carefully assessed your financial standing and risk tolerance, and confirm that the risks are acceptable to you and that you are able to withstand any losses incurred in connection with such trading (including, but not limited to, the applicable margin requirements and transaction costs).</li>
                </ol>
            </li>
            <li>Independent Limitations. Each qualification and limitation in this section 11 shall be construed independently of the others and shall not be limited by any other qualification or limitation.</li>
            <li>Survival. The provisions of this Section 11 shall survive and continue in full force and effect notwithstanding the termination or expiration of these terms of use</li>
        </ol>
    </li>
    <li>UNDERLYING SOFTWARE PROTOCOLS
        <ol>
            <li>No Responsibility. We do not own or control the underlying software protocols which govern the operation of digital assets supported on our platform. The underlying protocols are generally “open source” and anyone can use, copy, modify, or distribute them. We assume no responsibility for the operation of the underlying protocols and we are not able to guarantee their functionality, security, or availability. You acknowledge and accept the risk that underlying software protocols relating to any digital asset in your account may change.</li>
            <li>Event of a Fork. The underlying software protocols are subject to sudden changes in operating rules (a "fork"), and such a fork may materially affect the value, function, and/or the name of the digital asset in your account. It is your responsibility to make yourself aware of, and consider how to deal with, an upcoming fork. Where possible, we may provide you with notices or alerts on a fork in accordance with Section 14.1 below and you must read such notices or alerts received from us to consider how to deal with any such upcoming fork. In the event of a fork, there is a risk that we may need to temporarily suspend operations in relation to that fork without providing advance notice to you. We may, in our reasonable discretion, decline to support either or both branches of a fork. You acknowledge the risks presented by a fork and you accept that we have no responsibility to assist you to move or sell an unsupported branch of a forked protocol.</li>
        </ol>
    </li>
    <li>CHANGES AND MODIFICATIONS
        <ol>
            <li>Changes to the Services. You acknowledge and agree that we may from time to time modify or change or withdraw any part of the Services or Site or any information, including but not limited to specifications, descriptions and prices, provided on the Site without any reference or notice to you. By using this Site, you agree to be bound by any such revisions and you agree to periodically visit this page to determine the then current terms of use to which you are bound.</li>
            <li>Revisions to these terms of use. You acknowledge and agree that we may from time to time change the terms of these terms of use, publishing a revised version on our Site. The revised version shall take effect from the published effective date and notification will be made to you through our Site or via email. If you continue to use our Services after the notice period, then you will be deemed to have consented to the amendments made in such revised version.</li>
        </ol>
    </li>
    <li>GENERAL
        <ol>
            <li>Notice.
                <ol>
                    <li>All notices and other communications given by us under these terms of use (including any changes to these terms of use) may be given by email, regular mail, SMS, through the Site or Services or such other means as we deem necessary. Such notices and communications shall be deemed received when sent by us.</li>
                    <li>All notices and other communications given by you under these terms of use must be given to us by email (which shall be deemed received at the time it was sent, unless you receive an automated response indicating that the recipient was unavailable) or by prepaid post to our registered office address (which shall be deemed received on the seventh (7th) Business Day following the day it was posted).</li>
                </ol>
            <li>Force Majeure. We shall not be liable for inadequate performance under these Terms of Use to the extent caused by any of the following:
                <ol>
                    <li>a condition such as natural disaster, act of war or terrorism, riot, labour condition, governmental action, and disruption or disturbance of the Internet or energy sources that was beyond our reasonable control; or</li>
                    <li>any Site failure or unavailability of the Services.</li>
                </ol>
            </li>
            <li>Link to third-party sites. Links to other third-party sites may be provided on the Site or through your use of the Services and KOML makes no representations whatsoever about any such third-party sites. You acknowledge and agree that (a) such links do not constitute an endorsement; (b) we have no control over such websites or their content; and (c) we shall have no liability arising out of or related to such websites or the accuracy or quality of any such content. It is up to you to take precautions to ensure that whatever you select for your use is free of such items as viruses, worms, trojan horses and other items of a destructive nature. KOML makes no representation or warranty as to any third-party products.</li>
            <li>Linking to This Site. No hyperlinks to the Site or any of the internal or subsidiary pages within the Site, or framing of any content in the Site, shall be made by anyone unless with the prior consent of KOML. Without prejudice to any of its other rights, KOML may, upon discovering such unauthorized linking or framing, disable such links or frames.</li>
            <li>Submission of Information. By providing information (such as feedback, data, answers, questions, comments, suggestions, plans or ideas) to KOML, you agree that such information shall be non-confidential and that KOML shall have unlimited rights to use, distribute, reproduce, and disclose such information worldwide as KOML deems appropriate, without compensation or acknowledgement of its source. KOML shall be free to use any ideas, concepts, know-how or techniques contained in information which you provide to KOML through this Site, including but not limited to developing, manufacturing, and marketing products or services incorporating or otherwise based on such information.</li>
            <li>Set Off.
                <ol>
                    <li>We shall be entitled to, at any time without notice to you and from time to time without prejudice to any other remedies available to us, set off any amounts due to you against any obligation owed by you to us, whether present or future, actual or contingent, liquidated or unliquidated, primary or collateral, several or joint.</li>
                    <li>We shall be entitled to, at any time without notice to you and from time to time without prejudice to any other remedies available to us, set off any amounts due to you against any obligation owed by you to us, whether present or future, actual or contingent, liquidated or unliquidated, primary or collateral, several or joint.</li>
                </ol>
            </li>
            <li>Entire Agreement. These Terms of Use, together with all documents referenced herein, embodies all the terms and conditions agreed upon between you and us as to the subject matter of these Terms of Use and it supersedes any and all prior discussions, agreements and undertakings (if any) between you and us with respect to the subject matter hereof, whether such be written or oral.</li>
            <li>Relationship of the Parties. Nothing herein these Terms of Use shall be construed as creating the relationship of employer and employee, principal and agent, partnership or joint venture or any other fiduciary relationship.</li>
            <li>No Third-Party Rights. Except for the Indemnified Parties, a person who is not a party to these Terms of Use shall have no right to enforce any provision of these Terms of Use.</li>
            <li>Variation. Any variation to any provision of these Terms of Use must be in writing and executed by us.</li>
            <li>Severability. If any provision of these Terms of Use is held to be illegal, invalid or unenforceable in whole or in part in any jurisdiction, then these Terms of Use shall, as to such jurisdiction, continue to be valid as to its other provisions and the remainder of the affected provision, and the legality, validity and enforceability of such provision in any other jurisdiction shall not be affected.</li>
            <li>No Waiver. No delay or failure by us to exercise or enforce any right, power or remedy under these Terms of Use shall constitute or operate as a waiver of that right, power or remedy or any other right, power or remedy under these Terms of Use or operate so as to prevent the subsequent exercise or enforcement of any such right, power or remedy. Any waiver by us must be expressly made in writing and signed by us to be effective.</li>
            <li>Assignment. You may not assign or transfer any of your rights, interests, licenses and/or obligations to anyone else. We may assign or transfer any of our rights, licenses, interests and/or obligations at any time to anyone, including as part of a merger, acquisition or other corporate reorganization.</li>
            <li>English Language. Notwithstanding any other provision of these Terms of Use, any translation of these Terms of Use or other documents referred to herein or notifications from us, is provided for your convenience only and may not accurately represent the information in the original English. In the event of any inconsistency, the English language version of these Terms of Use or other documents referred to herein or notifications from us shall prevail</li>
            <li>Governing Law. These terms of use shall be governed by and construed in accordance with the laws of Indonesia.</li>
            <li>Dispute Resolution. Any dispute, controversy or claim arising out of or relating to these terms of use, or the breach, termination or invalidity thereof, shall be referred to and resolved by arbitration administered by the Singapore International Arbitration Centre (“SIAC”) in accordance with the Arbitration Rules of the Indonesian International Arbitration Centre (“IIAC Rules”), which rules are deemed to be incorporated by reference in this clause. The language of the arbitration hearings shall be English and the seat, or legal place, of arbitration shall be in Indonesia. Judgment on any arbitral award may be given in any Court having jurisdiction over the Party (or over the assets of the Party) against whom such an award is rendered.</li>
        </ol>
    </li>
</ol>

@elseif($lang == 'id')
<h2>Komoverse</h2>
<h2>Komodo Metaverse</h2>
<h1 class="h2-style">SYARAT PENGGUNAAN</h1>
<b>Terakhir Diperbarui: Maret, 2022</b>
<hr>
Harap baca ketentuan penggunaan ini dengan cermat sebelum mengakses atau menggunakan Layanan sebagaimana didefinisikan di bawah ini atau Situs sebagaimana didefinisikan di bawah ini. Dengan mengakses atau menggunakan Situs atau Layanan, Anda dianggap telah membaca, memahami, dan menerima semua syarat dan ketentuan yang terdapat dalam syarat penggunaan ini dan semua dokumen lain yang dirujuk di sini. Jika Anda tidak setuju dengan ketentuan yang mengikuti selanjutnya, mohon untuk tidak mengakses Situs atau menggunakan Layanan yang terdapat di sini.
<br><br>
Ketentuan penggunaan ini adalah antara PT Komodo Legends Interaktif (KOML), sebuah perusahaan yang didirikan di Indonesia, dan Anda. Referensi ke “KOML” “kami”, atau “milik kami”adalah untuk KOML, dan referensi untuk “Anda” atau “milik Anda” adalah orang yang menyepakati persyaratan penggunaan ini dengan KOML.
<br><br>
Anda dilarang mendaftar untuk akun atau menggunakan Situs atau Layanan sebagaimana didefinisikan di bawah ini, jika Anda adalah warga negara, atau penduduk, atau berlokasi di, tergabung dalam, atau diatur, didirikan di atau di bawah kendali atas: 
<br>(i) Balkan, Belarus, Burma, Pantai Gading (Cote D’Ivoire), Kuba, Republik Demokratik Kongo, Iran, Irak, Liberia, Myanmar, Korea Utara, Sudan Selatan, Sudan, Suriah, Zimbabwe;
<br>(ii) setiap Negara Bagian, negara, atau yurisdiksi lain yang diembargo oleh Amerika Serikat; 
<br>(iii) Negara Bagian, negara, atau yurisdiksi lain yang dianggap ilegal menurut hukum yang berlaku bagi Anda, dengan alasan kewarganegaraan, domisili, tempat tinggal, atau lainnya, untuk mengakses atau menggunakan Layanan; atau 
<br>(iv) setiap Negara Bagian, negara atau yurisdiksi lain di mana publikasi atau ketersediaan Layanan dilarang atau bertentangan dengan undang-undang atau peraturan setempat, atau dapat membuat KOML tunduk pada persyaratan pendaftaran atau lisensi lokal (bersama-sama disebut "yurisdiksi terbatas").
<br><br>
KOML dapat, atas kebijakannya sendiri, menerapkan kontrol untuk membatasi akses ke Layanan di salah satu yurisdiksi yang dibatasi. Jika KOML menentukan bahwa Anda mengakses Layanan dari yurisdiksi terbatas mana pun, atau telah memberikan pernyataan palsu mengenai lokasi, tempat pendirian, pendirian, kewarganegaraan, atau tempat tinggal Anda, KOML berhak untuk segera menutup akun Anda dan melikuidasi posisi terbuka apa pun .
<br><br>
Anda mengakui dan setuju bahwa Anda menyadari risiko yang terkait dengan transaksi aset digital dan bahwa Anda harus menanggung semua risiko yang terkait dengan penggunaan Layanan KOML dan transaksi aset digital. KOML tidak bertanggung jawab atas risiko atau hasil buruk yang terjadi.
<br><br>
Dengan mengakses atau menggunakan Layanan KOML dengan cara apa pun, Anda mengakui bahwa Anda menerima dan setuju untuk terikat dengan ketentuan penggunaan ini. Jika Anda tidak setuju, maka jangan mengakses Situs KOML atau menggunakan Layanan KOML.
<br>
<ol>
    <li>DEFINISI DAN INTERPRETASI
        <ol>
            <li>Definisi. Dalam ketentuan penggunaan ini, kecuali konteksnya mensyaratkan lain:
                <ol>
                    <li>“Akun” berarti akun yang terdaftar pada kami yang memungkinkan Anda menggunakan Layanan.</li>
                    <li>“Kebijakan AML” berarti kebijakan anti-pencucian uang internal kami, yang kami ubah atau diubah dari waktu ke waktu atas kebijakan kami sendiri.</li>
                    <li>“Hari Kerja” berarti hari yang bukan merupakan hari Sabtu, Minggu, atau hari libur resmi di Indonesia.</li>
                    <li>“Transaksi yang Jelas Salah” berarti transaksi (baik diisi, dieksekusi, dicocokkan, atau diselesaikan), berdasarkan data pasar, untuk pembelian atau penjualan aset digital yang secara substansial tidak sesuai dengan harga pasar yang berlaku pada saat eksekusi.</li>
                    <li>“Aset Digital” berarti aset digital atau mata uang virtual berdasarkan protokol kriptografi dari komputer atau jaringan blockchain yang mungkin
                        <br>(a) dinyatakan sebagai satu kesatuan;
                        <br>(b) tidak dalam mata uang apapun; 
                        <br>(c) digunakan sebagai alat tukar yang diterima oleh publik atau bagian dari publik, sebagai pembayaran barang atau jasa, atau pelepasan utang; 
                        <br>(d) ditransfer, disimpan atau diperdagangkan secara elektronik; 
                        <br>(e) terpusat atau terdesentralisasi; dan 
                        <br>(f) sumber tertutup atau terbuka.
                    </li>
                    {{-- <li>"Jadwal Biaya" berarti jadwal biaya yang ditetapkan di halaman web ini (<a href="https://www.komodolegends.io/fee">https://www.komodolegends.io/fee</a>), sebagaimana kami ubah atau diubah dari waktu ke waktu atas kebijakan kami sendiri.</li> --}}
                    <li>“Pesanan” berarti perintah untuk membeli dan/atau menjual satu aset digital untuk aset digital lainnya menggunakan pertukaran spot.</li>
                    <li>“Kebijakan Privasi” berarti kebijakan privasi yang ditetapkan pada halaman web ini (<a href="{{ url('privacy-policy') }}">{{ url('privacy-policy') }}</a>), sebagaimana diubah, ditambah, atau diganti oleh kami dari waktu ke waktu atas kebijakan kami sendiri.</li>
                    <li>“Layanan” mengacu pada berbagai layanan yang kami berikan kepada Anda melalui Situs, termasuk, namun tidak terbatas pada, pertukaran spot, perdagangan kontrak, perolehan, pinjaman, landasan peluncuran, dan layanan lain apa pun yang kami sediakan dari waktu ke waktu di Situs kami.</li>
                    <li>“Situs” berarti situs web yang terletak di <a href="{{ url('/') }}">{{ url('/') }}</a>, atau situs web terkait, antarmuka pemrograman aplikasi (API) atau aplikasi kami.</li>
                    <li>“Spot Exchange” berarti layanan penukaran spot yang disediakan melalui Situs untuk memungkinkan pengguna menukar satu jenis aset digital dengan jenis aset digital lainnya.</li>
                </ol>
            </li>
            <li>Interpretasi. Dalam ketentuan penggunaan ini, kecuali konteksnya mensyaratkan lain:
                <ol>
                    <li>judul yang digarisbawahi dan dicetak tebal hanya untuk kemudahan referensi dan tidak akan mengatur arti atau interpretasi dari ketentuan apa pun dari persyaratan penggunaan ini.</li>
                    <li>bentuk tunggal termasuk jamak dan jamak termasuk bentuk tunggal;</li>
                    <li>bagian lain dari ucapan dan bentuk tata bahasa dari kata atau frasa yang didefinisikan dalam persyaratan penggunaan ini memiliki arti yang sesuai;</li>
                    <li>referensi ke dokumen mencakup semua amandemen atau suplemen, atau penggantian atau novasi dari, dokumen itu;</li>
                    <li>referensi ke suatu pihak ke dokumen termasuk penerus dan penerima yang diizinkan;</li>
                    <li>referensi ke "dolar" atau "$" mengacu pada mata uang yang sah di Amerika Serikat;</li>
                    <li>tidak ada ketentuan dari "persyaratan penggunaan" ini yang dapat ditafsirkan secara merugikan kepada salah satu pihak karena pihak tersebut bertanggung jawab atas penyusunan persyaratan penggunaan ini atau ketentuan itu;</li>
                    <li>referensi ke klausa, bagian, lampiran, pameran, atau jadwal adalah referensi ke klausa, bagian, lampiran, pameran, atau jadwal pada persyaratan penggunaan ini, dan referensi ke persyaratan penggunaan ini mencakup lampiran, pameran, atau jadwal apa pun;</li>
                    <li>referensi ke undang-undang apa pun mencakup semua undang-undang yang didelegasikan yang dibuat di bawahnya dan amandemen, konsolidasi, penggantian, atau pemberlakuan kembali salah satu dari mereka; dan</li>
                    <li>ungkapan "termasuk" atau ungkapan serupa tidak membatasi apa lagi yang disertakan.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>PELAYANAN KAMI
        <ol>
            <li>Kelayakan. Penggunaan Layanan kami tunduk pada Anda yang mematuhi semua ketentuan berikut:
                <ol>
                    <li>jika Anda seorang individu, Anda harus berusia minimal 18 tahun dan Anda bukan warga negara, atau penduduk, atau berlokasi di, tergabung dalam, atau terorganisir, didirikan di atau di bawah kendali yurisdiksi terbatas;</li>
                    <li>jika Anda adalah badan hukum, Anda diatur dan secara sah berada di bawah hukum yang berlaku di yurisdiksi organisasi Anda dan individu yang mengakses dan/atau menggunakan Situs telah diberi wewenang oleh Anda untuk bertindak atas nama Anda dan mengikat Anda;</li>
                    <li>tidak ada undang-undang yang berlaku untuk Anda yang melarang Anda menggunakan Layanan atau secara umum membeli, menjual, dan/atau memegang aset digital apa pun; dan</li>
                    <li>semua kondisi lain seperti yang ditetapkan di sini dan sebagaimana kami dapat dari waktu ke waktu memberi tahu Anda tentang di Situs.</li>
                </ol>
            </li>
            <li>Kepatuhan. Anda setuju dan berjanji untuk:
                <ol>
                    <li>selalu mematuhi dalam segala hal ketentuan syarat penggunaan ini, Kebijakan Privasi, dan syarat dan ketentuan khusus yang berlaku untuk berbagai Layanan, yang masing-masing dengan ini Anda konfirmasikan telah Anda baca dan pahami, dan yang akan dianggap dimasukkan ke dalam ketentuan penggunaan ini dengan referensi; dan</li>
                    <li>membayar kepada kami biaya yang ditetapkan dalam Daftar Biaya, dan dalam hal ini, Anda memberi wewenang kepada KOML untuk secara otomatis memotong dari akun Anda setiap biaya yang berlaku yang terutang kepada kami dari waktu ke waktu.</li>
                    <li>Mendukung. Jika Anda memerlukan bantuan dengan Layanan, Anda dapat menghubungi kami. Kami tidak membuat pernyataan atau jaminan tentang tingkat dukungan yang akan kami berikan kepada Anda.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>AKUN
        <ol>
            <li>Pembukaan. Untuk menggunakan Layanan, Anda harus membuka akun dengan memberi kami nama, alamat email, kata sandi, dan informasi kainya serta dokumen lain yang mungkin kami perlukan dari waktu ke waktu. Kami dapat, atas kebijakan kami sendiri, menolak untuk membuka Akun untuk Anda atau membatasi jumlah akun yang mungkin Anda miliki.</li>
            <li>Izin AML. Anda setuju untuk memberikan kepada kami semua informasi dan dokumen yang mungkin kami minta dari waktu ke waktu atau diperlukan sehubungan dengan pembukaan dan pemeliharaan berkelanjutan atas akun Anda serta sesuai dengan Kebijakan AML kami. Kami dapat mengajukan pertanyaan lebih lanjut yang kami anggap perlu (baik secara langsung atau melalui pihak ketiga) untuk memverifikasi identitas Anda dan sehubungan dengan Kebijakan AML kami. Anda tidak boleh dalam keadaan apa pun mengizinkan siapa pun (selain Anda sendiri) untuk menggunakan Layanan melalui akun Anda. Anda harus menjadi satu-satunya pemilik sah dan menguntungkan dari semua Aset Digital yang disetorkan ke atau ditautkan dengan akun Anda.</li>
            <li>Mengakses. Akun Anda akan diamankan melalui penggunaan kredensial login tersebut dan bentuk otentikasi lain yang mungkin kami perlukan dari waktu ke waktu. Sehubungan dengan keamanan akun Anda, dari waktu ke waktu kami dapat melarang akses ke akun Anda dari atau oleh perangkat apa pun yang menurut pertimbangan kami sendiri dapat menimbulkan risiko terhadap keamanan akun Anda. Anda bertanggung jawab penuh atas keamanan kredensial login akun Anda dan bentuk otentikasi lainnya dan harus menjaga semua kredensial login dan bentuk otentikasi lainnya secara rahasia dan tidak mengungkapkan informasi ini kepada pihak ketiga mana pun. <br><br>Anda akan mengambil langkah-langkah yang tepat untuk keluar dari akun Anda di akhir setiap kunjungan ke Situs. Anda bertanggung jawab atas semua aktivitas yang terjadi di atau melalui akun Anda, dan Anda tidak akan memiliki klaim terhadap kami, sehubungan dengan kami bertindak berdasarkan instruksi yang diberikan atau dikirim dari akun Anda. Anda bertanggung jawab untuk memastikan bahwa setiap instruksi, pesanan, atau transaksi yang dikirimkan kepada kami dengan format yang baik, jelas, dan akurat.</li>
            <li>Penggunaan yang Tidak Sah. Jika Anda mencurigai atau mengetahui adanya penggunaan yang tidak sah atas kredensial login Akun Anda, termasuk nama pengguna dan kata sandi Anda, Anda harus segera memberi tahu kami. Kami tidak bertanggung jawab atas kehilangan atau kerusakan apa pun yang timbul dari penggunaan akun Anda oleh Anda atau pihak ketiga mana pun dengan atau tanpa otorisasi Anda.</li>
            <li>Penangguhan. Kami dapat kapan saja, atas kebijakan kami sendiri, menangguhkan akun apa pun karena alasan seperti  
                <br>(a) pelanggaran atau dugaan pelanggaran ketentuan penggunaan ini;
                <br>(b) akun Anda tunduk pada penyelidikan atau perintah pengadilan; 
                <br>(c) setiap aktivitas mencurigakan atau ilegal yang terdeteksi di Akun Anda; atau 
                <br>(d) alasan lainnya. Jika akun Anda ditangguhkan, maka selama penangguhan tersebut:
                <ol>
                    <li>Anda mungkin tidak dapat menggunakan Layanan; dan</li>
                    <li>terlepas dari bagian 5, semua penyetoran dan penarikan aset digital yang dikreditkan ke akun tidak akan diizinkan. Pengesampingan atau pengecualian apa pun atas hal tersebut di atas akan menjadi kebijakan tunggal dan mutlak kami berdasarkan kasus per kasus.</li>
                </ol>
            </li>
            <li>Penutupan. Kami dapat setiap saat, atas kebijakan kami sendiri, menutup akun apa pun karena alasan seperti 
                <br>(a) pelanggaran atau dugaan pelanggaran ketentuan penggunaan ini;  
                <br>(b) akun Anda tunduk pada penyelidikan atau perintah pengadilan;
                <br>(c) setiap aktivitas mencurigakan atau ilegal yang terdeteksi di akun Anda; atau  
                <br>(d) alasan lainnya. Anda juga dapat mengajukan permintaan kepada kami untuk menutup akun Anda. Setelah penutupan akun:
                <ol>
                    <li>di mana akun Anda tunduk pada penyelidikan atau perintah pengadilan, kami akan memberi tahu Anda tentang cara penarikan aset digital yang dikreditkan ke akun Anda; dan</li>
                    <li>dalam semua kasus lainnya, kami akan mengembalikan aset digital ke alamat dari mana aset tersebut diterima atau, jika alamat aset digital tidak tersedia, kami akan meminta alamat tempat kami dapat mengembalikan aset digital. Jika kami tidak menerima tanggapan dari Anda dalam waktu satu (1) tahun sejak tanggal permintaan kami, aset digital akan dianggap sebagai sumbangan dan semua hak, kepemilikan, dan kepentingan akan dianggap berada di tangan kami.</li>
                    <li>Konten pengguna Anda dan informasi lain yang terkait dengan akun Anda dapat terus disimpan, dipertahankan, dan digunakan oleh kami setelah penutupan akun Anda selama ada tujuan bisnis yang sah. Semua ketentuan dari syarat penggunaan ini (termasuk, namun tidak terbatas pada, hak kami atas konten pengguna) akan tetap berlaku setelah penutupan atau penghentian akun.</li>
                </ol>
            </li>
            <li>Mengakses. Anda akan memerlukan koneksi internet serta peralatan yang diperlukan (seperti komputer, smartphone atau tablet) untuk menggunakan dan mengakses Layanan melalui Situs.</li>
        </ol>
    </li>
    <li>HAK KAMI
        <ol>
            <li>Aset Digital yang Didukung. Kami memiliki kebijaksanaan tunggal dan mutlak untuk  
                <br>(a) menentukan dan mengizinkan pembelian, penjualan, dan/atau perdagangan aset digital apa pun menggunakan Layanan; atau 
                <br>(b) menghapus atau menangguhkan aset digital apa pun agar tidak dibeli atau dijual menggunakan Layanan.</li>
            <li>Transfer yang Tidak Diminta. Jika kami menerima aset digital apa pun yang tidak dapat dibeli atau dijual menggunakan Layanan di alamat aset digital yang kami kendalikan, aset digital akan dianggap sebagai sumbangan dan semua hak, kepemilikan, dan kepentingan akan dianggap berada di tangan kami. Jika kami menerima aset digital apa pun yang didukung oleh atau dapat diperdagangkan melalui Layanan di alamat aset digital yang kami kendalikan, Anda dapat mengajukan permintaan untuk mengklaim aset digital tersebut dan kami dapat meminta Anda untuk melakukan transfer tambahan (atau tindakan lain yang kami anggap perlu) untuk memuaskan kami atas kepemilikan Anda atas aset digital. Jika tidak ada klaim yang diajukan kepada kami dalam waktu satu (1) bulan sejak tanggal aset digital ditransfer kepada kami, aset digital akan dianggap sebagai sumbangan dan semua hak, kepemilikan, dan kepentingan akan dianggap dimiliki oleh kami. Pengesampingan atau pengecualian apa pun atas hal tersebut di atas akan menjadi kebijakan tunggal dan mutlak kami berdasarkan kasus per kasus</li>
            <li>Kebijaksanaan Tunggal. Kami dapat, atas kebijakan kami sendiri, mengoreksi, menarik, membalikkan, atau membatalkan pesanan, perdagangan, transfer, atau transaksi atau aktivitas lain yang kami temukan bahwa ada kesalahan atau kelainan, baik kesalahan atau kelainan tersebut disebabkan oleh Anda, kami, atau pihak ketiga atau karena masalah teknis, masalah sistem, kegagalan perangkat lunak, atau lainnya.</li>
            <li>Hak untuk Dilikuidasi. Kami berwenang untuk mengambil tindakan apa pun yang kami anggap wajar atas kebijakan kami sendiri sehubungan dengan aktivitas dan posisi perdagangan Anda (termasuk, namun tidak terbatas pada, likuidasi paksa dan pengurangan posisi paksa dalam keadaan tertentu) sesuai dengan kebijakan internal kami dan kebijakan manajemen risiko (bervariasi dari waktu ke waktu tanpa pemberitahuan kepada Anda).  Selain itu, kami juga berwenang untuk melikuidasi semua atau sebagian dari posisi Anda terlepas dari posisi untung/rugi dan tanpa pemberitahuan sebelumnya kepada Anda 
                <br>(a) jika timbul perselisihan terkait perdagangan Anda; 
                <br>(b) atas pelanggaran apa pun oleh Anda terhadap persyaratan penggunaan; atau  
                <br>(c) jika kami menganggap likuidasi perlu atau disarankan untuk mengelola risiko kami.</li>
            <li>Keamanan Bunga. Semua aset dan aset digital dalam bentuk apa pun yang dipegang oleh atau atas nama kami untuk akun Anda dengan ini dijaminkan kepada kami dan tunduk pada hak gadai prioritas pertama yang disempurnakan dan kepentingan keamanan demi kepentingan kami untuk mengamankan kinerja kewajiban dan kewajiban kepada kami berdasarkan persyaratan ini penggunaan dan/atau perjanjian lain yang mungkin Anda miliki dengan kami.</li>
            <li>Defisit akun. Jika akun Anda mengalami defisit karena alasan apa pun, suku bunga margin akan berlaku hingga saldo dilunasi, dan kami berhak memperlakukan akun tersebut sebagai akun margin. Anda setuju untuk membayar biaya penagihan yang wajar untuk setiap defisit yang belum dibayar (termasuk, namun tidak terbatas pada, biaya hukum apa pun).</li>
        </ol>
    </li>
    <li>DEPOSIT, PENARIKAN, DAN PENJAGAAN
        <ol>
            <li>Setoran Aset Digital. Anda dapat menyetor aset digital ke akun Anda dengan mengajukan permintaan kepada kami melalui Situs dan melakukan transfer di jaringan aset digital yang disimpan dari dompet Anda ke dompet yang kami tunjuk. Tunduk pada gangguan atau kemacetan pada jaringan aset digital, setoran Aset Digital akan dikreditkan setelah jumlah konfirmasi jaringan yang diperlukan telah terjadi pada blockchain aset digital.</li>
            <li>Penarikan Aset Digital. Anda dapat menarik aset digital yang dikreditkan ke akun Anda dengan mengirimkan permintaan kepada kami melalui Situs. Tunduk pada rekonsiliasi tambahan dan prosedur lain di pihak kami:
                <ol>
                    <li>Penarikan Aset Digital akan diproses segera setelah kami menerima permintaan Anda;</li>
                    <li>kami berhak untuk mengandalkan rincian permintaan yang diajukan kepada kami; dan</li>
                    <li>kami tidak akan bertanggung jawab atas aset digital setelah aset digital tersebut dikirim ke alamat dompet yang Anda ajukan.</li>
                    <li>Deposit dan Penarikan Fiat. Mata uang fiat tidak dapat disetorkan ke atau ditarik dari akun Anda atau melalui Layanan. Layanan tidak mendukung pembelian atau penjualan aset digital apa pun dengan imbalan mata uang fiat.</li>
                    <li>Penjagaan. Aset digital yang Anda simpan dari waktu ke waktu ke akun Anda akan disimpan oleh kami dan/atau penjaga aset digital pihak ketiga resmi kami, dan tidak boleh dipisahkan dari aset digital lain yang kami miliki, penjaga aset digital pihak ketiga resmi kami, dan/atau pengguna kami yang lain.</li>
                    <li>Pelacakan. Kami akan melacak saldo dan kepemilikan aset digital dari setiap Akun, dan menunjukkan detail yang sama kepada Anda melalui Situs. Jika terjadi kesalahan, Anda harus dalam waktu tujuh (7) hari memberi tahu kami tentang kesalahan tersebut.</li>
                </ol>
            </li>
        </ol>   
    </li>
    <li>PESANAN
        <ol>
            <li>Penempatan.
                <ol>
                    <li>Anda dapat melakukan pemesanan menggunakan Layanan. Sebuah pesanan yang mengikat Anda.</li>
                    <li>Semua Pesanan telah didanai sebelumnya dan Anda tidak diizinkan untuk memesan kecuali Anda memiliki jumlah aset digital yang cukup dikreditkan ke akun Anda untuk memenuhi pesanan Anda.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>DATA PASAR
        <ol>
            <li>Data pasar. Data pasar dihasilkan berdasarkan algoritme pencocokan perdagangan kami, dan dapat mencakup, referensi, dan/atau berasal dari penyedia layanan kami.</li>
            <li>Hak. Semua hak, kepemilikan, dan kepentingan dalam dan atas data pasar kami akan tetap menjadi milik eksklusif kami.</li>
        </ol>
    </li>
    <li>PERNYATAAN, JAMINAN DAN USAHA
        <ol>
            <li>Jaminan dan Usaha. Anda menyatakan, menjamin, dan berjanji kepada kami sebagai berikut:
                <ol>
                    <li>Anda memiliki kekuatan dan wewenang penuh untuk masuk ke dalam persyaratan penggunaan ini dan untuk melakukan semua kewajiban Anda di bawah ini.</li>
                    <li>Masuknya Anda ke dalam syarat penggunaan ini telah disahkan secara efektif oleh semua tindakan yang diperlukan dari pihak Anda dan syarat penggunaan ini merupakan kewajiban yang mengikat dan dapat dilaksanakan Anda.</li>
                    <li>Masuk ke dalam dan pelaksanaan kewajiban Anda di bawah ini tidak dan tidak akan bertentangan dengan atau mengakibatkan pelanggaran hukum, peraturan, perintah, penilaian atau keputusan pengadilan, otoritas pemerintah atau badan pengatur yang berlaku untuk Anda.</li>
                    <li>Anda akan mematuhi segala semua hukum dan peraturan yang berlaku untuk Anda sehubungan dengan penggunaan Layanan oleh Anda.</li>
                    <li>Semua informasi dan dokumen yang Anda kirimkan dari waktu ke waktu kepada kami adalah benar, akurat, autentik, dan tidak menyesatkan dengan cara apa pun.</li>
                    <li>Akun Anda hanya boleh digunakan oleh Anda sendiri dan Anda tidak boleh mengizinkan orang lain menggunakan Akun Anda atau menggunakan Layanan melalui akun Anda.</li>
                    <li>Anda adalah satu-satunya pemilik sah dan menguntungkan dari semua aset digital yang disimpan atau ditautkan dengan akun Anda.</li>
                    <li>Kecuali dengan persetujuan tertulis sebelumnya dari kami, Anda tidak akan menjaminkan, membebani, atau menciptakan kepentingan keamanan apa pun atas aset digital Anda yang disimpan ke dalam akun Anda atau disimpan dengan atau oleh kami.</li>
                    <li>Anda sebelumnya tidak pernah ditangguhkan atau dihapus dari penggunaan Layanan apa pun.</li>
                    <li>Anda tidak berada di, tergabung atau didirikan di, di bawah kendali, atau warga negara atau penduduk Yurisdiksi Terbatas mana pun dan penggunaan Layanan oleh Anda bukan merupakan pelanggaran hukum yang berlaku.</li>
                    <li>Layanan hanya boleh digunakan oleh Anda jika Anda
                    <br>(a) memiliki pengetahuan dan pengalaman di pasar yang sangat fluktuatif; 
                    <br>(b) berdagang dengan aset digital yang Anda mampu untuk kehilangan; dan 
                    <br>(c) memiliki toleransi risiko yang tinggi.</li>
                    <li>Penggunaan Anda atas Layanan apa pun adalah risiko Anda sendiri. Kami tidak bertanggung jawab atas segala kerusakan yang timbul dari penggunaan Anda atas Layanan apa pun.</li>
                    <li>Anda menyetujui ketentuan lain seperti yang ditetapkan di sini dan karena kami dapat dari waktu ke waktu memberi tahu Anda hal tersebut di Situs.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>KEKAYAAN INTELEKTUAL
        <ol>
            <li>KI kami. Kami akan mempertahankan semua hak, kepemilikan, dan kepentingan di dalam dan atas semua kekayaan intelektual kami. Kecuali secara tegas ditentukan dalam syarat penggunaan ini, tidak ada hak atau kewajiban sehubungan dengan kekayaan intelektual kami yang diberikan kepada Anda atau tersirat dari syarat penggunaan ini.</li>
            <li>Tidak Ada Pelanggaran. Anda tidak boleh melanggar hak kekayaan intelektual kami atau milik pihak ketiga mana pun. Semua konten, dan materi yang terdapat di Situs ini, termasuk namun tidak terbatas pada teks, gambar, dan informasi lain dan pengaturannya, dilindungi oleh hak cipta, merek dagang, dan hak milik KOML lainnya dan jika berlaku, hak kepemilikan dari penyedia pihak ketiga yang relevan. Ini berarti bahwa Anda tidak boleh tanpa persetujuan tertulis dari KOML mendistribusikan teks atau gambar kepada orang lain atau untuk tujuan yang melanggar hukum atau tidak sah; "mirror" atau sertakan informasi ini di server atau dokumen Anda sendiri; atau memodifikasi atau menggunakan kembali teks atau gambar pada sistem ini. “Komoverse”, “Komodo Metaverse” dan “komoverse.io” dan semua logo yang terkait dengan “Komoverse” atau yang ditampilkan di Situs adalah merek dagang atau merek terdaftar KOML dan/atau pemberi lisensi kami. Anda tidak boleh menyalin, meniru, atau menggunakannya tanpa persetujuan tertulis sebelumnya dari kami.</li>
        </ol>
    </li>
    <li>PERLINDUNGAN DATA
        <ol>
            <li>Persetujuan Anda. Anda dengan ini menyetujui pengumpulan, penggunaan, pengungkapan, penyimpanan, penyimpanan, pemrosesan, dan transmisi semua data pribadi (sebagaimana diungkapkan oleh Anda kepada kami) sesuai dengan Kebijakan Privasi kami.</li>
            <li>Pengungkapan kepada Kami. Setiap kali Anda mengungkapkan data pribadi apa pun kepada kami, Anda menyatakan dan menjamin kepada kami bahwa:
                <ol>
                    <li>individu yang relevan telah menyetujui pengumpulan, penggunaan, pengungkapan, penyimpanan, penyimpanan, pemrosesan, dan transmisi data pribadi mereka oleh kami sesuai dengan Kebijakan Privasi kami; dan</li>
                    <li>semua persetujuan yang diperlukan dari individu yang relevan sebagaimana diwajibkan berdasarkan undang-undang yang berlaku (termasuk, namun tidak terbatas pada, peraturan perlindungan data umum Uni Eropa) telah diperoleh, sehingga kami dapat mengumpulkan, menggunakan, mengungkapkan, menyimpan, menyimpan, memproses dan mengirimkan data pribadi individu tersebut sesuai dengan Kebijakan Privasi kami.</li>
                    <li>Pengungkapan oleh Kami. Jika diwajibkan oleh otoritas pajak mana pun atau berdasarkan undang-undang yang berlaku, informasi pada akun Anda (termasuk identitas dan riwayat transaksi Anda) dapat diungkapkan oleh kami kepada pajak tersebut atau otoritas terkait lainnya. Anda dengan ini menyetujui semua pengungkapan tersebut.</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>KEWAJIBAN
        <ol>
            <li>Tidak Ada Garansi. Layanan disediakan atas dasar “sebagaimana adanya”, “di mana adanya”, dan “sebagaimana tersedia” tanpa jaminan dalam bentuk apa pun. Kami secara tegas menyangkal setiap dan semua jaminan (baik tersurat maupun tersirat) termasuk, namun tidak terbatas pada, jaminan tersirat tentang akurasi, kelengkapan, keamanan, dapat diperjualbelikan, kualitas yang memuaskan, fungsionalitas, kesesuaian untuk tujuan tertentu, ketersediaan, hak milik, kebebasan dari kejahatan kode dan non-pelanggaran.</li>
            <li>Penafian Kewajiban. Sejauh yang diizinkan berdasarkan undang-undang yang berlaku, kami secara tegas menyangkal (dan Anda secara tegas membebaskan kami dari) semua kewajiban untuk:
                <ol>
                    <li>kebenaran, keakuratan, kecukupan, kelengkapan, atau kewajaran konten apa pun yang terkandung di dalam atau diakses melalui Layanan;</li>
                    <li>Layanan tidak terganggu atau bebas dari kesalahan, kehilangan, korupsi, serangan, virus, gangguan, peretasan, atau gangguan keamanan lainnya;</li>
                    <li>setiap tindakan, kelalaian, atau kerugian yang Anda alami setelah periode tidak tersedianya Layanan atau Situs (seperti, namun tidak terbatas pada, perubahan signifikan dalam kondisi pasar dan harga selama periode tidak tersedianya Layanan);</li>
                    <li>setiap tindakan, kelalaian, atau kerugian yang Anda alami dengan penggunaan Anda atau upaya penggunaan Layanan atau Situs;</li>
                    <li>setiap tindakan, kelalaian atau kerugian yang timbul dari setiap instruksi yang diberikan dari Akun Anda yang kami andalkan dan/atau tindak lanjuti;</li>
                    <li>setiap pesanan yang diajukan secara keliru oleh Anda yang kemudian diisi, dilaksanakan, atau dicocokkan (seluruhnya atau sebagian);</li>
                    <li>kerugian yang timbul dari kegagalan Anda untuk memenuhi salah satu kewajiban Anda di bawah ini;</li>
                    <li>kehilangan keuntungan, kehilangan tabungan yang diantisipasi, kehilangan bisnis, kehilangan kesempatan, kehilangan pendapatan, kehilangan waktu, kehilangan itikad baik atau kerusakan reputasi, dan kehilangan atau kerusakan data, baik langsung maupun tidak langsung, maupun untuk hukuman apa pun , kerugian tidak langsung, konsekuensia, apa pun penyebabnya dan apakah dapat diperkirakan atau tidak;</li>
                    <li>kerugian yang timbul dari pelanggaran undang-undang perlindungan data yang berlaku karena kegagalan Anda untuk mendapatkan dan mempertahankan persetujuan yang relevan agar kami dapat menyediakan Layanan sesuai dengan ketentuan di bawah ini;</li>
                    <li>hilangnya data, informasi dan catatan (apapun penyebabnya) dan kerusakan komputer;</li>
                    <li>kerugian yang timbul dari sebab apa pun yang bukan karena kesalahan kami (termasuk, namun tidak terbatas pada, gangguan virus komputer atau sistem, sabotase, atau penyebab lain apa pun yang dapat mengganggu sistem komputer Anda, dan kehilangan, perusakan, atau kesalahan dalam data, informasi, dan catatan Anda, apa pun penyebabnya); dan</li>
                    <li>setiap klaim, tuntutan, atau kerusakan (baik aktual, konsekuensial, atau lainnya) dalam bentuk atau sifat apa pun yang timbul dari atau dengan cara apa pun terkait dengan perselisihan apa pun yang mungkin Anda miliki dengan satu atau lebih pengguna Layanan.</li>
                </ol>
            </li>
            <li>Penafian Perdagangan Internet. Internet, karena kemacetan lalu lintas yang tidak dapat diprediksi dan alasan lainnya, merupakan media komunikasi yang tidak dapat diandalkan dan bahwa ketidakandalan tersebut berada di luar kendali KOML. Anda mengakui bahwa, sebagai akibat dari ketidakandalan tersebut, mungkin ada keterlambatan dalam pengiriman dan penerimaan pesanan, instruksi, dan informasi lain yang dapat mengakibatkan keterlambatan dalam pelaksanaan perintah atau instruksi dan/atau pelaksanaan perintah atau instruksi di harga yang berbeda dari yang berlaku pada saat perintah atau Instruksi diberikan. Anda selanjutnya mengakui dan menyetujui bahwa ada risiko kesalahpahaman atau kesalahan dalam komunikasi apa pun dan bahwa risiko tersebut sepenuhnya ditanggung oleh Anda. Anda mengakui dan setuju bahwa biasanya tidak mungkin untuk membatalkan pesanan setelah dilakukan.</li>
            <li>Tidak Ada Saran Profesional. Anda mengakui dan setuju bahwa kami tidak memberikan nasihat investasi, keuangan, akuntansi, penilaian, pajak, hukum, atau profesional lainnya. Semua keputusan untuk membeli, menjual, atau memperdagangkan aset digital apa pun menggunakan Layanan dibuat semata-mata oleh Anda, dan Anda bertanggung jawab penuh atas semua keputusan tersebut.</li>
            <li>Pajak. Anda bertanggung jawab sepenuhnya untuk menentukan apakah, dan sejauh mana, pajak apa pun berlaku untuk setiap transaksi yang Anda lakukan melalui Layanan, dan untuk menahan, mengumpulkan, melaporkan, dan mengirimkan jumlah pajak yang benar kepada otoritas pajak yang sesuai.</li>
            <li>Protokol dan Jaringan. Kami tidak memiliki atau mengontrol protokol perangkat lunak yang mendasari jaringan Aset Digital yang mengatur pengoperasian Aset Digital. Anda mengakui dan menyetujui bahwa: 
                <br>(a) kami tidak bertanggung jawab atas pengoperasian protokol yang mendasarinya; dan 
                <br>(b) kami tidak membuat pernyataan, jaminan, usaha, atau jaminan apa pun sehubungan dengan keamanan, kelayakan untuk diperdagangkan, kualitas yang memuaskan, fungsionalitas, kesesuaian untuk tujuan tertentu, ketersediaan, hak milik, kebebasan dari kode berbahaya atau non-pelanggaran.</li>
            <li>Batasan Tanggung Jawab. Terlepas dari ketentuan apa pun dari syarat penggunaan ini, kewajiban agregat maksimum kami kepada Anda yang timbul dari atau sehubungan dengan Syarat Penggunaan ini kapan pun dibuat akan dibatasi hingga USD100.</li>
            <li>Ganti rugi. Anda setuju untuk mengganti kerugian kami, perusahaan terkait kami, pejabat, direktur, karyawan, dan agen kami (dan perusahaan terkait kami) (bersama-sama, "Pihak yang Diganti Kerugian") terhadap setiap dan semua klaim, kerusakan, kerugian, kewajiban, kekurangan, penilaian , penghargaan, tuntutan, denda, pajak, pengeluaran, pengeluaran, biaya, denda dan kewajiban lainnya (termasuk, namun tidak terbatas pada, biaya penyelidikan dan biaya hukum dan pengeluaran sehubungan dengan tindakan, gugatan atau proses) yang diderita atau dikeluarkan oleh salah satu Pihak yang Diberi Ganti Rugi yang timbul dari atau sehubungan dengan:
                <ol>
                    <li>setiap pernyataan yang salah atau pelanggaran dari setiap representasi, jaminan, usaha atau perjanjian yang dibuat oleh Anda di bawah ini;</li>
                    <li>setiap pelanggaran hak kekayaan intelektual sebagai akibat dari tindakan atau kelalaian Anda;</li>
                    <li>pelanggaran orang lain atas ketentuan apa pun dari syarat penggunaan ini, di mana orang tersebut dapat menggunakan Layanan melalui akun Anda; dan</li>
                    <li>setiap pelanggaran undang-undang perlindungan data yang berlaku sebagai akibat dari tindakan atau kelalaian Anda.</li>
                </ol>
            </li>
            <li>Penghentian Perdagangan. Kami dapat atas kebijakan kami sendiri menghentikan Layanan dan/atau Situs karena alasan apa pun (termasuk, namun tidak terbatas pada, menjaga ketertiban pasar atau karena gangguan pasar). Kami dengan ini menyangkal, dan Anda dengan ini tidak dapat ditarik kembali melepaskan kami dari, semua tanggung jawab atas keuntungan atau kerugian (baik aktual, diklaim atau sebaliknya) apapun sebagai akibat dari penghentian perdagangan tersebut.</li>
            <li>Pengakuan Risiko. Anda mengakui dan menyetujui bahwa:
                <ol>
                    <li>pasar aset digital masih baru dan mungkin tidak akan terus tumbuh;</li>
                    <li>Anda mungkin menghadapi kesulitan atau ketidakmungkinan untuk melikuidasi posisi Anda dalam kondisi pasar tertentu;</li>
                    <li>perdagangan, peminjaman, kepemilikan dan/atau berurusan dengan Aset Digital mengandung risiko yang sangat tinggi. Secara khusus, Aset Digital dapat diperdagangkan tanpa henti sepanjang hari dan mungkin tidak ada batasan pada perubahan harga. Harga mungkin rentan terhadap fluktuasi signifikan yang disebabkan oleh, tanpa batasan, pelaku pasar atau kebijakan pemerintah di yurisdiksi yang berbeda;</li>
                    <li>kerugian yang cukup besar dapat dipertahankan atau terjadi saat berdagang, meminjamkan, meminjam, memegang dan/atau berurusan dengan Aset Digital;</li>
                    <li>Aset digital mungkin tidak diatur dan perdagangan, peminjaman, kepemilikan dan/atau berurusan dengan aset digital dapat dianggap ilegal di yurisdiksi tertentu;</li>
                    <li>Anda disarankan untuk mencari dan memperoleh nasihat hukum, keuangan, pajak, investasi, dan profesional lainnya yang sesuai sebelum menggunakan Layanan apa pun;</li>
                    <li>Aset digital tidak boleh diterbitkan oleh bank sentral, lembaga keuangan, atau oleh kami; dan</li>
                    <li>Aset digital dan protokol dasarnya mungkin rentan terhadap pelanggaran keamanan dan kebijakan pemerintah. Anda mengakui dan setuju bahwa risiko yang terkait dengan aset digital sebagaimana diatur dalam perjanjian ini tidak menyeluruh dan mungkin ada risiko tambahan yang tidak terdaftar atau diperkirakan oleh kami. Anda telah menilai dengan hati-hati posisi keuangan dan toleransi risiko Anda, dan mengonfirmasi bahwa risiko tersebut dapat Anda terima dan bahwa Anda mampu menahan kerugian apa pun yang terjadi sehubungan dengan perdagangan tersebut (termasuk, namun tidak terbatas pada, persyaratan margin dan biaya transaksi yang berlaku).</li>
                </ol>
            </li>
            <li>Batasan Independen. Setiap kualifikasi dan batasan dalam bagian 11 ini harus ditafsirkan secara independen dari yang lain dan tidak boleh dibatasi oleh kualifikasi atau batasan lainnya.</li>
            <li>Pertahanan. Ketentuan Bagian 11 ini akan tetap berlaku dan berlanjut dengan kekuatan dan efek penuh terlepas dari penghentian atau berakhirnya persyaratan penggunaan ini.</li>
        </ol>
    </li>
    <li>PROTOKOL DASAR PERANGKAT LUNAK
        <ol>
            <li>Tidak ada Tanggung Jawab. Kami tidak memiliki atau mengontrol protokol perangkat lunak yang mendasari pengaturan pengoperasian aset digital yang didukung pada platform kami. Protokol yang mendasarinya umumnya "sumber terbuka" dan siapa pun dapat menggunakan, menyalin, memodifikasi, atau mendistribusikannya. Kami tidak bertanggung jawab atas pengoperasian protokol yang mendasarinya dan kami tidak dapat menjamin fungsionalitas, keamanan, atau ketersediaannya. Anda mengakui dan menerima risiko bahwa protokol perangkat lunak yang mendasari terkait dengan aset digital apa pun di akun Anda dapat berubah.</li>
            <li>Peristiwa Fork. Protokol perangkat lunak yang mendasari tunduk pada perubahan mendadak dalam aturan operasi ("fork"), dan fork semacam itu dapat memengaruhi nilai, fungsi, dan/atau nama aset digital di akun Anda secara material. Hal tersebut adalah tanggung jawab Anda untuk membuat diri Anda sadar, dan mempertimbangkan bagaimana menghadapi, fork yang akan datang. Jika memungkinkan, kami dapat memberi Anda pemberitahuan atau peringatan tentang fork sesuai dengan Bagian 14.1 di bawah ini dan Anda harus membaca pemberitahuan atau peringatan yang diterima dari kami untuk mempertimbangkan cara menangani fork yang akan datang tersebut. Jika terjadi fork, ada risiko bahwa kami mungkin perlu menangguhkan sementara operasi sehubungan dengan fork tersebut tanpa memberikan pemberitahuan terlebih dahulu kepada Anda. Kami dapat, dalam kebijaksanaan kami yang wajar, menolak untuk mendukung salah satu atau kedua cabang fork. Anda mengakui risiko yang ditimbulkan oleh fork dan Anda menerima bahwa kami tidak bertanggung jawab untuk membantu Anda memindahkan atau menjual cabang protokol fork yang tidak didukung.</li>
        </ol>
    </li>
    <li>PERUBAHAN DAN MODIFIKASI
        <ol>
            <li>Perubahan pada Layanan. Anda mengakui dan setuju bahwa kami dapat dari waktu ke waktu memodifikasi atau mengubah atau menarik bagian mana pun dari Layanan atau Situs atau informasi apa pun, termasuk namun tidak terbatas pada spesifikasi, deskripsi, dan harga, yang disediakan di Situs tanpa referensi atau pemberitahuan apa pun kepada Anda . Dengan menggunakan Situs ini, Anda setuju untuk terikat oleh setiap revisi tersebut dan Anda setuju untuk mengunjungi halaman ini secara berkala untuk menentukan syarat penggunaan saat itu yang mengikat Anda.</li>
            <li>Revisi syarat penggunaan ini. Anda mengakui dan setuju bahwa kami dapat dari waktu ke waktu mengubah ketentuan syarat penggunaan ini, menerbitkan versi revisi di Situs kami. Versi yang direvisi akan berlaku sejak tanggal efektif yang diterbitkan dan pemberitahuan akan disampaikan kepada Anda melalui Situs kami atau melalui email. Jika Anda terus menggunakan Layanan kami setelah periode pemberitahuan, maka Anda akan dianggap telah menyetujui amandemen yang dibuat dalam versi revisi tersebut.</li>
        </ol>
    </li>
    <li>UMUM
        <ol>
            <li>Pemberitahuan.
                <ol>
                    <li>Semua pemberitahuan dan komunikasi lain yang diberikan oleh kami berdasarkan syarat penggunaan ini (termasuk perubahan apa pun pada syarat penggunaan ini) dapat diberikan melalui email, surat biasa, SMS, melalui Situs atau Layanan atau cara lain yang kami anggap perlu. Pemberitahuan dan komunikasi tersebut akan dianggap telah diterima saat dikirimkan oleh kami.</li>
                    <li>Semua pemberitahuan dan komunikasi lain yang Anda berikan berdasarkan ketentuan penggunaan ini harus diberikan kepada kami melalui email (yang akan dianggap telah diterima pada saat dikirimkan kecuali jika Anda menerima tanggapan otomatis yang menunjukkan bahwa penerima tidak tersedia) atau melalui pos prabayar ke alamat kantor terdaftar kami (yang akan dianggap telah diterima pada Hari Kerja ketujuh (7) setelah hari diposkan).</li>
                </ol>
            <li>Force Majeure. Kami tidak akan bertanggung jawab atas kinerja yang tidak memadai berdasarkan Syarat Penggunaan ini sejauh disebabkan oleh salah satu dari berikut ini:
                <ol>
                    <li>kondisi seperti bencana alam, tindakan perang atau terorisme, kerusuhan, kondisi perburuhan, tindakan pemerintah, dan gangguan atau gangguan Internet atau sumber energi yang berada di luar kendali wajar kami; atau</li>
                    <li>kegagalan Situs atau tidak tersedianya Layanan.</li>
                </ol>
            </li>
            <li>Tautan ke situs pihak ketiga. Tautan ke situs pihak ketiga lainnya dapat disediakan di Situs atau melalui penggunaan Layanan oleh Anda dan KOML tidak membuat pernyataan apa pun tentang situs pihak ketiga tersebut. Anda mengakui dan menyetujui bahwa 
                <br>(a) tautan tersebut bukan merupakan suatu dukungan; 
                <br>(b) kami tidak memiliki kendali atas situs web tersebut atau kontennya; dan 
                <br>(c) kami tidak memiliki kewajiban yang timbul dari atau terkait dengan situs web tersebut atau keakuratan atau kualitas konten tersebut. Tergantung Anda untuk mengambil tindakan pencegahan untuk memastikan bahwa apa pun yang Anda pilih untuk digunakan bebas dari item seperti virus, worm, trojan horse, dan item lain yang bersifat merusak. KOML tidak membuat pernyataan atau jaminan untuk produk pihak ketiga mana pun.</li>
            <li>Menautkan ke Situs Ini. Tidak ada hyperlink ke Situs atau halaman internal atau anak perusahaan apa pun di dalam Situs, atau pembingkaian konten apa pun di Situs, yang boleh dibuat oleh siapa pun kecuali dengan persetujuan sebelumnya dari KOML. Tanpa mengurangi hak lainnya, KOML dapat, setelah menemukan penautan atau pembingkaian yang tidak sah tersebut, menonaktifkan tautan atau bingkai tersebut.</li>
            <li>Penyampaian Informasi. Dengan memberikan informasi (seperti umpan balik, data, jawaban, pertanyaan, komentar, saran, rencana, atau ide) kepada KOML, Anda setuju bahwa informasi tersebut tidak bersifat rahasia dan bahwa KOML memiliki hak yang tidak terbatas untuk menggunakan, mendistribusikan, memperbanyak, dan mengungkapkan informasi tersebut di seluruh dunia yang dianggap tepat oleh KOML, tanpa kompensasi atau pengakuan sumbernya. KOML bebas menggunakan ide, konsep, pengetahuan, atau teknik apa pun yang terkandung dalam informasi yang Anda berikan kepada KOML melalui Situs ini, termasuk namun tidak terbatas pada pengembangan, pembuatan, dan pemasaran produk atau layanan yang digabungkan atau berdasarkan informasi tersebut.</li>
            <li>Merancang.
                <ol>
                    <li>Kami berhak untuk, setiap saat tanpa pemberitahuan kepada Anda dan dari waktu ke waktu tanpa mengurangi pemulihan lain yang tersedia bagi kami, menetapkan jumlah yang terutang kepada Anda terhadap kewajiban apa pun yang Anda miliki kepada kami, baik saat ini atau di masa depan, aktual atau kontinjensi, dilikuidasi atau tidak dilikuidasi, primer atau agunan, beberapa atau keseluruhan.</li>
                    <li>Jika ada saldo negatif di Akun Anda, kami berhak untuk mengurangi jumlah Aset Digital yang diperlukan dari Akun Anda untuk mengimbangi saldo negatif tersebut.</li>
                </ol>
            </li>
            <li>Seluruh perjanjian. Syarat Penggunaan ini, bersama dengan semua dokumen yang dirujuk di sini, mewujudkan semua syarat dan ketentuan yang disepakati antara Anda dan kami mengenai pokok bahasan Syarat Penggunaan ini dan menggantikan setiap dan semua diskusi, perjanjian, dan usaha sebelumnya (jika ada) antara Anda dan kami sehubungan dengan pokok bahasan di sini, baik tertulis maupun lisan.</li>
            <li>Hubungan Para Pihak. Syarat Penggunaan ini tidak dapat ditafsirkan sebagai menciptakan hubungan pemberi kerja dan karyawan, prinsipal dan agen, kemitraan atau usaha patungan, atau hubungan fidusia lainnya.</li>
            <li>Tidak Ada Hak Pihak Ketiga. Kecuali untuk Pihak yang Diberi Ganti Rugi, seseorang yang bukan merupakan pihak dari Syarat Penggunaan ini tidak berhak untuk menegakkan ketentuan apa pun dari Syarat Penggunaan ini.</li>
            <li>Variasi. Setiap variasi pada ketentuan apa pun dari Syarat Penggunaan ini harus dibuat secara tertulis dan dilaksanakan oleh kami.</li>
            <li>Keterpisahan. Jika ada ketentuan dari Syarat Penggunaan ini yang dianggap ilegal, tidak sah, atau tidak dapat dilaksanakan secara keseluruhan atau sebagian di yurisdiksi mana pun, maka Syarat Penggunaan ini, untuk yurisdiksi tersebut, akan terus berlaku untuk ketentuan lainnya dan sisa ketentuan yang terpengaruh, dan legalitas, validitas, dan keberlakuan ketentuan tersebut di yurisdiksi lain tidak akan terpengaruh.</li>
            <li>Tidak ada Pengabaian. Tidak ada penundaan atau kegagalan oleh kami untuk menjalankan atau menegakkan hak, kuasa, atau pemulihan apa pun berdasarkan Syarat Penggunaan ini yang merupakan atau berlaku sebagai pengesampingan atas hak, kuasa atau hak, kuasa, atau pemulihan apa pun berdasarkan Syarat Penggunaan ini atau beroperasi untuk mencegah pelaksanaan atau penegakan hak, kekuasaan, atau pemulihan tersebut selanjutnya. Pengesampingan apa pun oleh kami harus secara tegas dibuat secara tertulis dan ditandatangani oleh kami agar efektif.</li>
            <li>Penugasan. Anda tidak boleh mengalihkan atau mengalihkan hak, kepentingan, lisensi, dan/atau kewajiban Anda kepada orang lain. Kami dapat mengalihkan hak, lisensi, kepentingan, dan/atau kewajiban kami kapan saja kepada siapa pun, termasuk sebagai bagian dari merger, akuisisi, atau reorganisasi perusahaan lainnya.</li>
            <li>Bahasa Inggris. Terlepas dari ketentuan lain dari Syarat Penggunaan ini, setiap terjemahan dari Syarat Penggunaan ini atau dokumen lain yang dirujuk di sini atau pemberitahuan dari kami disediakan untuk kenyamanan Anda saja dan mungkin tidak secara akurat mewakili informasi dalam bahasa Inggris asli. Jika terjadi ketidaksesuaian, versi bahasa Inggris dari Syarat Penggunaan ini atau dokumen lain yang dirujuk di sini atau pemberitahuan dari kami yang akan berlaku.</li>
            <li>Peraturan pemerintah. Ketentuan penggunaan ini diatur oleh dan ditafsirkan sesuai dengan hukum Indonesia.</li>
            <li>Penyelesaian sengketa. Setiap perselisihan, kontroversi, atau klaim yang timbul dari atau terkait dengan syarat penggunaan ini, atau pelanggaran, pengakhiran, atau ketidakabsahannya, akan dirujuk dan diselesaikan melalui arbitrase yang dikelola oleh Pusat Arbitrase Internasional Singapura (“SIAC”) sesuai dengan Peraturan Arbitrase dari Pusat Arbitrase Internasional Indonesia (“Peraturan IIAC”), yang peraturannya dianggap dimasukkan dengan mengacu pada klausul ini. Bahasa sidang arbitrase adalah bahasa Inggris dan kedudukan, atau tempat hukum arbitrase, harus di Indonesia. Keputusan atas setiap putusan arbitrase dapat diberikan di pengadilan mana pun yang memiliki yurisdiksi atas Pihak (atau atas aset Pihak) terhadap siapa putusan tersebut diberikan.</li>
        </ol>
    </li>
</ol>


@elseif($lang == 'zh')
<h2>KOMOVERSE</h2>
<h2>KOMODO METAVERSE</h2>
<h1 class="h2-style">使用条款</h1>
<b>最后更新时间：2021年12月 </b>
<hr>
在访问或使用以下定义的服务或网站前，请仔细阅读这些使用条款。通过访问或使用此网站或服务，您将被视为已阅读理解并接受这些使用条款以及此处引用的所有其他文件中包含的所有条款和条件。如果您不同意以下条款，请不要访问本网站或使用此处包含的服务。
<br><br>
这些使用条款是在印度尼西亚注册成立的公司 PT KOMODO LEGENDS INTERAKTIF (KOML) 与您之间的。提及“KOML”、“我们” 或“我们的”是指 KOML，而提及“您”或“您的”是指与 KOML 签订这些使用条款的人。
<br><br>
若您是以下任何类别的公民、国民或居民，或位于、成立于或以其他方式加入的组织你将禁止于申请账户，
<br>(i) 巴尔干、白俄罗斯、缅甸、科特迪瓦（科特迪瓦）、古巴、刚果民主共和国、伊朗、伊拉克、利比里亚、缅甸、朝鲜、南苏丹、苏丹、叙利亚、津巴布韦； 
<br>(ii) 美利坚合众国禁运的任何州、国家或其他司法管辖区；
<br>(iii) 根据适用法律，由于您的国籍、住所、公民身份、居住地或其他原因，您无法访问或使用服务的任何州、国家或其他司法管辖区； 
<br>(iv) 禁止或违反当地法律或法规或可能使 KOML 遵守当地注册或许可要求的任何州、国家或其他司法管辖区（统称为“受限司法管辖区”）。
<br><br>
KOML 可自行决定在任何受限制的司法管辖区实施控制以限制对服务的访问。若 KOML 确定您从任何受限制的司法管辖区访问服务，或就您的位置、注册地、成立地、公民身份或居住地提供虚假陈述，KOML 保留立即关闭您的账户并清算任何未平仓头寸的权利。
<br><br>
您承认并同意您了解与电子资产交易相关的风险，并应承担与使用 KOML 服务和电子资产交易相关的所有风险。 KOML 不对由此产生的任何此类风险或不利结果承担责任。
<br><br>
通过以任何方式访问或使用 KOML 的服务，您承认您接受并同意受这些使用条款的约束。如果您不同意，请勿访问 KOML 的网站或使用 KOML 的服务。 
<br>
<ol>
    <li>定义和解释
        <ol>
            <li>定义。在这些使用条款中，除非上下文另有要求：
                <ol>
                    <li>“帐户”是指与我们注册的帐户，使您能够使用服务。</li>
                    <li>“反洗钱政策”是指我们的内部反洗钱政策，由我们自行决定不时更改或修订。</li>
                    <li>“工作日”是指在印度尼西亚不是周六、周日或官方公共假日的日子。</li>
                    <li>“明显错误的交易”是指基于市场数据进行的与执行时的现行市场价格大相径庭的数字资产买卖交易（无论是否成交、执行、匹配或完成）。</li>
                    <li>“电子资产”是指基于计算机或区块链网络的加密协议的电子资产或虚拟货币，可以 
                        <br>(a) 以一个单位表示；
                        <br>(b) 不以任何货币计价；
                        <br>(c) 用作公众或部分公众接受的交换媒介，用于支付商品或服务或清偿债务； 
                        <br>(d) 以电子方式传输、存储或交易； 
                        <br>(e) 集中式或分散式；
                        <br>(f) 封闭或开源。
                    </li>
                    {{-- <li>“费用表”是指本网页 (<a href="https://www.komodolegends.io/fee">https://www.komodolegends.io/fee</a>) 上列出的费用表，由我们自行决定不时更改或修订。</li> --}}
                    <li>“订单”是指使用现货交易所购买和/或出售的一种电子资产以换取另一种电子资产的订单。</li>
                    <li>“隐私政策”是指本网页  (<a href="{{ url('privacy-policy') }}">{{ url('privacy-policy') }}</a>) 上规定的隐私政策，由我们自行决定不时修订、补充或替换。</li>
                    <li>    “服务”是指我们通过网站向您提供的各种服务，包括但不限于现货交易、合约交易、赚取、贷款、启动板以及我们可能不时在网站上提供的任何其他服务。</li>
                    <li>“网站”是指位于 <a href="{{ url('/') }}">{{ url('/') }}</a> 的网站，或我们的任何相关网站、应用程序编程接口 (API) 或应用程序。</li>
                    <li>“现货兑换”是指通过本网站提供的现货兑换服务，使用户能够将一种电子资产兑换成另一种电子资产。</li>
                </ol>
            </li>
            <li>解释。在这些使用条款中，除非上下文另有要求：
                <ol>
                    <li>标题、下划线和粗体仅是为了便于参考，并不影响这些使用条款任何规定的含义或解释。</li>
                    <li>单数包括复数，复数包括单数；</li>
                    <li>本使用条款中定义的词或短语的其他词类和语法形式具有相应的含义；</li>
                    <li>对文件的引用包括对该文件的所有修改或补充，或替换或更新；</li>
                    <li>提及文件的一方包括继承人和允许的受让人；</li>
                    <li>提及“美元”或“$”是指美国的法定货币；</li>
                    <li>这些使用条款的任何规定不应被解释为对一方不利，因为该方负责准备这些使用条款或该规定；</li>
                    <li>    对条款、章节、附件、展示或附表的引用是对这些使用条款的条款、部分、附件、展示或附表的引用，对这些使用条款的引用包括任何附件、展示或附表；</li>
                    <li>对任何立法的提及包括根据其制定的所有授权立法以及对其中任何一项的修订、合并、替换或重新制定；和</li>
                    <li>“包括”一词或类似的表达方式并不限制其所包含的其他内容</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>我们的服务
        <ol>
            <li>合格。您必须遵守以下所有条件才能使用我们的服务：
                <ol>
                    <li>若您是个人，您则必须是年满 18 岁的个人，并且您不是公民、国民或居民，或位于、注册于或以其他方式组织、成立于或受限制的司法管辖区的控制下；</li>
                    <li>若您是法律实体，您则是根据您正式并有效存在的组织所在的司法管辖区的适用法律，并且访问和/或使用本网站的个人已获得您的正式授权，代表您行事并对您具有约束力；</li>
                    <li>没有适用于您的法律禁止您使用服务或一般购买、出售和/或持有任何数字资产；和</li>
                    <li>此处列出的所有其他条件以及我们可能不时在网站上通知您的所有其他条件。</li>
                </ol>
            </li>
            <li>遵守。您同意并承诺：
                <ol>
                    <li>在任何时候与所有方面遵守这些使用条款、隐私政策以及适用于各种服务的特定条款和条件的规定，您在此确认您已阅读并理解其中的每一项，并应被视为纳入这些参考使用条款；和</li>
                    <li>向我们支付费用表中规定的费用，在这方面，您授权 KOML 自动从您的账户中扣除您不时欠我们的任何费用。</li>
                    <li>支持。若您在服务方面需要任何帮助，您可以联系我们。对于我们将为您提供的支持程度，我们不作任何陈述或保证。</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>帐户
        <ol>
            <li>开户。为了使用服务，您必须通过向我们提供您的姓名、电子邮件地址、密码以及我们可能不时要求的其他信息和文件来开设一个帐户。我们可以自行决定拒绝为您开立帐户或限制您持有的帐户数量。</li>
            <li>反洗钱。您同意向我们提供我们可能不时要求或要求的所有信息和文件，这些信息和文件与您的帐户的开立和持续维护以及遵守我们有关的反洗钱政策。我们可能会进行我们认为必要的进一步查询（无论是直接还是通过第三方），以验证您的身份。在任何情况下，您都不得允许任何人（除了您自己）通过您的帐户使用服务。您必须是存入或与您的帐户相关联的所有电子资产的唯一合法和受益所有人。</li>
            <li>使用权。您的帐户将通过使用我们可能不时要求的此类登录凭据和其他形式的身份验证以被保护。就您帐户的安全而言，我们可能会不时禁止通过我们自行决定认为对您的帐户安全构成风险的任何设备访问您的帐户。您对您的帐户登录凭据和其他形式的身份验证的安全负全部责任，并且必须对所有登录凭据和其他形式的身份验证严格保密，不得将这些信息透露给任何第三方。
            <br><br>在每次访问本网站结束时，您将采取适当的步骤从您的帐户中登出。您应对在您的帐户中或通过您的帐户发生的所有活动负责，并且您不得因我们对您帐户发出或发送的指示行事而向我们提出索赔。您有责任确保发送给我们的任何指示、订单或交易格式正确、清晰且准确。</li>
            <li>未经授权的使用。若您怀疑或发现任何未经授权使用您的帐户登录凭据（包括您的用户名和密码）的行为，您应立即通知我们。对于您或任何第三方在获得或未经您授权的情况下使用您的帐户而造成的任何损失或损害，我们不承担任何责任。</li>
            <li>暂停。我们可以随时自行决定暂停任何帐户，原因包括   
                <br>(a) 任何违反或涉嫌违反这些使用条款的行为； 
                <br>(b) 您的帐户受到任何调查或法院命令的约束； 
                <br>(c) 在您的账户中检测到任何可疑或非法活动；
                <br>(d) 任何其他原因。如果您的帐户被暂停，那么在暂停期间：
                <ol>
                    <li>您可能无法使用服务；和</li>
                    <li>尽管有第 5 条的规定，但不允许对帐户的电子资产进行所有存款和取款的活动。上述任何豁免或例外应由我们根据具体情况全权酌情决定。</li>
                </ol>
            </li>
            <li>关闭。我们可以随时自行决定关闭任何帐户，原因包括 
                <br>(a) 违反或涉嫌违反这些使用条款；
                <br>(b) 您的帐户受到任何调查或法院命令的约束；
                <br>(c) 在您的帐户中检测到任何可疑或非法活动；
                <br>(d) 任何其他原因。您也可以向我们提交关闭您帐户的请求。关闭帐户后：
                <ol>
                    <li>若您的帐户受到任何调查或法院命令的约束，我们将通知您有关您帐户的电子资产或可被提取的方式；和</li>
                    <li>在所有其他情况下，我们会将电子资产退回到接收地址，或者在电子资产地址不可用的情况下，我们将请求我们可以退回电子资产的地址。如果我们在请求之日起一 (1) 年内未收到您的回复，则电子资产应被视为捐赠，所有权利、所有权和利益均应视为归属于我们。</li>
                    <li>只要存在合法的商业目的，在关闭您的帐户后，我们可能会继续储存、保留和使用您的用户内容和与您的帐户相关的其他信息。这些使用条款的所有规定（包括但不限于我们对用户内容的权利）在帐户关闭或终止后仍然有效。</li>
                </ol>
            </li>
            <li>使用权。您将需要互联网连接以及必要的设备（例如电脑、智能手机或平板电脑）才能通过本网站使用和访问服务。</li>
        </ol>
    </li>
    <li>我们的权利
        <ol>
            <li>电子资产。在使用我们的服务期间，我们拥有唯一和绝对酌情权来 
                <br>(a) 确定并允许来购买、出售和/或交易任何电子资产；
                <br>(b) 下架、暂停或删除任何正进行买卖的电子资产。</li>
            <li>主动转让。若我们在我们控制的电子资产地址中收到任何不可使用服务所购买或出售的电子资产，则该电子资产将被视为捐赠，所有权利、所有权和利益均应视为归属于我们。若我们在我们控制的电子资产地址中收到任何受服务支持或可通过服务进行交易的电子资产，您可以提交对此类电子资产的索赔请求，我们可能会要求您执行额外的转移（或此类我们认为必要的其他行动）以满足您对电子资产的所有权。若自电子资产转让给我们之日起一 (1) 个月内未向我们提出索赔，则电子资产将被视为捐赠，所有权利、所有权和利益均应视为归属于我们。上述任何豁免或例外应由我们根据具体情况全权酌情决定。</li>
            <li>自行决定。我们可以自行决定更正、撤回、撤销或取消我们发现存在错误或异常的任何订单、交易、转移或其他交易或活动，无论此类错误或异常是由以下原因引起的您、我们或第三方或由于技术问题、系统问题、软件故障或其他原因。</li>
            <li>清算权。我们有权根据我们的内部政策，自行决定对您的任何交易活动和头寸采取我们认为合理的任何措施（包括但不限于特定情况下的强制平仓和强制减仓），以及风险管理政策（不时更改，恕不另行通知）。此外，我们还将被授权清算您的全部或部分头寸，无论您的盈亏头寸如何，并且无需事先通知您  
                <br>(a) 若您的任何交易出现任何争议；
                <br>(b) 在您违反使用条款的情况下；
                <br>(c) 我们认为为了管理我们的风险而需要或建议进行清算。</li>
            <li>安全利益。由我们或代表我们为您的帐户持有的所有电子资产和任何种类的资产特此质押给我们，并受到完善的优先留置权和有利于我们的担保权益，以确保根据这些条款履行对我们服务使用的责任和/或您可能与我们达成的任何其他协议。</li>
            <li>账户赤字。若您的账户因任何原因出现赤字，保证金利率将适用，直到余额被偿还，我们有权将该账户视为保证金账户。您同意为任何未支付的赤字支付合理的催收费用（包括但不限于任何法律费用）。</li>
        </ol>
    </li>
    <li>存款、取款和托管
        <ol>
            <li>电子资产存款。您可以通过网站向我们提交请求并在网络上执行将电子资产从您的钱包存入我们指定钱包的转移，从而将电子资产存入您的帐户。在数字资产网络出现任何中断或拥塞的情况下，电子资产的存款将在电子资产的区块链上发生必要数量的网络确认后才记入贷方。</li>
            <li>电子资产提取。您可以通过网站向我们提交请求，提取记入您帐户的电子资产。根据我们的任何额外对账和其他程序：
                <ol>
                    <li>我们将在收到您的请求后立即处理电子资产提取；</li>
                    <li>我们有权依赖提交给我们的请求的详细信息；和</li>
                    <li>一旦上述电子资产已发送至您提交的钱包地址，我们将不对该电子资产承担任何责任。</li>
                    <li>法定存款和取款。法定货币不能存入或从您的帐户或通过服务提取。服务不支持购买或出售任何电子资产以换取法定货币。</li>
                    <li>保管。您不时存入您帐户的电子资产将由我们和/或我们授权的第三方电子资产托管人持有，不得与我们、我们的授权第三方电子资产托管人和/或我们的其他用户持有的其他电子资产隔离。</li>
                    <li>追踪。我们将跟踪每个帐户的电子资产的余额和所有权，并通过网站向您显示相同的详细信息。若出现任何错误，您必须在七 (7) 天内把该错误通知我们。</li>
                </ol>
            </li>
        </ol>   
    </li>
    <li>订单
        <ol>
            <li>下单。
                <ol>
                    <li>您可以使用服务下订单。订单一旦下达，即对您具有约束力。</li>
                    <li>所有订单都是预先支付的，除非您有足够数量的电子资产存入您的帐户以满足您的订单，否则您不得下订单。</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>市场数据
        <ol>
            <li>市场数据。市场数据是根据我们的交易匹配算法生成的，可能包括、参考和/或源自我们的服务提供商。</li>
            <li>权利。我们市场数据的所有权利、所有权和利益均属于我们的专有财产。</li>
        </ol>
    </li>
    <li>陈述、保证和承诺
        <ol>
            <li>保证和承诺。您向我们陈述、保证和承诺如下：
                <ol>
                    <li>您拥有完全的权力和授权来签订这些使用条款并履行您在本协议项下的所有义务。</li>
                    <li>您已通过所有必要行动正式有效地授权您进入这些使用条款，并且这些使用条款对您构成具有约束力和可执行的义务。</li>
                    <li>您参与和履行您在本协议项下的义务，不会也将不会与适用于您的任何法院、政府机构或监管机构的任何法律、法规、命令、判决或法令造成任何冲突或导致违反任何法律、法规、命令、判决或法令。</li>
                    <li>您将在一切方面遵守与您使用服务有关的所有适用于您的法律和法规。</li>
                    <li>您所提交给我们的所有信息和文件都是真实、准确、真实且不会以任何方式误导我们。</li>
                    <li>您的帐户只能由您自己使用，并且您不得允许任何其他人使用您的帐户或通过您的帐户使用服务。</li>
                    <li>您是存入、持有或与您的帐户相关联的所有电子资产的唯一合法和实益拥有人。</li>
                    <li>除非我们事先书面同意，否则您不会对您存入您账户或由我们持有或由我们持有的任何电子资产进行质押、担保或设置任何担保权益。</li>
                    <li>您之前并未因使用任何服务而被暂停或删除。</li>
                    <li>您不位于、成立或以其他方式成立、受其控制或任何受限司法管辖区的国民或居民，并且您对服务的使用不构成适用的违反法律。</li>
                    <li>仅当您 
                    <br>(a) 在高度波动的市场中具有知识和经验时；
                    <br>(b) 使用您可以承受损失的电子资产进行交易；
                    <br>(c) 具有较高的风险承受能力；才应使用服务。</li>
                    <li>您使用任何服务的风险自负。对于因您使用任何服务而造成的任何损害，我们概不负责。</li>
                    <li>您同意此处列出的以及我们可能不时在网站上通知您的其他条件。</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>知识产权
        <ol>
            <li>我们的知识产权。我们将保留我们所有知识产权的所有权利、所有权和利益。除本使用条款明确规定外，本使用条款未向您授予或默示与我们的知识产权有关的任何权利或义务。</li>
            <li>    无侵权。您不得侵犯我们或任何第三方的任何知识产权。本网站的所有内容和资料，包括但不限于此处的文本、图像和其他信息及其相关的一切，均受 KOML 的版权、商标和其他专有权利以及在适用的情况下相关的第三方供应商专有权利的保护。这意味着未经KOML明确书面同意，您不得将文本或图形分发给他人或用于任何非法或未经授权的目的；在您自己的服务器或文档中“镜像”或包含此信息；或修改或重新使用本系统上的文字或图形。 “Komoverse”, “Komodo Metaverse”和“komoverse.io”以及与“Komoverse”相关或显示在网站上的所有徽标是 KOML 和/或我们的许可方的商标或注册商标。未经我们事先书面许可，您不得复制、模仿或使用它们。</li>
        </ol>
    </li>
    <li>数据保护
        <ol>
            <li>您的同意。您在此同意根据我们的隐私政策收集、使用、披露、存储、保留、处理和传输所有您的个人数据（如您向我们披露的）。</li>
            <li>向我们披露。每次您向我们披露任何个人数据时，您都向我们声明并保证：
                <ol>
                    <li>相关个人已同意我们根据我们的隐私政策收集、使用、披露、存储、保留、处理和传输他们的个人数据；和</li>
                    <li>已获得适用法律（包括但不限于欧盟一般数据保护法规）要求的相关个人的所有必要同意和批准，以便我们可以收集、使用、披露、存储、保留、并根据我们的隐私政策处理和传输此类个人数据。</li>
                    <li>我们披露。如果任何税务机关或任何适用法律要求，我们可能会向该税务机关或其他相关机关披露您的帐户信息（包括您的身份和交易历史）。您在此同意所有此类披露。</li>
                </ol>
            </li>
        </ol>
    </li>
    <li>责任
        <ol>
            <li>无保证。服务是在“原样”、“在哪里”和“可用”的基础上提供的，不提供任何形式的保证。我们明确否认任何和所有保证（无论是明示的还是暗示的），包括但不限于对准确性、完整性、安全性、适销性、令人满意的质量、功能、特定用途的适用性、可用性、所有权、和非侵权等方面的保证。</li>
            <li>免责声明。在适用法律允许的最大范围内，我们明确否认（并且您明确免除我们）对以下各项的所有责任：
                <ol>
                    <li>服务中包含或通过服务访问的任何内容的真实性、准确性、充分性、完整性或合理性；</li>
                    <li>服务不间断或没有错误、丢失、损坏、攻击、病毒、干扰、黑客攻击或其他安全入侵；</li>
                    <li>在服务或网站出现任何不可用期间（例如但不限于在服务不可用期间市场条件和价格发生重大变化）后，您遭受的任何作为、不作为或损失；</li>
                    <li>您因使用或尝试使用服务或网站而遭受的任何作为、不作为或损失；</li>
                    <li>因我们依赖和/或采取行动的您帐户发出的任何指示而引起的任何作为、不作为或损失；</li>
                    <li>您错误提交的任何订单随后被执行、执行或匹配（全部或部分）；</li>
                    <li>由于您未能履行您在本协议项下的任何义务而造成的损失；</li>
                    <li>利润损失、预期储蓄损失、业务损失、机会损失、收入损失、时间损失、商誉损失或声誉损害、数据损失或损害，无论是直接的还是间接的，也没有任何惩罚性、间接的、后果性的或特殊的损失，无论是以何种方式造成以及是否可预见；</li>
                    <li>由于您未能获得并维持相关同意以使我们根据本协议项下的规定提供服务而违反适用的数据保护法而造成的损失；</li>
                    <li>数据、信息和记录的丢失（无论是什么原因造成的）和电脑故障；</li>
                    <li>非因我们的过错而由任何原因引起的损失（包括但不限于任何电脑或系统病毒干扰、破坏或任何其他可能干扰您的电脑系统、您的数据、信息和记录以及任何损失，无论是什么原因造成的）；和</li>
                    <li>因您与一名或多名服务用户之间的任何争议而产生或以任何方式与之相关的任何种类或性质的任何索赔、要求或损害（无论是实际的、间接的或其他的）。</li>
                </ol>
            </li>
            <li>网上交易免责声明。由于不可预测的网络交通拥堵和其他原因，互联网是一种天生不可靠的通信媒介，这种不可靠性超出了 KOML 的控制范围。您承认，由于此类不可靠性，订单、指令和其他信息的传输和接收可能会出现延迟，这可能会导致订单或指令的执行延迟和/或按价格执行订单或指令不同于下达命令或指示时的通行情况。您进一步承认并同意，任何沟通都存在误解或错误的风险，该等风险由您完全承担。您承认并同意在下订单后通常无法取消订单。</li>
            <li>没有专业建议。您承认并同意我们不提供任何投资、财务、会计、估值、税务、法律或其他专业建议。使用服务购买、出售或交易任何电子资产的所有决定均由您自行做出，您对所有此类决定负全部责任。</li>
            <li>税收。您有责任确定任何税款是否适用于您通过服务进行的任何交易以及在何种程度上适用，并向相应的税务机关代扣、收取、报告和汇缴正确的税款。</li>
            <li>协议和网络。我们不拥有或控制管理电子资产运营的电子资产网络的底层软件协议。您承认并同意： 
                <br>(a) 我们不对基础协议的运行负责； 
                <br>(b) 我们对其安全性、适销性、令人满意的质量、功能、特定用途的适用性、可用性、所有权、或不侵权不作任何陈述、保证、承诺或保证。</li>
            <li>责任限制。尽管这些使用条款有任何规定，我们因这些使用条款引起或与这些使用条款相关的最大总责任应限于 100 美元。</li>
            <li>赔款。您同意赔偿我们、我们的关联公司、我们（和我们的关联公司）的高级职员、董事、雇员和代理人（统称“受赔偿方”）免受任何和所有索赔、损害、损失、义务、缺陷、判决、裁决、要求、罚款、税收、费用、支出、成本、罚款和其他责任（包括但不限于与任何诉讼或程序有关的任何调查费用和法律费用和费用）任何由以下原因引起或与之相关的受偿方：
                <ol>
                    <li>您在本协议项下作出的任何陈述、保证、承诺或协议的任何失实陈述或违反；</li>
                    <li>由于您的任何作为或不作为而对任何知识产权的侵犯；</li>
                    <li>任何其他人违反本使用条款的任何规定，而该人能够通过您的帐户使用服务；和</li>
                    <li>由于您的任何作为或不作为而导致的任何违反适用数据保护法的行为。</li>
                </ol>
            </li>
            <li>交易暂停。我们可以出于任何原因（包括但不限于维持有序的市场或由于市场中断）自行决定停止任何服务和/或网站。我们特此声明，并且您不可撤销地免除我们对此类交易暂停导致的任何利润或损失（无论是实际的、索赔的或其他的）的责任。</li>
            <li>风险确认。您承认并同意：
                <ol>
                    <li>电子资产市场很新颖，可能不会继续增长；</li>
                    <li>在某些市场条件下，您可能会遇到困难或无法平仓；</li>
                    <li>交易、借贷、持有和/或以其他方式处理电子资产会带来极高的风险。特别是，电子资产可能全天不间断交易，价格变化可能没有限制。价格可能容易因不同司法管辖区的市场参与者或政府政策而出现重大波动；</li>
                    <li>在交易、借贷、持有和/或以其他方式处理电子资产时，可能会遭受或产生相当大的损失；</li>
                    <li>电子资产可能不受监管，在某些司法管辖区，电子资产的交易、借贷、持有和/或以其他方式处理可能被视为非法；</li>
                    <li>建议您在使用任何服务之前寻求并获得适当的法律、财务、税务、投资和其他专业建议；</li>
                    <li>建议您在使用任何服务之前寻求并获得适当的法律、财务、税务、投资和其他专业建议；</li>
                    <li>电子资产及其底层协议可能容易受到安全漏洞和政府政策的影响。您承认并同意，本协议中规定的与电子资产相关的风险并非详尽无遗，并且可能存在我们未列出或未预见的其他风险。您已仔细评估您的财务状况和风险承受能力，并确认您可以接受风险，也能够承受与此类交易相关的任何损失（包括但不限于适用的保证金要求和交易成本）。</li>
                </ol>
            </li>
            <li>独立限制。本第 11 条中的每项资格和限制均应独立于其他人进行解释，不受任何其他人的限制。</li>
            <li>生存。尽管这些使用条款终止或到期，本第 11 节的规定仍应继续有效并继续有效。</li>
        </ol>
    </li>
    <li>底层软件协议
        <ol>
            <li>没有责任。我们不拥有或控制管理我们平台上支持的电子资产操作的底层软件协议。底层协议通常是“开源的”，任何人都可以使用、复制、修改或分发它们。我们对底层协议的运行不承担任何责任，我们无法保证它们的功能、安全性或可用性。您承认并接受与您帐户中任何电子资产相关的底层软件协议可能发生变化的风险。</li>
            <li>分叉事件。底层软件协议会受到操作规则的突然变化（“分叉”）的影响，这样的分叉可能会对您帐户中电子资产的价值、功能和/或名称产生重大影响。你有责任让自己意识到并考虑如何处理即将到来的分叉。在特定情况下，我们可能会根据以下第 14.1 节向您提供有关分叉的通知或警报，您必须阅读由我们发送的此类通知或警报，以考虑如何处理任何此类的分叉。如果发生分叉，我们可能需要在未提前通知您的情况下暂时暂停与该分叉相关的操作。我们可以根据我们的合理判断拒绝支持分叉的一个或两个分支。您承认分叉带来的风险，并且您接受我们没有责任协助您移动或出售分叉协议中不受支持的分支。</li>
        </ol>
    </li>
    <li>变更和修改
        <ol>
            <li>对服务的更改。您承认并同意，我们可以不时修改、更改或撤回服务或网站的任何或部分信息，包括但不限于网站上提供的规格、描述和价格，而无需向您提供任何参考或通知。通过使用本网站，您同意受任何此类修订的约束，并且您同意定期访问此页面以确定您受约束的当前使用条款。</li>
            <li>对这些使用条款的修订。您承认并同意我们可能会不时更改这些使用条款中的条款，并在我们的网站上发布修订版。修改后的版本自公布的生效日期起生效，并将通过我们的网站或电子邮件通知您。如果您在通知期后继续使用我们的服务，则您将被视为已同意该修订版本中所做的修改。</li>
        </ol>
    </li>
    <li>一般
        <ol>
            <li>通知。
                <ol>
                    <li>我们根据这些使用条款（包括对这些使用条款的任何更改）提供的所有通知可以通过电子邮件、普通邮件、SMS、通过网站或服务或我们认为必要的其他方式发出。此类通知和通讯一经我们发送即视为已收到。</li>
                    <li>您根据这些使用条款发出的所有通知必须通过电子邮件（在发送时应视为已收到，除非您收到表明收件人不可用的自动回复）或预付邮资的方式发送至我们的注册办公地址（应视为在发布之日后的第七 (7) 个工作日收到）。</li>
                </ol>
            <li>不可抗力。对于由以下任何原因造成的本使用条款下的不充分履行，我们概不负责：
                <ol>
                    <li>超出我们合理控制范围的自然灾害、战争或恐怖主义行为、骚乱、劳动条件、政府行为以及互联网或能源中断或干扰等情况；或</li>
                    <li>任何网站故障或服务不可用。</li>
                </ol>
            </li>
            <li>链接到第三方网站。可以在网站上或通过您正使用服务提供指向其他第三方网站的链接，并且 KOML 对任何此类第三方网站不作任何陈述。您承认并同意  
                <br>(a) 此类链接不构成认可；
                <br>(b) 我们无法控制此类网站或其内容；
                <br>(c) 我们不对此类网站或任何此类内容的准确性或质量引起或与之相关的任何责任。您有责任采取预防措施，以确保您选择使用的任何物品都不含病毒、蠕虫、特洛伊木马和其他具有破坏性的物品。 KOML 对任何第三方产品不作任何陈述或保证。</li>
            <li>链接到本网站。除非事先得到 KOML 的同意，否则任何人不得制作指向本网站或本网站内任何附属页面的超链接，或构成本网站任何内容的超链接。在不损害其任何其他权利的情况下，KOML可在发现此类未经授权的链接或框架后，禁用此类链接或框架。</li>
            <li>提交信息。通过向 KOML 提供信息（如反馈、数据、答案、问题、评论、建议、计划或想法），您同意此类信息为非机密信息，并且 KOML 拥有无限的使用、分发、复制和在全球范围内披露 KOML 认为适当的此类信息，无需补偿或承认其来源。 KOML 可自由使用您通过本网站提供给 KOML 的信息中包含的任何想法、概念、技术或专有技术，包括但不限于开发、制造和营销，包含或以其他方式基于此类信息的产品或服务。</li>
            <li>抵销。
                <ol>
                    <li>在不影响我们任何可用的其他补救措施的情况下，我们有权随时在不通知您的情况下，抵销欠您的任何款项，无论是现在还是将来，实际或或有、已清算或未清算、主要或抵押、多个或联合。</li>
                    <li>若您的帐户中有任何负余额，我们保留从您的帐户中扣除必要数量的电子资产以抵销此类负余额的权利。</li>
                </ol>
            </li>
            <li>整个协议。这些使用条款，连同此处引用的所有文件，体现了您和我们之间就这些使用条款达成的所有条款和条件，并取代任何和所有先前的讨论、协议和承诺（如果有）您和我们之间就本协议的主题事项，无论是书面的还是口头的。</li>
            <li>双方的关系。本使用条款中的任何内容均不得解释为建立雇主与雇员、委托人与代理人、合伙企业或合资企业或任何其他信托关系的关系。</li>
            <li>没有第三方权利。除受偿方外，非本使用条款一方的人无权执行本使用条款的任何规定。</li>
            <li>变化。对这些使用条款的任何规定的任何变更都必须以书面形式由我们执行。</li>
            <li>可分割性。如果本使用条款的任何条款在任何司法管辖区全部或部分被认定为非法、无效或不可执行，则本使用条款对于该司法管辖区的其他条款仍然有效，以及该条款在任何其他司法管辖区的合法性、有效性和可执行性不受影响。</li>
            <li>没有弃权。我们延迟或未能行使或执行本使用条款项下的任何权利、权力或补救措施均不构成或作为对该权利、权力或补救措施或本使用条款项下的任何其他权利、权力或补救措施的放弃或运作以防止随后行使或执行任何此类权利、权力或补救措施。我们的任何弃权必须以书面形式明确作出声明并由我们签字才能生效。</li>
            <li>任务。您不得将您的任何权利、利益、许可和/或义务转让给其他人。我们可以随时将我们的任何权利、许可、利益和/或义务转让给任何人，包括作为合并、收购或其他公司重组的一部分。</li>
            <li>英语。尽管本使用条款有任何其他规定，但本使用条款或此处提及的其他文件或由我们通知的任何翻译仅是为了您的方便而提供的，可能无法准确地以英文原文表示信息。如有任何不一致之处，以英文版本使用条款、此处提及的其他文件或我们的通知为准。</li>
            <li>管辖法律。这些使用条款应受印度尼西亚法律管辖并按其执行。</li>
            <li>争议解决。由本使用条款引起或与之相关的任何争议、索赔、违反、终止或无效，均应提交新加坡国际仲裁中心（“SIAC”）根据印度尼西亚国际仲裁中心的仲裁规则（“IIAC 规则”），该规则被视为通过引用并入本条款。仲裁听证会的语言应为英语，仲裁地或法定地点应在印度尼西亚。任何仲裁裁决的判决都可以在对被作出裁决的一方（或一方的资产）具有管辖权的任何法院作出。</li>
        </ol>
    </li>
</ol>


@endif


                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
@endsection