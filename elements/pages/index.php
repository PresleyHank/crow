<div class="fullwidth sticky">
  <div class="nest clearfix">
    <div class="pull-right hide-smartphone">
      <ul class="inline social-shares">
        <li>
          <iframe src="https://ghbtns.com/github-btn.html?user=kkortes&repo=crow&type=star&count=true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
        </li>
        <li>
          <!-- Place this tag where you want the +1 button to render. -->
          <div class="g-plusone" data-size="medium" data-href="http://getcrow.eu"></div>
        </li>
        <li>
          <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://getcrow.eu" data-via="kortekim" data-hashtags="crow">Tweet</a>
        </li>
        <li>
          <div class="fb-like" data-href="http://getcrow.eu" data-width="50" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        </li>
    </div>
    <div class="pull-left">
      <ul class="inline">
        <li>
          <a href="#features" scroll-link>Features</a>
        </li>
        <li>
          <a href="#setup" scroll-link><span style="color: yellow;">New!</span> Flexcrow</a>
        </li>
        <li>
          <a href="#usage" scroll-link>Usage</a>
        </li>
        <li>
          <a href="#tips" scroll-link>Tips</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<div id="features" class="fullwidth">
  <div class="nest">
    <div class="spacer half"></div>
    <h2>Features</h2>
    <div class="spacer quarter"></div>
    <p class="lead">
      Crow essentially stands for column-row.<br /> It's mainly a smart grid framework, but I'd like you to think of it as a smart layout tool.
    </p>
    <div class="spacer half"></div>
    <div class="crow up">
      <div class="ws-12">
        <ul class="inline crow up">
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-ghost"></span>
            </div>
            <p>No tables, no absolute positioning, no floats and no clearfix'es. <br />No flexbox (unless <a href="#setup" scroll-link>wanted</a>)
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-wand"></span>
            </div>
            <p>Adding class ".fly" automatically sets the width of child elements.
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-responsive"></span>
            </div>
            <p>Works in all modern browsers, smartphones, tablets and IE8+.<br />IE11+ if <a href="#setup" scroll-link>flexcrow</a> is used.
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-target"></span>
            </div>
            <p>Smart center-center alignment (if desired)
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-cog"></span>
            </div>
            <p>Responsive and configurable
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-bulb"></span>
            </div>
            <p>Endless possibilities – grids, sliders, dot-navigation, side-by-side blocks, center-center'ing
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="setup" class="fullwidth">
  <div class="nest">
    <div class="drop crow">
      <span class="icon icon-crow"></span>
    </div>

    <div class="spacer half"></div>
    <h2>Use with flexbox</h2>
    <div class="spacer quarter"></div>
    <p class="lead relative" style="text-align: left;">
      I think we all love flexbox when it comes to layouts. I know I do. However back in 2013 (when the first version of crow was made) flexbox wasn't really a thing. Flexbox is not 100% ready for the world yet, unless you build websites/webapps only targeting the newest version of things. According to <a href="http://canisuse.com/#search=flexbox">caniuse.com</a> flexbox is only supported in IE11+.<br /><br />
      When I created crow I did so to tackle a whole bunch of problems that comes with a traditional grid framework. Today crow runs on production environments on over 20 websites with great success.<br /><br />
      <strong>I'm happy to announce <span style="color: #23abca;">Flexcrow</span></strong><br />
      Oh jeez.. Another hacky-tacky thing? <br />No! Flexcrow is just crow, built with flexbox. Simple as that.<br /><br />

      <strong>Why not use barebone flexbox without crow?</strong><br /> Well you can do that, but when you detect that the website you are building are supposed to work in IE9 or Android Browser 4.2 you will be in big trouble. Using flexcrow you can revert back to the old way crow does things in less than 1 second.<br /><br />
      <strong>Ok. But how do I use it?</strong><br />
      Easy. Crow comes as either Less, Sass or Stylus. In the crow/.less/.scss/.styl file you will find a row where it says "crowify()". Change that to "flex-crowify()" and you are done.<br /><br />
      <strong>Nice! It works like a charm, but am I locked down to crow's way of doing things now?</strong><br />
      Of course not. There's no rocket sience here, just regular flexbox declarations with some preset values. Change anything you like. What's even cooler is that flexcrow allows you to do things regular crow wouldn't, like:
      <div class="spacer quarter"></div>
      <code class="language-javascript relative">
  .crow {
    > div:nth-child(2) {
      order: 3;
    }
    > div:nth-child(4) {
      align-self: stretch;
    }
  }</code>
    </p>
    <!--<div class="spacer half"></div>

    <div class="button-height">
      <a href="?download=crow-3.0/crow.min.css" class="button blue">
        <span class="icon icon-cloud"></span> <span style="vertical-align: top;margin-top: -2px;display:inline-block;">Download (minified)</span>
      </a>
    </div>-->

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>
  </div>
</div>

<div id="usage" class="fullwidth">
  <div class="nest">
    <div class="spacer half"></div>
    <h2>Usage</h2>
    <div class="spacer quarter"></div>
    <div class="spacer half"></div>

    <?=$app->get('parts/examples')?>
  </div>
</div>

<div id="tips" class="fullwidth">
  <div class="nest">
    <div class="drop crow">
      <span class="icon icon-crow"></span>
    </div>

    <div class="spacer half"></div>
    <h2>Tips & things to know</h2>
    <div class="spacer quarter"></div>
    
    <div class="crow up">
      <div class="ws-6">
        <ul>
          <li>If you are creating grids and/or layouts make sure to wrap blocks of elements by using a div with the class ".nest".</li>
          <li>Text directly put into a ".crow"-element will disapear, due to "font-size:0;" rule (this does not apply to flexcrow implementations).</li>
          <li>Crow bundles .less, .scss and .styl files for pre-processing. Pick your style! To make something act Crow'y simply use the less mixing .crowify(), sass mixin crowify() or the stylus function crowify(). In the same manner you can .uncrowify() / uncrowify() something.</li>
        </ul>
      </div>
      <div class="ws-6">
        <ul>
          <li>For semantic markup it's recommended to use the .styl file and call stylus "@extend .crow .ws-5" (span 5/12 as an example). Same goes for the .less/sass-counterparts.</li>
          <li>The classes to keep in mind when working with Crow is (also see Usage): .nest, .crow, .fly, .up, .down, .ws-{1to12}, .w-{1to100} & .gutter</li>
        </ul>
      </div>
    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer half"></div>
  </div>
</div>