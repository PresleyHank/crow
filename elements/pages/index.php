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
          <a href="#features">Features</a>
        </li>
        <li>
          <a href="#setup">Setup</a>
        </li>
        <li>
          <a href="#usage">Usage</a>
        </li>
        <li>
          <a href="#tips">Tips</a>
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
      Crow is made standalone which means you can apply to any of your current<br /> markup/web project. Crow essentially stands for column-row.
    </p>
    <div class="spacer half"></div>
    <div class="crow up no-gutter">
      <div class="ws-12">
        <ul class="inline crow up">
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-ghost"></span>
            </div>
            <p>No tables, no absolute positioning, no floats, no clearfix'es
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-wand"></span>
            </div>
            <p>Fly functionality automatically sets widths of child elements
            </p>
          </li>
          <li class="ws-4">
            <div class="circle">
              <span class="icon icon-responsive"></span>
            </div>
            <p>Works in all modern browsers, smartphones, tablets and IE8+
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
    <div class="spacer half"></div>
    <h2>Setup & download</h2>
    <div class="spacer quarter"></div>
    <p class="lead">
      Crow is just a regular .css-file, include in in your <?=htmlspecialchars('<head>');?>-tag and you are ready to go! <br />Fly functionality is not working properly for IE8 therefore <a href="?download=crow-2.0/crow-ie.js">crow-ie.js</a> is required.
    </p>
    <div class="spacer half"></div>

    <div class="button-height">
      <a href="?download=crow-2.0/crow.min.css" class="button blue">
        <span class="icon icon-cloud"></span> <span style="vertical-align: top;margin-top: -2px;display:inline-block;">Download</span>
      </a>
    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer half"></div>

    <div class="drop crow">
      <span class="icon icon-crow"></span>
    </div>
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
          <li>Wrap blocks of elements by using a div with the class ".nest"</li>
          <li>Text directly put into a ".crow"-element will dissapear, due to "font-size:0;" rule (this shouldn't be done anyway)</li>
          <li>Crow bundles .less, .scss and .styl files for pre-processing. Pick your style! To make something act Crow'y simply use the less mixing .crow(), sass mixin crow() or the stylus function crow(). In the same manner you can .uncrow() / uncrow() something.</li>
        </ul>
      </div>
      <div class="ws-6">
        <ul>
          <li>For semantic markup it's recommended to use the .styl file and call stylus "@extend .crow .ws-5" (span 5/12 as an example). Same goes for the .less/sass-counterparts.</li>
          <li>The classes to keep in mind when working with Crow is (also see Usage): .nest, .crow, .fly, .up, .down, .ws-{1to12}, .w-{1to100} & .no-gutter</li>
        </ul>
      </div>
    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer half"></div>
  </div>
</div>