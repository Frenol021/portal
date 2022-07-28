@extends('master')

@section('content')
    @extends('layouts.app')

    <h1>Adobe CC Design</h1>

   <div class = "cyber">
   
  <!-- <img src="{{ URL('storage/images/Adobe.png') }}" alt="" title="" width="100" height="100">
    <img src="{{ URL('storage/images/illusrator.jpg') }}" alt="" title="" width="250" height="130">
    <img src="{{ URL('storage/images/photoshop.png') }}" alt="" title="" width="100" height="100" >-->
    </div>

    <h2><b>table of content</b></h2>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3>1.INTRODUCTION TO CYBER SPACE</h3>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Internet is among the most important inventions of the 21st century which have affected our
                    life. Today internet have crosses every barrier and have changed the way we use to talk, play
                    games, work, shop, make friends, listen music, see movies, order food, pay bill, greet your
                    friend on his birthday/ anniversary, etc. You name it, and we have an app in place for that. It
                    has facilitated our life by making it comfortable. Gone are the days when we have to stand in
                    a long queue for paying our telephone and electricity bills. Now we can pay it at a click of a
                    button from our home or office. The technology have reached to an extent that we don‟t even
                    require a computer for using internet.
                  </p>
                    <h3><b>INTRODUCTION TO CYBER CRIME</b></h3> 
                  <p>
                    The internet was born around 1960‟s where its access was limited to few scientist, researchers
                    and the defence only. Internet user base have evolved expontinanlty. Initially the computer
                    crime was only confined to making a physical damage to the computer and related
                    infrastructure. Around 1980‟s the trend changed from causing the physical damaging to
                    computers to making a computer malfunction using a malicious code called virus. Till then
                    the effect was not so widespread beacouse internet was only comfined to defence setups, large
                    international companies and research communities.<br>
                    The term cyber crime is used to describe a unlawful activity in which computer or computing
                    devices such as smartphones, tablets, Personal Digital Assistants(PDAs), etc. which are stand
                    alone or a part of a network are used as a tool or/and target of criminal acitivity. It is often
                    ommited by the people of destructive and criminal mindset either for revenge, greed oradventure.
                   </p>
                   <h3><b>KINDS OF CYBER CRIME</b></h3> 
                   <p>
                    <ul>
                    <li>Cyber Stalking</li>
                    <li>Child Pornography</li>
                    <li>Forgery and Counterfeiting</li>
                    <li>Software Piracy and Crime related to IPRs</li>
                    <li>Cyber Terrorism</li>
                    <li>Phishing</li>
                    <li>Computer Vandalism</li>
                    <li>Computer Hacking</li>
                    </ul>
                   </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h3>2. CYBER SECURITY TECHNIQUES</h3>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                There are many cyber security techniques to combat the cyber security attacks. The next section discusses some of the popular techniques to counter the cyber attacks.
                </p>
                <h3><b>AUTHENTICATION</b></h3>
                <p>
                    It is a process of identifying an individual and ensuring that the individual is the same who
                    he/she claims to be. A typical method for authentication over internet is via username and
                    password. With the increase in the reported cases of cyber crime by identity theft over
                    internet, the organizations have made some additional arrangements for authentication like
                    One Time Password(OTP), as the name suggest it is a password which can be used one time
                    only and is sent to the user as an SMS or an email at the mobile number/email address that he
                    have specified during the registration process.
                    It is known as two-factor authentication
                    method and requires two type of evidence to authentication an individual to provide an extra
                    layer of security for authentication. Some other popular techniques for two-way
                    authentication are: biometric data, physical token, etc. which are used in conjunction with
                    username and password
                </p>
                <h3><b>ENCRYPTION</b></h3>
                <p>
                    It is a technique to convert the data in unreadable form before transmitting it over the internet.
                    Only the person who have the access to the key and convert it in the readable form and read it.
                    Formally encryption can be defined as a technique to lock the data by converting it to
                    complex codes using mathematical algorithms. The code is so complex that it even the most
                    powerful computer will take several years to break the code. This secure code can safely be
                    transmitted over internet to the destination. The receiver, after receiving the data can decode it
                    using the key. The decoding of the complex code to original text using key is known as
                    decryption. If the same key is used to lock and unlock the data, it is known as symmetric key encryption.
                </p>
                <h3><b>DIGITAL SIGNATURES</b></h3>
                <p>
                    It is a technique for validation of data. Validation is a process of certifying the content of a
                    document. The digital signatures not only validate the data but also used for authentication.
                    The digital signature is created by encrypting the data with the private key of the sender. The
                    encrypted data is attached along with the original message and sent over the internet to the
                    destination. The receiver can decrypt the signature with the public key of the sender. Now the
                    decrypted message is compared with the original message.
                </p>
                 <h3><b>ANTIVIRUS</b></h3>
                 <p>
                    There are verities of malicious programs like virus, worms, trojan horse, etc that are spread
                    over internet to compromise the security of a computer either to destroy data stored into the
                    computer or gain financial benefits by sniffing passwords etc. To prevent these malicious
                    codes to enter to your system, a special program called an anti-virus is used which is designed
                    to protect the system against virus. It not only prevents the malicious code to enter the system
                    but also detects and destroys the malicious code that is already installed into the system.
                </p>

                <h3><b>FIREWALL</b></h3>
                <p>
                    It is a hardware/software which acts as a shield between an organization‟s network and the
                    internet and protects it from the threats like virus, malware, hackers, etc. It can be used to
                    limit the persons who can have access to your network and send information to you.
                </p>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>3. COMPUTER FORENSICS</h3>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                    Cyber forensic is a branch of science which deals with tools and techniques for investigation
                    of digital data to find evidences against a crime which can be produced in the court of law. It
                    is a practice of preserving, extracting, analyzing and documenting evidance from digital
                    devices such as computers, digital storage media, smartphones, etc. so that they can be used to
                    make expert opinion in legal/administrative matters.
                </p>
                <h3><b>WHY SHOULD WE REPORT CYBER CRIME?</b></h3>
                <p>
                    Some of the companies do not report a cyber crime incident because they fear this will harm
                    their reputation amongst its shareholders. Some of the data are very sensitive and its
                    disclosure may impact their business negatively. But, the fact is until and unless a cyber crime
                    incident is reported, the cyber criminals will never be crabbed by the law enforcement
                    agencies. This will further worsen the conditions and encourage the criminals to repeat these
                    types of incidents with the same or the other organizations. So it is very important to identify
                    and prosecute them. This will help not only to identify the existing threats to the economy and
                    the infrastructure but also new threats are identified. Depending on the scope of a cyber crime,
                    the cyber crime should be reported to nearest cyber cell of your locality, state cyber cell,
                    central investigating agencies like CBI, IB or the international bodies like Interpol.
                </p>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>4. SOME RECENT CYBER SECURITY ATTACKS</h3>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                    The proliferation of Internet amongt the population is getting deep day-by-day. This not only
                    increase the scope of e-governance and e-commerce in the area of healthcare, banking, power
                    distribution, etc. but also expose these sectors to cyber threats like hacking, credential thefts,
                    data tempering, account hijacking, etc. According to a report,there were around 62,189 cyber
                    security incidents, originating mainly from Countries including US, Europe, Brazil, Turkey,
                    China, Pakistan, Bangladesh, Algeria and the UAE, in the period from Jan-May, 2014. Also,
                    aroung 10,000 Indian government sites were compromised in this period. India has a seroius
                    sortage of IT Security professional to deal with such treats in effective manner. According to
                    a report, India needs around one million cyber security professionals to deal with cyber
                    threats effectively.
                </p>
                <h3><b>SOME RECENT CYBER CRIME INCIDENTS</b></h3>
                <p>
                    Paypal, an international online money transfer service, which allows you to safely
                    transfer money through an Internet using various encryption techniques and provides
                    an alternative to other traditional payment methods like cheques, money orders, etc. It
                    have an active user base of over 100 million active users in 190 countries and
                    performs over 9 million payments daily. It is one of the popular medium of payment
                    over online auction sites like ebay etc. It is a convinient medium for trading
                    particularly of the buyers and sellers are from differnet countries and have different
                    currencies.
                </p>
                    In Australia, a website called MP3/WMA Land, which offers a large number of
                    pirated songs, music video clips for free download to its users. This resulted in heavy
                    financial losses to the artists and the producers of those songs. The complain was
                    loudeged by an organizations called Music Industry Piracy Investigations.
                    The owners of the website, Ng, Tran and Le, who were the students of Australian
                    University, were framed for Australia‟s largest copyright infrigement case(Urbas,2012).
                   </p>
                   <p>
                    Online degree fraud are very popular these days over internet where accredited online
                    degrees are offered by fake Universities (Gollin, 2003). These diploma mills offer to
                    turn your work experience into a degree in exchange of money. The transcripts are
                    also issued to the students on the basis of self evaluation. Its only when the students is
                    rejected on account of fake degree, he realize that he fell pray to online fraud.
                   </p>
                </div>
            </div>
        </div>
      
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                      <h3>5. CYBER SECURITY INITIATIVES IN INDIA </h3>
                  </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                    Shortage of trained cyber security workforce is of serious concern to India. In comparison to
                    China, US and Russia that have 125000, 91080 and 7300 trained cyber experts respectively;
                    India has merely 556 cyber experts deployed in various government agencies (Joshi, 2013).
                    India is considered an IT superpower that is a major exporter of software and hosts major
                    ITES-based outsourced businesses. Therefore, IT constitutes a major share of Indian
                    economy. Recently, European Union has picked holes in India‟s data security system and
                    suggested that a joint expert group be set up to propose ways on how the country should
                    tighten measures for qualifying as a data secure nation (Sen, 2013). Therefore, India needs
                    look seriously into upgrading its Information Security infrastructure and reframe cyber
                    policies to get data secure status from EU.
                  </p>
                  <h3><b>COUNTER CYBER SECURITY INTIATIVES IN INDIA</b></h3>
                  <p>
                    1. National Counter Terrorism Center(NCTC): After 26/11 attack in 2008, suddenly
                    the Indian government realized the importance of Counter terrorism initiatives and
                    proposed National Counter Terrorism Center(NCTC) to provide intelligence inputs to
                    the decision makers to plan for counter terrorist activities. The NCTC is supposed to
                    coordinate between various State and Central govt.
                  </p>
                   
                   <p>
                        Computer Emergency Response Team-India(CERT-In): The Indian Computer
                        Emergency Response Team was created in 2004 by Department of Information
                        Technology. The purpose of creating CERT-In was to respond to computer security
                        incidents, report on vulnerabilities and promote effective IT security practices
                        throughout the country and is also responsible for overseeing administration of the IT
                        act (CERT-In, 2014).
                   </p>
                  
                   <p>
                    National Critical Information Infrastructure Protection Centre (NCIPC) of
                    India: It is declared as a nodal agency for the protection of critical information
                    infrastructure of India and is responsible for all measures including R&D for
                    protection of critical information infrastructure.
                   </p>
                </div>
            </div>
          </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    <h3>6. GUIDELINES FOR SECURE PASSWORD, TWO STEP VERIFICATION AND USING FREE ANTIVIRUS</h3>
                </button>
            </h2>
            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <h3><b>GENERATING SECURE PASSWORD</b></h3>
                <h3><b>Guideline for setting secure Password</b></h3>
                <p>
                    Choosing the right password is something that many people find difficult, there are so many
                    things that require passwords these days that remembering them all can be a real problem.
                    Perhaps because of this a lot of people choose their passwords very badly. The simple tips
                    below are intended to assist you in choosing a good password.
                </p>
                <h3><b>USING PASSWORD MANAGER</b></h3>
                <p>
                    A password manager is software that helps a user to manage passwords and important
                    information so that it can be accessed any time and anywhere. An excellent password
                    manager helps to store information securely without compromising safety. All the passwords
                    are saved using some kind of encryption so that they become difficult for others to exploit.
                </p>
                <h3><b>ENABLING TWO-STEP VERIFICATION</b></h3>
                <p>
                    Every day, tens of thousands of personal accounts are hacked. Personal information is
                    compromised, passwords are cracked, and lives are put in jeopardy. If you ever use one
                    password for multiple accounts, you are exponentially increasing your vulnerability to being
                    hacked. Thankfully, Google has launched its 2-step verification system: anytime an unknown
                    device is used to sign into your Google account, the user has to provide a verification code in
                    addition to the password. So it's not enough for hackers to just get your password; they'll also
                    need physical control of your phone or computer to access your account.
                </p>
                <h3><b>SECURING COMPUTER USING FREE ANTIVIRUS</b></h3>
                <p>
                    As computers become more and more integrated in to our lives, we end up leaving many
                    sensitive data on our computer-from passwords, official email id, bank account to personal
                    notes, business plans and other confidential information. So, good security software is a must
                    for everyone.
                </p>

                </div>
            </div>
        </div>
      
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    <h3>7. CONFIGURING FIREWALL ON MAC COMPUTER</h3>
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                    Every time you request information from the Internet, such as a web page or email message,
                    your Mac sends data packets to request the information. Servers receive the packets, and then
                    send other packets back to your Mac. This all happens in a matter of seconds. Once your Mac
                    has reassembled the packets, you'll see something, like an email message or web page.
                </p>
                <h3><b>WORKING WITH WINDOWS FIREWALL IN WINDOWS7</b></h3>
                <p>
                    Windows 7 comes with two firewalls that work together. One is the Windows Firewall, and
                    the other is Windows Firewall with Advanced Security (WFAS). The main difference
                    between them is the complexity of the rules configuration. Windows Firewall uses simple
                    rules that directly relate to a program or a service. The rules in WFAS can be configured
                    based on protocols, ports, addresses and authentication. By default, both firewalls come with
                    predefined set of rules that allow us to utilize network resources. This includes things like
                    browsing the web, receiving e-mails, etc. Other standard firewall exceptions are File and Printer.

                </p>
                 <h3><b>Quick Mask & Saving Selections</b></h3>
                 <p>
                 As stated before, making selections is very important in Photoshop Here is another way of selecting that is very useful With an image open, make
                  a selection using any of the ways that we have covered Now click on the second to the last icon in the tool panel Your image should now have a
                  red overlay where it is not selected and no overlay where it is selected The red is called a mask and we are in the quick mask mode This mask is like a
                  paper mask you would use to block the paint when spray-painting.
                  Also notice that any colors you may have had in the tool panel’s color chips have now turned to black and white With the brush tool ‘paint out’ some of
                  the selection, exchange colors (little double arrow or the ‘x’ key – remember?) and ‘paint in’ some of the selection When you are inished, click again on the
                  quick mask tool to show the selection in marching ants again You will see your painting changed the selection With quick mask you can easily modify a selection to get it just right
                 </p>
                 <h3><b>Fill and Stroke</b></h3>
                 <p>
                 Some things that are obvious in Illustrator are not as obvious in Photoshop Lets make a rectangle the Photoshop way First drag out a selection in the
                shape of a rectangle Now go to Edit / Stroke The resulting box is where you make a stroke around your rectangle You have to experiment with how
                many pixels translates to what width of stroke It
                 </p>
                </div>
            </div>
        </div>
    
          <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                      <h3>8. CHOOSING BEST BROWSER TO SUIT YOUR REQUIREMENTS</h3>
                  </button>
              </h2>
              <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                    Browsers are the key to the Internet these days, at least for most tasks. There are many, many
                    browsers for every platform and operating system, so the choice can be tough. However, this
                    should help narrow the search.
                  </p>
                  <p>
                  Before we place Photoshop images into Illustrator we must size them for print, since often times we want to print the document Sizing images for print
                  is one of the most diicult concepts to master, but is extremely important if you want high-quality images And you do Open any photograph in Photoshop and go to Im-
                  age / Image Size When we consider images for the screen, the size of pixels will always correspond to the ‘pixels’ on the screen, so we are only concerned with the number of pixels
                  </p>
                   <h3><b>Sizing Images Theory</b></h3>
                  <p>
                  For printing, if the pixels are too large (another way of saying not enough pixels for the size of the image), then they will be seen by the naked eye, and
                  the image will look bad So we want to make sure those pixels are small enough Adjusting the image size in inches (or another dimension which is not pixels) is how we do that
                  </p>
                  <h3><b>Sizing Images in Use</b></h3>
                  <p>
                  The previous section hopefully gave you some in-sight into how image sizing works But, it is a diicult subject for most people, so on the next few pages
                  are some steps you should follow (exactly!) to make sure your images are sized correctly Also included is a review of sizing images for the screen, and you will
                  see that sizing images for InDesign is the same, so it is included also Finally, although you probably won’t need it, the related subject of sizing to copy and
                  paste in Photoshop is also included You might want to bookmark these instructions They are repeated as reference at the end of this book
                  </p>
                  </div>
            </div>
          </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                      <h3> 9. GUIDELINES FOR SAFE INTERNET BROWSING</h3>
                  </button>
              </h2>
              <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                    Internet security is a matter of great concern for internet users. It is important to know if a
                    website is secure or not while surfing the internet19. A secure website creates a safe
                    connection between the website and the web browser so that entered data, such as personal
                    information, credit card details, banking information, etc, is not accessible to unauthorized
                    entities. When the browser opens a secured connection, "https" can be seen in the URL
                    instead of just http.
                  </p>
                   <h3><b>How do I know if a website is secure?</b></h3> 
                   <p>
                   </p>
                     Some web sites use a secure connection between the web site and your browser. This may be
                        important to you, for instance, if you want to pay online for a product or a service and have to
                        enter credit card information or other personal information. To know if your browser is
                        viewing a secure web site, you can look in the lower right part of the window. There is a
                        small box in the frame of the window to the left of the area that describes which zone you are
                        in (usually the Internet zone, with a globe icon). If you see a yellow padlock icon, the web site
                        you are viewing is a "secure web site." If the box is empty, the web site does not have a
                        secure connection with your browser
                  </div>
            </div>
          </div>
          
    </div>
    
    
@endsection
