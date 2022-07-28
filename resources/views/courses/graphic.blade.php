@extends('master')

@section('content')
    @extends('layouts.app')

    <h1>Adobe CC Design</h1>

   <div class = "graphic">
   <img src="{{ URL('storage/images/Adobe.png') }}" alt="" title="" width="100" height="100">
    <img src="{{ URL('storage/images/illusrator.jpg') }}" alt="" title="" width="250" height="130">
    <img src="{{ URL('storage/images/photoshop.png') }}" alt="" title="" width="100" height="100" >
    </div>

    <h2><b>table of content</b></h2>

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
                <div class="accordion-body"><p>This book is made for students who would like to learn the basics of the three primary Adobe design applications</p>
                  <p>The way the book does this is by introducing and ex-
                      plaining the applications in a logical way that builds
                      upon what is previously learned These applications
                      present a bewildering array of buttons and gadgets
                      that are overwhelming to the new user This book
                      makes sense of it all, not showing how everything
                      works, but instead giving a foundation and a path to
                      learn about all those bewildering buttons and gad-
                      gets
                  </p>
                  <p>
                    The steps in this book look a bit like tutorials Like
                      with tutorials, you should work in the applications
                      as you follow along with the reading, even when not
                      speciically instructed to do so Unlike tutorials, the
                      steps in this book present the information in a way
                      that is geared to having you actually learn the ma-
                      terial, not just a list of steps to get something that
                      looks decent
                   </p>
                   
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    <h3>2. The application</h3>
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><h3><b>Adobe Illustrator</b></h3>
                <p>
                  Illustrator is for designs You see things done with
                  the application every day Logos Magazine and
                  newspaper advertisements (on the web or on pa-
                  per) Charts and graphs done by designers Instruc-
                  tions for everything and anything Signs Many
                  things in this book The list goes on
                </p>
                <p>
                Illustrator is the application you want to use when-
                ever you have some design challenges or want
                something that looks just right Its language is vec-
                tor drawing, so anything you make in it will retain its
                quality at any size Go ahead and open up Illustrator,
                go to File / New, and igure out how to draw a circle
                (click and hold down on rectangle tool to ind the
                circle tool) or some other shape Then with the mag-
                nifying glass, zoom in repeatedly See? No change in
                quality no matter how much you enlarge it
                </p>
                <h3><b>Adobe Photoshop</b></h3>
                <p>
                Photoshop is a bitmap application, meaning it is
                good for things like Aunt Judy, or just about anything
                with continuous ranges of tones like photographs
                Photoshop uses the graph paper-like way of drawing,
                which means that unless the squares of the graph
                paper you happen to be using are not small enough,
                those squares (pixels) are going to be visible to the
                naked eye
                </p>
                 <h3><b>Adobe InDesign</b></h3>
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
                    <h3>3. illustrator basic</h3>
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                This chapter introduces the Illustrator workspace and leads you through the making of simple shapes. There is a lot of information, but none of it should be particularly diicult.
                Please learn it well. Just about everything from this chapter will be used in future chapters. For example: In this chapter, the concept of using the shift key to keep things in proportion or lined-up is covered. 
                The shift key is used across most tools and throughout Illustrator, Photoshop, and InDesign for very much the same thing. If you miss it in the irst chapter, you will ind life
                diicult in subsequent chapters. If you are new to Illustrator it might be good to work through this chapter more than once. Most of the information is very much like that shift key.
                </p>
                <h3><b>The Workspace</b></h3>
                <p>
                Like all the applications we will be working with, Illustrator uses diferent areas of the workspace for diferent things Go ahead and open Illustrator, then make a new document by going to File / New.
                At the very top of the screen is the menu bar Just like in any application, this is where the primary controls are Let’s use a menu item now to standardize the way your screen looks with the one used in this 
                book Go to Window / Workspace / Web (whenever you see this way of stating directions in this book it means you go to the menu bar at the very top of the screen) What this does is set up the ‘workspace’ for
                working on the web But we don’t actually want to do this, so go back to the window and go to Window /Workspace / Essentials Notice how all of the things on the screen change
                </p>
                <p>
                On the left of the screen is a ribbon of tools This is a loating panel, and you can drag it wherever you want by clicking and dragging (while holding down
                the mouse button) on the middle of the very top of it Also see what happens if you double-click on the top of it Drag the panel around and click on the x at
                the top right of the panel Oops, if you did it right, you just made the tools disappear Bring them back by going to Window / Tools (the eighth item in the
                menu) A check mark next to the menu item indicates it is showing on your screen If you really mess things up, or ever want to get to the default set of
                panels, just go to Window / Workspace / Reset Essentials
                </p>
                <p>
                The ribbon on the right side of the screen represents other panels These are individual boxes that govern how things work in the application To see their
                names, put your cursor on the left side border of the icon strip and drag to pull them out Click on a few to get an idea of how they work If you close any, or
                want to bring up more, go to Window menu again and see the list of panels you can work with Don’t let the shear number overwhelm you You don’t need
                to use all of them, especially now Panels can be nested within each other, they can be collapsed or expanded, and they can connect with each other by
                stacking But don’t worry to much about that until later when you want to have everything you are using most very handy
                </p>
                <h3><b>A New Document</b></h3>
                <p>
                Close the window you were working on and let's learn more about a document Go to New / Document, and take a quick look at the requester box that
                shows up Make sure you have a letter-sized sheet selected and the units are in a measurement system you are familiar with You will probably want touse inches
                </p>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    <h3>4. illustrator path</h3>
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <p>
                One of the most important but puzzling things to learn in Illustrator is the making and editing of vector shapes. These are the shapes that are native to Illustrator, but
                they are also used in many other applications, from presentation software to CAD software (as well as in Photoshop and InDesign). They are used for logos, simple
                drawings, technical drawings, and many other things.They can be enlarged or reduced ininitely with no loss of quality. They take very little disk space and remain
                able to be modiied. If you learn how to deal with these shapes efectively you will be rewarded many times over in the future.
                </p>
                <h3><b>Corner & Smooth Anchor Points</b></h3>
                <p>
                Vector shapes are drawings that are deined by points and lines connecting these points You already made some early in the last chapter by drawing a line with the pen tool You deined the location
                of the start of a line by clicking, and then deined the location of the end of a line by clicking again Using the stroke and ill panels you then told Illustrator what size and color to make the line
                The points that you made by clicking with the pen tool are called corner anchor points Lines coming from these points are straight There is one other type of line called a smooth anchor point Lines
                coming from these points come out at a curve To make one of these, irst make a corner anchor pointby clicking with the pen tool, then instead of clicking
                where you want the line to go, click and drag a bitbefore you let go of the mouse button.
                </p>
                <h3><b>Rulers & Guides</b></h3>
                <p>
                Rulers are a crucial part of any design application. All designs are inalized by the eye, but irst organized by dimensions How else would you ind the
                center of your page for example? To bring out rulers in Illustrator, go to View / Rulers / Show Rulers The rulers will show up on the top and left side of your
                window and will be in whatever units you have set in Illustrator / Preferences / Units The rulers start from the upper left of the document, but you can change the origin by dragging the little square where
                the rulers meet (very subtle!) to anywhere in the document You can reset the zero point of the rulers by double-clicking on that little square
                </p>
                 <h3><b>Scaling & Rotating Objects</b></h3>
                 <p>
                 After you make a shape in Illustrator, you will probably want to change the size of it One of the really cool things about vector drawing is that no matter how large or small you make something its quality
                  and level of detail will remain the same. The irst way of scaling is the most direct First go to View / Show or Hide Bounding Box to make sure the
                  bounding box is showing If it is showing the menu item will read ‘Hide Bounding Box’ If you have been paying close attention you may wonder why Illus-
                  trator doesn’t use the check-mark convention for this menu item as it does in most of the other menu items in this menu!
                 </p>
                   <h3><b>Connecting Lines</b></h3>
                   <p>
                   We now need to connect the two parts of the heart Zoom in on the bottom two points, and with the pen tool, put your mouse cursor over one of the ends
                    The cursor will show a forward slash next to it when you are ready to continue the line (which we are going to do) Click, then move the cursor to the end
                    of the other line Now the cursor shows a small box with a line behind it This means that clicking will join two lines Click to join the lines Now we have
                    two points, where we should have one, but that is not a problem With the pen tool or the delete anchor point tool click to delete one of the points.
                   </p>
                </div>
            </div>
        </div>
      
               <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                      <h3>5. illustrator type </h3>
                  </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                  data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                  <p>
                  So far we have been examining the drawing tools in Illustrator, but type control is perhaps the most lexible and powerful aspect of the application. In this chapter
                  we will examine some of the type controls in the application, because, after all, it would be unusual to complete a design without using those ubiquitous symbols we call letters.
                  </p>
                  <h3><b>Two Ways to Make Type</b></h3>
                  <p>
                  Make sure that the bounding box is on by going to View/Show Bounding Box (if it reads Hide Bounding Box, do not select it) Now with the selection tool drag the corners of the completed type box (type
                  area in Illustrator terminology) around The type will move and reformat according to the dimensions of the box This way of entering text into Illustrator is
                  called area type It is the best way to enter text that will need to low within the type area We call longer sections of type and paragraphs body or paragraph copy If the type extends past the text
                  area you will get a small red box with a ‘+’ in it which signiies that the box has more text than is shown
                  </p>
                   <h3><b>Character Panel</b></h3>
                   <p>
                   The paragraph panel is most useful with area text  (although you should see what it does using it with point type) With a text box or a paragraph(s) selected, change the justiication of your paragraphs
                   by clicking on one of the irst four boxes at the top of the panel Don't use the last three boxes—these are for very special uses
                   The irst will make your text left justiied or aligned only on the left This is the most common way to format text, and the main one used in formatting
                  this book The second box centers your type This makes the text very diicult to read, but every once in a while it is suitable for short bits of text like song lyrics The third box is right justiied
                   </p>
                   <h3><b>Type on a Path</b></h3>
                   <p>
                   You may have noticed that there are other tools associated with the type tool The third tool down isthe type on a path tool It does what the name implies
                    To use this tool, irst make a circle using the ellipse tool Now with the type on a path tool, move the cursor over the top of the circle until it has a wavy dot-
                    ted line through it Click and start typing You should see that the type starts where you clicked and fol-
                    lows the path of the circle You should also see that the circle itself is no longer visible—it is no longer a circle, but a circular path This makes sense, since if
                    you wanted type on a circle, you would want to make another circle somewhat smaller so the type did not sit directly on it
                   </p>
                </div>
            </div>
          </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    <h3>6. photoshop basics</h3>
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
                    <h3>7. photoshop layers</h3>
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
                      <h3>8. images to illustrator</h3>
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
                      <h3> 9. Design </h3>
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
          
    </div>
    
    
@endsection
