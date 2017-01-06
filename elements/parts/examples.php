<p style="margin: 0;">Example 1: <span class="small">basic usage</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow">
	  <div class="blue-one">1</div>
	  <div class="blue-two">2</div>
	  <div class="blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 2: <span class="small">basic 12 span-grid</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow">
	  <div class="ws-2 blue-one">1</div>
	  <div class="ws-8 blue-two">2</div>
	  <div class="ws-2 blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="ws-2">')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="ws-8">')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="ws-2">')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 3: <span class="small">% widths</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow">
	  <div class="w-35 blue-one">1</div>
	  <div class="w-50 blue-two">2</div>
	  <div class="w-15 blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-35">')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-50">')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="w-15">')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 4: <span class="small">autowidths with fly</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow fly">
	  <div class="blue-one">1</div>
	  <div class="blue-two">2</div>
	  <div class="blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow fly">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 5: <span class="small">add padding (gutter)</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow fly gutter">
	  <div class="blue-one">1</div>
	  <div class="blue-two">2</div>
	  <div class="blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow fly gutter">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 6: <span class="small">vertical alignment</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow fly" style="height:150px;">
	  <div class="blue-one">1</div>
	  <div class="down blue-two">2</div>
	  <div class="up blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow fly" style="height:150px;">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="down">')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div class="up">')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 7: <span class="small">normal grid behaviour</span></p>
<div class="spacer half"></div>
<div class="example-box">
	<div class="crow fly up" style="height:100px;">
	  <div class="blue-one">1</div>
	  <div class="blue-two">2</div>
	  <div class="blue-three">3</div>
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow fly up" style="height:100px;">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>1<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>2<?=htmlspecialchars('</div>')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<div>')?>3<?=htmlspecialchars('</div>')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>

<p style="margin: 0;">Example 8: <span class="small">center-centering</span></p>
<div class="spacer half"></div>
<div class="example-box" style="height:400px;">
	<div class="crow" style="height:100%;">
	  <img src="<?=$app->url?>crow-3.0/crow.jpg" alt="" style="max-width:250px;" />
	</div>
</div>
<div class="spacer half"></div>
<code class="language-javascript">
  <?=htmlspecialchars('<div class="crow" style="height:100%;">')?><br />
  &nbsp;&nbsp;<?=htmlspecialchars('<img src="crow.jpg" alt="" />')?><br />
  <?=htmlspecialchars('</div>')?>
</code>

<div class="spacer"></div>
<div class="spacer"></div>
<div class="spacer half"></div>