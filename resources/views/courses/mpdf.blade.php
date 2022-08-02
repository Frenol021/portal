@extends('master')



     <h1>Mobile development</h1>

 <!-- <div class = "android">
   
    <img src="{{ URL('storage/images/android.jpg') }}" alt="" title="" width="250" height="200">
   
    </div>-->

    <h2><b>table of content</b></h2><hr>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3>1.introduction</h3>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <p>
                    Android is an open source and Linux-based Operating System for mobile devices such as
                    smartphones and tablet computers. Android was developed by the Open Handset Alliance, led by Google, and other companies.
                    Android offers a unified approach to application development for mobile devices which means
                    developers need to develop only for Android, and their applications should be able to run on different devices powered by Android.
                  </p>
                  <p>
                    The first beta version of the Android Software Development Kit (SDK) was released by Google
                    in 2007, whereas the first commercial version, Android 1.0, was released in September 2008.
                    On June 27, 2012, at the Google I/O conference, Google announced the next Android version,
                    4.1 Jelly Bean. Jelly Bean is an incremental update, with the primary aim of improving the
                    user interface, both in terms of functionality and performance.
                   </p>
                   <p>
                    Android applications are usually developed in the Java language using the Android Software Development Kit.
                    Once developed, Android applications can be packaged easily and sold out either through a store such as Google Play or the Amazon Appstore.
                   </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h3>2. ANDROID – ENVIRONMENT SETUP.</h3>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                You will be glad to know that you can start your Android application development on either of the following operating systems:<br>
                ->Microsoft Windows XP or later version.<br>
                ->Mac OS X 10.5.8 or later version with Intel chip.<br>
                ->Linux including GNU C Library 2.7 or later.
                </p>
                <h3><b>Step 1 - Setup Java Development Kit (JDK)</b></h3>
                <p>
                    You can download the latest version of Java JDK from Oracle's Java site: Java SE Downloads.
                    You will find instructions for installing JDK in downloaded files, follow the given instructions
                    to install and configure the setup. Finally, set PATH and JAVA_HOME environment variables
                    to refer to the directory that contains java and javac, typically java_install_dir/bin and
                    java_install_dir respectively.
                    If you are running Windows and have installed the JDK in C:\jdk1.6.0_15, you would have to
                    put the following line in your C:\autoexec.bat file.<br>
                    set PATH=C:\jdk1.6.0_15\bin;%PATH%<br>
                    set JAVA_HOME=C:\jdk1.6.0_15<br><br>
                    On Linux, if the SDK is installed in /usr/local/jdk1.6.0_15 and you use the C shell, you would put the following code into your .cshrc file.<br>
                    setenv PATH /usr/local/jdk1.6.0_15/bin:$PATH<br>
                    setenv JAVA_HOME /usr/local/jdk1.6.0_15<br><br>
                    Alternatively, if you use an Integrated Development Environment (IDE) Eclipse, then it will know automatically where you have installed your Java.
                </p>
                 <h3><b>Step 2 - Setup Android SDK</b></h3>
                <p>
                    You can download the latest version of Android SDK from Android’s official
                    website: http://developer.android.com/sdk/index.html. If you are installing SDK on Windows
                    machine, then you will find ainstaller_rXX-windows.exe, so just download and run this exe
                    which will launch Android SDK Tool Setup wizard to guide you throughout the installation, so
                    just follow the instructions carefully. Finally, you will have Android SDK Tools installed on your
                    machine.
                    If you are installing SDK either on Mac OS or Linux, check the instructions provided along
                    with the downloaded android-sdk_rXX-macosx.zip file for Mac OS and android-sdk_rXX-
                    linux.tgz file for Linux. This tutorial will consider that you are going to setup your environment
                    on Windows machine having Windows 7 operating system.
                    will list down total 7 packages to be installed, but we will suggest to de-select Documentation for Android SDK and Samples for SDK packages to reduce installation time.
                </p>
                <h3><b>Step 3 - Setup Eclipse IDE</b></h3>
                <p>
                All the examples in this tutorial have been written using Eclipse IDE. So we would suggest
                you should have latest version of Eclipse installed on your machine.To install Eclipse IDE,download the latest Eclipse binaries from
                http://www.eclipse.org/downloads/. Once you have downloaded the installation, unpack the binary distribution into a convenient location. For example in C:\eclipse on windows, or /usr/local/eclipse on Linux and finally set PATH variable appropriately.
                Eclipse can be started by executing the following commands on windows machine, or you can
                simply double click on eclipse.exe
                </p>
                 <h3><b>Step 4 - Setup Android Development Tools (ADT) Plugin</b></h3>
                 <p>
                    This step will help you in setting Android Development Tool plugin for Eclipse. Let's start with launching Eclipse and then, choose Help > Software Updates > Install New Software.
                    As soon as you will click OK button to add this location, Eclipse starts searching for the plug-in available
                    in the given location and finally lists down the found plugins.
                    Now select all the listed plug-ins using Select All button and click Next button which will
                    guide you ahead to install Android Development Tools and other required plugins.
                </p>
                <p>
                InDesign is used to do magazines, newspapers, bro-
                chures, and books Any designs that have multiple
                pages, even when those are viewed on the screen.
                </p>
                <h3><b>Step 5 - Create Android Virtual Device</b></h3>
                <p>
                    To test your Android applications you will need a virtual Android device. So before we start
                    writing our code, let us create an Android virtual device. Launch Android AVD Manager using
                    Eclipse menu options Window > AVD Manager> which will launch Android AVD Manager.
                    Use New button to create a new Android Virtual Device and enter the following information, before clicking Create AVD button.
                </p>
                <p>
                    If your AVD is created successfully it means your environment is ready for Android application
                    development. If you like, you can close this window using top-right cross button. Better you
                    re-start your machine and once you are done with this last step, you are ready to proceed for
                    your first Android example but before that we will see few more important concepts related to Android Application Development.
                </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>3. ANDROID – ARCHITECTURE</h3>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                    Android operating system is a stack of software components which is roughly divided into fivesections and four main layers
                </p>
                <h3><b>Linux kernel</b></h3>
                <p>
                    At the bottom of the layers is Linux - Linux 2.6 with approximately 115 patches. This provides basic system functionality like process management, memory management, device
                    management like camera, keypad, display etc. Also, the kernel handles all the things that Linux is really good at, such as networking and a vast array of device drivers, which take the
                    pain out of interfacing to peripheral hardware.
                </p>
                <h3><b>Libraries</b></h3>
                <p>
                    On top of Linux kernel there is a set of libraries including open-source Web browser engine WebKit, well known library libc, SQLite database which is a useful repository for storage and
                    sharing of application data, libraries to play and record audio and video, SSL libraries responsible for Internet security etc.
                </p>
                <h3><b>Android Runtime</b></h3>
                <p>
                    This is the third section of the architecture and available on the second layer from the bottom.
                    This section provides a key component called Dalvik Virtual Machine which is a kind of Java Virtual Machine specially designed and optimized for Android.
                    The Dalvik VM makes use of Linux core features like memory management and multi-threading, which is intrinsic in the Java language. The Dalvik VM enables every Android
                    application to run in its own process, with its own instance of the Dalvik virtual machine.
                    The Android runtime also provides a set of core libraries which enable Android application developers to write Android applications using standard Java programming language.
                <h3><b>Application Framework</b></h3>
                <p>
                    The Application Framework layer provides many higher-level services to applications in the
                    form of Java classes. Application developers are allowed to make use of these services in their applications.
                </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>4. ANDROID – HELLO WORLD EXAMPLE .</h3>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                    Let us start actual programming with Android Framework. Before you start writing your first example using Android SDK, you have to make sure that you have setup your Android
                    development environment properly as explained in Android - Environment Setup tutorial. We also assume, that you have a little bit working knowledge with Eclipse IDE.
                    So let us proceed to write a simple Android Application which will print "Hello World!".
                </p>
                <h3><b>Create Android Application</b></h3>
                <p>
                    The first step is to create a simple Android Application using Eclipse IDE. Follow the option
                    File -> New -> Project and finally select Android New Application wizard from the wizard
                    list. Now name your application as HelloWorld using the wizard window
                    Next, follow the instructions provided and keep all other entries as default till the final step. Once your project is created successfully,
                </p>
                <h3><b>Anatomy of Android Application</b></h3>
                <p>
                Before you run your app, you should be aware of a few directories and files in the Android project:
                </p>
                 <h3><b>The Manifest File</b></h3>
                 <p>
                    Whatever component you develop as a part of your application, you must declare all its
                    components in a manifest file called AndroidManifest.xml which resides at the root of the
                    application project directory. This file works as an interface between Android OS and your
                    application, so if you do not declare your component in this file, then it will not be considered by the OS.
                 </p>
                   <h3><b>The Strings File</b></h3>
                   <p>
                        The strings.xml file is located in the res/values folder and it contains all the text that your
                        application uses. For example, the names of buttons, labels, default text, and similar types of
                        strings go into this file. This file is responsible for their textual content. For example, a default string file
                   </p>
                </div>
            </div>
        </div>
      
        <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                      <h3>5. ANDROID – ORGANIZING & ACCESSING THE RESOURCES </h3>
                  </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                    There are many more items which you use to build a good Android application. Apart from
                    coding for the application, you take care of various other resources like static content that your code uses, such as bitmaps, colors, layout definitions, user interface strings, animation
                    instructions, and more. These resources are always maintained separately in various sub-directories under res/ directory of the project.
                  </p>
                  <h3><b>Organize Resources</b></h3>
                  <p>
                    You should place each type of resource in a specific subdirectory of project's res/directory.
                    The res/ directory contains all the resources in various sub-directories. Here we have an
                    image resource, two layout resources, and a string resource file. Following table gives a detail about the resource directories supported inside project res/ directory.
                  </p>
                   <h3><b>Alternative Resources</b></h3>
                   <p>
                        Your application should provide alternative resources to support specific device configurations.
                        For example, you should include alternative drawable resources (i.e. images) for different
                        screen resolution and alternative string resources for different languages. At runtime, Android
                        detects the current device configuration and loads the appropriate resources for your application.
                   </p>
                   <h3><b>Accessing Resources in Code</b></h3>
                   <p>
                        When your Android application is compiled, a R class gets generated, which contains resource
                        IDs for all the resources available in your res/ directory. You can use R class to access that resource using sub-directory and resource name or directly resource ID
                   </p>
                </div>
                </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    <h3>6. ANDROID – BROADCAST RECEIVERS</h3>
                </button>
            </h2>
            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                Unlike Illustrator, Photoshop uses a bitmap description of an image. This method is great for what we call continuous tone images—images that do not contain lines
                and ills, but instead gradations of tone and color. Photographs are a good example of continuous tone images. Many tools and techniques in Photoshop are derived
                from concepts long used in traditional photography and darkroom techniques.Because Photoshop’s basic method of drawing is completely diferent from Illustrator’s, the tools work in very
                diferent ways. Fortunately, however, many techniques learned in Illustrator still apply.
                </p>
                <h3><b>Pixels</b></h3>
                <p>
                  In your web browser, ind an image that you like Click and hold on it, then drag it to the desktop Now drag the icon for that image (the image ile) on the
                  desktop over the Photoshop icon to open it in Photoshop You could also open it in Photoshop by control-clicking the ile and choosing Photoshop
                  Exactly as you did in Illustrator, use the zoom tool to magnify the image many times You should see a couple of things First, the image is composed of
                  squares—these are called pixels Each pixel can be only one color (if they appear to contain more
                  than one color then it is an optical illusion called an adjacency efect) These pixels are the basic building blocks for an image, and all Photoshop (bitmap)images are composed entirely of these and nothing
                </p>
                <h3><b>New Document</b></h3>
                <p>
                  Close the image you have open in Photoshop and open a new document (File / New) Even though you will probably rarely open a blank image like this in-
                  stead of a photograph, a blank document will help us to see the basics of the application.
                  Unlike Illustrator, Photoshop has no page, only those little pixels that make up an image The more pixels there are in an image, the smaller they will look To
                  use an analogy presented earlier in this book, we need graph paper with very small squares (pixels),hence a lot of squares
                </p>
                <h3><b>Brush Tool & Options</b></h3>
                <p>
                Let’s treat Photoshop as a painting program for a little while Choose the irst brush tool (don't use the brush tool with the circle and arrow) Now look
                at the options panel, which is the horizontal ribbon over the top of the window Like Illustrator, this top ribbon changes according to the tool you have cho-
                sen, but unlike Illustrator, it is the only way to make some settings for the tool you have selected (in this case the paintbrush)
                Many of the options are the same for diferent tools,so let’s look at these in detail The most important options are in the second box on the left Clicking on
                this will give you a pop-up menu which allows you to change the size of your brush (let’s set it on 30 pixels), the hardness (or fuzziness) of your brush (set it
                somewhere near the middle), and the shape of your brush (leave it a circle)
                </p>

                </div>
            </div>
        </div>
      
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    <h3>7. ANDROID – INTENTS & FILTERS</h3>
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                Photoshop is a bottomless application. Because you can do multiple operations in sequence to get diferent effects, the true bounds of the program are as elusive as
                what one could do in a traditional photographic darkroom. In this chapter we will look at a few new things and look at others like layers in more depth.
                </p>
                <h3><b>The View & Filters</b></h3>
                <p>
                  Photoshop needs screen space Since we all don’t have multiple large monitors, we need to be able to maximize what we do have Pressing the ‘f’ key
                  cycles through diferent view modes to get rid of the clutter of the window frame so you can concentrate on what you are working on Combined with this is
                  the tab key, which toggles the panels on and of Now let's get some more screen space Go to the Window menu and select Application Frame to un-
                  check it This will put everything except your document to the edge of your screen, giving you more real estate
                  Now go to Preferences / Interface, and then uncheck 'Open Documents as Tabs' Tabs are wonderful ways of keeping documents in order, but in
                  Photoshop we often want to work with two images on the screen at once, so tabs are usually counter-productive If you make sure the option un-
                  der that (Enable Floating Document Window Docking) is checked you can still make two or more documents tabbed by dragging one document frame over
                  the other (until you get a blue frame), and release tabs by dragging the tab away from the document.
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
                      <h3>8. ANDROID – UI LAYOUTS</h3>
                  </button>
              </h2>
              <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                  Almost every well-designed advertisement, poster, lier(etcetera) is designed in Illustrator. But also, the majority of these use photographs or other illustrations done
                  in Photoshop. The real power of using these applications is using them together. In this chapter we will see how to correctly place Photoshop iles into your Illustrator designs.
                  Image sizing theory is a very important part of this chapter, but don’t worry if you just cannot understand it—there are step by step instructions to sizing images after the explanation.
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
                      <h3> 9. ANDROID – EVENT HANDLING </h3>
                  </button>
              </h2>
              <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                  Whenever you need to design communication that spans multiple pages, InDesign is the application to use. InDesign also excels in automatic typography controls,
                  so if your design contains a lot of body copy (like a resume), you should use it instead of Illustrator. InDesign excels at documents as short as newsletter or tri-folds
                  and as long as magazines and books. Although some Illustration can also be done in InDesign (as many of the illustrations in this book were), InDesign can get you
                  into trouble quickly if you rely on it too much for this. Some designers even use InDesign almost exclusively. If you do not need the design lexibility of Illustrator nor
                  the illustration capability this approach makes sense.
                  </p>
                  </div>
            </div>
          </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                      <h3> 10. ANDROID – STYLES & THEMES </h3>
                  </button>
              </h2>
              <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                  Whenever you need to design communication that spans multiple pages, InDesign is the application to use. InDesign also excels in automatic typography controls,
                  so if your design contains a lot of body copy (like a resume), you should use it instead of Illustrator. InDesign excels at documents as short as newsletter or tri-folds
                  and as long as magazines and books. Although some Illustration can also be done in InDesign (as many of the illustrations in this book were), InDesign can get you
                  into trouble quickly if you rely on it too much for this. Some designers even use InDesign almost exclusively. If you do not need the design lexibility of Illustrator nor
                  the illustration capability this approach makes sense.
                  </p>
                  </div>
            </div>
          </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingEleven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                      <h3> 11. ANDROID – CUSTOM COMPONENTS. </h3>
                  </button>
              </h2>
              <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                  Whenever you need to design communication that spans multiple pages, InDesign is the application to use. InDesign also excels in automatic typography controls,
                  so if your design contains a lot of body copy (like a resume), you should use it instead of Illustrator. InDesign excels at documents as short as newsletter or tri-folds
                  and as long as magazines and books. Although some Illustration can also be done in InDesign (as many of the illustrations in this book were), InDesign can get you
                  into trouble quickly if you rely on it too much for this. Some designers even use InDesign almost exclusively. If you do not need the design lexibility of Illustrator nor
                  the illustration capability this approach makes sense.
                  </p>
                  </div>
            </div>
          </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwelve">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                      <h3> 12. ANDROID – SENDING SMS. </h3>
                  </button>
              </h2>
              <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                  Whenever you need to design communication that spans multiple pages, InDesign is the application to use. InDesign also excels in automatic typography controls,
                  so if your design contains a lot of body copy (like a resume), you should use it instead of Illustrator. InDesign excels at documents as short as newsletter or tri-folds
                  and as long as magazines and books. Although some Illustration can also be done in InDesign (as many of the illustrations in this book were), InDesign can get you
                  into trouble quickly if you rely on it too much for this. Some designers even use InDesign almost exclusively. If you do not need the design lexibility of Illustrator nor
                  the illustration capability this approach makes sense.
                  </p>
                  </div>
            </div>
          </div>              
          
    </div>
