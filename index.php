<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="normalize.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<body>
  <div class="page">
    <div class="text_container">
      <div class="toc">
        <h1>Table of Contents</h1>
        <ol>
          <li><a href="#blog">Writing</a></li>
        </ol>
        <h2>Projects</h2>
        <a href="#about">Objective</a>
        <ol>
          <li><a href="#proj1">Framed</a></li>
          <li><a href="#proj2">Growth</a></li>
          <li><a href="#proj3">Rhythm</a></li>
          <li><a href="#proj4">Fun and games</a></li>
          <li><a href="#proj5">Bleeding Ground</a></li>
          <li><a href="#proj6">Skeleton Key</a></li>
          <li><a href="#proj7">WebBlocks</a></li>
          <li><a href="#proj8">Write With Me</a></li>
          <li><a href="#proj9">Body of Knowledge</a></li>
          <li><a href="#proj10">It ain't easy being cheesy</a></li>
          <li><a href="#proj11">Morality</a></li>
          <li><a href="#proj12">What's Real?</a></li>
          <li><a href="#proj13">The First Painter</a></li>
        </ol>
      </div>
      <div id="writing">
        <h2>Writing</h2>
        <h3>Title</h3>
        <h4>2/5/2019</h4>
      </div>

      <div id="about">
        <h2>Objective</h2>
        <p>
          I have to finish and release one project every month. I will leave my
          notes, designs, and implementation details below. There won't be much structure, so good luck.
        </p>
      </div>

      <div id="proj1">
        <h2>1. Framed</h2>
        <h3>Premise: Build a screen/art frame that displays random pieces of high-res art.</h3>
        <p>I don't know how I'm going to deal with art having different shapes and sizes. How do you account for that
          when your physical screen is only so big?</p>
      </div>
      <div id="proj2">
        <h2>2. Personal Growth</h2>
        <h3>Premise: Build an Orange Pi/Raspberry Pi powered plant growth system. Automated watering, UV lights, and
          soil moisture monitoring. Grow plants with no effort.</h3>
        <p> I still need to buy a shelving unit to structure all this around.</p>
      </div>
      <div id="proj3">
        <h2>3. Rhythm</h2>
        <h3>Premise: Build a data visualization application. I pictured a row of dots that change shape/color every time
          an API/data is called. I wanted it to be something like the rhythm of the internet.</h3>
      </div>
      <div id="proj4">
        <h2>4. Fun and games</h2>
        <h3>Premise: Build a full fledged arcade emulator, with joystick and buttons, probably also built with an Orange
          Pi or Raspberry Pi. </h3>
      </div>
      <div id="proj5">
        <h2>5. Bleeding Ground</h2>
        <h3>Premise: A collaborative work with Ryan Eick. A dystopian monster future where the Earth has turned on it's
          inhabitants.</h3>
      </div>
      <div id="proj6">
        <h2>6. Skeleton Key</h2>
        <h3>Premise: An application framework based on Wes Bos's Advanced React course.</h3>
      </div>
      <div id="proj7">
        <h2>7. WebBlocks</h2>
        <h3>Premise: Physical wooden blocks resembling the UI pieces of the internet, allowing designers and developers
          to add physicality to their work.</h3>
      </div>
      <div id="proj8">
        <h2>8. Write With Me</h2>
        <h3>Premise: A collaborative writing tool with voting system. Users are chosen at random to submit the next line
          in the story, and the options are then voted on by the populous. Repeat. Potentially publish with proceeds
          going to charity.</h3>
      </div>
      <div id="proj9">
        <h2>9. Body of Knowledge.</h2>
        <h3>Premise:</h3>
        I will be building an application that scans ISBN codes, generates the
        titles of books scanned.
        <p>
          This is gonna be a sensitive topic. I want to build something
          interesting, and I'll have a head start using Skeleton Key. I'll use
          it as the base for this. The first piece I want is to be able to scan
          a barcode from an image, and return the ISBN. Then we need to look up
          the ISBN, and find the title. There's some other small bit's that
          we'll explore like how to send a server's traffic through VPN. Let's
          get started. I was tempted to call this project "Too much power for
          one man".
        </p>
        <p>We'll start by cloning our Skeleton Key Framework:</p>
        <code>git clone http://www.github.com/JakeCasey/skeleton-key-backend.git
        </code>
        <br />
        <br />
        <code>git clone http://www.github.com/JakeCasey/skeleton-key-frontend.git
        </code>
        <br />
        <br />
        <code>git clone http://www.github.com/JakeCasey/skeleton-key-prisma.git
        </code>
        <p>
          So we have a directory that has our whole application framework inside
          of it. All three pieces are separately deployed to our production
          servers and allow our application to function! The cool part is that
          with these three pieces I already have a fully functioning app!
        </p>
        <p>
          So something crazy happened just now. There's been a little time lapse here, so when I began working on BOK, I
          noticed that how the backend server was set up, it took a while. I had to run npm i, prisma init, copy files
          and overwrite files, and overall it would probably take like 45 minutes just to get everything where it needed
          to be.
          That's dumb. I hate dumb things. Especially if I plan on building a lot of software with Skeleton Key in the
          future, I needed to do that process faster. I want to be able to start on the meat of a project immediately.
          So I built a little bootstrapper!
          Simple: it runs npm i, prisma init, moves your new DB details from the prisma file created, and then
          overwrites it with how we have Skeleton Key set up.
          It's not terribly complicated, but all in all, you can set up your backend super quick fast.

          https://twitter.com/jakeacasey/status/1092954247761719297

          Neat, huh?

          I think so at least. After that short detour, we're ready to get rocking on our actual application!
          One thing I'm thinking of right now is I'm not 100% sure how to interface with the Postgres database that's
          running on my Dokku servers. I always get distracted! I'll have to make sure to come back to this.
          I wonder if I can automatically push local DB dumps to my Dokku server and vice versa... I'll have to look
          into this.
          Ok ok ok, no more DB shit.
          First I have to build something that either lets me take a picture of a barcode, or takes a photo upload of a
          barcode.
          Then I need to build a backend that searches another site, and filter and present those results to the user,
          and then the user can select a result, and the server takes care of the rest. I'm being deliberately vague for
          . . . reasons.
          Let's get started.
        </p>
        <p>
          Haha fuck. I built the whole thing without documenting any of it. Haha I suck. Ok. The overview:
          <li>I used <a href="https://serratus.github.io/quaggaJS/">Quagga.js</a></li>
          <li>A Google API for fetching data.</li>
          <li>Cheerio.js for scraping the pages provided by the fetched data.</li>
          <li>And some other stuff.</li>
        </p>
        <p>
          The original name for this app was Too Much Power For One Man. Instead of focusing on this application I want
          to draw a little attention to the time I saved with Skeleton Key.
          It worked almost exactly how I planned. Which is nuts.
          Maybe I'll release a little bit more about this project in the future, but for now it's gonna have to stay
          like this.
          There's also going to be a big ol' section about deploying this bad boy, too. Probably. Maybe. Whatever.
        </p>
      </div>
      <div id="proj10">
        <h2>10. It ain't easy being cheesy </h2>
        <h3>Premise: I will make some cheese. No really, I want to make my own cheese.</h3>
        <p>I've even already bought a wine cooler to keep a constant temperature. I still need to get it from my car to
          the apartment though.</p>
        <p>Things I still need to buy:</p>
        <li>Vacuum sealer</li>
        <li>Cheese form</li>
        <li>Flora danica</li>
        <li>Calcium chloride</li>
        <li>Vegetarian rennet</li>
        <li>Cheesecloth</li>
        <li>2 Gallon pot and a pot that will hold it.</li>
      </div>
      <div id="proj11">
        <h2>11. Morality</h2>
        <h3>Premise: A project in which a webcam is trained upon a plant, named Jim. Users can pay a small amount of
          money to either help or harm Jim. A study of human morality.</h3>
      </div>
      <div id="proj12">
        <h2>12. What's Real?</h2>
        <h3>Premise: I really want to build something with AR and Expo AR. Back into react-native I goooooooooo...</h3>
      </div>
      <div id="proj13">
        <h2>13. The First Painter</h2>
        <h3>Premise: I noticed a while ago that the google maps API can do some really cool stuff with colors and
          shading. I wanted to make something that agorithmically tried to find interesting geography shaded by the maps
          API. This would then be posted somewhere, maybe Instagram, as art created by a program.</h3>
      </div>
    </div>
  </div>
  </div>
</body>