@extends('master')

@section('content')
    @extends('layouts.app')

    <h1>Adobe CC Design</h1>

    <div class="software">
     <!--   <img src="{{ URL('storage/images/Adobe.png') }}" alt="" title="" width="100" height="100">
        <img src="{{ URL('storage/images/illusrator.jpg') }}" alt="" title="" width="250" height="130">
        <img src="{{ URL('storage/images/photoshop.png') }}" alt="" title="" width="100" height="100">-->
    </div>

    <h2><b>table of content</b></h2>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h3>1.Introduction</h3>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>What is Software Development? It is a complex process to develop modern and professional
                        software today. This document tries to give a brief overview of Software Development. Normally
                        we use the terms System Engineering or Software Engineering.
                        System Engineering: The process of analyzing and designing an entire system, including the hardware and the software.
                    </p>
                    <p>
                    The main parts or phases in the software development process are:
                    <ul>
                    <li>Planning</li>
                    <li>Requirements Analysis</li>
                    <li>Design</li>
                    <li>Implementation</li>
                    <li>Testing</li>
                     <li>Testing</li>
                     <li>Deployment and Maintenance</li>
                    </ul>
                    There are different approaches (Software Development Processes) that deal with these phases,such as:
                    <ul>
                    <li>Waterfall model</li>
                    <li>V-model</li>
                    <li>Agile Software Development (such as Scrum, XP, etc.)</li>
                    <li>Spiral model</li>
                    <li>Rational Unified Process (RUP)</li>
                    </ul>
                    </p>
                    <p>
                        Software Development (also known as application development, software design, designing
                        software, software application development, enterprise application development, or platform
                        development) is the development of a software product.
                        Software Engineering (SE) is the application of a systematic, disciplined, quantifiable approach to
                        the development, operation, and maintenance of softw
                    </p>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h3>2. Software Development Process</h3>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <h3><b>Waterfall model</b></h3>
                    <p>
                        The Waterfall model [4] consists of the following phases:
                        <ul>
                        <li>Requirements specification (Requirements analysis)</li>
                        <li>Software design</li>
                        <li>Implementation and Integration</li>
                        <li>Testing (or Validation)</li>
                        <li>Deployment (or Installation)</li>
                        <li>Maintenance</li>
                        </ul>
                    </p>

                    <h3><b>V-model</b></h3>
                    <p>
                        The V-model [5] is derived from the more traditional Waterfall model.
                        The V-model is an extension of the waterfall model, but it’s using a more flexible approach.
                        “The V-Model reflects a project management view of software development and fits the needs of
                        project managers, accountants and lawyers rather than software developers or users.”
                    </p>
                    <h3><b>Agile Software Development</b></h3>
                    <p>
                        InDesign is the application you should use if you
                        have multiple pages to lay out or need very ine au-
                        tomatic control over typography Like Illustrator, it
                        is also a vector-based application, so things made
                        with it look good at any size Actually, InDesign is so
                        much like Illustrator that students will sometimes
                        open the wrong application and work in it for a while
                        before they realize it
                    </p>
                    <p>
                        InDesign is used to do magazines, newspapers, bro-
                        chures, and books Any designs that have multiple
                        pages, even when those are viewed on the screen.
                    </p>
                    <h3><b>All Together Now</b></h3>
                    <p>
                        In actual practice these three programs are used to-
                        gether much of the time So a book like this will be
                        done with InDesign, but the photographs (usually
                        screen-shot images in this case) are done in Photo-
                        shop and placed into InDesign, and the line illustra-
                        tions like the circle a few pages back are made in
                        Illustrator and likewise placed into InDesign
                    </p>
                    <p>
                        These are the exact same applications that are used
                        by designers working for the largest brands across
                        the world They are excellent tools that have devel-
                        oped into intuitive and lexible ways of communicat-
                        ing.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>3. Requirements Engineering</h3>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                        Before you start to implement a software system, you need to understand what the system is
                        intended to do. This intended functionality is the “Requirements”. The process of creating these
                        requirements is called Requirement Analysis or Requirement Engineering. It is the process of
                        understanding what you want and what you need in your software.
                        Requirements engineering (RE) refers to the process of formulating, documenting, and
                        maintaining software requirements.
                        The results of the Requirement Analysis or Requirement Engineering process is normally one or
                        more documents, called the Software Requirement Specification (shorted “SRS”).
                    </p>
                    <h3><b>User Requirements</b></h3>
                    <p>
                            User requirements are statements in natural language plus diagrams of the services the system
                            provides and its operational constraints. User requirements are written for customers.
                    </p>
                    <h3><b>System Requirements</b></h3>
                    <p>
                        System requirements is setting out detailed descriptions of the system’s functions, services and
                        operational constraints. They define what should be implemented so may be part of a contract
                        between client and contractor.
                    </p>
                    <h3><b>Functional Requirements</b></h3>
                    <p>
                        Functional Requirements are:
                        •Describe functionality or system services.
                        •Depend on the type of software, expected users and the type of system where the
                        software is used.
                    </p>
                    <h3><b>Non-Functional Requirements</b></h3>
                    <p>
                        Non-Functional Requirements are:
                        •These define system properties and constraints e.g. reliability, response time and storage
                        requirements. Constraints are I/O device capability, system representations, etc.
                        •Process requirements may also be specified using an IDE, programming language or
                        development method.
                        •Non-functional requirements may be more critical than functional requirements. If these
                        are not met, the system may be useless.
                    </p>
                    <h3><b>SRS</b></h3>
                    <p>
                    Software Requirements Specifications (SRS) are:
                    •The software requirements document is the official statement of what is required of the
                    system developers.
                    •Should include both a definition of user requirements and a specification of the system
                    requirements.
                    •It is NOT a design document. 
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>4. Software Implementation</h3>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                    The goal of most software engineering projects is to produce a working program.
                    The act of transforming the detailed design into a valid program in some programming language,
                    together with all its supporting activities is referred to as implementation.
                    </p>
                    <h3><b>Programming Style & Coding Guidelines</b></h3>
                    <p>
                        Almost all software development organizations have some sort of coding guidelines. These
                        guidelines usually specify issues such as naming, indentation, and commenting styles, etc.
                        It is strongly recommended that you be consistent in your notation to avoid confusion when
                        others are debugging or maintaining your code later. Especially in large software projects there
                        are usually some programming conventions. These conventions may seem to be of little value at
                        first, but they may become extremely helpful during the maintenance of the code.
                    </p>
                    <h3><b>Debugging</b></h3>
                    <p>
                        Debugging is about different techniques for finding and fixing bugs (errors that make your code
                        not work as expected) in your code.
                    </p>
                    <h3><b>Code Review</b></h3>
                    <p>
                        We all are human beings. You may do some mistakes irrespective of your experience in a
                        technology or module. If you just review your code by a second eye, those mistakes might have
                        caught at that time only. This way you can reduce the no. of bugs reported by the testers or end  users
                    </p>
                    <h3><b>Refactoring</b></h3>
                    <p>
                    Even when using best practices and making a conscious effort to produce high-quality software, it
                    is highly unlikely that you will consistently produce programs that cannot be improved.
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    <h3>5. Testing </h3>
                </button>
                </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                        Different people have come up with various definitions for Software Testing, but generally, the
                        goal with testing is:
                        <ul>
                        <li>To ensure that the software meets the agreed requirements and design</li>
                        <li>The application works as expected</li>
                        <li>The application doesn’t contain serious bugs</li>
                        <li>Meets its intended use as per user expectations</li>
                        </ul>
                    </p>
                    <h3><b>est Planning</b></h3>
                    <p>
                    Test planning involves scheduling and estimating the system testing process, establishing process
                    standards, and describing the tests that should be carried out. As well as helping managers
                    allocate resources and estimate testing schedules, test plans are intended for software engineers
                    involved in designing and carrying out system tests. They help technical staff get an overall picture
                    of the system tests and place their own work in this context.
                    </p>
                    <h3><b>Character Panel</b></h3>
                    <p>
                        The paragraph panel is most useful with area text (although you should see what it does using it
                        with point type) With a text box or a paragraph(s) selected, change the justiication of your
                        paragraphs
                        by clicking on one of the irst four boxes at the top of the panel Don't use the last three
                        boxes—these are for very special uses
                        The irst will make your text left justiied or aligned only on the left This is the most common way
                        to format text, and the main one used in formatting
                        this book The second box centers your type This makes the text very diicult to read, but every once
                        in a while it is suitable for short bits of text like song lyrics The third box is right justiied
                    </p>
                    <h3><b>Type on a Path</b></h3>
                    <p>
                        You may have noticed that there are other tools associated with the type tool The third tool down
                        isthe type on a path tool It does what the name implies
                        To use this tool, irst make a circle using the ellipse tool Now with the type on a path tool, move
                        the cursor over the top of the circle until it has a wavy dot-
                        ted line through it Click and start typing You should see that the type starts where you clicked and
                        fol-
                        lows the path of the circle You should also see that the circle itself is no longer visible—it is no
                        longer a circle, but a circular path This makes sense, since if
                        you wanted type on a circle, you would want to make another circle somewhat smaller so the type did
                        not sit directly on it
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    <h3>6. Deployment and Installation</h3>
                </button>
            </h2>
            <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                        Unlike Illustrator, Photoshop uses a bitmap description of an image. This method is great for what
                        we call continuous tone images—images that do not contain lines
                        and ills, but instead gradations of tone and color. Photographs are a good example of continuous
                        tone images. Many tools and techniques in Photoshop are derived
                        from concepts long used in traditional photography and darkroom techniques.Because Photoshop’s basic
                        method of drawing is completely diferent from Illustrator’s, the tools work in very
                        diferent ways. Fortunately, however, many techniques learned in Illustrator still apply.
                    </p>
                    <h3><b>Pixels</b></h3>
                    <p>
                        In your web browser, ind an image that you like Click and hold on it, then drag it to the desktop
                        Now drag the icon for that image (the image ile) on the
                        desktop over the Photoshop icon to open it in Photoshop You could also open it in Photoshop by
                        control-clicking the ile and choosing Photoshop
                        Exactly as you did in Illustrator, use the zoom tool to magnify the image many times You should see
                        a couple of things First, the image is composed of
                        squares—these are called pixels Each pixel can be only one color (if they appear to contain more
                        than one color then it is an optical illusion called an adjacency efect) These pixels are the basic
                        building blocks for an image, and all Photoshop (bitmap)images are composed entirely of these and
                        nothing
                    </p>
                    <h3><b>New Document</b></h3>
                    <p>
                        Close the image you have open in Photoshop and open a new document (File / New) Even though you will
                        probably rarely open a blank image like this in-
                        stead of a photograph, a blank document will help us to see the basics of the application.
                        Unlike Illustrator, Photoshop has no page, only those little pixels that make up an image The more
                        pixels there are in an image, the smaller they will look To
                        use an analogy presented earlier in this book, we need graph paper with very small squares
                        (pixels),hence a lot of squares
                    </p>
                    <h3><b>Brush Tool & Options</b></h3>
                    <p>
                        Let’s treat Photoshop as a painting program for a little while Choose the irst brush tool (don't use
                        the brush tool with the circle and arrow) Now look
                        at the options panel, which is the horizontal ribbon over the top of the window Like Illustrator,
                        this top ribbon changes according to the tool you have cho-
                        sen, but unlike Illustrator, it is the only way to make some settings for the tool you have selected
                        (in this case the paintbrush)
                        Many of the options are the same for diferent tools,so let’s look at these in detail The most
                        important options are in the second box on the left Clicking on
                        this will give you a pop-up menu which allows you to change the size of your brush (let’s set it on
                        30 pixels), the hardness (or fuzziness) of your brush (set it
                        somewhere near the middle), and the shape of your brush (leave it a circle)
                    </p>

                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    <h3>7. Project Documentation</h3>
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                        Photoshop is a bottomless application. Because you can do multiple operations in sequence to get
                        diferent effects, the true bounds of the program are as elusive as
                        what one could do in a traditional photographic darkroom. In this chapter we will look at a few new
                        things and look at others like layers in more depth.
                    </p>
                    <h3><b>The View & Filters</b></h3>
                    <p>
                        Photoshop needs screen space Since we all don’t have multiple large monitors, we need to be able to
                        maximize what we do have Pressing the ‘f’ key
                        cycles through diferent view modes to get rid of the clutter of the window frame so you can
                        concentrate on what you are working on Combined with this is
                        the tab key, which toggles the panels on and of Now let's get some more screen space Go to the
                        Window menu and select Application Frame to un-
                        check it This will put everything except your document to the edge of your screen, giving you more
                        real estate
                        Now go to Preferences / Interface, and then uncheck 'Open Documents as Tabs' Tabs are wonderful ways
                        of keeping documents in order, but in
                        Photoshop we often want to work with two images on the screen at once, so tabs are usually
                        counter-productive If you make sure the option un-
                        der that (Enable Floating Document Window Docking) is checked you can still make two or more
                        documents tabbed by dragging one document frame over
                        the other (until you get a blue frame), and release tabs by dragging the tab away from the document.
                    </p>
                    <h3><b>Quick Mask & Saving Selections</b></h3>
                    <p>
                        As stated before, making selections is very important in Photoshop Here is another way of selecting
                        that is very useful With an image open, make
                        a selection using any of the ways that we have covered Now click on the second to the last icon in
                        the tool panel Your image should now have a
                        red overlay where it is not selected and no overlay where it is selected The red is called a mask
                        and we are in the quick mask mode This mask is like a
                        paper mask you would use to block the paint when spray-painting.
                        Also notice that any colors you may have had in the tool panel’s color chips have now turned to
                        black and white With the brush tool ‘paint out’ some of
                        the selection, exchange colors (little double arrow or the ‘x’ key – remember?) and ‘paint in’ some
                        of the selection When you are inished, click again on the
                        quick mask tool to show the selection in marching ants again You will see your painting changed the
                        selection With quick mask you can easily modify a selection to get it just right
                    </p>
                    <h3><b>Fill and Stroke</b></h3>
                    <p>
                        Some things that are obvious in Illustrator are not as obvious in Photoshop Lets make a rectangle
                        the Photoshop way First drag out a selection in the
                        shape of a rectangle Now go to Edit / Stroke The resulting box is where you make a stroke around
                        your rectangle You have to experiment with how
                        many pixels translates to what width of stroke It
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>8. Software Maintenance</h3>
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                        Almost every well-designed advertisement, poster, lier(etcetera) is designed in Illustrator. But
                        also, the majority of these use photographs or other illustrations done
                        in Photoshop. The real power of using these applications is using them together. In this chapter we
                        will see how to correctly place Photoshop iles into your Illustrator designs.
                        Image sizing theory is a very important part of this chapter, but don’t worry if you just cannot
                        understand it—there are step by step instructions to sizing images after the explanation.
                    </p>
                    <p>
                        Before we place Photoshop images into Illustrator we must size them for print, since often times we
                        want to print the document Sizing images for print
                        is one of the most diicult concepts to master, but is extremely important if you want high-quality
                        images And you do Open any photograph in Photoshop and go to Im-
                        age / Image Size When we consider images for the screen, the size of pixels will always correspond
                        to the ‘pixels’ on the screen, so we are only concerned with the number of pixels
                    </p>
                    <h3><b>Sizing Images Theory</b></h3>
                    <p>
                        For printing, if the pixels are too large (another way of saying not enough pixels for the size of
                        the image), then they will be seen by the naked eye, and
                        the image will look bad So we want to make sure those pixels are small enough Adjusting the image
                        size in inches (or another dimension which is not pixels) is how we do that
                    </p>
                    <h3><b>Sizing Images in Use</b></h3>
                    <p>
                        The previous section hopefully gave you some in-sight into how image sizing works But, it is a
                        diicult subject for most people, so on the next few pages
                        are some steps you should follow (exactly!) to make sure your images are sized correctly Also
                        included is a review of sizing images for the screen, and you will
                        see that sizing images for InDesign is the same, so it is included also Finally, although you
                        probably won’t need it, the related subject of sizing to copy and
                        paste in Photoshop is also included You might want to bookmark these instructions They are repeated
                        as reference at the end of this book
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    <h3> 9. Software Platforms </h3>
                </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <p>
                        Whenever you need to design communication that spans multiple pages, InDesign is the application to
                        use. InDesign also excels in automatic typography controls,
                        so if your design contains a lot of body copy (like a resume), you should use it instead of
                        Illustrator. InDesign excels at documents as short as newsletter or tri-folds
                        and as long as magazines and books. Although some Illustration can also be done in InDesign (as many
                        of the illustrations in this book were), InDesign can get you
                        into trouble quickly if you rely on it too much for this. Some designers even use InDesign almost
                        exclusively. If you do not need the design lexibility of Illustrator nor
                        the illustration capability this approach makes sense.
                    </p>
                </div>
            </div>
        </div>

    </div>
@endsection
