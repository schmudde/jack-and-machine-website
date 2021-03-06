<h2>How does Bootstrap's test suite work?</h2>

<p>Bootstrap uses <a href="http://api.qunitjs.com/">QUnit</a>, a powerful, easy-to-use JavaScript unit test framework. Each plugin has a file dedicated to its tests in <code>unit/&lt;plugin-name&gt;.js</code>.</p>

<ul>
<li><code>unit/</code> contains the unit test files for each Bootstrap plugin.</li>
<li><code>vendor/</code> contains third-party testing-related code (QUnit and jQuery).</li>
<li><code>visual/</code> contains "visual" tests which are run interactively in real browsers and require manual verification by humans.</li>
</ul>

<p>To run the unit test suite via <a href="http://phantomjs.org/">PhantomJS</a>, run <code>grunt test-js</code>.</p>

<p>To run the unit test suite via a real web browser, open <code>index.html</code> in the browser.</p>

<h2>How do I add a new unit test?</h2>

<ol>
<li>Locate and open the file dedicated to the plugin which you need to add tests to (<code>unit/&lt;plugin-name&gt;.js</code>).</li>
<li>Review the <a href="http://api.qunitjs.com/">QUnit API Documentation</a> and use the existing tests as references for how to structure your new tests.</li>
<li>Write the necessary unit test(s) for the new or revised functionality.</li>
<li>Run <code>grunt test-js</code> to see the results of your newly-added test(s).</li>
</ol>

<p><strong>Note:</strong> Your new unit tests should fail before your changes are applied to the plugin, and should pass after your changes are applied to the plugin.</p>

<h2>What should a unit test look like?</h2>

<ul>
<li>Each test should have a unique name clearly stating what unit is being tested.</li>
<li>Each test should test only one unit per test, although one test can include several assertions. Create multiple tests for multiple units of functionality.</li>
<li>Each test should begin with <a href="http://api.qunitjs.com/expect/"><code>assert.expect</code></a> to ensure that the expected assertions are run.</li>
<li>Each test should follow the project's <a href="https://github.com/twbs/bootstrap/blob/master/CONTRIBUTING.md#js">JavaScript Code Guidelines</a></li>
</ul>

<h3>Example tests</h3>

<pre><code class="javascript">// Synchronous test
QUnit.test('should describe the unit being tested', function (assert) {
  assert.expect(1)
  var templateHTML = '&lt;div class="alert alert-danger fade in"&gt;'
      + '&lt;a class="close" href="#" data-dismiss="alert"&gt;×&lt;/a&gt;'
      + '&lt;p&gt;&lt;strong&gt;Template necessary for the test.&lt;/p&gt;'
      + '&lt;/div&gt;'
  var $alert = $(templateHTML).appendTo('#qunit-fixture').bootstrapAlert()

  $alert.find('.close').click()

  // Make assertion
  assert.strictEqual($alert.hasClass('in'), false, 'remove .in class on .close click')
})

// Asynchronous test
QUnit.test('should describe the unit being tested', function (assert) {
  assert.expect(1)
  var done = assert.async()

  $('&lt;div title="tooltip title"&gt;&lt;/div&gt;')
    .appendTo('#qunit-fixture')
    .on('shown.bs.tooltip', function () {
      assert.ok(true, '"shown" event was fired after calling "show"')
      done()
    })
    .bootstrapTooltip('show')
})
</code></pre>
